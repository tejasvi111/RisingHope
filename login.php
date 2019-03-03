<!DOCTYPE php>
<php>
<head>
<link rel="stylesheet" href="css/login_css.css">
</head>
<body background="images/helpinghand.jpg">
<div id="outer" >
<div id="log" style="margin:120px auto">
<form id='login' action='login_loc.php' method='post'>
<fieldset style="font-family:Arabic;font-size:20px;color:#000000;">
<legend style="font-family:Arabic;font-size:30px;color:#000000;">Login</legend>
<br>
<label for='username' >Email:</label><br>
<br>
<input type='text' name='email_id' id='username'  maxlength="50" placeholder="your email id.... "required style="background-image:url('images/username.jpg');"/><br>
<br>
<br>
<label for='password' >Password:</label><br>
<br>
<input type='password' name='psw' id='password' maxlength="50" placeholder="type your password...." style="background-image:url('images/psw_icon.jpg');"required /><br>
<br>
<br>
<input type='submit'  value='Login'><br>
<br>
<br>
<a class="one"  href="fgt_psw.php" target='_self' style="float:right;">Forgot Password?</a><br>
<a class="one"  href="reg.php" style="float:right;">New User? Register here</a>
</div>
</div>

</body>
</php>


