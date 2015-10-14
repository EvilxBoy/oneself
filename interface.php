<?php
//接口1，动物
interface Animal
{
	function eat($food);
} 
//接口2，哺乳动物
interface Mammal
{
	function Breastfeeding($food);
	function checkGender($gender);
}


/**
 * //实现两个接口的类Dog
 */
class Dog implements aAnimal,Mammal
{
	public $gender = 'male';
	//具体实现两个接口的方法
	//实现Animal接口类中得成员方法e
	function eat($food)
	{
		if ($food == 'cookie') {
			echo '味道还不错哦！';
		} else {
			echo '出了饼干，其他东东都不爱！';
		}
		
	}
	
	//抽象类Mammal的两个成员
	function Breastfeeding($food)
	{
		if ($food != 'cookie') {
			echo '我不想吃别的！！！';
		} else {
			echo '强烈提倡母乳喂养！';
		}
		
	}
	
	function checkGender($gender)
	{
		if ($this->gender == $gender) {
			echo '我是个男生哦！';
		} else {
			echo '我是一个女生哦！';
		}
		
	}
}

//新的dog对象阿拉斯加狗大帅
$dashuai = new Dog();
$dashuai->eat("cookie");
$dashuai->checkGender("male");
$dashuai->Breastfeeding("cookie");

?>