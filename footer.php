<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <div class="container-fluid mt-5 px-3 py-2" style="background-color:#f0ead2  ;">
    <div class="row">
      <div class="col-lg-6 p-4">
        <h4 class="fw-bold mb-2 fs-3">Upscale Events</h4>
        <p>Elevate Your events and make you memories long last.</p>
      </div>
      <div class="col-lg-4 p-4">
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About Us</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Services</a><br>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Events</a>


      </div>
      <div class="col-lg-2 p-4">
        <h5 class="mb-3">Follow Us:</h5>
          <?php
          if($contact_result['insta']!= ''){
            echo <<<data
            <a href="$contact_result[insta]" class="d-inline-block mb-3 text-dark fs-5 me-2">
            <i class="bi bi-instagram me-1"></i></a>
            data;
          }
          ?>
        
        <a href="$contact_result[fb]" class="d-inline-block mb-3 text-dark fs-5 me-2">
          <i class="bi bi-facebook me-1"></i></a>
        <a href="$contact_result[twitter]" class="d-inline-block mb-3 text-dark fs-5 me-2">
          <i class="bi bi-twitter me-1"></i></a>
      </div>


    </div>
  </div>


</body>





<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- swiperjs -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    loop: true,
    autoplay: {
      delay: 1500,
      disableOnInteraction: false,
    }

  });
</script>

<script>
  function setActive(){
    let navbar = document.getElementById('nav-bar');
    let a_tag = navbar.getElementsByTagName('a');

    for(i=0;i<a_tag.length;i++){
      let file = a_tag[i].href.split('/').pop();
      let file_name = file.split('.')[0];

      if(document.location.href.indexOf(file_name)>=0){
        a_tag[i].classList.add('active');
      }
    }

  }
  setActive();
</script>

</html>