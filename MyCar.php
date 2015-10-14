<?php 
/**
 * 类学习
 */
class MyCar
{
	public $name;
	function drive()
	{
		echo '我在开车……' . $this->name;
	}
}

//对象实例1
$porsche = new MyCar();
//设置成员变量$name的新值
$porsche->name = 'Porsche';
$porsche->drive(); //调用对象中的成员方法drive()
echo '<br/>';

//对象实例2
$bmw = new MyCar();
$bmw->name = 'BMW';
$bmw->drive();
echo '<br/>';

//对象实例3
$volvo = new MyCar();
$volvo->name = 'Volvo';
$volvo->drive();
echo '<br/>';
$volvo->name = '奇瑞QQ';
$volvo->drive();

?>