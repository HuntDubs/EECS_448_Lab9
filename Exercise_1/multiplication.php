<?php
function mult($x, $y) {
$z = $x * $y;
return $z;
}

echo "<table border='1'>";
  for ($x=1; $x<=100; $x++){
    echo "<tr>";
    for($y=1; $y<=100; $y++){
      echo "<td><b>" . mult($x,$y) . "</td>";
    }
    echo "</tr>";
  }
echo "<table>";

?>
