<?php 
$ippertama = $_GET ['ippertama'];
$ipterakhir = $_GET ['ipterakhir'];

for ($ippertama=$ippertama; $ippertama < $ipterakhir ; $ippertama++) { 
	exec("ping -n 3 $ippertama", $output, $status);
	if ($status==0) {
   		return "alive";
	}else{
    	return "false";
	}
}

?>