<?
$dlugosc_UserID ="6";

      if($dlugosc_UserID < 3 || $dlugosc_UserID > 6) return "";
      $dozwolone_znaki2 = "1234567890";
      $UserID = "A";
      $generowanie = strlen($dozwolone_znaki2) - 1;
      for($i = 0; $i < $dlugosc_UserID; $i++){
             $rand = rand(0, $generowanie);
             $UserID .= $dozwolone_znaki2[$rand];
      }
		echo $UserID."<br>";		
			$select = mysqli_query($mysqli, "SELECT `UserID` FROM `Users` WHERE `UserID` = '".$UserID."'") or exit(mysqli_error($mysqli));
		if(mysqli_num_rows($select)) {
    		echo $UserID." już istnieje.<br />"; 
		}
		
		while ($liczba_tych_samych_id!=0){
  Generuj_id();
}
?>