<?php

require_once ('config.php');
require_once (ROOT_PATH . '/includes/registration_login.php');
require_once (ROOT_PATH . '/includes/head_section.php');

?>
    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <div style="width: 40%; margin: 20px auto;">
        <form method="post" action="register.php">
          <h2>Register</h2>
          <?php include(ROOT_PATH . '/includes/errors.php')  ?>
          <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
          <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email">
          <input type="text" name="phone" value="<?php echo $phone; ?>" placeholder="Phone">
          <input type="password" name="password_1" placeholder="Password">
          <input type="password" name="password_2" placeholder="Password confirmation">
          <button type="submit" class="btn" name="reg_user">Register</button>
          <p>
             Already a member? <a href="index.php">Sign in</a>
          </p>
        </form>
     </div>
   </body>
</html>