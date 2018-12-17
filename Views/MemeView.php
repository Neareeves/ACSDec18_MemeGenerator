<?php include('Views/HeaderView.php');?>
<section id="pageGenerale">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Créez votre mémère ici</h1>

                <div class="choixPhotos">
                    <h3>Choisis ta photo dans les propositions ou charge-la</h3>
                    <div class="photo">
                         <div class="horizontal-scroll-wrapper">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['0'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['1'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['2'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['3'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['4'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['5'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['6'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['7'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['8'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['9'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['10'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['11'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['12'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['13'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['14'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['15'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['16'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['17'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['18'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['19'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['20'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['21'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['22'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['23'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['24'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['25'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['26'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['27'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['28'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['29'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['30'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['31'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['32'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['33'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['34'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['35'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['36'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['37'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['38'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['39'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['40'] ?>.jpg">
                                        <img class='imageAMemer bouton' style="width: auto; height:200px" src="Images/photo<?= $range['41'] ?>.jpg">
                                        
                                    </div> 

                    </div>
                    <form action="?page=meme" method="post" enctype="multipart/form-data">
                        <label for="upload">Choisis un fichier JPEG et nomme-le pour l'envoyer</label>
                        <input type="text" name="fileName" placeholder="Nom">
                        <input type="file" name="upload">
                        <input type="submit" name="envoyer" value="Valider">
                    </form>
                 
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="row">
                            <p class="instructions imageAMemer"><span class="span">Instructions : </span> Tapez le texte que vous voulez afficher sur les photos. La première case s'affichera en haut de la photo, la seconde en bas. Une fois l'oeuvre d'art achevée, envoyez mémé dans les orties! (30 caractères maxi). Donne-lui ensuite un nom (10 caractère maxi), sans espace.</p>
                        </div>
                        <div class="row">
                            <form onsubmit='return false' action="enregistrement_meme.php" method="post" class="formValid">
                           
                                <textarea type="text" id="textehaut" name="textehaut" placeholder="Meme'R ici" maxlength="35"></textarea>
                                <textarea type="text" id="textebas" placeholder="Meme'R ici" name="textebas" maxlength="35"></textarea>
                                <textarea type="text" id="nommeme" placeholder="Donne un nom à ton meme" name="nommeme" maxlength="10"></textarea>
                                <input type="hidden" id="Xhaut" name="Xhaut" value="">
                                <input type="hidden" name="Yhaut" id="Yhaut" value="">
                                <input type="hidden" name="Xbas" id="Xbas" value="">
                                <input type="hidden" name="Ybas" id="Ybas" value="">
                                <input type="submit" name="valider" value="Générer MemeR" onclick='loadDoc();'>
                            </form>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="blocimage">
                         <!--  <img id="chosenPic" src="<?=$chosenPic?>"> -->

                         <div id="chosenPic">
                             <?php if (isset($pathName)) {
                                echo '<img src="'.$pathName['chemin_img'].'" style="max-width: 100%; max-height= 100%"/>';
                             }?>
                         </div>
                         <div id="blocpreview">

                            <div id="affichetoptext"></div>
                            
                          
                            <div id="affichebottext"></div>
                        
                        </div>
                        <!-- <img style="width: 100%; max-height: 100%" src="memere.jpg"> -->
                        <div id="finalMeme">

                        </div>
                        <div id="preview">
                            <!-- afficher ici le chemin de la dernière photo ajoutée à la bdd avec last insert id -->
                        </div>
                        
                    </div>
                        <a href="Visualiser"><button>Clique ici pour télécharger memeR après l'avoir généré</button></a>
                </div>
            </div>
            
        </div>

    </section>


<!-- input caché pour stocker la position du texte
    chemin des images avec index et htaccess? -->


    <?php include('Views/FooterView.php');?>