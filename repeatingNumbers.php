<?php
$myfile = fopen("input.txt", "r") or die("Unable to open file!");
$inputString = fread($myfile, filesize("input.txt"));
fclose($myfile);

$arrayNum = explode("\n", $inputString);
$pattern = "/^[0-9]+$/";
$validate = true;

foreach ($arrayNum as $key=>$value) {
	$validate = preg_match($pattern, $value);
	if ($validate == false) {
    unset($arrayNum[$key]);
	}
}

sort($arrayNum);
//print_r ($arrayNum);
$arrLength = count($arrayNum);
$count = 1;
$result = [];

for ($i = 0; $i < $arrLength-1; $i++) {
	for ($j = $i+1; $j < $arrLength; $j++) {
	  if ($arrayNum[$j] === $arrayNum[$i]) {
	  	$count = $count + 1;
	  } else {
	  	if ($count >= 3) {
	  		array_push($result, $arrayNum[$i]);
	  	}
	  	$i = $j;
	  	$count = 1;
	  }
	}
}

echo "Repeating numbers: ";
foreach ($result as $num) {
	echo $num . ' ';
}
echo "\n";
?>
