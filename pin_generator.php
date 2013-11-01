<?php

/*
Pin generator 

 * Version: 1.0.0
 * Date: 01-11-2013
 * Onkesh Upadhyay (omi2991@gmail.com)
 * GPL v2
 */
 
 
class pingen
	{ 
	Private static $seed = 0;
	public static function seedgen($s=0)
		{
			self::$seed=abs(intval($s))%999999+1;
        	self::numgen();   

		}
		
	public static function numgen($min = 0, $max= 99999)
		{
			if (self::$seed==0)
			{
			self::seedgen(mt_rand());
			}
        self::$seed=(self::$seed*100)%2329779;
		return self::$seed %($max - $min +1);			
		}	
	}
	
	
 pingen::seedgen(12);
 for ($i=0; $i<=10;$i++)
	 {
	echo pingen::numgen(1,123).'<br/>';
	 }	


?>
