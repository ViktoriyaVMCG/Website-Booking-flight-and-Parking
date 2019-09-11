<?php
session_start();
if(!isset($_SESSION["sess_user"])){
 header("Location: log.php");
}
else
{
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tetris</title>
	<title>Tetris</title>
	<link rel="stylesheet" href="css/styles.css">
	<style>
/* unvisited link */
a:link {
  color: red;
}

/* visited link */
a:visited {
  color: green;
}

/* mouse over link */
a:hover {
  color: hotpink;
}

/* selected link */
a:active {
  color: blue;
}
</style>
</head>
<body>
<h1 style="color:red;">Welcome to Tetris <?=$_SESSION['sess_user'];?>!</h1>
<a href="logout.php">Logout</a>
<div id="tetris">
	<canvas id="scene"></canvas>
	<div id="gameOver">
		<h1>Game Over !</h1>
		<h3>Score: <span id="finalScore">0</span></h3>
		<h2><a href="#" id="restart">Restart</a></h2>	
	</div>
	<div id="side">
		<div id="info">
			<h1 id="levelInfo">Level: <br><span id="level">1</span></h1>
			<h2 id="scoreInfo">Score: <br><span id="score" >0</span></h2>
			<div id="rewardInfo" class="invisible">+<span id="reward">0</span></div>
			<canvas id="preview"></canvas>
		</div>
	</div>
</div>

<script src="dist/tetris.js"></script>
<script>
	(function(){
		var tetris = new Tetris('tetris');
		tetris.start();
	})();
</script>
</html>
<body>
</body>
</html>
<?php
}
?>