<?php

		$PWL=["Toni"=>90, "Devi"=>80, "Nina"=>70, "Reza"=>85];
		$AI=["Toni"=>80, "Devi"=>80, "Nina"=>85, "Reza"=>90];
		$PBD=["Toni"=>80, "Devi"=>80, "Nina"=>85, "Reza"=>90];


$rataPWL = array_sum($PWL)/count($PWL);
$rataAI = array_sum($AI)/ count ($AI);
$rataPBD = array_sum($PBD)/ count ($PBD);

echo "rata2pwl = " .$rataPWL. "<br>";
echo "rata2AI = " .$rataAI. "<br>";
echo "rata2PBD = " .$rataPBD. "<br>";
?>