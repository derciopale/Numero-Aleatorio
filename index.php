<!DOCTYPE html>
<html>
<head>
	<title>Gerador de Imei</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	

 <div class="container md-5">
 	<h1><p class="font-weight" style="text-align: center; margin-top: 20%;" >Este sistema gera 4 números aleatórios.</p></h1>


 </div>




<div class="border  border-primary p-3 mb-2 md2">
<div class="text-center ">

            
         

			<button onclick="document.getElementById('gerar').innerHTML = getRndInteger(0,10)" class="btn btn-primary btn-lg">Gerar</button><br><br>
	<h3><p id="gerar" class="font-weight-bold  mb-2" style="color: #5882FA;"></p></h3>
	</div>
</div>

<script>
function getRndInteger(min, max) {
 return Math.floor(Math.random()*(9999-1000+1)+1000);}
</script>



	</div>

	<!-- Footer -->
	<footer class="page-footer font-small red">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://instagram.com/palebeatzmlg"> Pale Beatz</a>

  </div>

</body>
</html>