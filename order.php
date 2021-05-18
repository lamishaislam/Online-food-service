<?php

namespace App\Models;

class order
{
	public $first_name;

	


	public function setorder($Name)
	{
		$this->order = trim($Name);

	}

	public function getorder()
	{
		return $this->order;
	}

	public function setprice($price)
	{
		$this->price = $price;
	}

	public function getprice()
	{
		return $this->price;
	}


	public function getEmailVariables()
	{
		return [
			'full_name' => $this->getFullName(),
			'email' => $this->getEmail(),
		];
	}

}