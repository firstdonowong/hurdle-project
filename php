<?php

$R1 = "11 March"
$R2 = "22 April"
$R3 = "3 June"
$R4 = "5 August"
$R5 = "16 September"
$R6 = "28 October"
//defining variables. Using 2015 dates. 
//How can I format them so that I can apply +t(14,0,0)?

switch ($_GET["aged"]) {
case 1:
$aged = $R1;
break;
case 2:
$aged = $R2;
break;
case 3:
$aged = $R3;
break;
case 4:
$aged = $R4;
break;
case 5:
$aged = $R5;
break;
case 6:
$aged = $R6;
break;
default:
$aged = "Please enter a valid rotation number for your aged care rotation"
}

switch ($_GET["spec"]) {
case 1:
$spec = $R1;
break;
case 2:
$spec = $R2;
break;
case 3:
$spec= $R3;
break;
case 4:
$spec= $R4;
break;
case 5:
$spec= $R5;
break;
case 6:
$spec= $R6;
break;
default:
$spec= "Please enter a valid rotation number for your specialty rotation"
}

switch ($_GET["surg"]) {
case 1:
$surg= $R1;
break;
case 2:
$surg= $R2;
break;
case 3:
$surg= $R3;
break;
case 4:
$surg = $R4;
break;
case 5:
$surg= $R5;
break;
case 6:
$surg = $R6;
break;
default:
$surg= "Please enter a valid rotation number for your surgery rotation"
}

switch ($_GET["elec"]) {
case 1:
$elec = $R1;
break;
case 2:
$elec = $R2;
break;
case 3:
$elec = $R3;
break;
case 4:
$elec = $R4;
break;
case 5:
$elec = $R5;
break;
case 6:
$elec = $R6;
break;
default:
$elec = "Please enter a valid rotation number for your elective rotation"
}

//I still need to rephrase switch blocks as array, but making sure this works first

echo "Your hurdles are \n 
Continence\: $aged \n 
Delirium\: $aged \n
Dementia\: $aged \n 
Elective report\: $elec \n
Falls\, osteoporosis and fractures\: $aged \n
International perspectives on health\: $spec \n
Managing the complex patient\: $aged \n
Palliative care 
Women\'s health in mid life: $spec \n
Wound care\: $surg";
?>
