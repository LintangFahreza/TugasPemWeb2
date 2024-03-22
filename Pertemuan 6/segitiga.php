<?php

$data = array(
    array('alas' => 5, 'tinggi' => 4),
    array('alas' => 7, 'tinggi' => 3),
    array('alas' => 10, 'tinggi' => 6),
    array('alas' => 8, 'tinggi' => 5),
    array('alas' => 6, 'tinggi' => 9)
);

echo "<h2>Luas Segitiga Cara 1 </h2>\n";
echo "<table border='1'>";
echo "<tr><th>Segitiga ke-</th><th>Alas</th><th>Tinggi</th><th>Luas</th></tr>";
foreach ($data as $key => $triangle) {
    $luas = 0.5 * $triangle['alas'] * $triangle['tinggi'];
    echo "<tr>";
    echo "<td>" . ($key + 1) . "</td>";
    echo "<td>" . $triangle['alas'] . "</td>";
    echo "<td>" . $triangle['tinggi'] . "</td>";
    echo "<td>" . $luas . "</td>";
    echo "</tr>";
}
echo "</table>";
