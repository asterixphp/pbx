<!DOCTYPE html>
<html>
	<head>

	<style>
	     { margin: 0; padding: 0; }

body {
        background-color: #000000;
        background-image:url("<?php echo base_url('image/first_img.JPG'); ?>");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-repeat: no-repeat center center fixed;
}
	</style>
	<style type="text/css">
          #mainbody
{
   border-left: 1px;
   border-right: 1px;
}

#content1
{
   float: left;
}

#content2
{
   float: right;
}

p {
	font-size: 12px;
}

.date {
	color: #999999;
	font-size: 10px;
	font-weight: bold;
}

h1 {
	font-size: 16px;
	color: #3F5363;
	font-weight: bold;
}

h2 {
	font-size: 16px;
	color: #3F5363;
	font-weight: bold;
}

h3 {
	font-size: 12px;
	color: #000000;
	font-weight: bold;
}

h4 {
	font-size: 12px;
	color: #000000;
	font-style: italic;
	font-weight: normal;
}


input {
	font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}

select {
	font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}


textarea {
	font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;

}

a {
	color: #5F7383;
	text-decoration: none;
}

a:hover {
	color: #5F7383;
	text-decoration: underline;
}

td {
	font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}




/* for the menu tree */
.dtree {
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
    white-space: nowrap;
    overflow: hidden;
    width: 230px;
}
.dtree img {
	border: 0px;
	vertical-align: middle;
}
.dtree a {
	color: #333;
	text-decoration: none;
}

.dtree a.node, .dtree a.nodeSel {
	padding: 1px 2px 1px 2px;
}
.dtree a.node:hover, .dtree a.nodeSel:hover {
	color: #333;
	text-decoration: underline;
}
.dtree a.nodeSel {
	background-color: #c0d2ec;
}
.dtree .clip {
	overflow: hidden;
}
/*
 * Specific styles of signin component
 */
/*
 * General styles
 */


.card-container.card {
    max-width: 350px;
    height: 250px;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * Card component
 */
.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin-left: 40%;
    margin-top: 0px;
    /* shadows and rounded borders */
    -moz-border-radius: 0px;
    -webkit-border-radius: 8px;
    border-radius: 0px;
    -moz-box-shadow: 0px 6px 6px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 6px 6px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 6px 6px rgba(0, 0, 0, 0.3);
}
.cardtop{
	 background-color: #17689F;
     /*background-image:url("");*/
    /* just in case there no content*/
     padding: 20px 25px 30px;
	 max-width: 350px;
     max-height: 45px;
     margin-left: 40%;
     margin-top: 18%;
    /* shadows and rounded borders */
    -moz-border-radius: 8px;
    -webkit-border-radius: 0px;
    border-radius: 0px;
    box-shadow: 0px 6px 6px rgba(0, 0, 0, 0.3);
}

.profile-img-card {
    width: 300px;
    height: 67px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 8px;
    -webkit-border-radius: 0px;
    border-radius: 0px;
}

.form-card {
    width: 200px;
    height: 35px;
    margin: 0 auto 10px;
    display: block;
    margin-top: 20px;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btn.btn-signin {
    /*background-color: #4d90fe; */
    background-color: #16699E;
    padding: 0px;
    font-weight: 700;
    font-size: 16px;
    height: 36px;
    color: #FFFFFF;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
	margin: 0 auto 10px;
    display: block;
    margin-top: 25px;

}

.btn.btn-registin {
    /*background-color: #4d90fe; */

    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 28px;
	width:80px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
	margin: 0 auto 10px;
    display: block;

}

.btn.btn-registin:hover,
.btn.btn-registin:active,
.btn.btn-registin:focus {
    background-color: rgb(104, 145, 162);
}
.btn.btn-regin {
    background-color: #08848B;
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 28px;
	width:80px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
	margin: 0 auto 10px;
    display: block;

}

.btn.btn-regin:hover,
.btn.btn-regin:active,
.btn.btn-regin:focus {
    background-color: rgb(155, 155, 155);
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
    background-color: rgb(12, 97, 33);
}

.forgot-password {
    color: rgb(104, 145, 162);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(12, 97, 33);
}


	</style>
	</head>
	<body>
		<div class="cardtop">
          <img src="<?php echo base_url('image/login_form.JPG'); ?>" />
        </div>
		 <div class="card card-container">
              <?php $attributes = array('class' => 'form-signin', 'id' => 'reg_form', 'name' => 'reg_form' , 'method'=>'post', 'role' => 'form');
              echo form_open_multipart('index.php/login/UserLogIn', $attributes); ?>
                <input type="text" name="username" id="username" class="form-card" size="25" maxlength="256"  placeholder="User email">
                <input type="password" name="password" id="password" class="form-card" size="25" maxlength="256" placeholder="Password">
                <button class="btn btn-lg btn-primary btn-block btn-signin" onclick='UserLog();' >Log In</button>
            <?php echo form_close(); ?>
        </div>

	</body>
	</html>
<script type="text/javascript">

function  UserLog() // order detail uid
{

   document.reg_form.submit();
}


</script>
