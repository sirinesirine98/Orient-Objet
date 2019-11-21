<?php
    require 'dbconnect.class.php' ;

    class client
    {
        private $cnx ;
        public function __construct()
        { 
            $db = new baseDonne ;
            $this->cnx =$db->connectBD();
        }

            public function ReadAllClients()
            {
                try {
                    $req= 'SELECT * FROM client' ;
                    $result = $this->cnx->prepare($req) ; 
                    $result->execute() ;

                    return $result ;

                } catch (PDOException $e) {
                    echo $e->getMessage() ;
                }
            }
			
				public function createclient($Firstname,$Lastname,$email,$tel)
				try{
					$sql="INSERT INTO client (Id,Firstname,Lastname,Email,Phone)
					VALUES (null,:clt_nom,:clt_prenom,:clt_mail,:clt_phone)";
					$result $this->cnx->prepare($sql) ;
					$result->binparam(":clt_nom",$Firstname);
					$result->binparam(":clt_prenom",$Lastname);
					$result->binparam(":clt_mail",$Email);
					$result->binparam(":clt_phone",$Phone);
					$result->execute();
					return $result ;
				}
				catch (PDOException $ex){
				echo $ex->getMessage();}
	}
		public function updateclient($id,$Firstname,$Lastname,$email,$tel)
		{
			try{
					$sqll="UPDATE client 
					SET 
					Firstname=:clt_nom ,
					Lastname=:clt_prenom ,
					email=:clt_mail ,
					tel=:clt_phone 
					WHERE
					 id =:clt_Id ;"
					$result $this->cnx->prepare($sqll) ;
					$result->binparam(":clt_id",$Id);
					$result->binparam(":clt_nom",$Firstname);
					$result->binparam(":clt_prenom",$Lastname);
					$result->binparam(":clt_mail",$Email);
					$result->binparam(":clt_phone",$Phone);
					$result->execute();
					return $result ;}
					catch{
						(PDOException $execution ) {
							echo $execution->getMessage() ;
						}
					}
			
		}
					function deletecleint($id)
					{
						try{
					$sql2="DELETE FROM students WHERE id=:id"
					$result $this->cnx->prepare($sql2) ;
					$result->binparam(":clt_id",$Id);
					
					$result->execute();
					return $result ;}
					catch
					{
						(PDOException $execution ) {
							echo $execution->getMessage() ;
						}
					}
						
						
					}
	}
?>