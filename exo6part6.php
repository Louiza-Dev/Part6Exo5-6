<?php
// if (isset($_POST['civilité']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0){
  $cvl = $_POST['civilité'];
  $nm = $_POST['nom'];
  $prnm = $_POST['prenom'];
  $fch = $_FILES['fichier'];    //htmlspecialchars()
  $fich = $fch['name'];
  $rej = "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/";
  // $result = move_uploaded_file($fch["tmp_name"],$fich);
  $extFich = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);
  $extAutr = array('pdf');
  if (in_array($extFich, $extAutr)){ // move_uploaded_file($fich['tmp_name'], 'uploads/' . basename($fich['name']));
      echo 'Fichier: '. $fich.'<br>';
  }else {
    echo 'Veuillez introduire le bon fichier !! '. '<br>';
  }
  if (!empty($nm) && !empty($prnm) && !empty($cvl)){
    if(preg_match($rej , $nm) &&  preg_match($rej , $prnm)){
      echo 'Civilité: '.$cvl.'<br>';
      echo 'Nom: '.$nm.'<br>';
      echo 'Prenom: '.$prnm.'<br>';
    } else {
      echo 'Veuillez verifiez votre saisie !!';
    }
  } else {
    echo 'Veuillez remplir les champs !!';
  }
// }
?>
