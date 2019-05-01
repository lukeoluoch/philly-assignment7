<?php
require_once "connect-db.php";

$parkname="";
$reason="";
$factor="";
$preserve="";
$fullname="";
$email="";
$location="";

if($_SERVER["REQUEST_METHOD"] == "POST"){

$parkname = trim($_POST["park-name"]);
$reason= trim($_POST["reason"]);
$factor= trim($_POST["factor"]);
$preserve= trim($_POST["preserve-reason"]);
$fullname= trim($_POST["name"]);
$email= trim($_POST["email"]);
$location= trim($_POST["location"]);

// Prepare an insert statement
$sql = "INSERT INTO survey (full_name, location, email, mostlikedpark, importantfactor, preserve) VALUES (?, ?, ?, ?, ?, ?)";
         
if($stmt = mysqli_prepare($connection, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ssssss", $param_name, $param_location, $param_email, $param_park, $param_factor, $param_preserve);
    
    // Set parameters
    $param_name = $fullname;
    $param_email =$email;
    $param_location=$location;
    $param_factor=$factor;
    $param_preserve =$preserve;
    $param_park=$parkname;
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        
        


    } else{
        header("location: survey.php");
    }
}
 
// Close statement
mysqli_stmt_close($stmt);

}
else{
    header("location: survey.php");
}
mysqli_close($connection);

$to = $email;
        $subject = "National Park Survey Results";
        $txt = "Hello $name, \n
                Your Favorite Park: $parkname \n
                Your Reason For That: $reason \n
                Your Chosen Most Important Factor of a Park: $factor \n
                Your Reasoning in For You Choice Regarding Preserving Parks: $preserve \n
                Your Location: $location; 
                ";
        $headers = "From: loluoch@u.rochester.edu" . "\r\n" .
        "CC: luke.oluoch97@gmail.com";
        
        mail($to,$subject,$txt,$headers);



?>





<?php include 'inc/html-top.inc'; ?>
<main>
<h2 class="top-header">Thank you!</h2>
<p>Thank you for completing the survey. We value your contribution and appreciate your time and effort.</p>
</main>
<?php
include "inc/footer.inc"
?>


</body>
</html>
