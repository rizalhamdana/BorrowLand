<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Daftar</title>
    <link rel="stylesheet" href="<?='assets\custom\css\SignUp-style-2.css'?>">
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
  <body>
      <div class="cover"></div>
      <fieldset class="center">
        
        <h1>Bergabunglah bersama kami</h1>
        
        <form method="POST" action="<?='Registrasi/daftar'?>">
          <input type="text" name="nama_lengkap" placeholder="Nama"><br/>
          <input class="itw" type="email" name="email_user" placeholder="Alamat Email"><br/>
          <input class="itw" type="text" name="alamat_user" placeholder="Alamat"><br/>
          <input class="itw" type="username" name="username" placeholder="Nama Pengguna"><br/>
          <input class="itw" type="password" name="password" placeholder="Kata Sandi"><br/>
          <!--<input class="itw" type="password" name="password" placeholder="Ulangi Kata Sandi"><br/>!-->
          <input class="its" type="submit" value="Daftar"><br/>
        </form>
          
      </fieldset>
    
  </body>
</html>
