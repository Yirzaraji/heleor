<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster|Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet"> 
    <title>Heleor radio vintage</title>
  </head>
  <body>
  
	<header> 
		<?php include('header2.php');?>
	 
	</header>

<div class="container-fluid">


	<div class="row" id="formstyle01">
		<div class="col-xl-3">
		


		</div>
		
		<div class="col-xl-3">
			<img src="../images/icon_form1.png">
			<p>EMAIL</p>
			<p></p>
			<p>Sarah@heleor.fr</p>
		

		</div>
		<div class="col-xl-3">
			<img src="../images/icon_tel.png">
			<p>TELEPHONE</p>
			<p></p>
			<p>09 78 46 83 84</p>


		</div>
		
		<div class="col-xl-3">
		


		</div>
	</div>

	<div class="row" id="formstyle02">
		<div class="col-xl-7">
		<img src="../images/contactimg.png">


		</div>
		
		<div class="col-xl-5" id="colorform1">
		<p>NOUS CONTACTER</p>
		<p>-</p>
		
		 <form id="contact" method="post" action="traitement_formulaire.php">
    	<fieldset><legend>Vos coordonnées</legend>
    		<p><label for="nom">Nom :</label><input type="text" id="nom" name="nom" /></p>
    		<p><label for="email">Email :</label><input type="text" id="email" name="email" /></p>
    	</fieldset>
     
    	<fieldset><legend>Votre message :</legend>
    		<p><label for="objet">Objet :</label><input type="text" id="objet" name="objet" /></p>
    		<p><label for="message">Message :</label><textarea id="message" name="message" cols="30" rows="8"></textarea></p>
    	</fieldset>
     
    	<div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
		</form>
		

		</div>
	</div>

</div>

<footer>
		<?php include('footer2.php');?>
	
</footer>

</body>

</html>










	
