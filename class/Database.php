<?php
 
class Database
{
	protected $db_name;
	protected $db_user;
	protected $db_pass;
	protected $db_host;
	protected $pdo;


	public function __construct ( $db_name ='Devsolution' , $db_user = 'root' , $db_pass =  '' , $db_host= 'localhost' )
	
	{
		$this->db_name=$db_name;
		$this->db_user=$db_user;
		$this->db_pass=$db_pass;
		$this->db_host=$db_host;
	}

	//create the PDO statement

	
	public function getPDO()
	{
		$pdo=New PDO("mysql:dbname=Devsolution;host=localhost","root","");
		$pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
		$this->pdo=$pdo;
		return $pdo;
		
	}

	//Get all the members of the Platform



}