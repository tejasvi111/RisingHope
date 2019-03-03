 <php>
<head>
<link href="css\reg_css.css" rel="stylesheet">
<title>Registration</title>
</head>
<body>

<div id="outer">
<div id="header">
<div id="content">
<img src="images/risinghope.png" width="1000px" height="200px">
<div id="menu1">
<a class="menuclass" href="index.php" >Contact Us</a>
<a class="menuclass" href="index.php">Photo Gallery</a>
<a class="menuclass" href="login.php">Login</a>
<a class="menuclass" href="index.php" style="Width:110px;">Home</a>
</div>
<br/><center><h2>Register</h2></center>
<form id="regform" action="reg_loc.php" method="post">
<br/><hr color="#009688"/>
<table id="regtbl">
<tr>
<td>Please enter your name:</td>
<td><input type="text" class="txtbox" name="name" required></td>
</tr>


<tr>
<td>Enter your mobile no:</td>
<td><input type="number" class="txtbox" name="mob_no" required></td>
</tr>

<tr>
<td>Enter your Email ID:</td>
<td><input type="email" class="txtbox" name="email_id" required></td>
</tr>
<tr>

<tr>
<td>Gender:</td>
<td>
<select class="ddl" name="gender" required>
<option>-Select-</option>
<option>Female</option>
<option>Male</option>
<option>other</option>
</select>
</td>
</tr>

<tr>
<td>Addresss:</td>
<td>
<textarea placeholder="your address..." class="txtbox" name="address" value="address" required>
</textarea>
</td>
</tr>

  
<td>Create a password for your account:</td>
<td><input type="password" class="txtbox" name="psw" required></td>
</tr>
<tr>
<td>Confirm your password:</td>
<td><input type="password" class="txtbox" required></td>
</tr>
<tr><td colspan="2" style="height:40px;"><hr color="#009688"/></td></tr>

<td colspan="2"><center>
<input type="reset" value="Clear All" class="btn">
<input type="submit" Value="submit" class="btn"></center></td>
</tr>
</table>
</form>
</div>
<div id="footer">
<div id="left"> &copy; <a href="https://www.ietlucknow.ac.in/">Institute of Enginnering and Technology Lucknow</a></div>
<div id="right">Developers Team:<a href="dteam.php">IEtalkers Team(CSE 2nd Year)</a></div>
</div>
</div>
</body>
</php>