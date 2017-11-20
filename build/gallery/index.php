<?php include('../includes/header.php'); ?>
<?php include('../includes/nav.php'); ?>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.css">
  
<style type="text/css">
    .slider { width: 100%; background: #eee; padding-top:25px;}
    .slick-slide { margin: 0px 20px; text-align: center;}
    .slick-prev:before,
    .slick-next:before { color: black; }
    .slick-dots { top:102%; }
    .slick-dots li button::before {color:#000 !important;font-size: 8px;}
    @media (max-width: 767px) { 
        button.slick-arrow { display:none !important; } 
    }
</style>

<section class="main page-gallery">
    <h2>Our stories in pictures</h2>
	<div class="container-fluid">    
        <section class="single-item slider">
            <div>
              <figure><img src="/gallery/images/banswara-school.jpg" /></figure>
              <figcaption>A school in Banswara</figcaption>
            </div>
            <div>
              <figure><img src="/gallery/images/tribal-life.jpg" /></figure>
              <figcaption>Banswara - The Tribal life</figcaption>
            </div>
            <div>
              <figure><img src="/gallery/images/friends-for-life.jpg" /></figure>
              <figcaption>Friends for life at Surajya Pune</figcaption>
            </div>
            <div>
              <figure><img src="/gallery/images/games-at-surajya.jpg" /></figure>
              <figcaption>Games at Surajya - Pune</figcaption>
            </div>
            <div>
              <figure><img src="/gallery/images/menstrual-hygeine-workshop.jpg" /></figure>
              <figcaption>Garima conducting a menstrual hygeine workshop</figcaption>
            </div>
            <div>
              <figure><img src="/gallery/images/schools-in-banswara.jpg" /></figure>
              <figcaption>Schools in Banswara</figcaption>
            </div>
            <div>
              <figure><img src="/gallery/images/making-sustainable-eco-friendly-sanitary-towels.jpg" /></figure>
              <figcaption>Vipasha visits a centre for making sustainable, eco-friendly sanitary towels</figcaption>
            </div>
            <div>
              <figure><img src="/gallery/images/public-speaking-guru.jpg" /></figure>
              <figcaption>In awe of Sumit - our Public speaking Guru!</figcaption>
            </div>
            <div>
              <figure><img src="/gallery/images/public-speaking-workshop-2018.jpg" /></figure>
              <figcaption>Public Speaking workshop 2018</figcaption>
            </div>
            <div>
              <figure><img src="/gallery/images/workshop-on-telling-stories.jpg" /></figure>
              <figcaption>Yogesh Joshi conducting a workshop on telling stories</figcaption>
            </div>            
            <div>
              <figure><img src="/gallery/images/gi-1.jpg" /></figure>
              <figcaption>Learning, reading, engaging</figcaption>
            </div>
            <div>
                <figure><img src="/gallery/images/gi-2.jpg" /></figure>
                <figcaption>Hem and Suraj attending board meetings to procure funding for Samatol</figcaption>
            </div>
            <div>
                <figure><img src="/gallery/images/gi-3.jpg" /></figure>
                <figcaption>There's always time for cricket after a busy day at the railway station</figcaption>
            </div>
            <div>
                <figure><img src="/gallery/images/gi-4.jpg" /></figure>
                <figcaption>A glimpse of Mumbai's railway stations. Due to high security photos are prohibited</figcaption>
            </div>
            <div>
                <figure><img src="/gallery/images/gi-5.jpg" /></figure>
                <figcaption>Pitching the work that Samatol do at a funding meeting</figcaption>
            </div>
            <div>
                <figure><img src="/gallery/images/gi-6.jpg" /></figure>
                <figcaption>Monkey - ing around with the Children at Samatol</figcaption>
            </div>
            <div>
                <figure><img src="/gallery/images/gi-7.jpg" /></figure>
                <figcaption>Suraj playing with the children</figcaption>
            </div>
            <div>
                <figure><img src="/gallery/images/gi-8.jpg" /></figure>
                <figcaption>Busy planting, making the centre a greener place for the children</figcaption>
            </div>
            <div>
                <figure><img src="/gallery/images/gi-9.jpg" /></figure>
                <figcaption>More games and fun with the children</figcaption>
            </div>
            <div>            
                <figure><img src="/gallery/images/raksha-bandhan.jpg" /></figure>
                <figcaption>Celebrating Rakshabandan</figcaption>
            </div>            
            <div>       
                <figure><img src="/gallery/images/gardening.jpg" /></figure>
                <figcaption>Our expert gardeners at work</figcaption>
            </div>            
        </section>
    </div>
</section>

<?php include('../includes/footer.php'); ?>
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
</body>
</html>