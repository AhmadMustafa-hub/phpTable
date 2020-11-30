<?php
$i=1;
$style='background-color:gray';
echo "<table border='3' width='100%' height='50%' style='text-align:center;' >";
echo "<tr style=$style><td>Even</td><td>Odd</td><td>*5</td><td>*10</td></tr>";
echo "<tr>";
while($i<=100){
    if($i%2==0){
    echo "<td>".(($i/2)*5)."</td>";
    echo"<td>".(($i/2)*10)."</td>";
    }
    echo "</tr><tr>";
    if($i%2!=0){
        echo "<td>".($i+1)."</td>";
        echo "<td>".$i."</td>";
    }
    $i++;
}
echo "</tr>";
    echo "</table>";
?>
