<?php include('Views/HeaderView.php');?>

<h1>Générateur de memes</h1>

<h2>Les Mere'R réalisées :</h2>
<!-- <?php foreach ($PickeSomeMemes as $key => $$PickeSomeMemes) : ?> -->
	
<img src="<?=$PickSomeMemes['cheminlocal']?>">
	<!-- 	<?php endforeach; ?> -->
	
<?php print_r($pickMemes['titre']);
?>

<a href="?page=meme"> clique ici pour faire ta mémère</a>
<?php include('Views/FooterView.php');?>