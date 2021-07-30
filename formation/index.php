<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>etudiant simplon repertoire</title>
    </head>

    <body>
    
    <?php
        include 'mesFonctionsSQL.php' ;
        include 'mesFonctionTable.php' ;

        $headers = getHeaderTable();
        $users = getAllUsers();
        afficherTableau($users, $headers);
    ?>

    <a href="formulaireEtudiants.php?id=0" >Creer un user</a> 
    </body>
</html>



 