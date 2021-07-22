<?php
require_once('db.php');
if ($link) {
    //FOR TTA
    $TTA = "Tanger – Tétouan – Al Hoceima";
    $sql = "SELECT Region, COUNT(*) as total
   FROM energiehydroelectrique
     where Region='$TTA' AND 'Avis MEME' LIKE '%refus%' ";
    $result = mysqli_query($link, $sql);
    $values = mysqli_fetch_assoc($result);
    $TTA = $values['total'];
    $sql = "UPDATE region_hyd_refus
       SET 
           nbr = '$TTA'
       WHERE
           nom = 'Tanger – Tétouan – Al Hoceima'";
    mysqli_query($link, $sql);
    //FOR O
    $O = "Oriental";
    $sql = "SELECT Region, COUNT(*) as total
    FROM energiehydroelectrique
    where Region='$O' AND 'Avis MEME' LIKE '%refus%' ";
    $result = mysqli_query($link, $sql);
    $values = mysqli_fetch_assoc($result);
    $O = $values['total'];
    $sql = "UPDATE region_hyd_refus
      SET 
          nbr = '$O'
      WHERE
          nom = 'Oriental'";
    mysqli_query($link, $sql);
    //FOR FM
    $FM = "Fès - Meknès";
    $sql = "SELECT Region, COUNT(*) as total
    FROM energiehydroelectrique
    where Region='$FM' AND 'Avis MEME' LIKE '%refus%' ";
    $result = mysqli_query($link, $sql);
    $values = mysqli_fetch_assoc($result);
    $FM = $values['total'];
    $sql = "UPDATE region_hyd_refus
      SET 
          nbr = '$FM'
      WHERE
          nom = 'Fès - Meknès'";
    mysqli_query($link, $sql);
    //FOR RSK
    $RSK = "Rabat-Salé-Kénitra";
    $sql = "SELECT Region, COUNT(*) as total
    FROM energiehydroelectrique
    where Region='$RSK' AND 'Avis MEME' LIKE '%refus%' ";
    $result = mysqli_query($link, $sql);
    $values = mysqli_fetch_assoc($result);
    $RSK = $values['total'];
    $sql = "UPDATE region_hyd_refus
      SET 
          nbr = '$RSK'
      WHERE
          nom = 'Rabat-Salé-Kénitra'";
    mysqli_query($link, $sql);
    //FOR BMK
    $BMK = "Béni Mellal-Khénifra";
    $sql = "SELECT Region, COUNT(*) as total
   FROM energiehydroelectrique
    where Region='$BMK' AND 'Avis MEME' LIKE '%refus%' ";
    $result = mysqli_query($link, $sql);
    $values = mysqli_fetch_assoc($result);
    $BMK = $values['total'];
    $sql = "UPDATE region_hyd_refus
      SET 
          nbr = '$BMK'
      WHERE
          nom = 'Béni Mellal-Khénifra'";
    mysqli_query($link, $sql);
    //FOR CS
    $CS = "Casablanca-Settat";
    $sql = "SELECT Region, COUNT(*) as total
    FROM energiehydroelectrique
    where Region='$CS' AND 'Avis MEME' LIKE '%refus%' ";
    $result = mysqli_query($link, $sql);
    $values = mysqli_fetch_assoc($result);
    $CS = $values['total'];
    $sql = "UPDATE region_hyd_refus
      SET 
          nbr = '$CS'
      WHERE
          nom = 'Casablanca-Settat'";
    mysqli_query($link, $sql);
    //FOR MS
    $MS = "Marrakech-Safi";
    $sql = "SELECT Region, COUNT(*) as total
    FROM energiehydroelectrique
    where Region='$MS' AND 'Avis MEME' LIKE '%refus%' ";
    $result = mysqli_query($link, $sql);
    $values = mysqli_fetch_assoc($result);
    $MS = $values['total'];
    $sql = "UPDATE region_hyd_refus
      SET 
          nbr = '$MS'
      WHERE
          nom = 'Marrakech-Safi'";
    mysqli_query($link, $sql);
    //FOR DT
    $DT = "Drâa-Tafilalet";
    $sql = "SELECT Region, COUNT(*) as total
   FROM energiehydroelectrique
   where Region='$DT' AND 'Avis MEME' LIKE '%refus%' ";
    $result = mysqli_query($link, $sql);
    $values = mysqli_fetch_assoc($result);
    $DT = $values['total'];
    $sql = "UPDATE region_hyd_refus
     SET 
         nbr = '$DT'
     WHERE
         nom = 'Drâa-Tafilalet'";
    mysqli_query($link, $sql);
    //FOR SM
    $SM = "Souss-Massa";
    $sql = "SELECT Region, COUNT(*) as total
   FROM energiehydroelectrique
   where Region='$SM' AND 'Avis MEME' LIKE '%refus%' ";
    $result = mysqli_query($link, $sql);
    $values = mysqli_fetch_assoc($result);
    $SM = $values['total'];
    $sql = "UPDATE region_hyd_refus
     SET 
         nbr = '$SM'
     WHERE
         nom = 'Souss-Massa'";
    mysqli_query($link, $sql);
    //FOR GON
    $GON = "Guelmim-Oued Noun";
    $sql = "SELECT Region, COUNT(*) as total
   FROM energiehydroelectrique
   where Region='$GON' AND 'Avis MEME' LIKE '%refus%' ";
    $result = mysqli_query($link, $sql);
    $values = mysqli_fetch_assoc($result);
    $GON = $values['total'];
    $sql = "UPDATE region_hyd_refus
     SET 
         nbr = '$GON'
     WHERE
         nom = 'Guelmim-Oued Noun'";
    mysqli_query($link, $sql);
    //FOR LSH
    $LSH = "Laâyoune-Sakia El Hamra";
    $sql = "SELECT Region, COUNT(*) as total
   FROM energiehydroelectrique
   where Region='$LSH' AND 'Avis MEME' LIKE '%refus%'";
    $result = mysqli_query($link, $sql);
    $values = mysqli_fetch_assoc($result);
    $LSH = $values['total'];
    $sql = "UPDATE region_hyd_refus
     SET 
         nbr = '$LSH'
     WHERE
         nom = 'Laâyoune-Sakia El Hamra'";
    mysqli_query($link, $sql);
    //FOR DOD
    $DOD = "Dakhla-Oued Ed Dahab";
    $sql = "SELECT Region, COUNT(*) as total
   FROM energiehydroelectrique
   where Region='$DOD' AND 'Avis MEME' LIKE '%refus%' ";
    $result = mysqli_query($link, $sql);
    $values = mysqli_fetch_assoc($result);
    $DOD = $values['total'];
    $sql = "UPDATE region_hyd_refus
     SET 
         nbr = '$DOD'
     WHERE
         nom = 'Dakhla-Oued Ed Dahab'";
    mysqli_query($link, $sql);

}


?>