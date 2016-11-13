<?php
date_default_timezone_set("UTC");
if (count($_FILES) != 0) {
    $uploaddir = dirname(__FILE__).'/tmp/';
    $rcvname=$_FILES['File']['name'];
    //$ext= strtolower(pathinfo($rcvname, PATHINFO_EXTENSION));
    //$allowed_ext = array("jpg", "txt", "zip", "zlib", "gz");
    if (!in_array($ext, $allowed_ext)) $ext="jpg";
    $tmpfile=$_FILES['File']['tmp_name'];

    error_log('Uploaded '.$rcvname.' to '.$tmpfile."\n", 3, "/var/log/trace_file_sharing.log");
    //$uploadfile = $uploaddir.time().md5_file($tmpfile).".".$ext;
    $uploadfile = $uploaddir.uniqid()."_".bin2hex(openssl_random_pseudo_bytes(10)).".$ext";

    if (move_uploaded_file($tmpfile, $uploadfile)) {
            error_log('Moved to '.$uploadfile."\n", 3, "/var/log/trace_file_sharing.log");
            $ipport = $_SERVER['HTTP_HOST'];
            $prefix= (isset($_SERVER["HTTPS"]) && strtolower($_SERVER["HTTPS"])=="on")?"https":"http";
            $start= $prefix."://".$ipport.dirname($_SERVER['REQUEST_URI']);
            $http_url = $start."/tmp/".basename($uploadfile);

        // validity time is one week ahead from now
        $until = date("Y-m-d\TH:i:s\Z",time()+7*24*60*60);
        echo '<?xml version="1.0" encoding="UTF-8"?><file xmlns="urn:gsma:params:xml:ns:rcs:rcs:fthttp">
<file-info type="file">
<file-size>'.$_FILES['File'][size].'</file-size>
<file-name>'.$_FILES['File'][name].'</file-name>
<content-type>'.$_FILES['File'][type].'</content-type>
<data url = "'.$http_url.'" until = "'.$until.'"/>
</file-info>
</file>';

    }
}
if ((count($_POST) == 0) && (count($_FILES) == 0)) {
    if (!function_exists('http_response_code')) {
        $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');
                header($protocol . ' 204 No Content');
        $GLOBALS['http_response_code'] = 204;
    } else {
        http_response_code(204);
    }
}
?>
