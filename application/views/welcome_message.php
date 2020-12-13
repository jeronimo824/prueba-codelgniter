<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #000;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
		background-image: url('https://placeimg.com/1280/1280/tech');
		background-repeat: no-repeat;
		background-position: center;
		background-attachment: fixed;
	}

	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		text-decoration: none;
		font-family: sans-serif;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}



	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	.principal{
		width: 100%;
		padding: 20px;
		margin: auto;
		margin-top: 100px;

	}

	.contenedor_todo{
		width: 100%;
		max-width: 800px;
		margin: auto;
		position: relative;
	}

	.caja_trasera{
		width: 100%;
		padding: 10px 20px;
		display: flex;
		justify-content:center;
		backdrop-filter: blur(10px);
		background-color: rgba(0, 128, 255, 0.5)
	}

	.caja_trasera div{
		margin: 100px 40px;
		color: #fff;
		transition: all 500ms;
	}

	.caja_trasera div p,
	.caja_trasera div button{
		margin-top: 30px;

	}

	.caja_trasera div h1{
		font-weight: 400;
		font-size: 20px;
	}

	.caja_trasera button{
		padding: 10px 40px;
		border: 2px solid #fff;
		background: transparent;
		font-size:14px;
		cursor:pointer;
		color:white;
		outline:none;
		transition: all 300ms;
	}

	.caja_trasera button:hover{
		background: #fff;
		color: #46A2Fb;

	}

	.contenedor_login-register{
		display: flex;
		align-items:center;
		width: 100%;
		max-width: 380px;
		position: relative;
		top: -185px;
		left: 10px;

		transition: left 500ms cubic-bezier(0.175, 0.885, 0.328, 1.275)
	}

	.contenedor_login-register form{
		width: 100%;
		padding: 80px 30px;
		background: #fff;
		position: absolute;
		border-radius: 20px;
		width

	}

	.contenedor_login-register form h2 {
		font-size: 30px;
		text-align: center;
		margin-bottom: 20px;
		color: #46A7ED;
	}

	.contenedor_login-register form input{
		width: 100%;
		margin-top: 20px;
		padding: 10px;
		border: none;
		background: #E2E2E2;
		font-size: 16px;
	}
	
	.contenedor_login-register form button{
		padding: 10px 40px;
		margin-top: 40px;
		border: none;
		font-size: 14px;
		background: #46A2Fd;
		color: white;
		cursor: pointer;
		outline: none;
	}

	.formulario_login{
		opacity: 1;
		display: block;
	}

	.formulario_register{
		display: none;
	}

	@media screen and(max-width: 850px){
		main{
			margin-top: 50px;
			
		}

		.caja_trasera{
			max-width: 350px;
			height: 300px;
			flex-direction: column;
			margin: auto;
		}

		.caja_trasera div{
			margin: 8px;
			position: absolute;
		}

		.contenedor_login-register{
			top: 10px;
			left: 5px;
			margin: auto;
		}

		.contenedor_login-register{
			position: relative;
		}
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
		
	}

	.container {
	text-align: center;
	}

	.game-container {
	display: grid;
	grid-template-columns: repeat(3, auto);
	width: 306px;
	margin: 50px auto;
	}

	.game-cell {
	width: 100px;
	height: 100px;
	box-shadow: 0 0 0 1px #333333;
	border: 1px solid #333333;
	cursor: pointer;
	line-height: 100px;
	font-size: 60px;
	}


	.section{
		
	}
	</style>
</head>
<body>

	<section class="fondo">
		<div id="container">
		<h1>Welcome to CodeIgniter!</h1>

		<div id="body">
			<div class="container">
    <h1>Tic Tac Toe</h1>
    <div class="game-container">
      <div class="game-cell"></div>
      <div class="game-cell"></div>
      <div class="game-cell"></div>
      <div class="game-cell"></div>
      <div class="game-cell"></div>
      <div class="game-cell"></div>
      <div class="game-cell"></div>
      <div class="game-cell"></div>
      <div class="game-cell"></div>
    </div>
    <h2 class="game-notification"></h2>
    <button class="game-restart">Restablecer</button>    
  	</div>
	</div>		

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div>
	</section>
	<main class="principal">
		<div class="contenedor_todo">
			<div class="caja_trasera">
				<div class="caja_trasera-login">
					<h2>Ya tienes una cuenta</h2>
					<p>Inicia sesion para entrar en la pagina</p>
					<button id="btn_inicia_sesion">Iniciar sesion</button>
				</div>
				<div class="caja_trasera-register">
					<h2>aun no tienes una cuenta</h2>
					<p>Registrate para que puedas iniciar sesion</p>
					<button id="btn_register">Registrame</button>
				</div>
			</div>	
			<div class="contenedor_login-register">
				<form action="" class="formulario_login">
					<h2>Iniciar Session</h2>
					<input type="text" placeholder="Id_usuario">
					<button>Entrar</button>
				</form>
				<form action="" class="formulario_register">
					<h2>Registrarme</h2>
					<input type="text" placeholder="Usuario">
					<input type="text" placeholder="Id_usuario">
					<button>Registrarme</button>
				</form>
			</div>
			
		</div>
	</main>
	
	<script>


		// ==================== CONSTANTS ==================== //
const STATUS_DISPLAY = document.querySelector('.game-notification'),
  GAME_STATE = ["", "", "", "", "", "", "", "", ""],
  WINNINGS = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
  ],
  WIN_MESSAGE = () => `El jugador ${currentPlayer} ha ganado!`,
  DRAW_MESSAGE = () => `El juego ha terminado en empate!`,
  CURRENT_PLAYER_TURN = () => `Turno del jugador ${currentPlayer}`

