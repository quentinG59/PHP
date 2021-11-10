
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <div class="container">
        <h1 class="mb-3">Calculatrice</h1>

        <form action="index.php" method="GET">
            <div>
                <label for="num1" class="label-form">
                Number 1
                </label>
                <input type="number" name="num1" id ="num1">
            </div>
            <div>
                <label for="num2" class="label-form">
                number 2
                </label>
                <input type="number" name="num2" id="num2">
            </div>
            <div class="button"><button type= "submit">Additionner</button></div>
        </form>
    </div> -->
       
       
        <?php 
//     $num1 = $_GET["num1"]; 
//      $num2 = $_GET["num2"]; 
//     $resultat= $num1 + $num2;
//     echo("le resultat est : $resultat");
            ?>  


<hr>

  <?php
    // $couleur = $_GET["couleur"];
    // $nom = $_GET["nom"]; 
    // $célébrité = $_GET["célébrité"]; 

    // echo "Les roses sont $couleur <br>";
    // echo "$nom sont bleues <br>";
    // echo "j'aime $célébrité";
?>  


 <!-- <div class="container">
        <h1 class="mb-3">LE GIGA CACA</h1>

        <form action="index.php" method="GET">
            <div>
                <label for="couleur" class="label-form">
                couleur
                </label>
                <input type="text" name="couleur" id ="couleur">
            </div>
            <div>
                <label for="nom " class="label-form">
                nom au puriel
                </label>
                <input type="text" name="nom" id="nom">
            </div>
            <div> <label for="célébrité" class="label-form">
                célébrité
                </label>
                <input type="text" name="célébrité" id ="célébrité">
            </div>
           <div  class="button"><button type= "submit">Additionner</button></div>
        </form>
    </div> -->

    
<?php
// $friends = array (
// "kevin",
// "justin",
// "colin"
// );

// echo $friends [0];
// echo "<br>";
// echo $friends [2];

// $friends [1] = "dwight";
// echo "<br>";
// echo $friends[1];

// $friends[1]= 9;
// echo $friends [1];

// $friends[4]="pamela";
// echo $friends [4]

?>


<!-- <div class="container">
<h1>Checkboxes  </h1>
<div class="form-check">
    <form action="index.php" method="post">
        <input  type="checkbox" name="fruit[]" id="apples" value="apples">
        <label for="apples" class="form-check-label">apples</label>
        </div>

        <div class="form-check">
        <input  type="checkbox" name="fruit[]" id="orange" value="orange">
        <label for="orange" class="form-check-label">orange</label>
        </div>

        <div class="form-check">
        <input  type="checkbox" name="fruit[]" id="banane" value="banane">
        <label for="banane" class="form-check-label">banane</label>
        </div>
        <button type="submit" class=btn btn-primary nt-3>Submit</button>

        
    </form>
</div> -->

<?php 
// $fruit = $_POST ["fruit"];
// echo $fruit [0];
// echo "<br>";
// echo $fruit [1];
// echo "<br>";
// echo $fruit [2];

// print_r($fruit);
?>

<!-- <div class="container p-5">
<h1 class="mb-3"> Associative arrays </h1>
<form action="index.php" method="POST">
  <div class= "mb-3">
      <input class="form-control" type="text"
      name= "student" placeholder= "Student">

</div>
<button type="submit" class="btn btn-primary mt-3"> Submit </button>
</form>
</div> -->

<?php

// $notes= array(
//   "jim" => 20,
//   "pam" => 16,
//   "oscar" => 13,
// );

// echo $notes[$_POST["student"]];

// echo $notes [$studentName];

?>

<!-- <h1>Les Fonctions</h1> -->
<?php 
// function sayhi($user, $age)
// {
// echo "hello $user, you are $age!";
// }

// sayhi("Quentin", 24);
// echo "<br>";

// function cube($num) 
// {
//     return pow($num, 3);
// }

// $cubeResult = cube(4);
// echo $cubeResult;

?>

<!-- <h1>Les conditionnelles</h1> -->
<?php  
// $IsMale = false;
// $IsTall = true;

// if  ($IsMale && $IsTall) {
//     echo "you are a tall male";
//     } elseif ($IsMale && !$IsTall) {
//         echo "you are a short mal";
//     }
//      elseif (!$IsMale && $IsTall) {
//         echo "you are not male but are tall";
//     } else {
//         echo"you are note a male";
//     }
?>

<?php  
// echo max(3, 6);
// echo "<br>";

// function getMax($num1, $num2, $num3){

//     //  if ($num1 > $num2){
//     //         echo "le plus grand chiffre est $num1";
//     //     }
//     //     elseif ($num1 < $num2){
//     //        echo "le plus grand chiffre est $num2";
//     //     }
//     //     else {
//     //        echo "Le score et identique";
//     //     }       
//     getMax(3,12);
//     if($num1 >= $num2 && $num1 >= $num3){
//         return $num1;
//     } elseif ($num2 >= $num1 && $num2 >= $num3) {
//         return $num2;
//     } else {
//         return $num3
//     }
// }
// $superior = getMax(300,90,188);
// echo $superior
?>
<!-- <h1>Calculatrice en mieux</h1>

<div>
    <form action="index.php" method="GET">
            <div>
                <label for="num1" class="label-form">
                number 1
                </label>
                <input type="number" name="num1" id ="num1">
            </div>
            <div>
                <label for="num2" class="label-form">
                number 2
                </label>
                <input type="number" name="num2" id="num2">
            </div>
            <div> 
                <label for="operation" class="label-form">
                operation 
                </label> 
            <input type="text" name="operation" id="operation">
        </div>
            <div class="button"><button type= "submit">Additionner</button></div>
        </form>
</div> -->


<!-- LES CALCULATRISE  -->


<?php

// $num1 = $_GET['num1'];
// $num2 = $_GET['num2'];
// $operation = $_GET['operation']; 
  
//     if ($operation == "+"){
//         echo $num1 + $num2; 
//     }
//     elseif ($operation == "-"){
//         echo $num1 - $num2;
//     }
//     elseif ($operation == "/"){
//   echo $num1 / $num2;
// }
//  elseif ($operation == "*"){
//         echo $num1 * $num2;
// }
// else {
//     echo "operateur invalide";
// }
// ?>


<!-- // LES SWITCH -->


<!-- <div>
    <form action="index.php" method="GET">
            <div>
                <label for="num1" class="label-form">
                note
                </label>
                <input type="number" name="note" id ="num1">
            </div> -->

            <?php 
            // $note = $_GET["note"];

            // switch($note){
            //     case "20":
            //         echo "parfais";
            //         break;
            //     case "16":
            //         echo "moyen";
            //         break;
            //     case "0":
            //         echo "tes une merde";
            //         break;
            //     default:
            //         echo "travaille modéré";
            // }
            
            
            ?>

<!-- LES BOUCLES -->
<?php 
// While

// $index = 1;
// while($index <= 5) {
//     echo "$index <br>";
//     $index++;
// }
// echo $index;

//Do While

// $index = 16;
// do {
//     echo "$index <br>";
//     $index++;
//     while ($index <= 5)
// }

?>

<?php 

// Une boucle pour 

// for ($i = 1; $i <= 5; $i++) {
//     echo "$i <br>";
// }
// (array) 
// $luckyNumbers = [
//     4,
//     8,
//     14,
//     16,
//     "du texte",
//     23,
// ];

// for ($i = 0; $i <6; $i++) {
//     echo "$luckyNumbers[$i] <br>";
// }


?>






</body>
</html>