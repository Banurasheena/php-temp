<!DOCTYPE html>
<html>
<head>
    
    <title>Forms</title>
</head>
<body>
<!-- create a form -->
    <form  method = "POST">
    <h1>Enter your name</h1>
    <input type="text" name="name">
    <input type="submit" name="Submit">
    </form>

<!-- create php -->
<?php
// the isset function checks whether the variable has a value or not
// $_POST is a global variable which holds data recieved from an HTTP POST request
if(isset($_POST['Submit'])){
$name = $_POST['name'];
echo $name;
}
?>
</body>
</html>