<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			<p>Sarah@heleor.fr </p>
		

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
		<img id="imgradiocon" src="../images/contactimg.png">


		</div>
		
		<div class="col-xl-5" id="colorform1">
		<p id="textcontact">Contactez-nous </p>
		<div class="barcontact"></div>
		<div class="centercont">
		 <form class="centercont" id="contact" method="post" action="traitement_formulaire.php">
    	
    		<p class="centercontself"><img src="../images/iconeuser.png" class="iconuser" id="mailcon"><label for="nom"></label><input  type="text" class="formcon" id="nom" name="nom"  placeholder="Nom"  /></p>
    		<p class="centercontself"><img src="../images/iconemail.png" class="iconuser" id="mailcon"><label for="email"></label><input type="text" class="formcon" id="email"  name="email" placeholder="Email" /></p>
    	</fieldset>
     
		
		<div class="centercont">
    		<p class="centercontself"><img src="../images/iconeobjet.png" class="iconuser" id="objetcon"><label for="objet"></label><input type="text" class="formcon" id="objet" name="objet" placeholder="Objet" /></p>
    		<p class="centercontself"><img src="../images/iconestylo.png" class="iconuser" id="stylocon"><label for="message"></label><textarea type="text" class="formcon" id="message"  name="message" " cols="30" rows="8" placeholder="Ecrivez votre message"></textarea></p>
</div>
		</fieldset>
     
    	<div style="text-align:center;" class="centercontself"><input type="submit" name="envoi" value="Envoyer" class="boutoncon" /></div>
		</form>
		
</div>
		</div>
	</div>

</div>

<footer>
		<?php include('footer3.php');?>
	
</footer>

</body>

</html>










	
