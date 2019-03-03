<!DOCTYPE php>
<php>
<head>
<link rel="stylesheet" href="CSSFiles/login_css.css">
</head>
<body>
<div id="outer">
<div id="log">
<form id='login' action='stu_lg_php.php' method='post'>
<fieldset style="font-family:Arabic;font-size:20px;color:#000000;">
<legend style="font-family:Arabic;font-size:30px;color:#000000;">Student Login</legend>
<br>
<label for='username' >Username:</label><br>
<br>
<input type='text' name='roll_no' id='username'  maxlength="50" placeholder="your roll no.... "required style="background-image:url('images/username.jpg');"/><br>
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
<a class="one"  href="stu_reg.php" style="float:right;">New User? Register here</a>
</div>
</div>
<div id="footer">
<div id="left"> &copy; <a href="https://www.ietlucknow.ac.in/">Institute of Enginnering and Technology Lucknow</a></div>
<div id="right">Developers Team:<a href="dteam.php">IEtalkers Team(CSE 2nd Year)</a></div>
</div>
</body>
</php>


