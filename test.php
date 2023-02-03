<html>
    <head>
        <title>My document</title>
</head>
<body>
<form action="#" method="POST">
    Username:<input type="text" name="username"placeholder="enter your username"><br><br>
    Password:<input type="password" name="password"placeholder="enter your password"><br><br>
    <input type="submit" name="save" value="Save">
    <input type="reset" name="cancel" value="Cancel">
</form>
</body>
    </html>



<?php
$user=$_POST['username'];
$pswd=$_POST['password'];
$conn=mysqli_connect("localhost","root"," ","php");
$insert=mysqli_query($conn,"insert into user(username,passward)values('$user','$pswd')");
?>