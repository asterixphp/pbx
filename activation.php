<?php

    require_once 'db_config.php';
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $verify_code    = $_REQUEST['verify_code'];
    $phonenumber    = preg_replace('/\D/', '', $_REQUEST['phonenumber'] );
    //function db_insert($verify_code)
    //{

    $check_sql = "SELECT * from  cs_user where checkno = '$verify_code' and phoneno='$phonenumber' ";
    $check_result = mysqli_query($con, $check_sql) or die("<pre>$check_sql</pre>");
    $check_cnt = mysqli_num_rows($check_result);

    if($check_cnt > 0)
    {
        // echo $check_cnt;
        $user_sql = "INSERT INTO extensions (context, exten, priority, app, appdata)
                     VALUES ('from-sip', '$phonenumber', '1', 'Dial', 'SIP/$phonenumber,60') ";
        mysqli_query($con, $user_sql);

        $device_sql = " INSERT INTO sip_buddies ( NAME, defaultuser, secret, context, HOST, nat, qualify, TYPE , canreinvite , allow)
                        VALUES 	('$phonenumber', '$phonenumber', 'pdos', 'from-sip', 'dynamic', 'yes', 'no', 'friend' , 'yes' , 'g729;ilbc;gsm;ulaw;alaw;VP8');
                       ";
        mysqli_query($con, $device_sql);

        $update_sql = "update cs_user set isverified = '1' where checkno = $verify_code ";
        mysqli_query($con, $update_sql);

        mysqli_close($con);
        die("success");
    } //elseif ($check_cnt > 0 && $check_result = '1') {
    //   die("Before user is register");
    //}
    else
    {
        mysqli_close($con);
        die("fail");
    }

    mysqli_close($con);
?>
