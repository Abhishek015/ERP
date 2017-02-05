<html>
<head>
<style>
     body{
font-family:verdana;
font-size: 15px;
         }
		 div#loginform{
			 background-color:white;
			 border:1px solid blue;
			 width:350 px;
			 box-shadow:1px 0px 15px blue;
		 }
		 input{
		 display:block;
		 margin:18px;
		 
		 }
		 div#login_header{
		 background-color:blue;
		 text-align:center;
		 font-size:22px;
		 font-weight:bold;
		 color:white;
		 padding:20px;
		
		 }
		 div#login_content{
		 display:flex;
		 justify-content:center;
		 }
		 input[type=text],input[type=password]{
		 font-size:15px;
		 padding:18px;
		 border-radius:3px;
		 border:1px solid #ddd;
		 
		 }
		 input[type=submit]{
		 background-color:blue;
		 padding:5px 18px 5px 10px;
		 border-radius:3px;
		 border:1px solid green;
		 color:white;
		 font-weight:bold;
		 }

</style>
</head>
<body>
<div id="loginform">
<div id="login_header">
LOGIN
</div>
<div id="login_content">
<form action="validate.php" method="post">
<input type="text" name="username" placeholder="USERNAME" />
<input type="password" name="password" placeholder="password" />
<table><tr><td>
<input type="checkbox" name="remember" value="1" ></td><td>Remember Me</td></tr></table>  <br>
<input type="submit" name="valid" value="LOGIN" />
</form>
</div>
</div>

</body
</html>