<html>
<head>
	<title>
	Re;AnimeSan
	</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<style>
body{
padding:50px 200px 50px 200px;
background-image:url('back.jpg');
background-size:100%;
background-repeat:none;
background-attachment:fixed;
}
p.head{
text-align:center;
color:red;
font-size:50px;
font-family:fantasy;
}
ul {
	display: block;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:#003 ;
	font-family:fantasy;

}

li {display: block;
    float: left;
	width:25%;
	color:#003;
}
 a {
    display:block;
    color: white;
    text-align: center;
    padding: 14px 50px 14px 50px;
    text-decoration: none;
}

a.h:hover {
    background-color:#013;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
   
    background-color:#013;
    color: 	#DDA0DD;
	
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Float cancel and signup buttons and add an equal width */
.signupbtn {
    float: center;
    width: 50%;
}

/* Add padding to container elements */
.container {
    float: up;
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
   .signupbtn {
       width: 100%;
    }
</style>

<body>
<header>
<a  href="home.html">
<p class='head' >
	<img src='logo.png' alt='logo' width='50px' height='50px'> Re;AnimeSan</img>
</p>
</a>

<ul>
  <li><a class="h" href="home.html">Home</a></li>
  <li><a class="h" href="top20.html">TOP 20</a></li>
  <li><a class="h" href="#contact">Dashboard</a></li>
  <li><a class="h" href="#about">About</a></li>
</ul>
</header>
<h2 align="center" style="color:red;font-size:40px; font-family:fantasy;float:down">Login</h2>
<div class="container" style="background-color:black; color:#DDA0DD; font-size:30px; font-family:fantasy;">
<form method="post" action="loginv.php">

    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Email" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>


    <div class="clearfix"><center>
      <button type="submit" class="signupbtn" >Login</button></center>
    </div>
  </div>
</form>

</body>
<html>