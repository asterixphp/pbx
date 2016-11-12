<?php

    require_once 'db_config.php';
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $phonenumber    = $_REQUEST['phonenumber'];
    $username       = $_REQUEST['username'];

    $check_sql      = "SELECT * from  cs_user where phoneno='$phonenumber' ";
    $check_result   = mysqli_query( $con , $check_sql ) or die( "<pre>$check_sql</pre>" );
    $check_cnt      = mysqli_num_rows( $check_result );

    if( $check_cnt > 0 )
        die('exist');


    $check_no       = mt_rand(1000,9999);
    $date_value     = date("Y-m-d");
    $time_value     = date("H:i:s");

    $sql = "INSERT INTO cs_user (username , phoneno , isverified , regdate , regtime , photo , checkno)
    VALUES('$username' , '$phonenumber' , '0', '$date_value' , '$time_value' , '' , '$check_no' ) ";
    //die("<pre>$sql</pre>");

    mysqli_query($con, $sql);
    //echo $check_no;
    //$home = file_get_contents('https://api.clickatell.com/http/sendmsg?user=Leedsysusa&password=abcASDF2345%23%23&api_id=3632862&to='.$phonenm.'&text=Your%20verification%20code%20is%20'.$check_no);


    // Close connections
    mysqli_close($con);
?>
