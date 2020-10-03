<?php
session_start();
?>
<html>
  <head>
        <title>Americaniche Academy Exam Portal</title>
        <link rel="stylesheet" href="css/style2.css">

  </head>
  <body>
    <div class="abc">
      <div class="form-box">
          <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-button" onclick="login()">Admin</button>
            <button type="button" class="toggle-button" onclick="login1()">Student</button>
          </div>
          <form id="Admin" class="input" action="/php/exam_admin_login.php" method="post">
            <input type="text" class="input-field" name="username" placeholder="Admin ID" required>
            <input type="password" class="input-field" name="password" placeholder="Enter Password" required>
            <br><p style="color : red"><?php echo htmlspecialchars($_SESSION["error"]); ?></p><br>
            <input type="checkbox" class="check-box"><span>Remember Me</span>
            <button type="submit" class="submit-btn">Login</button>

          </form>

          <form id="Student" class="input" action="/php/exam_student_login.php" method="post">
            <input style="color:white" type="text" class="input-field" placeholder="Student ID" required>
            <input type="text" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>Remember Me</span>
	    <br><p style="color : red"><?php echo htmlspecialchars($_SESSION["error"]); ?></p><br>
            <button type="submit" class="submit-btn">Login</button>

            </form>
          </div>
        </div>


          <script>
          var x = document.getElementById('Admin');
          var y = document.getElementById('Student');
          var z = document.getElementById('btn');

          function login1() {
             x.style.left = "-400px";
             y.style.left = "50px";
             z.style.left = "110px";
           }
             function login() {
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0";

          }
          </script>


        </body>
</html>
<?php session_destroy() ?>
