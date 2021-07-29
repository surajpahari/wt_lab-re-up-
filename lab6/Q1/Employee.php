<?php
class Employee
{
	public $name;//lowercamel case for two words
	public $adress;
	public function __construct($name, $adress)
	{  
       $this->adress = $adress;
       $this->name = $name;
	}
}


?>