<?php 
$a = 12;
$b = 8;
echo "总和：",$a + $b++;
echo "<br />";
echo "b的变量值：".$b;
echo "<br>a变量值：".--$a;

echo "<br>";
echo "<br>";
$grade = 80;
$result = ($grade>=60?"及格":"不及格");
printf("成绩：%d <br/>",$grade);
printf("结论：%s <br/>",$result);
echo "<br>";
echo "<br>";

$var = 2.25;
#$var = (int)$var;
settype($var,'int');
echo $var;
echo "<br>";
echo "<br>";

var_dump($GLOBALS);
echo "<br>";
echo "<br>";

while(list($var,$value) = each($_SERVER)) {
	echo "$var => $value <br />";
}
echo "<br>";
echo "<br>";

$headers = getallheaders();
foreach ($headers as $name => $content) {
	echo "headers[$name] = $content<br>\n";
}
 
?>