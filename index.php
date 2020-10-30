<?php
session_start();
?>

<html>
  <head>
		<style>
		* {
			box-sizing: border-box;
		}
		body {
			margin:0;
			height: 100vh;
			width: 100vw;
			overflow: hidden;
			font-family: 'Lato', sans-serif;
			font-weight: 700;
			display: flex;
			align-items: center;
			justify-content: center;
			background: #ecf0f3;
			color:#24cfaa;
		}
		.login-div {
			width:350px;
			height: 500px;
			padding: 30px 35px 35px 35px;
			border-radius: 40px;
			background: #ecf0f3;
			box-shadow: 13px 13px 20px #d1cbbf,
									-13px -13px 20px white;
		}
		.logo {
			background:url("logo_big.png");
			background-size: cover;
			width:110px;
			height: 110px;
			border-radius: 50%;
			margin:0 auto;
			box-shadow:
			/* logo shadow */
			0px 0px 2px blue,
			/* offset */
			0px 0px 0px 5px #24cfaa,
			/*bottom right */
			8px 8px 15px #a7aaaf,
			/* top left */
			-8px -8px 15px #ffffff
			;
		}
		.title {
			text-align: center;
			font-size: 25px;
			padding-top: 0px;
			letter-spacing: 0.5px;
		}
		.sub-title {
			text-align: center;
			font-size: 15px;
			padding-top: 7px;
			letter-spacing: 3px;
		}
		.fields {
			width: 100%;
			padding: 30px 5px 8px 5px;
		}
		.forget{
			text-align: left;
			text-decoration: none;
			color: #24cfaa;
		}


		.fields input {
			border: none;
			outline:none;
			background: none;
			font-size: 15px;
			color: #555;
			padding:15px 5px 10px 0px;
		}
		.Username, .password {
			margin-bottom: 30px;
			border-radius: 25px;
			box-shadow: inset 8px 8px 8px #cbced1,
									inset -8px -8px 8px #ffffff;
		}
		.fields svg {
			height: 22px;
			margin:0 10px -3px 25px;
		}
		.signin-button {
			outline: none;
			cursor: pointer;
			border:none;
			width:100%;
			height: 45px;
			border-radius: 30px;
			font-size: 20px;
			font-weight: 700;
			font-family: 'Lato', sans-serif;
			color:#fff;
			text-align: center;
			background: #3c3b6e;
			box-shadow: 3px 3px 8px #b1b1b1,
									-3px -3px 8px #ffffff;
			transition: 0.5s;
		}
		.signin-button:hover {
			background:#b22234;
		}
		.signin-button:active {
			background:#1da88a;
		}
		.link {
			padding-top: 20px;
			text-align: center;
		}
		.link a {
			text-decoration: none;
			color:#aaa;
			font-size: 15px;
		}

		</style>
    <meta charset="UTF-8" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>
  <body>
    <div class="login-div">
      <div class="logo"></div><br><br>
      <div class="title">Americaniche Academy</div>
			<form action="php/login.php" method="post">
      <div class="fields">
        <div class="Username"><svg fill="#999" viewBox="0 0 1024 1024"><path class="path1" d="M896 307.2h-819.2c-42.347 0-76.8 34.453-76.8 76.8v460.8c0 42.349 34.453 76.8 76.8 76.8h819.2c42.349 0 76.8-34.451 76.8-76.8v-460.8c0-42.347-34.451-76.8-76.8-76.8zM896 358.4c1.514 0 2.99 0.158 4.434 0.411l-385.632 257.090c-14.862 9.907-41.938 9.907-56.802 0l-385.634-257.090c1.443-0.253 2.92-0.411 4.434-0.411h819.2zM896 870.4h-819.2c-14.115 0-25.6-11.485-25.6-25.6v-438.566l378.4 252.267c15.925 10.618 36.363 15.925 56.8 15.925s40.877-5.307 56.802-15.925l378.398-252.267v438.566c0 14.115-11.485 25.6-25.6 25.6z"></path></svg><input type="username" class="user-input" placeholder="username" required/></div>
        <div class="password"><svg fill="#999" viewBox="0 0 1024 1024"><path class="path1" d="M742.4 409.6h-25.6v-76.8c0-127.043-103.357-230.4-230.4-230.4s-230.4 103.357-230.4 230.4v76.8h-25.6c-42.347 0-76.8 34.453-76.8 76.8v409.6c0 42.347 34.453 76.8 76.8 76.8h512c42.347 0 76.8-34.453 76.8-76.8v-409.6c0-42.347-34.453-76.8-76.8-76.8zM307.2 332.8c0-98.811 80.389-179.2 179.2-179.2s179.2 80.389 179.2 179.2v76.8h-358.4v-76.8zM768 896c0 14.115-11.485 25.6-25.6 25.6h-512c-14.115 0-25.6-11.485-25.6-25.6v-409.6c0-14.115 11.485-25.6 25.6-25.6h512c14.115 0 25.6 11.485 25.6 25.6v409.6z"></path></svg><input type="password" class="pass-input" placeholder="password" required/></div>
      </div>
      <button class="signin-button">Login</button><br>
      <br><p style="color : red"><?php echo htmlspecialchars($_SESSION["error"]); ?></p>
      <div class="forget">
      <a href="forgetPass/email.php" class="forget">Forget Password ?</a>
      </div>
  </form>
    </div>
  </body>
</html>
<?php session_destroy() ?>
