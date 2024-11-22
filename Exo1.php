<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRIS</title>
</head>
<body>
   <h1>Exercices PHP</h1> <!-- test de police d'ecrtiure "h" -->
    <h2> La moyenne des 3 notes </h2>
   <form method="get">
        
        <label for="nom">Saisir ton nom</label>
        <input type="text" name="nom" placeholder="Saisir ton nom" >

        Genre:     

        Homme<input type="radio" name="genre" value="homme">
        Femme<input type="radio" name="genre" value="Femme"><br><br><!-- Choix par cochage -->
        
   
        <label for="note1"> Saisir la note 1</label><!-- titre d'un input-->
        <input type="text" name="note1" placeholder="Saisir la note 1" ><br><br> <!-- zone d'insertion -->        
        
        <label for="note2"> Saisir la note 2</label>
        <input type="text" name="note2" placeholder="Saisir la note 2" ><br><br>

        <label for="note3"> Saisir la note 3</label>
        <input type="text" name="note3" placeholder="Saisir la note 3" ><br><br>
        
        <input type="submit" name="validation" value="Valider"><!-- bouton -->


</form>
   
   
   
   
   
   <?php
       //commentaire sur une ligne 
        
       /* commentaire sur pkusieurs lignes 
        
        */
       
        

    if (isset($_GET["validation"])){// S'assurer que le bouton valider à été appuyé

        $note1 = $_GET["note1"];// récuperation d'une variable
        $note2 = $_GET["note2"];
        $note3 = $_GET["note3"];
        $nom = $_GET["nom"];
        $genre = $_GET["genre"];
        $terminaison = "";
        
        $somme = $note1 + $note2 + $note3;

        $moyenne = $somme/3;
        
        $moyenne=number_format($moyenne,2); //afficher deuc chiffres après la virgule
        
        echo "La moyenne est de : " .$moyenne."/20<br>";// afficher = echo

    
    if ($genre=="homme"){
        $genre="Mr";
        $terminaison="";
    }else{
        $genre="Mme";
        $terminaison="e";

    }

    if ($moyenne < 10 ){

        echo $genre." ".$nom." est recalé".$terminaison;// les points servent a concaténer les variables

    } else {

        echo $genre." ".$nom." est admis".$terminaison;
    }


    };




    ?>



    
</body>
</html>