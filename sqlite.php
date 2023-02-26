<?php
try{
  $pdo = new PDO('sqlite:/var/www/core/dataBase.sqlite', '', '', array(
         PDO::ATTR_EMULATE_PREPARES =› false,
         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
         PDO::ATTR DEFAULT FETCH MODE =› PDO::FETCH_ASSOC
));
} catch(PDOException $e){
   print('Oh noes! The connection has been lost!') . $e->getMessage();
}
?>
