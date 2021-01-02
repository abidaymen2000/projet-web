<?php 
include "../config.php";

class User
{
	private $id;
    private $mdp;
	private $photo;
    public $conn;	
	private $last_name;
	private $first_name ;
	private $user_email ;
	private $sexe;
	private $tel ;
	private $date ;
	public function __construct($user_email,$conn)
	{
		$this->user_email=$user_email;
		
		$c=new config();
		$this->conn=$c->getConnexion();
		
	}
	function getnom()
	{
		return $this->last_name ;
	}
	function gettel()
	{
		return $this->tel ;
	}
	function getprenom()
	{
		return $this->first_name ;
	}
	function getemail()
	{
		return $this->user_email ;
	}
	function getadresse()
	{
		return $this->date;
	}
    function getmdp()
	{
		return $this->mdp;
		
	}
	 function getdate()
	{
		return $this->date;
		
	}
		public function setnom($last_name)
	{
		$this->last_name=$last_name ;
	}
		public function setadresse($adresse)
	{
		$this->adresse=$adresse ;
	}
		public function settel($tel)
	{
		$this->tel=$tel ;
	}
		public function setprenom($first_name)
	{
		$this->first_name=$first_name;
	}
		public function setemail($user_email)
	{
		$this->user_email=$user_email ;
	}
	public function setmdp($mdp)
	{
		$this->mdp=$mdp ;
	}
		public function setdate($date)
	{
		$this->date=$date ;
	}
	public function Logedin($conn,$user_email)
	{
		$req="select * from formulaire where user_email='$user_email'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}
	
	

	
}


	?>