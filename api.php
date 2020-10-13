<?php
//Usei esta lista de bandeiras
//https://gist.github.com/erikhenrique/5931368
//https://www.4devs.com.br/gerador_de_numero_cartao_credito
<?php
$bandeira = array(
	5=>"Mastercard",
    	4=>"Visa",
	301=>"Diners",
	305=>"Diners",
	36=>"Diners",
	38=>"Diners",
	636368=>"Elo",
	636369=>"Elo",
	438935=>"Elo",
	504175=>"Elo",
	451416=>"Elo",
	636297=>"Elo",
	5067=>"Elo",
	4576=>"Elo",
	4011=>"Elo",
	506699=>"Elo",
	34=>"Amex",
	37=>"Amex",
	6011=>"Discover",
	622=>"Discover",
	64=>"Discover",
	65=>"Discover",
	50=>"Aura",
	35=>"Jcb",
	38=>"Hipercard",
	60=>"Hipercard"
);
//bin = 123456278362345 
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
			//break; caso for checar mais de uma bin para eviar bug's
		}
	}
		
}
?>
