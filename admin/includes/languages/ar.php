<?php
/**
 * language function
 *
 * @return String
 * @author melkotoury
 * @param [string] $phrase [Pass the key of the lang array which will correspond with a value ]
 **/

function lang($phrase){
	static $lang=array(
			'MESSAGE'=>'مرحبا',
			'ADMIN'=>'ادمن'

		);
	return $lang[$phrase];
}