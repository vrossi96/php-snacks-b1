<?php
//# SNACK 1
// |Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

$user_name = $_GET['name'];
$user_mail = $_GET['mail'];
$user_age = $_GET['age'];
$user_input_s1 = 'Accesso negato';
if (strlen($user_name) > 3 && strpos($user_mail, '@') && strpos($user_mail, '.')) {
   $user_input_s1 = 'Accesso riuscito';
};


//# SNACK 2
// |Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
//# Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

$posts = [
   '10/01/2019' => [
      [
         'title' => 'Post 1',
         'author' => 'Michele Papagni',
         'text' => 'Testo post 1'
      ],
      [
         'title' => 'Post 2',
         'author' => 'Michele Papagni',
         'text' => 'Testo post 2'
      ],
   ],
   '10/02/2019' => [
      [
         'title' => 'Post 3',
         'author' => 'Michele Papagni',
         'text' => 'Testo post 3'
      ]
   ],
   '15/05/2019' => [
      [
         'title' => 'Post 4',
         'author' => 'Michele Papagni',
         'text' => 'Testo post 4'
      ],
      [
         'title' => 'Post 5',
         'author' => 'Michele Papagni',
         'text' => 'Testo post 5'
      ],
      [
         'title' => 'Post 6',
         'author' => 'Michele Papagni',
         'text' => 'Testo post 6'
      ]
   ],
];
$date_posts = array_keys($posts);
var_dump(array_keys($posts));
var_dump($posts[$date_posts[2]][0]['text']);


//# SNACK 3
// |Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.

// CONTROLLO in un array
//* in_array(valore, array);
// AGGIUNGO in un array
//* $array[] = 'valore';

$r_arr_num = [];

while (count($r_arr_num) < 15) {
   $r_num = rand(1, 100);
   if (!in_array($r_num, $r_arr_num)) {
      $r_arr_num[] = $r_num;
   }
}
// var_dump($r_arr_num);


//# -----------------BONUS:------------------------


//# SNACK 4
// |Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi in base ai punti: ogni punto un nuovo paragrafo.

// DIVIDERE stringa in base ad un delmitatore, crea un //!ARRAY
//* explode(delimitatore, stringa);

$big_par = "Per me si va ne la città dolente, per me si va ne l'etterno dolore, per me si va tra la perduta gente. Giustizia mosse il mio alto fattore;fecemi la divina podestate,la somma sapïenza e 'l primo amore. Dinanzi a me non fuor cose createse non etterne, e io etterno duro. Lasciate ogne speranza, voi ch'intrate";

$div_big_par = explode('.', $big_par);


//# SNACK 5
// |Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

$db = [
   'teachers' => [
      [
         'name' => 'Michele',
         'lastname' => 'Papagni'
      ],
      [
         'name' => 'Fabio',
         'lastname' => 'Forghieri'
      ]
   ],
   'pm' => [
      [
         'name' => 'Roberto',
         'lastname' => 'Marazzini'
      ],
      [
         'name' => 'Federico',
         'lastname' => 'Pellegrini'
      ]
   ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP SNACKS B1</title>
   <style type="text/css">
      .gray,
      .green {
         color: white;
         display: inline-block;
         padding: 25px;
      }

      .gray ul,
      .green ul {
         padding: 0;
         margin: 0;
      }

      .gray {
         border: 3px solid #515151;
         background-color: gray;
      }

      .green {
         border: 3px solid green;
         background-color: darkgreen;
      }
   </style>
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
   <!-- SNACK 2 -->
   <h1>SNACK 2</h1>
   <ul>
      <?php for ($i = 0; $i < count($date_posts); $i++) : ?>
         <li>
            <?php echo $date_posts[$i] ?>
            <ul>
               <?php for ($j = 0; $j < count($posts[$date_posts[$i]]); $j++) { ?>
                  <li>
                     <?php echo $posts[$date_posts[$i]][$j]['text'] ?>
                  </li>
               <?php } ?>
            </ul>
         </li>
      <?php endfor; ?>
   </ul>
   <!-- SNACK 3 -->
   <h1>SNACK 3</h1>
   <ol>
      <?php foreach ($r_arr_num as $value) { ?>
         <li>
            <?php echo $value ?>
         </li>
      <?php } ?>
   </ol>
   <!-- SNACK 4 -->
   <h1>SNACK 4</h1>
   <p><?php echo $big_par ?></p>
   <ul>
      <?php for ($i = 0; $i < count($div_big_par); $i++) : ?>
         <li>
            <?php echo $div_big_par[$i] ?>
         </li>
      <?php endfor; ?>
   </ul>
   <!-- SNACK 5 -->
   <h1>SNACK 5</h1>
   <div class="gray">
      <ul>
         <?php foreach ($db['teachers'] as $value) { ?>
            <li>
               <?php echo $value['name'] . ' ' . $value['lastname'] ?>
            </li>
         <?php } ?>
      </ul>
   </div>
   <div class="green">
      <ul>
         <?php foreach ($db['pm'] as $value) { ?>
            <li>
               <?php echo $value['name'] . ' ' . $value['lastname'] ?>
            </li>
         <?php } ?>
      </ul>
   </div>
</body>

</html>