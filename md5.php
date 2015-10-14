<?php 
$val = "admin@689";
echo "明文密码：". $val . "<br />"; 
$hash_val = md5($val);
echo "密文密码：". $hash_val . "<br />";
?>

<?php
$arry = mcrypt_list_algorithms();
while (list($key,$value)=each($arry)) {
	echo "<br />".strtoupper($value);
}
?>
<br/>
<?php
$arrlist = mcrypt_list_modes();
while (list($key,$value)=each($arrlist)) {
	echo "<br />".strtoupper($value);
}
?>