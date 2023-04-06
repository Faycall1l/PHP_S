<?php include 'inc/header.php'; ?>
<?php
$name= $email= $body= '';
$nameErr= $emailErr= $bodyErr= '';

//form submit
if(isset($_POST['submit'])){
    //validate name
    if(empty($_POST['name'])){
        $nameErr = 'Name is required';
    }else{
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    //validate email
    if(empty($_POST['email'])){
        $emailErr = 'Email is required';
    }else{
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }
    //validate body
    if(empty($_POST['body'])){
        $bodyErr = 'Body is required';
    }else{
        $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if(empty($nameERR) && empty($emailErr) && empty($bodyErr)){
        //adding to DB
        $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name',  '$email', '$body')";
        if(mysqli_query($conn, $sql)){
            //success
            header('Location: feedback.php');
        }else{
            //Error
            echo "Error: " . mysqli_error($conn);
        }
    }
}

 
?>
<img src="/PHP_S/feedback/img/logo.png" class="w-25 mb-3" alt="">
    <?php echo isset($name) ? $name : ''; ?>
    <p class="lead text-center">Leave feedback for this rand comp</p>

    <form method="POST" action="<?php echo htmlspecialchars(
      $_SERVER['PHP_SELF']
    ); ?>" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo !$nameErr ?:
          'is-invalid'; ?>" id="name" name="name" placeholder="Enter your name" value="<?php echo $name; ?>">
        <div id="validationServerFeedback" class="invalid-feedback">
          Please provide a valid name.
        </div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo !$emailErr ?:
           'is-invalid'; ?>" id="email" name="email" placeholder="Enter your email" value=" ">
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control <?php echo !$bodyErr ?:
          'is-invalid'; ?>" id="body" name="body" placeholder="Enter your feedback" value="<?php echo $body; ?>"><?php echo $body; ?></textarea>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>
<?php include 'inc/footer.php'; ?>
