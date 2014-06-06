<?php 
$dir = glob($_SERVER['DOCUMENT_ROOT'].'/datas/promotions*');
$promotions = json_decode(file_get_contents(array_pop($dir)));
?>

<link rel="stylesheet" href="/css/admin.css">
<script type="text/javascript" src="/js/admin.js"></script>

<h2 class="red-title"><span>Mettre à jour vos promotions</span></h2>

<form action="pages/action.php" method="POST" id="admin" class="sectionsWrapper">
	
	<section>
		<h3 class="red-title"><span>Premier article</span></h3>

		<input type="hidden" name="action" value="updatePromotions">
		
		<div>
			<input type="text" name="promo[0][photo]" value="<?=$promotions->{0}->photo?>" class="block imgSrc">
			<img src="<?=$promotions->{0}->photo?>" alt="<?=$promotions->{0}->description?>">
		</div>

		<div>
			<label for="description"> Description : </label>
			<textarea name="promo[0][description]" id="description"><?=$promotions->{0}->description?></textarea>
		</div>

		<div class="twoCols clearfix">
			<div>
				<label for="description"> Prix unitaire : </label>
				<div class="input-append-text">
					<input type="text" name="promo[0][unitaire]" id="unitaire" value="<?=$promotions->{0}->unitaire?>">
					<span>€</span>
				</div>
			</div>
			
			
			<div>
				<label for="description"> Prix Kg : </label>
				<div class="input-append-text">
					<input type="text" name="promo[0][kg]" id="kg" value="<?=$promotions->{0}->kg?>">
					<span>€</span>
				</div>
			</div>
		</div>


	</section>
	<section>
		<h3 class="red-title"><span>Deuxième article</span></h3>
		
		<div>
			<input type="text" name="promo[1][photo]" value="<?=$promotions->{1}->photo?>" class="block imgSrc">
			<img src="<?=$promotions->{1}->photo?>" alt="<?=$promotions->{1}->description?>">
		</div>

		<div>
			<label for="description"> Description : </label>
			<textarea name="promo[1][description]" id="description"><?=$promotions->{1}->description?></textarea>
		</div>

		<div class="twoCols clearfix">
			<div>
				<label for="description"> Prix unitaire : </label>
				<div class="input-append-text">
					<input type="text" name="promo[1][unitaire]" id="unitaire" value="<?=$promotions->{1}->unitaire?>">
					<span>€</span>
				</div>
			</div>
			
			
			<div>
				<label for="description"> Prix Kg : </label>
				<div class="input-append-text">
					<input type="text" name="promo[1][kg]" id="kg" value="<?=$promotions->{1}->kg?>">
					<span>€</span>
				</div>
			</div>
		</div>
		
		<input type="submit" value="Mettre à jour" class="btn">

	</section>
</form>
	