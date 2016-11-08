<?php

// Create connection
//$con = mysqli_connect("localhost", "root", "apmsetup", "asterisk");
  require_once 'db_config.php';
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

    $verify_code  = $_REQUEST['verify_code'];
    $extension = $_REQUEST['extension_id'];
//function db_insert($verify_code)
//{

    $check_sql = "SELECT * from  cs_user where checkno = $verify_code";     
    $check_result = mysqli_query($con, $check_sql) or die("<pre>$check_sql</pre>");
    $check_cnt = mysqli_num_rows($check_result);
   /*  while ($finfo = mysqli_fetch_field($check_result)) {
         $check_value = $finfo->isverified;
          printf("Name:     %s\n", $finfo->isverified);      
    }
    mysqli_free_result($check_result);*/

    if($check_cnt > 0)
    {
           // echo $check_cnt;
            $user_sql = "INSERT INTO users (extension, password, name, voicemail, ringtimer, noanswer, recording,
            outboundcid, sipname, noanswer_cid, busy_cid, chanunavail_cid,noanswer_dest, busy_dest, chanunavail_dest, mohclass, auditor_exttype)
                         VALUES ('$extension', '', 'Test', 'novm', '0', '', '', '','test', '', '', '', '', '', '', 'default', 99) ";     
            mysqli_query($con, $user_sql);

            $device_sql = "INSERT INTO devices (id, tech, dial, devicetype, user, description, emergency_cid)
                              VALUES('$extension', 'sip', 'SIP/$extension', 'fixed', '$extension', 'Test', '') ";     
            mysqli_query($con, $device_sql);

            $sip_sql = "INSERT INTO sip (id, keyword, data, flags)
                                VALUES
                                    ('$extension', 'secret', 'supersecre†', 2),
                                    ('$extension', 'dtmfmode', 'rfc2833', 3),
                                    ('$extension', 'canreinvite', 'no', 4),
                                    ('$extension', 'context', 'from-internal', 5),
                                    ('$extension', 'host', 'dynamic', 6),
                                    ('$extension', 'trustrpid', 'yes', 7),
                                    ('$extension', 'sendrpid', 'yes', 8),
                                    ('$extension', 'type', 'friend', 9),
                                    ('$extension', 'nat', 'yes', 10),
                                    ('$extension', 'port', '5060', 11),
                                    ('$extension', 'qualify', 'yes', 12),
                                    ('$extension', 'qualifyfreq', '60', 13),
                                    ('$extension', 'transport', 'udp', 14),
                                    ('$extension', 'avpf', 'no', 15),
                                    ('$extension', 'icesupport', 'no', 16),
                                    ('$extension', 'encryption', 'yes', 17),
                                    ('$extension', 'callgroup', '', 18),
                                    ('$extension', 'pickupgroup', '', 19),
                                    ('$extension', 'disallow', '', 20),
                                    ('$extension', 'allow', '', 21),
                                    ('$extension', 'dial', 'SIP/$extension', 22),
                                    ('$extension', 'mailbox', '$extension@device', 23),
                                    ('$extension', 'deny', '0.0.0.0/0.0.0.0', 24),
                                    ('$extension', 'permit', '0.0.0.0/0.0.0.0', 25),
                                    ('$extension', 'account', '$extension', 26),
                                    ('$extension', 'callerid', 'device <$extension>', 27)";     
            mysqli_query($con, $sip_sql);  
            $update_sql = "update cs_user set isverified = '1' where checkno = $verify_code ";     
            mysqli_query($con, $update_sql);

            die("success");
    } //elseif ($check_cnt > 0 && $check_result = '1') {
     //   die("Before user is register");
    //}
        else
     {
        die("No verifycode");
     }
    
//}
 
// Close connections
mysqli_close($con);
?>