<?PHP
	class commentaires{
		private  $id = null;
		private  $type = null;
		private  $titre = null;
		private  $description = null;

		
		
		public function __construct(string $type, string $titre, string $description){
			
			$this->type=$type;
			$this->titre=$titre;
			$this->description=$description;
			
		}
		
		public function getId() {
			return $this->id;
		}
		public function gettype() {
			return $this->type;
		}
		public function gettitre() {
			return $this->titre;
		}
		public function getdescription() {
			return $this->description;
		}
		

		public function settype(string $type) {
			$this->type=$type;
		}
		
		public function settitre(string $titre) {
			$this->titre=$titre;
		}
		public function setdescription(string $description) {
			$this->description=$description;
		}
		
	}
?>