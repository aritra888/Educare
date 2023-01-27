<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/contact_us.css" />
    <title>Educare | Contact Us</title>
  </head>
  <body>
    <form class="form" action="connect.php" method="post">
        <h2>CONTACT US</h2>
        <p type="Name:"><input name="name" placeholder="Write your name here.."></input></p>
        <p type="Email:"><input name="email" placeholder="Let us know how to contact you back.."></input></p>
        <p type="Message:"><input name="message" placeholder="What would you like to tell us.."></input></p>
        <button>Send Message</button>
        <div>
          <span class="fa fa-phone"></span>001 1023 567
          <span class="fa fa-envelope-o"></span> contact@company.com
        </div>
      </form>
      
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <?php 
      if(isset($_SESSION['status']) && $_SESSION['status'] != '')
      {
      ?>
        <script>
          swal("<?php echo $_SESSION['status']; ?>", "Message sent", "<?php echo $_SESSION['status_code']; ?>");
        </script>
      <?php
      unset($_SESSION['status']);
      }
      ?>
  </body>
</html>
