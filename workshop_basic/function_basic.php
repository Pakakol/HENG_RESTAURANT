<?php

echo "1. function explode<br>";

$text = "exam.jpg";

$ex = explode(".",$text);

print_r($ex); //output = Array ( [0] => exam [1] => jpg )
echo "<br>";

echo $ex[0]."<br>"; //output = exam
echo $ex[1]."<br>"; // output = jpg
echo("<br>");

echo "2. function preg_replace<br>";

$pattern = "/(?i)\b((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'\".,<>?«»“”‘’]))/";

echo $p_r_text ="hello http://ict.su.ac.th";
echo "<br>";
$new_p_r = preg_replace($pattern, '<a href="$1">$1</a>', $p_r_text);

echo $new_p_r;

echo "<br><br><br>";



echo "3. function preg_match<br>";

$p_m_text = "hello";

echo preg_match('/^hello/', $p_m_text); //output = 1
// '/^hello/' << search this word if correct will show no.1 if false show 0

echo "<br><br><br>";

echo "4. function strlen<br>";

$strlentext = "test test test";

echo strlen($strlentext); // output 14 >> count the words

echo "<br><br><br>";


echo "5. function strpos<br>";

$strpostext = "i love web";
echo strpos($strpostext,"web"); // output = 7





?>