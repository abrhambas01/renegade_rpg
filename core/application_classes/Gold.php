<?php	
/**
 * Gold .. 
 */
class Gold
{
	public $current_gold ; 
    public $additional_gold ; 
    
    public function __construct($current_gold)
    {
    	$this->current_gold = $current_gold;
    }

    public function user(){
    	$this->logout(); 
    }	

    public function logout(){
    	
    }

}