<?php 
ob_start();
include 'layout.php';
$layout = ob_get_clean();

$dir = glob($_SERVER['DOCUMENT_ROOT'].'/datas/promotions*');
$promotions = json_decode(file_get_contents(array_pop($dir)));

ob_start();
?>

<section>
	<article class="bg-red clearfix">
		<div class="imgWrapper">
			<img src="<?=$promotions->{0}->photo?>">
		</div>
		<h3>Promotion</h3>
		<p>
			<?=nl2br($promotions->{0}->description)?>
		</p>
		<ul>
			<li>Prix unitaire: <?=$promotions->{0}->unitaire?>€</li>
			<li>Prix au Kg: <?=$promotions->{0}->kg?>€</li>
		</ul>
	</article>

	<h3 class="red-title"><span>Réservation</span></h3>
	<p>
		Ce formulaire vous permet de réserver les produits parmi ceux proposés par notre gamme.
	</p>
	<p>
		Si vous ne trouver pas le produit que vous cherchez, n'hésitez pas à nous contacter via le bouton contact situé en bas de page.
	</p>

	<form action="<?=$_SERVER['REQUEST_URI']?>" method="POST" id="contactForm">
		<div>
			<a href="#" class="less">-</a> <a href="#" class="plus">+</a>

			<label for="produit1">Produit : </label>
			<input type="text" id="produit1" name="produit1">

			<label for="quantite1">Quantité : </label>
			<input type="text" id="quantite1" name="quantite1">
		</div>

		<div>
			<a href="#" class="less">-</a> <a href="#" class="plus">+</a>

			<label for="produit2">Produit : </label>
			<input type="text" id="produit2" name="produit2">

			<label for="quantite2">Quantité : </label>
			<input type="text" id="quantite2" name="quantite2">
		</div>

		<hr>

		<div class="clearfix">
			<label for="livraison">Date de livraison : </label>
			<input type="text" id="livraison" name="livraison">
			<span class="italic">Minimum 48h avant mise à disposition</span>
		</div>
		<div>
			<label for="entreprise">Entreprise :</label>
			<input type="text" id="entreprise" name="entreprise">
		</div>
		<div id="nom_prenom" class="clearfix">
			<div>
				<label for="prenom">Prénom :</label>
				<input type="text" id="prenom" name="prenom">
			</div>
			<div>
				<label for="nom">Nom :</label>
				<input type="text" id="nom" name="nom">
			</div>
		</div>
		<div>
			<label for="mail">Email :</label>
			<input type="mail" id="mail" name="mail">
		</div>
		<div>
			<label for="commentaire">Commentaire :</label>
			<textarea name="commentaire" id="commentaire"></textarea>
		</div>

		<input type="submit" value="Je réserve" class="btn">

	</form>

</section>

<section>
	<article class="bg-red clearfix">
		<div class="imgWrapper">
			<img src="<?=$promotions->{1}->photo?>">
		</div>
		<h3>Promotion</h3>
		<p>
			<?=nl2br($promotions->{1}->description)?>
		</p>
		<ul>
			<li>Prix unitaire: <?=$promotions->{1}->unitaire?>€</li>
			<li>Prix au Kg: <?=$promotions->{1}->kg?>€</li>
		</ul>
	</article>

	<h3 class="red-title"><span>Nous trouver</span></h3>

	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2653.638508945367!2d4.056248199999999!3d48.30980350000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ee986a4f72b1b3%3A0x90b619d44c56e9cd!2s5+Rue+Traversot!5e0!3m2!1sfr!2sfr!4v1401884443614" width="600" height="450" frameborder="0" style="border:0"></iframe>

	<div id="catalogue">
		<img src="/img/catalogues.png" alt="Dia - Notre catalogue">
		<a href="#">
			<p>
				<span class="titre">Téléchargez</span>
				notre dernier catalogue et profitez de très nombreuses promos exclusives.
			</p>
			<span class="btn">je télécharge</span>
		</a>
	</div>
	
</section>
<?php 
$content = ob_get_clean();
echo str_replace('{{content}}', $content, $layout);
?>