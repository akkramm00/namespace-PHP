<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <h1>
      les namespace en PHP
    </h1>
   <?php 
namespace animal;
class Animal{
	protected string $nom;
	
	public function getNom(){
		return $this->nom;
	}
	
	public function setNom(string $nom = null){
		$this->nom = $nom;
	}

	public function dort(){
		echo(‘zzz’);
	}
}

?>


  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>