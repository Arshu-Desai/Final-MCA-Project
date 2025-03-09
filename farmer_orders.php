<?php

@include 'include/database.php';

session_start();

$farmer_id = $_SESSION['farmer_id'];

if (!isset($farmer_id)) {
    header('location:index.php');
}


if (isset($_POST['update_order'])) {

    $order_id = $_POST['order_id'];
    $update_payment = $_POST['update_payment'];
    $update_payment = filter_var($update_payment, FILTER_SANITIZE_STRING);
    $update_orders = $conn->prepare("UPDATE `orders` SET payment_status = ? WHERE id = ?");
    $update_orders->execute([$update_payment, $order_id]);
    $message[] = 'payment has been updated!';

}
;

if (isset($_GET['delete'])) {

    $delete_id = $_GET['delete'];
    $delete_orders = $conn->prepare("DELETE FROM `orders` WHERE id = ?");
    $delete_orders->execute([$delete_id]);
    header('location:farmer_orders.php');

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/farmer_style.css">

</head>

<body>

    <?php include 'farmer_header.php'; ?>

    <section class="placed-orders">

        <h1 class="title">orders</h1>

        <div class="box-container">

            <?php
            // $select_orders = $conn->prepare("SELECT * FROM `orders`");
            $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE `farmer_id`=$farmer_id");

            $select_orders->execute();
            if ($select_orders->rowCount() > 0) {
                while ($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <div class="box">
                        <p> user id : <span>
                                <?= $fetch_orders['user_id']; ?>
                            </span> </p>
                        <p> placed on : <span>
                                <?= $fetch_orders['placed_on']; ?>
                            </span> </p>
                        <p> name : <span>
                                <?= $fetch_orders['name']; ?>
                            </span> </p>
                        <p> email : <span>
                                <?= $fetch_orders['email']; ?>
                            </span> </p>
                        <p> number : <span>
                                <?= $fetch_orders['number']; ?>
                            </span> </p>
                        <p> address : <span>
                                <?= $fetch_orders['address']; ?>
                            </span> </p>
                        <p> total products per kg : <span>
                                <?= $fetch_orders['total_products']; ?>
                            </span> </p>
                        <p> total price : <span>₹
                                <?= $fetch_orders['total_price']; ?>/kg
                            </span> </p>
                        <p> payment method : <span>
                                <?= $fetch_orders['method']; ?>
                            </span> </p>
                        <form action="" method="POST">
                            <input type="hidden" name="order_id" value="<?= $fetch_orders['id']; ?>">
                            <select name="update_payment" class="drop-down">
                                <option value="pending" selected>
                                    <?= $fetch_orders['payment_status']; ?>
                                </option>
                                <option value="pending">pending</option>
                                <option value="completed">completed</option>
                            </select>
                            <div class="flex-btn">
                                <input type="submit" name="update_order" class="option-btn" value="update">
                                <a href="farmer_orders.php?delete=<?= $fetch_orders['id']; ?>" class="delete-btn"
                                    onclick="return confirm('delete this order?');">delete</a>
                            </div>
                        </form>
                    </div>
                    <?php
                }
            } else {
                echo '<p class="empty">no orders placed yet!</p>';
            }
            ?>

        </div>

    </section>
    <?php include 'farmer_footer.php'; ?>
    <script src="js/script2.js"></script>

</body>

</html>