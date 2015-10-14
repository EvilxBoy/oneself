<?php 
/**
 * 构造函数
 */
class MyCar
{
	public $name;
	public $price;
	
	function __construct($name,$price)
	{
		$this->name = $name;
		$this->price = $price;
	}
	function __destruct()
	{
		echo '析构函数被执行！销毁对象！！！';
	}
	function drive()
	{
		echo '我在开车，爱车是:'. $this->name;
		echo "<br/>";
		echo '价格是：￥'. $this->price;
	}
	
}

//实例化，并传递参数
$mycar = new MyCar('BMW','123000');
$mycar->drive();
echo '<br/>';

unset($mycar); // 销毁该对象



?>