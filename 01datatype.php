<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cours php</title>
</head>
<body>
    <h1> les types de donnees en php </h1>
    
    
    <a href="index.php"> cours-php-bts 2025 </a>
    <br> <br>
    
    <a href="01datatype.php">01- les types de donnees en php</a> 
     <br> <br>
     <a href="operations arithmetiques">les operations arithmetiques</a>;

    <?php
    // les type de donnees en php
  // les entiers
 

    // les entiers
$nbr1 = 12;

echo"<pre>";
echo(var_dump($nbr1));
echo"</pre>";

// b.

$prix = 19.99;

$nbr1 = 12;


$nbr2 =12.5;
echo"</pre>";






// d.
$disponible = true;

echo"<pre>";
echo(var_dump($disponible));
echo"<pre>";

// 1.
// a.
$colors = ["green", "yellow","red" ];

echo "<pre>";

echo(var_dump( $colors));
echo"<pre>";

// tableau associatif
$person=[
    "name"=> "myra",
    "date"=> 10,
    "admin"=> true

];

echo "<pre>";
echo(var_dump($person));

echo "<pre>";


    ?>
</body>
</html>