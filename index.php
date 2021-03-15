<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      $message1 = "0@sn9sirppa@#?ia'jgtvryko1";
      $message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
      $message3 = "aopi?sgnirts@#?sedhtg+p9l!";
      
      $keyNumber1 = strlen($message1)/2;
      $subChain1 = substr($message1, 5, $keyNumber1);
      $subChain1 = str_replace("@#?", ' ', $subChain1);
      echo strrev($subChain1)." ";

      $keyNumber2 = strlen($message2)/2;
      $subChain2 = substr($message2, 5, $keyNumber2);
      $subChain2 = str_replace("@#?", ' ', $subChain2);
      echo strrev($subChain2)." ";

      $keyNumber3 = strlen($message3)/2;
      $subChain3 = substr($message3, 5, $keyNumber3);
      $subChain3 = str_replace("@#?", ' ', $subChain3);
      echo strrev($subChain3);
      
    ?> 
  </body>
</html>
