<?php




?>

<!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Procedural Steps Helper</title>
    <link rel="stylesheet" href="static\styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="static\styles.css">
  </head>

   <?php include 'header.php'; ?>

   <div class="container-fluid" class="form">
    <form action="sign_up_template.php" method = "POST" class="signUp">
        <ul>
            <h5><label for="First Name">username</label></h5>
            <input type="text" value = "<?php $username;  ?>">
            <div class="text">
                <?php echo errors['message'];  ?>
            </div> 
        </ul>
        <ul>
            <h5><label for="Last Name">email: </label></h5>
            <input type="text" value="<?php $email; ?>">
            <div class="text">
                <?php echo errors['message'] ?>
            </div>
        </ul>
        <ul>
            <h5><label for=""></label></h5>
        </ul>
    </form>
   </div>


   <?php include 'footer.php'; ?>


   </html>   