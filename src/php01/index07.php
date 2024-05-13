<?php
/* allayは複数の値を1つの変数に配列（格納）する関数 */
$people = array("Taro", "Jiro", "Saburo");
/* var_dump関数は、与えられた変数の値を詳細に出力 */
var_dump($people);
echo "<br>";

$people = [
    ["Taro", 25, "men"],
    ["Jiro", 20, "men"],
    ["hanako", 16, "women"]
];
foreach ($people as $person) {
    echo $person[0] . "(" . $person[1] . "歳" . $person[2] . ")" . "<br>";
}