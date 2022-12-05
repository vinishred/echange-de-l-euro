<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
    $euro = 200;
    $euroInDollar = 1.08 * $euro;
    $euroInYen = 120.34 * $euro;
    $bitcoin = 0.00016 * $euro;
    echo $euro. ' euros = '.$euroInDollar. ' dollars, ' .$euroInYen. ' yens et ' .$bitcoin. 'bitcoins.' ;
    ?> 
  <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>