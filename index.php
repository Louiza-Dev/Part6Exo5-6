<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Partie6 - Exo5-6</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
      <div class="row">
         <h1 class="col-12 text-center border border-dark">Partie6 - Exo5-6</h1>
<!-- EXoooooooooooooo555555555555555555555555555555555 -->
         <div class="col-12 col-md-4 text-center border border-dark">
            <h2>Exo5</h2>
            <p>Sélectionner un fichier</p>
                <form method="post" action="index.php" enctype="multipart/form-data">
                  <label for="civilité">Choisissez votre civilité:</label>
                  <!-- <input type="text" name="civilité"> -->
                  <select name="civilité" id="civilité">
                    <option value="Mme">Mme</option>
                    <option value="Mlle">Mlle</option>
                    <option value="M.">M.</option>
                  </select>
                  <label for="nomm">Votre Nom svp:</label>
                  <input type="text" name="nom" id="nomm">
                  <label for="pree">Votre Prenom:</label>
                  <input type="text" name="prenom" id="pree">
                  <!-- <label for="fich">Votre Fichier:</label> -->
                  <input type="file" name="fichier">
                  <input type="submit" value="Envoyez">
                 </form>
                <?php
                if (isset($_POST['civilité']) && isset($_POST['nom']) && isset($_POST['prenom'])){// && isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0){
                  $cvl = $_POST['civilité'];
                  $nm = $_POST['nom'];
                  $prnm = $_POST['prenom'];
                  // $fch = $_FILES['fichier'];    //htmlspecialchars()
                  // $fich = $fch['name'];
                  // $result = move_uploaded_file($fch["tmp_name"],$fich);
                  $rej = "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/";

                  if (!empty($nm) && !empty($prnm) && !empty($_FILES['fichier']['name']) && !empty($cvl)){
                    if(preg_match($rej , $nm) &&  preg_match($rej , $prnm)){
                      echo 'Civilité: '.$cvl.'<br>';
                      echo 'Nom: '.$nm.'<br>';
                      echo 'Prenom: '.$prnm.'<br>';
                      echo 'Fichier: '. $_FILES['fichier']['name'];
                      ?>
                      <!-- <p><img src="JackIchan-Desert.jpg" alt="" style="width:15vw;"></p> -->
                      <?php
                    } else {
                      echo 'Veuillez verifiez votre saisie !!';
                    }
                  } else {
                    echo 'Veuillez remplir les champs !!';
                  }
                }
                ?>
                <?php
                  // if(isset($_FILES['MonFichier']))
                  // {
                  // //Enregistrement et renommage du fichier
                  // $result=move_uploaded_file($_FILES["MonFichier"]
                  // ["tmp_name"],"imagephp.gif");
                  // if($result==TRUE)
                  // {echo "<hr /><big>Le transfert est réalisé !</big>";}
                  // else
                  // {echo "<hr /> Erreur de transfert"}
                  // }
                ?>
         </div>
         <div class="col-12 offset-4 col-md-4 text-center border border-dark">
            <h2>Exo6</h2>
            <p>Sélectionner un fichier</p>
                <form method="post" action="exo6part6.php" enctype="multipart/form-data">
                  <label for="civilité">Choisissez votre civilité:</label>
                  <!-- <input type="text" name="civilité"> -->
                  <select name="civilité" id="civilité">
                    <option value="Mme">Mme</option>
                    <option value="Mlle">Mlle</option>
                    <option value="M.">M.</option>
                  </select>
                  <label for="nomm">Votre Nom svp:</label>
                  <input type="text" name="nom" id="nomm">
                  <label for="pree">Votre Prenom:</label>
                  <input type="text" name="prenom" id="pree">
                  <!-- <label for="fich">Votre Fichier:</label> -->
                  <input type="file" name="fichier" id="fich">
                  <input type="submit" value="Envoyez">
                </form>

         </div>

      </div>
   </div>
</body>
</html>
