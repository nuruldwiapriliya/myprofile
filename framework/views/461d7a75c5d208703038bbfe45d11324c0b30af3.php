<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Hubungi Saya</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
      
          <img src="img/profil.png" width="50" height="48" style="border-radius: 10%;"/>
        </div>
        <a class="navbar-brand" href="profil">BACK TO PROFIL</a>
    </nav>
    <div class="container">
    <title>Ukuran Font</title>
    </head>
    <body>
     <font size="5">Silahkan Kirimkan Pesan Kepada Saya</font><br>
    
      <?php 
              if(isset($errMSG)){
                echo $errMSG;
                } ?>
        <form class="form-horizontal" role="form" method="post" action="">
          <div class="form-group">
         
           
          
          
           
            <form>
            <label for="email">Email</label><br />
            <input type="email" name="email" placeholder="alamat email"/>
            <br />
            <label for="message">Pesan</label><br />
            <textarea name="message" placeholder="Tulis komentar anda..." rows="4" cols="80"></textarea>
            <form action="" method="post">
              <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                <?php echo csrf_field(); ?>
                 
            <br />
            <br />
            <input type="submit" value="Kirim" />
        </form>
    </div>

            <style>
      body {
        background-color:#f2c0ff;
      }
          </div>
        </form>
    </div>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\projekuts\resources\views/contact.blade.php ENDPATH**/ ?>