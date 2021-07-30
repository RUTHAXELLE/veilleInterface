 <?php

   function getDatabaseConnexion(){
        try {
            $user = "root";
            $pass = "";
            $pdo = new PDO('mysql:host=localhost;dbname=etudiantsimplon', $user, $pass);
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
            
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
   }  

   function getAllUsers(){
        $con = getDatabaseConnexion();
        $requete = 'SELECT * FROM repertoire';
        $rows = $con->query($requete);
        return $rows;
   }  

   function readUser($id){
        $con = getDatabaseConnexion();
        $requete = "SELECT * FROM repertoire where id = '$id' ";
        $smt = $con->query($requete); 
        $row = $smt->fetchAll();
        if (!empty($row)) {
            return $row[0];
        }
   }  

   function createUser($nom, $prenom, $age, $adresse_email){
    try{
        $con = getDatabaseConnexion();
        $sql = "INSERT  INTO repertoire (nom, prenom, age, adresse_email)
                VALUES ('$nom', '$prenom', '$age', '$adresse_email')";
         $con->exec($sql);       
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

}    

     function updateUser($id, $nom, $prenom, $age, $adress_email){
        try{
            $con = getDatabaseConnexion();
            $requete = "UPDATE repertoire set 
                        nom = '$nom',
                        prenom = '$prenom',
                        age = '$age',
                        adresse_email = '$adresse_email' 
                        where id = '$id' ";
            $stmt = $con->query($requete);
        }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }
    }

   function deleteUser($id){
       try{
          $con = getDatabaseConnexion();
          $requete = "DELETE FROM repertoire where id = '$id' ";
          $stmt = $con->query($requete);
        }
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
       }
       
   } 

 function getNewUser() {
        $user['id'] = "";
        $user['nom'] = "";
        $user['prenom'] = "";
        $user['age'] = "";
        $user['adresse_email'] = "";
        
    }
 ?>