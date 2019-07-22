<!DOCTYPE html>
<html>
<head>
<meta charset=UTF-8>
<meta name="viewport" content="width=device-width, initial-scale=2.0" />
<link rel=stylesheet href="css/style.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119054175-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119054175-1');
</script>

<head>
<body>
<div id="interface">
	
	<h1>Lançamento de Notas</h1>		
		
	
		<form>
		1ª Avaliação: <input type='number' name='n1' step='0.01' min='0' max='10' id="n1" required onchange="calcMedia()">
		2ª Avaliação: <input type='number' name='n2' step='0.01' min='0' max='10' id="n2" required onchange="calcMedia()">
		3ª Avaliação: <input type='number' name='n3' step='0.01' min='0' max='10' id="n3" required onchange="calcMedia()">
		4ª Avaliação: <input type='number' name='n4' step='0.01' min='0' max='10' id="n4" required onchange="calcMedia()" ><br/>
		
		<!--<input type='submit' value='Calcular Média' id='bt'>-->
		</form>
	
		<br>
		<div id="resultado">
				
			

		</div>
		<p id="status" class="aprova reprova"></p>	
		
		
		
<br/>	<a href="index.php"><input type="button" value="Nova Consulta" id="bt1"></a><!--botao para nova consulta-->

</div>
<div class="section">
		<ul>
		<li><img src="image/logo.png">
		<a href="https://login.uniasselvi.com.br/index.php" target="_blank"><h3>Acesse sua conta</h3></a></li>
				
		</ul>
		
		
		
</div>

<script type="text/javascript">
	



	

function calcMedia(){
		var n1=document.querySelector('#n1').value*1.5;
		var n2=document.querySelector('#n2').value*1.5;
		var n3=document.querySelector('#n3').value*4.0;
		var n4=document.querySelector('#n4').value*3.0;
		
		var media=(n1+n2+n3+n4)/10;
		

	var content=document.querySelector('#resultado').innerHTML="Sua média é: "+media;

	if(media >6.51){

		document.querySelector('#status').innerHTML="Aprovado";

	}
	else{

		document.querySelector('#status').innerHTML="Reprovado";

	}

	




	
}

	

		

	

	



		


	

</script>
</body>
</html>