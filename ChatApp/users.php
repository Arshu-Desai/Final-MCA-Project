<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<style>
  .user_type {
    display: block;
    background: #00b140;
    color: #fff;
    border-radius: 5px;
    padding: 7px 15px;
 }
</style>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="../image/<?php echo $row['image']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['name']?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <!-- <span class="user_type"><?php echo $row['user_type']?></span> -->
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
