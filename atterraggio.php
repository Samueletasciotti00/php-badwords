<?php

// Variabili per prendere testo e parola da censurare
$text = $_POST['text'];
$to_censure = $_POST['to_censure'];


// Leggere la lunghezza della variabile;
$lunghezza_tx = strlen($text);

// Censurare le parole inserite
$censured = str_replace($to_censure, '***', $text);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina atterraggio GET</title>
</head>
<body>

<!-- <h1>Testo :  <?php echo $to_censure ?>  caratteri</h1> -->
  
<h1><span style="color: red">Testo originale: </span> <?php echo $text ?> continene <?php echo $lunghezza_tx ?> </h1>
<h1><span style="color: red">Testo censurato:  </span> <?php echo htmlspecialchars($censured); ?> contiene <?php echo $lunghezza_tx; ?> caratteri</h1>
 </h1>
</body>
</html>