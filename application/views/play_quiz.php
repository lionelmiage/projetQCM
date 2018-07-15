<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <title>Démarrage du QCM Java</title>


    </head>
    <body>

        <div id="titre">
            <h1>Démarrez le QCM Java</h1>
            
             <!on appelle la méthode resultdisplay du controller Questions>
            <form method="post" action="<?php echo base_url();?>index.php/Questions/resultdisplay">
            
           
            
            
            
            <?php foreach ($questions as $row) { ?>
<!on crée un tableau appelé ans_array oules choix vont etre melanger>
                <?php $ans_array = array($row->choix1, $row->choix2, $row->choix3, $row->reponse);
                shuffle($ans_array);
                ?>

                <p><?= $row->idqcm ?>.<?= $row->question ?></p>

                <!on creer des radios boutons et on affiche les chois de tableau ans-bouton  >
                <input type='radio' name="idqcm<?=$row->idqcm?>" value="<?=$ans_array[0]?>"> <?=$ans_array[0]?><br>
                <input type='radio' name="idqcm<?=$row->idqcm?>" value="<?=$ans_array[1]?>"> <?=$ans_array[1]?><br>
                <input type='radio' name="idqcm<?=$row->idqcm?>" value="<?=$ans_array[2]?>"> <?=$ans_array[2]?><br>
                <input type='radio' name="idqcm<?=$row->idqcm?>" value="<?=$ans_array[3]?>"> <?=$ans_array[3]?><br>
                <?php } ?>
                <br></br>
                
                <input type="submit" value="Valider">
        </div>
    </body>
             
</html>