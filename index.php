<?php
/* Snack 1
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
Snack 2
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.

BONUS:
Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi in base ai punti: ogni punto un nuovo paragrafo.
Snack 5
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. 
*/

//# SNACK 1
$user_name = $_GET['name'];
$user_mail = $_GET['mail'];
$user_age = $_GET['age'];
$user_input_s1 = 'Accesso negato';
if (strlen($user_name) > 3 && strpos($user_mail, '@') && strpos($user_mail, '.')) {
   $user_input_s1 = 'Accesso riuscito';
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP SNACKS B1</title>
</head>

<body>
   <!-- SNACK 1 -->
   <h1>SNACK 1</h1>
   <form action="index.php" method="GET">
      <input name="name" type="text" placeholder="Nome">
      <input name="mail" type="text" placeholder="Email">
      <input name="age" type="number" placeholder="Età">
      <button type="submit">Invia</button>
   </form>
   <h1><?php echo $user_input_s1 ?></h1>
</body>

</html>