<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact us</title>
    <link rel="stylesheet" href="bootstrap.css" />
   

<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="resp.css">
 
  </head>

  
    <body>

        <section class="container" id="joinus">
        <h1 class="heading">Contact <span>Us</span></h1>
      </div>

     
   
  
    <form action="mailto: naghamabdulal@hotmail.com"method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="text" required>
  
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required class="email">
  
        <label for="Message:">Message::</label>
       
        <textarea
        id="message"
        name="message"
        class="form-control"
        rows="3"
        required
      ></textarea>
      <input type="submit" value="Send" class="submit" name="joinus">
    </form>
    </body>
  </section>

    
<footer style="text-align: center;  ">
    <?php include 'foooter.php'; ?>
</footer>

  </body>
</html>
