<?php
    if(isset($_POST['submit'])){
        $allowed_ext = array('png', 'jpg', 'jpeg');
        
        if(!empty($_FILES['upload']['name'])){
            //print_r($_FILES); // will output info about the file
            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            $target_dir = "uploads/${file_name}";

            //get file extension of uploaded  files
            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            //validation
            if(in_array($file_ext, $allowed_ext)){
                if($file_size <= 1000000){
                    move_uploaded_file($file_tmp, $target_dir);

                    $msg = '<p style="color: green;">file uploaded</p>';
                }else{
                    $msg = '<p style="color: red;">invalid file</p>';
                }
            }else{
                $msg = '<p style="color: red;">invalid file</p>';
            }

        }else{
            $msg = '<p style="color: red;">Please choose a file</p>';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>
    <?php echo $msg ?? null; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        Select img to upload : 
        <input type="file" name="upload">
        <input type="submit" value="Submit" name="submit" >
    </form>
</body>
</html>