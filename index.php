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
      // Je créé ma classe
      class Hello {
      // Je lui assigne une fonction
        public function message () {
          echo "Bonjour tout le monde";
        }
      }
      // Je créé un nouvel objet lié à ma classe
      $bobo = new Hello ();
      echo $bobo->message();

     ?>
   </p>
   <p>
     <h1>EXO 2</h1>
     <!-- # Exercice 2
* Ecrire une classe PHP contenant la propriété **$chaine** suivante: "Bonjour Tout Le Monde, moi c'est "
* Créer la méthode **presentation** qui permet d'afficher la chaine suivi de **VotreNom**".
* **VotreNom** est un argument(paramètre) de la méthode **presentation**. -->
      <?php
        // Je créé ma classe
        class Bambou {
          // Je créé un attribut privé à ma classe
          private $chaine ="Bonjour Tout Le Monde, moi c'est ";
          // Je créé une fonction à ma classe
          public function presentation($VotreNom) {
              return $this->chaine.$VotreNom;
          }
          // Return = permet ici de retourner ici l'attribut de ma classe et de le lier avec ma fonction.
        }
        // Je créé un nouvel objet lié à ma classe
        $yo = new Bambou ();
        // Je lui demande ici d'écrire ma fonction avec comme variable $VotreNom 'Benoît'.
        echo $yo->presentation('Benoît');

     ?>
   </p>
   <p>
     <h1>EXO 3</h1>
     <?php
        // Je créé ma classe
        class Phrase {
          // Je créé un attribut privé à ma classe
          private $chaine='Programmation orientée objet en PHP';
          // Je créé 4 fonctions différentes à ma classe.
          // La première écrit mon attribut en gras grace aux balises HTML.
          public function gras() {
            echo '<b>'.$this->chaine.'</b>';
          }
          // La seconde écrit mon attribut en italique grace aux balises HTML.
          public function italique() {
             echo '<i>'.$this->chaine.'</i>';
          }
          // La première écrit mon attribut souligné grace aux balises HTML.
          public function souligne() {
            echo '<u>'.$this->chaine.'</u>';
          }
          // La première écrit mon attribut en majuscules grace aux balises HTML.
          public function majuscules() {
            echo strtoupper($this->chaine);
          }
        }
        // Je créé un nouvel objet lié à ma classe et je lui demande d'écrire mon attribut selon mes différents fonctions.
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
      // Je crée une classe
      class Tableau {
        // Je créé un attribut privé (ici un tableau)
        private $tab;
        // Je créé une fonction (ici __construct) qui permet à chaque nouvelle déclaration d'objet de réinitialiser un tableau.
        public function __construct($tab) {
          $this->tab=$tab;
        }
        // Je créé une seconde fonction (ici qui permet de classer par valeur du plus petit au plus grand)
        public function tri() {
          // Cette fonction créé un nouveau tableau qui remplace le second en la triant du plus petit au plus grand)
          $tab2 =$this->tab;
           sort($tab2);
            return $tab2;
        }
      }
    // Je créé un nouvel objet lié à ma classe(tableau) en lui assignant des données.
    $guillaume = new Tableau (array(11, -2, 4, 35, 0, 8, -9));
    // Je fais juste un var_dump de mon tableau($tab) pour vérifier que celui-ci a bien été trié par ma seconde fonction et affiche mon $tab2
      var_dump ($guillaume->tri());
      ?>
   </p>
   <p>
     <h1>EXO 5</h1>
     <?php
     // Je créé une classe
     class Calcul {
      // Je créé deux arguments privés
      private $argument1;
      private $argument2;

      // Je créé une fonction __construct qui me permet à chaque nouvelle déclaration d'objet de réinitiliser une opération.
      public function __construct($nbr1, $nbr2) {
        $this->argument1= $nbr1;
        $this->argument2= $nbr2;
      }
      // Je créé 4 fonctions (addition, soustraction, multiplication, division).
      public function add() {
          return $this->argument1 + $this->argument2;
      }
      //
      public function sub() {
          return $this->argument1 - $this->argument2;
      }

      public function multi() {
          return $this->argument1 * $this->argument2;
      }

      public function div() {
         return $this->argument1 / $this->argument2;
      }
     }
     // Je créé un nouvel objet à ma classe
     // Je lui donne des valeurs à mes arguments ($argument1 et argument2)
     $ben = new Calcul (10, 5);
     // J'écris chaque fonction avec un écho
     echo $ben->add().'<br>'; // add affiche 15
     echo $ben->sub().'<br>'; // sub affiche 5
     echo $ben->multi().'<br>'; // multi affiche 50
     echo $ben->div().'<br>'; // div affiche 2

    ?>
   </p>
  </body>
</html>