// ==================== VARIABLES ==================== //
let gameActive = true,
  currentPlayer = "O"

// ==================== FUNCTIONS ==================== //

function main() {
  handleStatusDisplay(CURRENT_PLAYER_TURN())
  listeners()
}

function listeners() {
  document.querySelector('.game-container').addEventListener('click', handleCellClick)
  document.querySelector('.game-restart').addEventListener('click', handleRestartGame)
}

function handleStatusDisplay(message) {
  STATUS_DISPLAY.innerHTML = message
}

function handleRestartGame() {
  gameActive = true
  currentPlayer = "X"
  restartGameState()
  handleStatusDisplay(CURRENT_PLAYER_TURN())
  document.querySelectorAll('.game-cell').forEach(cell => cell.innerHTML = "")
}

function handleCellClick(clickedCellEvent /** Type Event **/) {
  const clickedCell = clickedCellEvent.target
  if (clickedCell.classList.contains('game-cell')) {
    const clickedCellIndex = Array.from(clickedCell.parentNode.children).indexOf(clickedCell)
    if (GAME_STATE[clickedCellIndex] !== '' || !gameActive) {
      return false
    }

    handleCellPlayed(clickedCell, clickedCellIndex)
    handleResultValidation()
  }
}

function handleCellPlayed(clickedCell /** object HTML **/, clickedCellIndex) {
  GAME_STATE[clickedCellIndex] = currentPlayer // Agrega en la posición correspondiente el valor ya sea "X" u "O" en el estado actual del juego
  clickedCell.innerHTML = currentPlayer // Agrega en el HTML el valor del jugador
}

function handleResultValidation() {
  let roundWon = false
  for (let i = 0; i < WINNINGS.length; i++) { // Itera cada uno de las posibles combinaciones ganadores
    const winCondition = WINNINGS[i] // Guarda la combinación por ejemplo: [0, 1, 2]
    let position1 = GAME_STATE[winCondition[0]],
      position2 = GAME_STATE[winCondition[1]],
      position3 = GAME_STATE[winCondition[2]] // Almacena el valor del estado actual del juego según las posiciones de winCondition

    if (position1 === '' || position2 === '' || position3 === '') {
      continue; // Si hay algún valor vacio nadie ha ganado aún
    }
    if (position1 === position2 && position2 === position3) {
      roundWon = true // Si todas las posiciones coinciden entonces, dicho jugador ha ganado la partida
      break
    }
  }

  if (roundWon) {
    handleStatusDisplay(WIN_MESSAGE())
    gameActive = false
    return
  }

  let roundDraw = !GAME_STATE.includes("") // Si todas las celdas tienen valor y la sentencia anterior fue falsa entonces es empate
  if (roundDraw) {
    handleStatusDisplay(DRAW_MESSAGE())
    gameActive = false
    return
  }

  handlePlayerChange()
}

function handlePlayerChange() {
  currentPlayer = currentPlayer === "X" ? "O" : "X"
  handleStatusDisplay(CURRENT_PLAYER_TURN())
}

function restartGameState() {
  let i = GAME_STATE.length
  while (i--) {
    GAME_STATE[i] = ''
  }
}

main()

const d = document,
	w = window;

d.getElementById('btn_inicia_sesion').addEventListener('click',iniciarSesion);
d.getElementById('btn_register').addEventListener('click',register);
w.addEventListener('resize',anchoPagina)

const contenedor_login_register = d.querySelector('.contenedor_login-register');

const formulario_login = d.querySelector('.formulario_login');

const formulario_register = d.querySelector('.formulario_register');

const caja_trasera_login = d.querySelector('.caja_trasera-login');

const caja_trasera_register = d.querySelector('.caja_trasera_register');

function anchoPagina(){
	if(window.innerWidth > 850){
		caja_trasera_login.style.display = "block";
		caja_trasera_register.style.display = "block";
	}else{
		caja_trasera_register.style.display = "block";
		caja_trasera_register.style.opacity = "1";
		caja_trasera_login.style.opacity = "1";
		formulario_login.style.display = "block";
		formulario_register.style.display = "none";
		contenedor_login_register.style.left = "0px";
	}
}

function iniciarSesion() {
	if(window.innerWidth > 850){
		formulario_register.style.display = "none";
		contenedor_login_register.style.left = "10px";
		formulario_login.style.display = "block";
		caja_trasera_register.style.opacity = "1";
		caja_trasera_login.style.opacity = "0";
	}else{
		formulario_register.style.display = "none";
		contenedor_login_register.style.left = "0px";
		formulario_login.style.display = "block";
		caja_trasera_register.style.display = "block";
		caja_trasera_login.style.display = "none";
	}
	
}

function register() {
	if(window.innerWidth > 850){
		formulario_register.style.display = "block";
		contenedor_login_register.style.left = "410px";
		formulario_login.style.display = "none";
		caja_trasera_register.style.opacity = "0";
		caja_trasera_login.style.opacity = "1";
	}else{
		formulario_register.style.display = "block";
		contenedor_login_register.style.left = "0px";
		formulario_login.style.display = "none";
		caja_trasera_register.style.opacity = "none";
		caja_trasera_login.style.opacity = "block";
		caja_trasera_login.style.opacity = "1";
	}
	
}


</script>
</body>
</html>