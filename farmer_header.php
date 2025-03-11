<?php

@include 'include/database.php';

$farmer_id = $_SESSION['farmer_id'];

if (!isset($farmer_id)) {
    header('location:index.php');
}
 ?>

<header class="header">

    <div class="flex">

        <a href="farmer_page.php" class="logo"><span class="fas fa-seedling"></span> Art Gallary </a>

        <nav class="navbar">
            <a href="farmer_page.php">Home</a>
            <a href="farmer_products.php">Products</a>
            <a href="farmer_orders.php">Orders</a>
            <a href="farmer_users.php">Buyer's</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="user-btn" class="fas fa-user"></div>
        </div>

        <div class="profile">
            <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$farmer_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
            <img src="uploaded_img/<?= $fetch_profile['image']; ?>" alt="">
            <p><?= $fetch_profile['name']; ?></p>
            <a href="farmer_update_profile.php" class="btn">update profile</a>
            <a href="logout.php" class="delete-btn">logout</a>
        </div>

    </div>

</header>