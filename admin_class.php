<?php
session_start();
ini_set('display_errors', 1);
Class Action {
	private $db;

	public function __construct() {
		ob_start();
   	include 'DB.php';
    
    $this->db = $db;
	}
	function __destruct() {
	    $this->db->close();
	    ob_end_flush();
	}
	public function designation(){
		extract($_POST['variable']);
		$INsert=$this->db->prepare("INSERT INTO degisnation (Degisnation,Discription) VALUES(:Degisnation,:Discription)");
		$INsert->bindparam("Degisnation",$_POST['designation']);
		$INsert->bindparam("Discription",$_POST['description']);
		$INsert->execute();
	}

	}