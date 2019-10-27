<?php 
class Campaign
{ 
	protected $pdo ; 

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	/*User can get..*/
	public function fetch_campaigns_per_key($key)
	{
		/*get all campaigns then join them on missions*/
		$query =  'SELECT * from campaigns INNER JOIN on missions ' ; 
		$this->pdo->prepare($query);
	}

	public function fetch_all()
	{

	}


}

