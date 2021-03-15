<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      $message1 = "0@sn9sirppa@#?ia'jgtvryko1";
      $message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
      $message3 = "aopi?sgnirts@#?sedhtg+p9l!";
      $message = $message1;
      $keyNumber = strlen($message)/2;
      $subChain = substr($message, 5, $keyNumber);
      $subChain = str_replace("@#?", ' ', $subChain);
      echo strrev($subChain);
    ?> 
  </body>
</html>
