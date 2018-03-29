<?php
if (isset($_SESSION['user']['username'])) {
    ?>
<div class="container">
<div class="logged_in_info">
    <span class="welcome-style">Welcome to the other side, <?php echo $_SESSION['user']['username']?>! </span>
    <br>
    <span><a href="logout.php">logout</a></span>
</div> 
</div>
<?php 
} 

else {
?>
<div class="banner">
    <div class="login_div">
    <?php
    include (ROOT_PATH . '/includes/login.php');
    ?>
    </div>
</div>
<?php } ?>