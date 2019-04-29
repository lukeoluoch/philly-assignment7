<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta lang="en">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body class="container">
<h1>Login</h1>
<nav class="navbar  navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="descriptions.php">Description</a> </li>
        <li class="nav-item"><a class="nav-link" href="national-park.php">National Parks</a> </li>
        <li class="nav-item"><a class="nav-link" href="survey.php">Survey</a> </li>
    </ul>
</nav>
<form>
    Username:<br>
    <input type="text" name="username" value="">
    <br>
    Password:<br>
    <input type="password" name="password" value="">
    <br>
    <button type="submit">Login</button>
</form>




<?php
include "inc/footer.inc"
?>


</body>
</html>