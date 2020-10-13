<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>binlist</title>
</head>
<body>
	<div>
		<form action="index.php" method="post">
			
			<div>
				<textarea name="lista" id="" cols="30" rows="10"></textarea>
			</div>
			<div>
				<input type="submit" name="btn">
			</div>
		</form>
	</div>
	<div>
		<?php


			if(isset($_POST['btn'])){
				extract($_POST);
				$line = explode(PHP_EOL, $lista);
				$c=count($line);
				function binchk($bin){
					$bandeira = array(
						636368=>"Elo",
						636369=>"Elo",
						504175=>"Elo",
						506699=>"Elo",
						438935=>"Elo",
						451416=>"Elo",
						636297=>"Elo",
						5067=>"Elo",
						4576=>"Elo",
						4011=>"Elo",
						34=>"Amex",
						37=>"Amex",
						6011=>"Discover",
						622=>"Discover",
						64=>"Discover",
						65=>"Discover",
						60=>"Hipercard",
						50=>"Aura",
						35=>"Jcb",
						38=>"Hipercard",
						36=>"Diners",
						38=>"Diners",
						5=>"Mastercard",
					    4=>"Visa"
					);
					$number = $bin;
					//validator
					$total = 0;
					$i = 1;
					$valid = $number;
					$number = str_split($number);
					$number = array_reverse($number);

					foreach ($number as $digit) {
						if($i % 2 == 0){
							$digit *= 2;

							if($digit > 9){
								$digit -= 9;
							}
						}
							$total += $digit;
							$i++;
						}
						if($total % 10 == 0){
							foreach ($bandeira as $key => $_bandeira) {
							$tam = strlen($key);
							$_bin = substr($bin, 0,$tam);
							if($_bin==$key){
								echo $bin.":".$_bandeira."<br>";
								break;
							}
						}
		
				    }

				}
				for($x=0;$x<$c;$x++){
					$bin=$line[$x];
					binchk($bin);
				}
			}
		?>
	</div>
</body>
</html>
