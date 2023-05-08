<?php 
	$player1Score = 0;
	$player2Score = 0;
?>

<HTML>
	<head>
		<title>PHP Game</title>
		<style>
			.main { 
				width: 600px; 
				background-color: light-blue; 
				margin: 0 auto; 
				padding: 10px; 
				border-radius: 15px; 
			}
			.player1 { 
				float: left; 
				margin-right: 20px; 
				text-align: center; 
				width: 200px; 
				border-radius: 10px; 
				background-color: lightgreen; 
				padding: 10px;
				margin-bottom: 10px;
			}
			.player2 { 
				float: right; 
				text-align: center; 
				width: 200px; 
				border-radius: 10px; 
				background-color: lightcoral; 
				padding: 10px;
				margin-bottom: 10px;
			}
			.score { 
				text-align: center; 
				background-color: white; 
				padding: 10px; 
				border-radius: 10px; 
				width: 200px; 
				margin: 0 auto; 
			}
			.btn { 
				background-color: #27ae60; 
				color: white; 
				border-radius: 10px; 
				padding: 10px;
				margin: 10px;
			}
			.btn:hover { 
				background-color: #2ecc71; 
				color: white; 
				border-radius: 10px; 
				padding: 10px;
				margin: 10px;
			}
		</style>
	</head>
	<body>
		<div class="main">
			<div class="player1">
				<h3>Player 1</h3>
				<h2><?php echo $player1Score; ?></h2>
				<a href="?player1=up" class="btn">UP</a>
			</div>
			<div class="player2">
				<h3>Player 2</h3>
				<h2><?php echo $player2Score; ?></h2>
				<a href="?player2=up" class="btn">UP</a>
			</div>
			<div class="score">
				<h3>Score</h3>
				<h2>
					<?php 
						if(isset($_GET['player1']) && $_GET['player1'] == 'up') {
							$player1Score++;
						}
						if(isset($_GET['player2']) && $_GET['player2'] == 'up') {
							$player2Score++;
						}
						echo $player1Score . ' - ' . $player2Score;
					?>
				</h2>
			</div>
		</div>
	</body>
</HTML>
