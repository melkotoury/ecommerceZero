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
			//Dashboard Navbar Phrases
            'HOME_ADMIN'    =>'Home',
            'CATEGORIES'    =>'Categories',
            'ITEMS'         =>'Items',
            'MEMBERS'       =>'Members',
            'STATISTICS'    =>'Statistics',
            'LOGS'          =>'Logs',
            ''              =>'',
            ''              =>'',
            ''              =>'',
            ''              =>'',
            ''              =>'',
            ''              =>''
            
		);
	return $lang[$phrase];
}