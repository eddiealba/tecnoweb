<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@900&display=swap" rel="stylesheet">
    <title>DR. VET</title>
    <style type="text/css">
		body{
			margin-right: 15%;
			margin-left: 15%;
			width: 70%;			
			max-width: 70%;
			min-width: 750px;
			background-color: white;
		}

		.banner{			
			display: inline-block;
			margin: 0 auto;
			width: 100%;
			background-color: white;	
			text-align:center;		
		}

		.banner p{
			display: inline-block;
			margin-top: 60px;
			position: relative;
			font-family: sans-serif;
			font-size: 38px;
			text-align: center;
			max-width: 350px;
			color: cornflowerblue;
			font-weight: bold;
			font-family: 'Noto Serif Display', serif;
		}

		.menu{
			display: block;
			width: 100%;
			background-color: white;
			border-top: 3px solid cornflowerblue;
			border-bottom: 3px solid cornflowerblue;
		}

		.menu ul{
			list-style: none;	
			align-content: left;	
			display: inline-block;			
		}

		.menu li{
			align-content: center;
			text-align: center; 
			display: inline-block;
			width: 210px;
			height: 28px;
			background-color: white;	
			font-size: 16px;
		}

		.menu li:hover{   
			display: inline-block;			
			width: 210px;
			height: 28px;
	        font-size: 18px;
	        background-color: #ffcb08;
	        border-radius: 10px;	
	        text-align: center;       	
	    }

		.menu a{			
			color: cornflowerblue;
			font-family: 'Baloo Tamma 2';
			text-decoration: none;
		}

		@font-face{
			font-family: 'Baloo Tamma 2';
			src: url(Fuentes/BalooTamma2-Medium.ttf) format('truetype');
		}
		img{
			width: 400px;
			height: 100px;
		}
        .titu{
            font-family: 'Orbitron', sans-serif;
            font-size: 100px;
        }
        footer{
			background-color: black;
			color: white;
		}
	</style>
</head>
<body>
	<div class="banner" id="banner">
		<h1 class="titu" id="titu">DR. VET</h1>
	</div>
	<nav class="menu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="catalogo.php">Servicios</a></li>
			<li><a href="cronograma.html" target="contenido">Formulario</a></li>
			<li><a href="validar.php">Contáctanos</a></li>
		</ul>
	</nav>