<!DOCTYPE html>
<?php 
$viewer = getenv('HTTP_USER_AGENT');
$browser = 'undefined';

if (preg_match( '/Chrome/i', $viewer)) {
  $browser = 'Chrome';  
} elseif (preg_match( '/Mozilla/i', $viewer)) {
  $browser = 'Mozilla';
} else {
  $browser = 'Other';
}

?>

<html>
  <head>
    <?php 
      if ($browser === 'Chrome') {
        echo '<link rel="stylesheet" href="chrome.css">';
      } elseif ($browser === 'Mozilla') {
        echo '<link rel="stylesheet" href="mozilla.css">';
      } else {
        echo '<link rel="stylesheet" href="other.css">';
      }
    ?>
  </head>
  <body>
    <h1>Hello World</h1>
  </body>
</html>