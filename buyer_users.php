<?php

@include 'include/database.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id )) {
    header('location:index.php');
}
;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>users</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/farmer_style.css">

</head>

<body>

    <?php include 'header.php'; ?>

    <section class="user-accounts">

        <h1 class="title">Artist's accounts</h1>

        <div class="box-container">

            <?php
            $select_users = $conn->prepare("SELECT * FROM `users` WHERE `user_type`='farmer'");
            $select_users->execute();
            while ($fetch_users = $select_users->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <div class="box" style="<?php if ($fetch_users['id'] == $farmer_id) {
                    echo 'display:none';
                }
                ; ?>">
                    <img src="uploaded_img/<?= $fetch_users['image']; ?>" alt="">
                    <p> username : <span>
                            <?= $fetch_users['name']; ?>
                        </span></p>
                    <p> email : <span>
                            <?= $fetch_users['email']; ?>
                        </span></p>

                    <!-- <p> <span style=" color:<?php if ($fetch_users['user_type'] == 'farmer') {
                        echo 'orange';
                    }
                    ; ?>"><?= $fetch_users['user_type']; ?></span> -->
                    </p>
                </div>
                <?php
            }
            ?>
        </div>

    </section>
    <?php include 'footer.php'; ?>
    <script src="js/script2.js"></script>

</body>

</html>