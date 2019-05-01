<?php
// Initialize the session
session_start();
// connect to the database



// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta lang="en">
    <title>National Park Survey</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="coin-slider-styles.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body class="container">
<!--    The top left of the z pattern-->
<div class="row">
	<header>
		<h1>National Park Survey</h1>
	</header>
	<!--    The top right of the z pattern-->
	<aside>
		<nav class="">
		    <ul class="">
		        <a class="" href="index.php"><li class="button">Home</li></a>
		        <a class="" href="descriptions.php"><li class="button">Description</li></a>
		        <a class="" href="national-park.php"><li class="button">National Parks</li></a>
		        <a class="" href="survey.php"><li class="button-dif">Survey</li></a>
		    </ul>
		</nav>
	</aside>
</div>


<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>


<script>
$(document).ready(function(){
    $('.editBtn').on('click',function(){
        //hide edit span
        $(this).closest("tr").find(".editSpan").hide();
        
        //show edit input
        $(this).closest("tr").find(".editInput").show();
        
        //hide edit button
        $(this).closest("tr").find(".editBtn").hide();
        
        //show edit button
        $(this).closest("tr").find(".saveBtn").show();
        
    });
    
    $('.saveBtn').on('click',function(){
        var trObj = $(this).closest("tr");
        var ID = $(this).closest("tr").attr('id');
        var inputData = $(this).closest("tr").find(".editInput").serialize();
        $.ajax({
            type:'POST',
            url:'userAction.php',
            dataType: "json",
            data:'action=edit&id='+ID+'&'+inputData,
            success:function(response){
                if(response.status == 'ok'){
                    trObj.find(".editSpan.full_name").text(response.data.full_name);
                    trObj.find(".editSpan.location").text(response.data.location);
                    trObj.find(".editSpan.email").text(response.data.email);
                    trObj.find(".editSpan.mostlikedpark").text(response.data.mostlikedpark);
                    trObj.find(".editSpan.importantfactor").text(response.data.importantfactor);
                    trObj.find(".editSpan.preserve").text(response.data.preserve);

                    trObj.find(".editInput.full_name").text(response.data.full_name);
                    trObj.find(".editInput.location").text(response.data.location);
                    trObj.find(".editInput.email").text(response.data.email);
                    trObj.find(".editInput.mostlikedpark").text(response.data.mostlikedpark);
                    trObj.find(".editInput.importantfactor").text(response.data.importantfactor);
                    trObj.find(".editInput.preserve").text(response.data.preserve);

                    trObj.find(".editInput").hide();
                    trObj.find(".saveBtn").hide();
                    trObj.find(".editSpan").show();
                    trObj.find(".editBtn").show();
                }else{
                    alert(response.msg);
                }
            }
        });
    });
    
    $('.deleteBtn').on('click',function(){
        //hide delete button
        $(this).closest("tr").find(".deleteBtn").hide();
        
        //show confirm button
        $(this).closest("tr").find(".confirmBtn").show();
        
    });
    
    $('.confirmBtn').on('click',function(){
        var trObj = $(this).closest("tr");
        var ID = $(this).closest("tr").attr('id');
        $.ajax({
            type:'POST',
            url:'userAction.php',
            dataType: "json",
            data:'action=delete&id='+ID,
            success:function(response){
                if(response.status == 'ok'){
                    trObj.remove();
                }else{
                    trObj.find(".confirmBtn").hide();
                    trObj.find(".deleteBtn").show();
                    alert(response.msg);
                }
            }
        });
    });
});
</script>
<?php
//load and initialize database class
require_once 'DB.class.php';
$db = new DB();

//get users from database
$users = $db->getRows('survey',array('order_by'=>'id DESC'));

//get status message from session
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<div class="container">
    <div class="row">
        <div class="panel panel-default users-content">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Location</th>
                        <th>Email</th>
                        <th>Most Liked Park</th>
                        <th>Most Important Factor</th>
                        <th>Preservation Reason</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="userData">
                    <?php if(!empty($users)): foreach($users as $user): ?>
                    <tr id="<?php echo $user['id']; ?>">
                        <td><?php echo $user['id']; ?></td>
                        <td>
                            <span class="editSpan full_name"><?php echo $user['full_name']; ?></span>
                            <input class="editInput full_name form-control input-sm" type="text" name="full_name" value="<?php echo $user['full_name']; ?>" style="display: none;">
                        </td>
                        <td>
                            <span class="editSpan location"><?php echo $user['location']; ?></span>
                            <input class="editInput location form-control input-sm" type="text" name="location" value="<?php echo $user['location']; ?>" style="display: none;">
                        </td>
                        <td>
                            <span class="editSpan email"><?php echo $user['email']; ?></span>
                            <input class="editInput email form-control input-sm" type="text" name="email" value="<?php echo $user['email']; ?>" style="display: none;">
                        </td>
                        <td>
                            <span class="editSpan mostlikedpark"><?php echo $user['mostlikedpark']; ?></span>
                            <input class="editInput mostlikedpark form-control input-sm" type="text" name="mostlikedpark" value="<?php echo $user['mostlikedpark']; ?>" style="display: none;">
                        </td>
                        <td>
                            <span class="editSpan importantfactor"><?php echo $user['importantfactor']; ?></span>
                            <input class="editInput importantfactor form-control input-sm" type="text" name="importantfactor" value="<?php echo $user['importantfactor']; ?>" style="display: none;">
                        </td>
                        <td>
                            <span class="editSpan preserve"><?php echo $user['preserve']; ?></span>
                            <input class="editInput preserve form-control input-sm" type="text" name="preserve" value="<?php echo $user['preserve']; ?>" style="display: none;">
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-sm btn-default editBtn" style="float: none;"><span class="glyphicon glyphicon-pencil"></span></button>
                                <button type="button" class="btn btn-sm btn-default deleteBtn" style="float: none;"><span class="glyphicon glyphicon-trash"></span></button>
                            </div>
                            <button type="button" class="btn btn-sm btn-success saveBtn" style="float: none; display: none;">Save</button>
                            <button type="button" class="btn btn-sm btn-danger confirmBtn" style="float: none; display: none;">Confirm</button>
                        </td>
                    </tr>
                    <?php endforeach; else: ?>
                    <tr><td colspan="5">No user(s) found......</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include "inc/footer.inc"
?>
</main>

<?php
include "inc/scripts.inc"
?>
</body>
</html>
