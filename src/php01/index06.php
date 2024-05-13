<?php
function addnumber($score1, $score2, $score3)
{
    $addvalue = $score1 + $score2 + $score3;
if ($addvalue > 210) {
    echo "合計点は" . $addvalue . "点なので合格です";
} else {
    echo "合計点は" . $addvalue . "点なので不合格です";
}
}
echo (addnumber(80, 60, 90));
echo "<br>";

function triangle($under, $height)
{
    $ment = $under * $height / 2;
    return $ment;
}
echo triangle(10, 20) . "\n";
echo triangle(10, 20) . "\n";

echo "<br>";

/* ユーザ定義関数
関数名：text($number1, $number2)
関数の内容： $value = $number1 + $number2
return:返り値（結果） */
function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}
$total = text(2, 4);
echo $total;
echo "<br>";
function waru($number3, $number4)
{
    $val = $number3/$number4;
    return $val;
}
$warua = waru(15, 3);
echo $warua;