<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="<?='assets\custom\css\SignUp-style-1.css';?>">
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
  <body>

    <div id="login">
      <div class="center">
          <h2>Masuk</h2>
          <p>Selamat Datang Kembali!</p>
          <form class="fl" action="Login" method="POST">
            <input class="itpw" type="text" name="username" placeholder="Username or Email"><br>
            <input class="itpw" type="password" name="password" placeholder="Password"><br>
            <input class="its" type="submit" name="login" value="Submit">
          </form>

          <p><a href="#">Forget your password ?</a> | <a href="#">Created an account</a>  </p>

      </div>
    </div>

  </body>
</html>
