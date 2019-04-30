<?php include 'inc/html-top.inc'; ?>
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
