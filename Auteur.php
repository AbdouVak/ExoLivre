<?PHP

class Auteur{

    private string $_auteurNom;
    private string $_auteurPrenom;
    private $_bibliographie;

    public function __construct(string $auteurNom ,string $auteurPrenom)
    {
        $this->_auteurNom = $auteurNom;
        $this->_auteurPrenom = $auteurPrenom;
        $this->_bibliographie = [];
    }

    public function getAuteurNom() : string{return $this->_auteurNom;}
    public function setAuteurNom(string $auteurNom){$this->_auteurNom = $auteurNom;}

    public function getAuteurPrenom() : string{return $this->_auteurPrenom;}
    public function setAuteurPrenom(string $auteurPrenom){$this->_auteurPrenom = $auteurPrenom;}


    public function __toString()
    {
        return "<h2>$this->_auteurNom $this->_auteurPrenom</h2>";
    }

    public function addBook($livre){
        $this->_bibliographie[] = $livre;
    }    

    public function afficherBibliographie(){
        echo "<h2>Livre de $this->_auteurNom $this->_auteurPrenom</h2>";
        foreach($this->_bibliographie as $livre){
            echo $livre;
        }
    }


}

?>