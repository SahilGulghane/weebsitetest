<!DOCTYPE html>
<html>
<head>
	<title>Tic Tac Toe Game</title>
	<style>
	.box {
		width: 50px;
		height: 50px;
		border: 1px solid #000;
		float: left;
		text-align: center;
		font-size: 30px;
		line-height: 50px;
		cursor: pointer;
		background-color: #f2f2f2;
	}
	.clear {
		clear: both;
	}
	</style>
	<script type="text/javascript">
		function checkWinner(){
			var boxes = document.getElementsByClassName("box");
			if (boxes[0].innerHTML!="" && boxes[0].innerHTML==boxes[1].innerHTML && boxes[1].innerHTML==boxes[2].innerHTML) {
				alert(boxes[0].innerHTML+" is the winner!");
				resetGame();
			}else if (boxes[3].innerHTML!="" && boxes[3].innerHTML==boxes[4].innerHTML && boxes[4].innerHTML==boxes[5].innerHTML) {
				alert(boxes[3].innerHTML+" is the winner!");
				resetGame();
			}else if (boxes[6].innerHTML!="" && boxes[6].innerHTML==boxes[7].innerHTML && boxes[7].innerHTML==boxes[8].innerHTML) {
				alert(boxes[6].innerHTML+" is the winner!");
				resetGame();
			}else if (boxes[0].innerHTML!="" && boxes[0].innerHTML==boxes[3].innerHTML && boxes[3].innerHTML==boxes[6].innerHTML) {
				alert(boxes[0].innerHTML+" is the winner!");
				resetGame();
			}else if (boxes[1].innerHTML!="" && boxes[1].innerHTML==boxes[4].innerHTML && boxes[4].innerHTML==boxes[7].innerHTML) {
				alert(boxes[1].innerHTML+" is the winner!");
				resetGame();
			}else if (boxes[2].innerHTML!="" && boxes[2].innerHTML==boxes[5].innerHTML && boxes[5].innerHTML==boxes[8].innerHTML) {
				alert(boxes[2].innerHTML+" is the winner!");
				resetGame();
			}else if (boxes[0].innerHTML!="" && boxes[0].innerHTML==boxes[4].innerHTML && boxes[4].innerHTML==boxes[8].innerHTML) {
				alert(boxes[0].innerHTML+" is the winner!");
				resetGame();
			}else if (boxes[2].innerHTML!="" && boxes[2].innerHTML==boxes[4].innerHTML && boxes[4].innerHTML==boxes[6].innerHTML) {
				alert(boxes[2].innerHTML+" is the winner!");
				resetGame();
			}else{
				var empty = 0;
				for(i=0;i<boxes.length;i++){
					if (boxes[i].innerHTML=="") {
						empty++;
					}
				}
				if(empty==0){
					alert("Draw!");
					resetGame();
				}
			}
		}
		function clickedBox(box){
			if (box.innerHTML=="") {
				if (turn%2==0) {
					box.innerHTML="X";
				}else{
					box.innerHTML="O";
				}
				turn++;
				checkWinner();
			}
		}
		function resetGame(){
			var boxes = document.getElementsByClassName("box");
			for(i=0;i<boxes.length;i++){
				boxes[I].innerHTML="";
			}
			turn=0;
		}
		var turn = 0;
	</script>
</head>
<body>
	<h1>Tic Tac Toe Game</h1>
	<div class="container">
		<div class="box" onclick="clickedBox(this)"></div>
		<div class="box" onclick="clickedBox(this)"></div>
		<div class="box" onclick="clickedBox(this)"></div>
		<div class="clear"></div>
		<div class="box" onclick="clickedBox(this)"></div>
		<div class="box" onclick="clickedBox(this)"></div>
		<div class="box" onclick="clickedBox(this)"></div>
		<div class="clear"></div>
		<div class="box" onclick="clickedBox(this)"></div>
		<div class="box" onclick="clickedBox(this)"></div>
		<div class="box" onclick="clickedBox(this)"></div>
		<div class="clear"></div>
	</div>
	<button onclick="resetGame()">Reset</button>
</body>
</html>
