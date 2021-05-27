<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "root", "", "bait2e_g1_store");
		return $this->con;
	}
}

?>