<?php
/*
It is harmfull to accept input directly because scripts can be passed and that would hurt the website
*/
/*
we can get data through urls and forms using the $_GET and $_POST superglobals
*/
if(isset($_POST['submit'])){
$name = htmlspecialchars($_POST['name']);
$age = htmlspecialchars($_POST['age']);  
//we can use filter_input(INPUT_POST, 'name', [sanitizing rules]) to filter it
// we can use SANITIZE_SPECIAL_CHARS as a filtering rule in a form 
}//To avoid showing an error when values are not set


?>

<a href="<?php echo $_SERVER['PHP_SELF'];?>?name = Jhon & age = 30">Click</a> 
<!-- brings u to the file we working in -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<!-- Using post is more secure than using GET method in forms -->
<!--you use GET unstead if you are not submitting any data -->
    <div>
        <label for="name">Name: </label>
            <input type="text" name="name">
        <label for="age">Age: </label>
            <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>