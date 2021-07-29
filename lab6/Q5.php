<?php
echo"<h3> demostration of string in php</h3>";
$string="Divine Intervention";
echo "The string is:  ".$string."<br>";
echo "Reading string from index 7 :".substr($string,7)."<br>";
echo "The length of string is:".strlen("Divine Intervention")."<br>";
echo "Triming divine from the string".trim($string,"Divine")."<br>";
echo strtolower($string);
echo "<br>";
echo strtoupper($string);
?>