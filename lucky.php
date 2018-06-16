<?php

echo "<font face='verdana'>";
echo "<font size=6>Your lucky numbers are:</font>";
echo "<font size=5>";
echo "<pre>";
$x = 0;
$numbers[0] = 0;
while (count($numbers) < 6) {
$randomn = rand(1, 49);
while(in_array($randomn, $numbers)) {
$randomn = rand(1, 49);

}
$numbers[$x] = $randomn;
$x++;
echo  $randomn . " &nbsp;&nbsp;&nbsp; "  ;
}

echo "</pre>";
echo "</font>";

?>
