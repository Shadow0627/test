<?
   

    $dlugosc_hasla ="10";

      if($dlugosc_hasla < 6 || $dlugosc_hasla > 11) return "";
      $dozwolone_znaki = "abcdefghijklmnoprstuwxyz";
      $dozwolone_znaki .= "ABCDEFGHIJKLMNOPRSTUWXYZ";
      $dozwolone_znaki .= "1234567890";
      $haslo = "";
      $generowanie = strlen($dozwolone_znaki) - 1;
      for($i = 0; $i < $dlugosc_hasla; $i++){
             $rand = rand(0, $generowanie);
             $haslo .= $dozwolone_znaki[$rand];
      }
      

    $dlugosc_UserID ="8";

      if($dlugosc_UserID < 3 || $dlugosc_UserID > 8) return "";
      $dozwolone_znaki2 .= "1234567890";
      $userid = "";
      $generowanie = strlen($dozwolone_znaki2) - 1;
      for($i = 0; $i < $dlugosc_UserID; $i++){
             $rand = rand(0, $generowanie);
             $UserID .= $dozwolone_znaki2[$rand];
      }
      

echo "<br>".$haslo;
echo "<br>".$UserID;
?>

