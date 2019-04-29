<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta lang="en">
    <title>Survey</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body class="container">
<h1>Survey</h1>
<nav class="navbar  navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="descriptions.php">Description</a> </li>
        <li class="nav-item"><a class="nav-link" href="national-park.php">National Parks</a> </li>
        <li class="nav-item active"><a class="nav-link" href="survey.php">Survey</a> </li>
    </ul>
</nav>
<h2>Question 1</h2>
<p>What national park do you like the most and why?</p>
<form>
    Favourite park:<br>
    <input type="text" name="park-name" value="">
    <br>
    Reason:<br>
    <input type="text" name="reason" value="">
    <br><br>
    <input type="submit" value="Submit">
</form>
<h2>Question 2</h2>
<p>What are the major factors when you are deciding which park to visit?</p>
<p>This survey is used for research purpose only. All private information would be protected.</p>
<?php
include "inc/footer.inc"
?>
</body>
</html>