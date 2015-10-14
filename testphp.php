<html>
<?php 
$birds = array('鹦鹉','麻雀','孔雀','天鹅');
$limit = count($birds);
for($i = 0;$i < $limit;$i++)
{
	printf("<p>(%d) %s.</p>\n",$i,$birds[$i]);
}
?>

<body>
<form name="input" action="" method="get">
姓名：<input type="text" id="name" name="name" /><br />
密码：<input type="password" id="pwd" name="pwd" /><br />
性别：<br />
<input type="radio" value="male" name="gender" />男<br />
<input type="radio" value="female" name="gender" />女<br />
您的爱好：<br />
<input type="checkbox" name="dog" />我喜欢狗！<br />
<input type="checkbox" name="cat" />我喜欢猫！<br />
<input type="checkbox" name="bird" />我喜欢鸟！<br />
喜欢的汽车：<br />
<select name="car">
	<option value="ford">福特</option>
	<option value="volkswagen">大众</option>
	<option value="bmw">宝马</option>
	<option value="none" selected="selected">未选择</option>
</select>
<br/><br/>
<input type="submit" value="提交" />
<input type="reset" value="清除" />
</form>

<p>动态生成一组单选按钮</p>
<?php

function generate_radio_group($name,$options=array(),$default="")
{
	$name = htmlentities($name);
	foreach ($options as $key => $lable) {
		$value = htmlentities($value);
		$html .= "<input type=\"radio\" ";
		if ($value == $default) {
			$html .= "checked";
		}
		$html .= "name=\"$name\" value=\"$value\">";
		$html .= $lable . "<br>";
	}
	return($html);
}

$options = array("010" => "北京","020" => "上海","030" => "大连","0411" => "沈阳");
$default = "010";
$html = generate_radio_group("city_id",$options,$default);
echo $html;

?>

</body>



</html>