<?php

/*
we can get data through urls and forms using the $_GET and $_POST superglobals
*/
if(isset($_POST['submit'])){
echo $_POST['name'];
echo $_POST['age'];   
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
