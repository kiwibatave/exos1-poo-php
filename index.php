<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="jquery.js"></script>
    <title>exos poo</title>
  </head>
  <body>
    <p>
      <h1>EXO 1</h1>
      <!--créer une classe avec un attribut  -->
    <?php

      class Hello {

        public function message () {
          echo "Bonjour tout le monde";
        }
      }

      $bobo = new Hello ();
      echo $bobo->message();

      $boby = new Hello ();
      echo $boby->message();

     ?>
   </p>
   <p>
     <h1>EXO 2</h1>
     <!-- # Exercice 2
* Ecrire une classe PHP contenant la propriété **$chaine** suivante: "Bonjour Tout Le Monde, moi c'est "
* Créer la méthode **presentation** qui permet d'afficher la chaine suivi de **VotreNom**".
* **VotreNom** est un argument(paramètre) de la méthode **presentation**. -->
      <?php

        class Bambou {

          private $chaine ="Bonjour Tout Le Monde, moi c'est ";

          public function presentation($VotreNom) {
              return $this->chaine.$VotreNom;
          }
        }

        $yo = new Bambou ();
        echo $yo->presentation('Benoît');

     ?>
   </p>
   <p>
     <h1>EXO 3</h1>
     <?php

        class Phrase {

          private $chaine='Programmation orientée objet en PHP';

          public function gras() {
            echo '<b>'.$this->chaine.'</b>';
          }
          public function italique() {
             echo '<i>'.$this->chaine.'</i>';
          }
          public function souligne() {
            echo '<u>'.$this->chaine.'</u>';
          }
          public function majuscules() {
            echo strtoupper($this->chaine);
          }
        }

        $romain = new Phrase ();
        echo $romain->gras().'<br>';
        echo $romain->italique().'<br>';
        echo $romain->souligne().'<br>';
        echo $romain->majuscules().'<br>';
      ?>
   </p>
   <p>
     <h1>EXO 4</h1>
     <?php

      class Tableau {

        private $tab;

        public function __construct($tab) {
          $this->tab=$tab;
        }
        public function tri() {
          $tab2 =$this->tab;
           sort($tab2);
            return $tab2;
        }
      }

      $guillaume = new Tableau (array(11, -2, 4, 35, 0, 8, -9));
      var_dump ($guillaume->tri());







      ?>
   </p>
  </body>
</html>
