<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des élèves qui sont présents dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php
          // TODO Display the students here, each student inside a new <li> element
       foreach ($students as $student) {
           echo $student . "<br>";
       }
       ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day" id="day"><?php
           $days = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31];
           foreach ($days as $day) {
               echo "<option>$day</option>";
           }
           // TODO list of day ?>
       </select>
       <label for="month">Month</label>
       <select  name="month" id="month"><?php
           $months = [1,2,3,4,5,6,7,8,9,10,11,12];
           foreach ($months as $month) {
               echo "<option>$month</option>";
           }
           // TODO list of month ?>
       </select>
       <label for="year">Year</label>
       <select  name="year" id="year"><?php
           $years = [2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021,2022];
           foreach ($years as $year) {
               echo "<option>$year</option>";
           }
           // TODO list of year ?>
       </select>
     </form>
     <hr>
     <!-- TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
    <?php
    $sexe = "http://localhost:8000/html/php-html.php?sexe=fille";
    if (filter_var($sexe, FILTER_VALIDATE_URL) === true) {
        echo "<p>Je suis une fille</p>";
    }
    else {
        echo "<p>Je ne suis pas une fille</p>";
    }
    ?>

     <!-- TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->
    <?php
    $sexe = "http://localhost:8000/html/php-html.php?sexe=garcon";
    if (filter_var($sexe, FILTER_VALIDATE_URL) === true) {
        echo "<p>Je suis un garçon</p>";
    }
    else {
        echo "<p>Je ne suis pas un garçon</p>";
    }
    ?>

     <!-- TODO Instruction : Afficher ce bloc dans les autres cas -->
    <?php
    $sexe = $_GET['sexe'] ?? "aucun";
    if ($sexe) {
        echo "<p>Je suis indéfini</p>";
    }
    else {
        echo "<p>J'ai un sexe !</p>";
    }
    ?>


  </body>
</html>
