<?php
// Initialize the session
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta lang="en">
    <title>National Park Survey</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="container">
<!--    The top left of the z pattern-->
<h1>National Park Survey</h1>
<!--    The top right of the z pattern-->
<nav class="navbar  navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav">
        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="descriptions.php">Description</a> </li>
        <li class="nav-item"><a class="nav-link" href="national-park.php">National Parks</a> </li>
        <li class="nav-item"><a class="nav-link" href="survey.php">Survey</a> </li>
    </ul>
</nav>
<section>
<!--    slide show place holder-->
</section>
<article>
<!--    The bottom left of the z pattern-->
    <p>National parks protect the best of our natural heritage: stunning landscapes, extraordinary wildlife and majestic forests.Together with other protected areas they form the basis of our economic and social wellbeing.</p>
</article>
<!-- The bottom right of the z pattern-->
<button><a href="survey.php">Take this survey</a></button>
<?php
include "inc/footer.inc"
?>
</body>
</html>
