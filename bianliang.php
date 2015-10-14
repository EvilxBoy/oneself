<?php 
class MyClass
{
	const constvar = 'This is a const var';
	public $publicmember = 'Public Var';
	protected $protectedmember = 'protected Var';
	private $private = 'private Var';
	public function myMethod()
	{
		echo 'public function myMethod()';
		echo '<br />';
	}
		
}

$obj = new MyClass();
var_dump($obj);
echo '<br />';

echo MyClass::constvar."\n";


?>