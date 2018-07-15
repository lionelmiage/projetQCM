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
            <!initialisation du score à 0>
            
            <?php $score = 0; ?>

            <?php $array1 = array(); ?>
            <?php $array2 = array(); ?>
            <?php $array3 = array(); ?>
            <?php $array4 = array(); ?>
            <?php $array5 = array(); ?>
            <?php $array6 = array(); ?>
            <?php $array7 = array(); ?>
            <?php $array8 = array(); ?>


            <?php foreach ($checks as $checkans) { ?>
                <?php
                array_push($array1, $checkans);
            }
            ?>



            <?php foreach ($results as $res) { ?>
                <?php
                array_push($array2, $res->reponse);
                array_push($array3, $res->idqcm);
                array_push($array4, $res->question);
                array_push($array5, $res->choix1);
                array_push($array6, $res->choix2);
                array_push($array7, $res->choix3);
                array_push($array8, $res->reponse)
                ;
            }
            ?>

            <?php for ($x=  0; $x<10; $x++) { ?>


                <!on appelle la méthode resultdisplay du controller Questions>
                <form method="post" action="<?php echo base_url(); ?>index.php/welcome/index">





                    <p><?= $array3[$x] ?>.<?= $array4[$x] ?></p>

                    <?php if ($array2[$x] != $array1[$x]) { ?>

                        <p><span style = "background-color: #FF9C9E"><?= $array1[$x] ?></span></p>    
                        <p><span style = "background-color: #ADFFB4"><?= $array2[$x] ?></span></p>

                    <?php } else { ?>
                        <p><span style = "background-color: #ADFFB4"><?= $array2[$x] ?></span></p>
                        
                        <?php $score = $score +1;?>
                        <?php }
                    }
                    ?>
                <br></br>
                
                <h1>Votre scrore :</h1>
                
                <h2><?=$score?>/10</h2>
                

                <input type="submit" value="Rejouer">
            </form>

        </div>
    </body>

</html>