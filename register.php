<?php

include 'include/database.php';

if (isset($_POST['submit'])) {
   $unique_id = rand(time(), 100000000);
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $mobile = $_POST['mobile'];
   $mobile = filter_var($mobile, FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = md5($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $image = $_FILES['image']['name'];
   $image = filter_var($image, FILTER_SANITIZE_STRING);
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/' . $image;

   $user_type = $_POST['user_type'];
   $user_type = filter_var($user_type, FILTER_SANITIZE_STRING);
   $status = "Offline now";

   $select = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select->execute([$email]);

   if ($select->rowCount() > 0) {
      $message[] = 'user email already exist!';
   } else {
      if ($pass != $cpass) {
         $message[] = 'confirm password not matched!';
      } else {
         $insert = $conn->prepare("INSERT INTO `users`(unique_id,name, email, mobile,password, image,user_type,status) VALUES(?,?,?,?,?,?,?,?)");
         $insert->execute([$unique_id,$name, $email, $mobile, $pass, $image, $user_type,$status]);

         if ($insert) {
            if ($image_size > 2000000) {
               $message[] = 'image size is too large!';
            } else {
               move_uploaded_file($image_tmp_name, $image_folder);
               $message[] = 'registered successfully!';
               header('location:index.php');
            }
         }

      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/component.css">
   <link rel="stylesheet" href="css/radiobtn.css">

</head>

<body>

   <?php

   if (isset($message)) {
      foreach ($message as $message) {
         echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
      }
   }

   ?>

   <section class="form-container">


      <form action="" enctype="multipart/form-data" method="POST">
         <h3>register now</h3>
         <input type="text" name="name" class="box" placeholder="enter your name" required>
         <input type="email" name="email" class="box" placeholder="enter your email" required>
         <input type="text" name="mobile" class="box" placeholder="enter your mobile number" required>
         <input type="password" name="pass" class="box" placeholder="enter your password" required>
         <input type="password" name="cpass" class="box" placeholder="confirm your password" required>
         <input type="file" name="image" class="box" required accept="image/jpg, image/jpeg, image/png">
         <div class="box-container">
         <label for="farmer" class="radiobtn"><input type="radio" name="user_type" value="farmer"id="farmer" required>Artist</label>
         <label for="buyer" class="radiobtn"><input type="radio" name="user_type" value="buyer" id="buyer" required>Buyer</label>
         </div>
         <input type="submit" value="register now" class="btn" name="submit">
         <p>already have an account? <a href="index.php">login now</a></p>
      </form>

   </section>


</body>

</html>