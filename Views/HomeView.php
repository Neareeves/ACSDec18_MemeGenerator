<?php include('Views/HeaderView.php');?>

<h1 class="hom">Générateur de memes</h1>

<h2 class="hom">Les Mere'R réalisées :</h2>



		

<a href="?page=meme"> clique ici pour faire ta mémère</a>

<script> $(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});</script>
<div class="container">
  <div class="row">
    <div class='col-md-offset-2 col-md-8 text-center'>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-offset-2 col-md-8'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
        </ol>
        
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
          <!-- Quote 1 -->

          <div class="item active">
            <blockquote>
              <div class="row">
                <div class="col-sm-12 text-center">
                  <img src='<?=$pickMemes[0]['url_memes'];?>'>
                </div>
               
              </div>
            </blockquote>
          </div>
          <!-- Quote 2 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-12 text-center">
                 <img class='imagecar' src='<?=$pickMemes[1]['url_memes'];?>'>
                </div>
               
              </div>
            </blockquote>
          </div>
          <!-- Quote 3 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-12 text-center">
                  <img src='<?=$pickMemes[2]['url_memes'];?>'>
                </div>
             
                
              </div>
            </blockquote>
          </div>
        </div>
        
        <!-- Carousel Buttons Next/Prev -->
        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
      </div>                          
    </div>
  </div>
</div>

<?php include('Views/FooterView.php');?>