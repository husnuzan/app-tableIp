<?php 

	// function ping($ippertama,$port=80,$timeout=6){
	// 	$fsock = fsockopen($ippertama,$port,$errno,$errstr,$timeout);
	// 	if (! $fsock) {
	// 		return false;
	// 	}
	// 	else
	// 	{
	// 		return TRUE;
	// 	}
	// } 

	function ping($ippertama){
		exec("ping -n 3 $ippertama" , $output , $status);
	}

	for ($ippertama=$ippertama; $ippertama < $ipterakhir ; $ippertama++) { ping($ippertama);}
	// if (ping($ippertama)==1) {
	// 	return TRUE;
	// 	echo "data tersambung";
	// }else{
	// 	return FALSE;
	// }
	?>
	