<?php include('../includes/header.php'); ?>
<?php include('../includes/nav.php'); ?>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.css">
  
<style type="text/css">

.slider { width: 100%; background: #eee; padding-top:25px;}
.slick-slide { margin: 0px 20px; text-align: center;}
.slick-prev:before,
.slick-next:before { color: black; }

@media (max-width: 767px) { 
    .slick-dots,button { display:none !important; } 
}

.slick-slide::-moz-selection { color: red}
.slick-slide::selection { color: red; }
</style>

<section class="main page-gallery">
	<div class="container-fluid">    
        <section class="single-item slider">
            <div>
              <img src="/gallery/images/gi-1.jpg" />
              <p class="caption">Learning, reading, engaging</p>
            </div>
            <div>
                <img src="/gallery/images/gi-2.jpg" />
                <p class="caption">Hem and Suraj attending board meetings to procure funding for Samatol</p>
            </div>
            <div>
                <img src="/gallery/images/gi-3.jpg" />
                <p class="caption">There's always time for cricket after a busy day at the railway station</p>
            </div>
            <div>
                <img src="/gallery/images/gi-4.jpg" />
                <p class="caption">A glimpse of Mumbai's railway stations. Due to high security photos are prohibited</p>
            </div>
            <div>
                <img src="/gallery/images/gi-5.jpg" />
                <p class="caption">Pitching the work that Samatol do at a funding meeting</p>
            </div>
            <div>
                <img src="/gallery/images/gi-6.jpg" />
                <p class="caption">Monkey - ing around with the Children at Samatol</p>
            </div>
            <div>
                <img src="/gallery/images/gi-7.jpg" />
                <p class="caption">Suraj playing with the Runaway children</p>
            </div>
            <div>
                <img src="/gallery/images/gi-8.jpg" />
                <p class="caption">Busy planting, making the centre a greener place for the children</p>
            </div>
            <div>
                <img src="/gallery/images/gi-9.jpg" />
                <p class="caption">More games and fun with the children</p>
            </div>
            <div>            
                <img src="/gallery/images/gi-10.jpg" />
                <p class="caption">Celebrating Rakshabandan</p>
            </div>
            <div>
                <img src="/gallery/images/gi-11.jpg" />
                <p class="caption">Celebrating Rakshabandan</p>
            </div>
            <div>       
                <img src="/gallery/images/gi-12.jpg" />
                <p class="caption">Celebrating Rakshabandan</p>
            </div>
            <div>       
                <img src="/gallery/images/gi-13.jpg" />
                <p class="caption">Rakshabandan antics with the children at Samatol</p>
            </div>
            <div>       
                <img src="/gallery/images/gi-14.jpg" />
                <p class="caption">Our expert gardeners  at work</p>
            </div>
            <div>       
                <img src="/gallery/images/gi-15.jpg" />
                <p class="caption">Our expert gardeners  at work</p>
            </div>
            <div>       
                <img src="/gallery/images/gi-16.jpg" />
                <p class="caption">Children at the Kamalini Karnabadhir Vidyalaya</p>
            </div>
            <div>
                <img src="/gallery/images/gi-17.jpg" />
                <p class="caption">A snapshot of the tribal communities we work with at the Banswara  project</p>
            </div>
            <div>                
                <img src="/gallery/images/gi-18.jpg" />
                <p class="caption">All ready for the Kamalini  karnabadhir vidyalaya Diwali  performance</p>
            </div>
        </section>
    </div>
</section>


<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $('.single-item').slick({
        dots: true,
        arrows: true,
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
    });
  </script>



<?php include('../includes/footer.php'); ?>