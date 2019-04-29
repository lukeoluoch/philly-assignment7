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
    <br>

    <h2>Question 2</h2>
    <p>What is the most important factor when you are deciding which park to visit?</p>

    <input type="radio" name="factor" value="distance"> Distance
    <input type="radio" name="factor" value="natural views"> Natural Views
    <input type="radio" name="factor" value="wildlife"> Wildlife
    <input type="radio" name="factor" value="culture"> Culture
    <input type="radio" name="factor" value="weather"> Weather

    <h2>Question 3</h2>
    <p>Do you think preserving national parks are important for human beings? And why?</p>

    <select>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
    <br>
    Reason:<br>
    <input type="text" name="reason" value="">
    <br><br>

    <h2>Personal information</h2>
    <p>Our supervisor demanded that you leave your personal contact information</p>
    Full Name:<br>
    <input type="text" name="name" value=""><br>
    Email:<br>
    <input type="text" name="email" value=""><br>
    Location:<br>
    <input type="text" name="location" value=""><br>
    <input type="submit" value="Submit">
</form>
<p>This survey is used for research purpose only. All private information would be protected.</p>
<?php
include "inc/footer.inc"
?>
</body>
</html>
