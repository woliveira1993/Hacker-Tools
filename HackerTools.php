<!DOCTYPE html>
	<head>
		<title>Hacker Tools</title>
		<link rel="shortcut icon" href="https://hackertarget.com/wp-content/uploads/2018/03/hackertarget-logo-square.png">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	
	
	<body class="bg-dark">
		<div class="container text-success">
			<div class="row mt-5">
					<form method="post" action="">
					  <div class="form-row align-items-center ">
						<div class="col-auto my-1">
						  <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preferência</label>
						  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="metodo">
							<option selected>Escolher...</option>
							<option value="1">DNS Lookup</option>
							<option value="2">Reverse DNS</option>
							<option value="3">Hosts Records</option>
							<option value="4">Shared DNS</option>
							<option value="5">Zone Transfer</option>
							<option value="6">GEO IP</option>
							<option value="7">Reverse IP</option>
							<option value="8">SUBNET Lookup</option>
							<option value="9">ASN Lookup</option>
							<option value="10">Banner Grab</option>
							<option value="11">HTTP Headers</option>
						  </select>
						</div>
						<div class="col-auto my-1">
							<input class="form-control" type="text" placeholder="ip/hostname" name="alvo">
						</div>
						<div class="col-auto my-1">
						  <button type="submit" class="btn btn-primary">Enviar</button>
						</div>
					  </div>
					</form>
			</div>
			<div class="row mt-5">
				<?php 
			
				if(isset($_POST['metodo'], $_POST['alvo']) && !empty($_POST['alvo'])){
					$alvo = $_POST['alvo'];
					$metodo = $_POST['metodo'];
					if($metodo == 1){
						$ler = file("https://api.hackertarget.com/dnslookup/?q=$alvo");
						$visualiza = array_map("trim", $ler);
						foreach($visualiza as $info){
							echo $info."<br>";
						}
					}
					if($metodo == 2){
						$ler = file("https://api.hackertarget.com/reversedns/?q=$alvo");
						$visualiza = array_map("trim", $ler);
						foreach($visualiza as $info){
							echo $info."<br>";
						}
					}
					if($metodo == 3){
						$ler = file("https://api.hackertarget.com/hostsearch/?q=$alvo");
						$visualiza = array_map("trim", $ler);
						foreach($visualiza as $info){
							echo $info."<br>";
						}
					}
					if($metodo == 4){
						$ler = file("https://api.hackertarget.com/findshareddns/?q=$alvo");
						$visualiza = array_map("trim", $ler);
						foreach($visualiza as $info){
							echo $info."<br>";
						}
					}
					if($metodo == 5){
						$ler = file("https://api.hackertarget.com/zonetransfer/?q=$alvo");
						$visualiza = array_map("trim", $ler);
						foreach($visualiza as $info){
							echo $info."<br>";
						}
					}
					if($metodo == 6){
						$ler = file("https://api.hackertarget.com/geoip/?q=$alvo");
						$visualiza = array_map("trim", $ler);
						foreach($visualiza as $info){
							echo $info."<br>";
						}
					}
					if($metodo == 7){
						$ler = file("https://api.hackertarget.com/reverseiplookup/?q=$alvo");
						$visualiza = array_map("trim", $ler);
						foreach($visualiza as $info){
							echo $info."<br>";
						}
					}
					if($metodo == 8){
						$ler = file("https://api.hackertarget.com/subnetcalc/?q=$alvo");
						$visualiza = array_map("trim", $ler);
						foreach($visualiza as $info){
							echo $info."<br>";
						}
					}
					if($metodo == 9){
						$ler = file("https://api.hackertarget.com/aslookup/?q=$alvo");
						$visualiza = array_map("trim", $ler);
						foreach($visualiza as $info){
							echo $info."<br>";
						}
					}
					if($metodo == 10){
						$ler = file("https://api.hackertarget.com/bannerlookup/?q=$alvo");
						$visualiza = array_map("trim", $ler);
						foreach($visualiza as $info){
							echo $info."<br>";
						}
					}
					if($metodo == 11){
						$ler = file("https://api.hackertarget.com/httpheaders/?q=$alvo");
						$visualiza = array_map("trim", $ler);
						foreach($visualiza as $info){
							echo $info."<br>";
						}
					}
				}
			?>
			</div>
		</div>
	</body>
	
</html>