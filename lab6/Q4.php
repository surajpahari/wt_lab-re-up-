<?php
$name = array("jhon","vincent","Aman", "Bishal");
sort($name);
echo "The total no of student are:".count($name)."<br>";
echo "Names in order are:";
foreach ($name as $n) {
    echo $n;	
    echo "<br>";
}
print_r(array_slice($name, 3));
?>
