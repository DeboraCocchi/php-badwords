<?php 
$text=$_POST['paragrafo'];
$secret_word=$_POST['parola'];
$word_replace=str_replace($secret_word, '***' , $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    body{
      font-family:'Tahoma', 'Geneva', sans-serif;
    }
    .pink{
      background-color:pink;
      width:500px;
      height:300px;
      padding:20px;
    }

    .blu{
      background-color:lightblue;
      width:500px;
      height:300px;
      padding:20px;
      margin-top:20px;
    }
  </style>
</head>
<body>
  <div class="pink">
    <h2>Testo senza censure</h2>
    <h3>Il tuo testo:</h3>
    <p><?php echo $text; ?></p>
    <p>Contiene <?php echo strlen($text); ?> caratteri</p>
    <h3>La parola che hai scelto:</h3>
    <p><?php echo $secret_word; ?></p>
  </div>

  <div class="blu">
  <h2>Testo con censure</h2>
    <h3>Il tuo testo:</h3>
    <p><?php echo $word_replace; ?></p>
    <p>Contiene <?php echo strlen($text); ?> caratteri</p>
    <h3>La parola che hai scelto:</h3>
    <p><?php echo $secret_word; ?></p>
  </div>
  
</body>
</html>