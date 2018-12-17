<?php include('Views/HeaderView.php');?>
<section class="visualisation">
	<?=$lastMeme['url_memes'];?>
<div id="visualisation">
	
	<img src="<?=$lastMeme['url_memes'];?>">
	<div class="boutonTelecharge">
                            
                         <?php if ($lastMeme['url_memes']) {

                       echo '<a href="telecharger.php?file='.$lastMeme['url_memes'].'"><button>Télécharger le MemeR</button></a>';
                         }
                        ?>
                        </div>

                        <a href="?page=Home"><button>Créer un nouveau memeR</button></a>
</div>
</section>

<?php include('Views/FooterView.php');?>