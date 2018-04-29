<?php
header('Content-Type: application/json; charset=utf-8');
$tankSize = $_GET['tankSize'];
$log = array();
$count=1;

//1л
array_push($log, $count.") ".$tankSize." по 1л<br>") ;

//2л+1л
for ($i = 1; $i*2 <= $tankSize; $i++) {
	$count++;
	$remainder=$tankSize-2*$i;
	if ($remainder==0){array_push($log, $count.") ".$i." по 2л");
	}else{array_push($log, $count.") ".$i." по 2л + ".$remainder." по 1л");} 
}

//5л+1л
for ($i = 1; $i*5 <= $tankSize; $i++) {
	$count++;
	$remainder=$tankSize-5*$i;
	if ($remainder==0){array_push($log, $count.") ".$i." по 5л");
	}else{array_push($log, $count.") ".$i." по 5л + ".$remainder." по 1л");} 
}

//5л+2л+1л
for ($i = 1; $i*5 < $tankSize; $i++) {
	
	$remainder2=$tankSize-5*$i;
	for ($i2 = 1; $i2*2 <= $remainder2; $i2++) {
         $count++;
	     $remainder=$remainder2-2*$i2;
	     if ($remainder==0){array_push($log, $count.") ".$i." по 5л + ".$i2." по 2л");
	     }else{array_push($log, $count.") ".$i." по 5л + ".$i2." по 2л + ".$remainder." по 1л");}
	} 
}

//10л+1л
for ($i = 1; $i*10 <= $tankSize; $i++) {
	$count++;
	$remainder=$tankSize-10*$i;
	if ($remainder==0){array_push($log, $count.") ".$i." по 10л");
	}else{array_push($log, $count.") ".$i." по 10л + ".$remainder." по 1л");} 
}

//10л+5л+1л
for ($i = 1; $i*10 < $tankSize; $i++) {
	
	$remainder2=$tankSize-10*$i;
	for ($i2 = 1; $i2*5 <= $remainder2; $i2++) {
         $count++;
	     $remainder=$remainder2-5*$i2;
	     if ($remainder==0){array_push($log, $count.") ".$i." по 10л + ".$i2." по 5л");
	     }else{array_push($log, $count.") ".$i." по 10л + ".$i2." по 5л + ".$remainder." по 1л");}
	} 
}

//10л+2л+1л
for ($i = 1; $i*10 < $tankSize; $i++) {
	
	$remainder2=$tankSize-10*$i;
	for ($i2 = 1; $i2*2 <= $remainder2; $i2++) {
         $count++;
	     $remainder=$remainder2-2*$i2;
	     if ($remainder==0){array_push($log, $count.") ".$i." по 10л + ".$i2." по 2л");
	     }else{array_push($log, $count.") ".$i." по 10л + ".$i2." по 2л + ".$remainder." по 1л");}
	} 
}

//10л+5л+2л+1л
for ($i = 1; $i*10 < $tankSize; $i++) {	
	$remainder2=$tankSize-10*$i;
	for ($i2 = 1; $i2*5 <= $remainder2; $i2++) {
	     $remainder3=$remainder2-5*$i2;
	     for ($i3 = 1; $i3*2 <= $remainder3; $i3++) {
             $count++;
	         $remainder=$remainder3-2*$i3;
	         if ($remainder==0){array_push($log, $count.") ".$i." по 10л + ".$i2." по 5л + ".$i3." по 2л");
	         }else{array_push($log, $count.") ".$i." по 10л + ".$i2." по 5л + ".$i3." по 2л + ".$remainder." по 1л");}
	     } 
	} 
}

print json_encode($log);


