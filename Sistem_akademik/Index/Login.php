<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sistem Akademik | Login</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background: url('../Assets/001.JPG') no-repeat center center fixed;
      background-size: cover;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #loading-screen {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: white;
      z-index: 1000;
      text-align: center;
      padding-top: 20%;
      font-size: 24px;
      font-weight: bold;
    }

    .login-box {
      background-color: rgba(255, 255, 255, 0.15);
      padding: 40px;
      border-radius: 10px;
      backdrop-filter: blur(10px);
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
      text-align: center;
      width: 400px;
    }

    h2 {
      color: white;
    }

    input[type=text], input[type=password], select {
      width: 90%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    button {
      background-color: #64CCDB;
      color: white;
      padding: 12px 20px;
      margin: 10px 0;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 50%;
    }

    button:hover {
      background-color: #53bac8;
    }

    label {
      display: block;
      color: white;
      text-align: left;
      margin-left: 5%;
      font-weight: bold;
    }

    .psw {
      color: white;
      float: right;
      margin-right: 5%;
      font-size: 14px;
    }

    .psw a {
      color: #ddd;
      text-decoration: none;
    }

    .psw a:hover {
      text-decoration: underline;
    }

    @media screen and (max-width: 500px) {
      .login-box {
        width: 90%;
        padding: 20px;
      }

      button {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <div id="loading-screen">Loading...</div>

  <form id="loginForm" method="POST" action="auth.php" autocomplete="off">
    <div class="login-box">
      <h2>LOGIN</h2>

      <label for="uname">Username</label>
      <input id="uname" type="text" placeholder="Enter Username" name="uname" required autocomplete="off"/>

      <label for="psw">Password</label>
      <input id="psw" type="password" placeholder="Enter Password" name="psw" required autocomplete="new-password"/>

      <button type="submit">Login</button>

      <br>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>

  <script>
    document.getElementById("loginForm").addEventListener("submit", function () {
      document.getElementById("loading-screen").style.display = "block";
    });
  </script>
</body>
</html>
