<?php

namespace RefactoringGuru\Singleton\Conceptual;


class DatabaseConnection
{
	protected static $connection = false;
	
	private  function __construct()
	{
	   echo "New Database Insrance is created";
	}
    public static function connect(){
		if(!self::$connection){
		$con = new \PDO("http://localhost:8081/phpmyadmin/index.php?route=/database/structure&server=1&db=software",'root','');
         self::$connection=$con;
		}
		 return self::$connection;	
	
	
	}

    
}
    
    var_dump( DatabaseConnection::connect());

    
