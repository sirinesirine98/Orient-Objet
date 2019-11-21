<?php
class baseDonne 
{
    private $host ='localhost' ;
    private $dbname ='Gestioncb' ;
    private $user ='root' ;
    private $pwd ='';

        public $pdo = null ;

            public function connectBD() {

                try {
                    $this->pdo = new PDO(
                        'mysql:host='.$this->host.';dbname='.$this->dbname,$this->user,$this->pwd
                    );
                    
                } 
                    catch (PDOException $e) {
                    echo $e->getMessage() ;
                    
                }

                    return $this->pdo ;

                }




}
?>