<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="resp.css">
    <title>Login</title>

    <script>
      function nextb() {
        
        window.location.href = "pg1.php";
      }
    </script>
</head>
<body>
   <section class="imglo"> <img src="l.png" alt="" >
  
  </section>
    
  <form action="" method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required class="email">

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required class="password">
    <input type="button" onclick="nextb()" value="Login" class="submit" name="Login" id="next">

</form>
  
<footer style="text-align: center;  ">
    <?php include 'foooter.php'; ?>
</footer>

 
</body>
</html>