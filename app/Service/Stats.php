<?php

namespace App\Service;

class Stats
{
	public static function newOrders(): int
	{
		return rand(5,100);
	}

	public static function saleAmount(): int
	{
		return rand(100,1000);
	}

	public static function satisfactions(): int
	{
		return rand(95,100);
	}
}