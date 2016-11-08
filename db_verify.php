<?php

// Create connection
$con = mysqli_connect("localhost", "root", "apmsetup", "asterisk");
 
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
	/*$opts = array(
	  'http'=>array(
	    'method'=>"GET",
	    'header'=>"Accept-language: en\r\n" .
	              "Cookie: foo=bar\r\n"
	  )
	);

   $context = stream_context_create($opts);*/

    $phonenm  = $_REQUEST['phonenm'];
	$username = $_REQUEST['username'];
    $check_no = mt_rand(100000,999999);
    $date_value = date("Y-m-d");
    $time_value = date("H:i:s");

    $sql = "INSERT INTO cs_user (username , phoneno , isverified , regdate , regtime , photo , checkno)
    VALUES('$username' , '$phonenm' , '0', '$date_value' , '$time_value' , '' , '$check_no' ) ";     
    //die("<pre>$sql</pre>");
     
    mysqli_query($con, $sql);
    $sendtext = "Your verification code is $check_no";
    $home = file_get_contents('https://api.clickatell.com/http/sendmsg?user=Leedsysusa&password=abcASDF2345%23%23&api_id=3632849&to='.$phonenm.'&text=Your%20verification%20code%20is%20'.$check_no);
  
    echo $check_no;  
	
//}
 
// Close connections
mysqli_close($con);
?>

