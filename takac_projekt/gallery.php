<?php
  include('partials/header.php');
?>
  <!-- Galeria Carousel-->
  <!-- Galeria Carousel-->
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/trening1.jpg" class="d-block w-100 img-fluid" alt="Training1">
        <div class="carousel-caption d-none d-md-block">
          <h5>Nasi treneri v Akcii</h5>
          <p>U nas v FitLife preferujeme induvidualizmus. Nasi treneri vas potlacia az do maximum!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/trening2.jpg" class="d-block w-100 img-fluid" alt="Training2">
        <div class="carousel-caption d-none d-md-block">
          <h5>Nasi treneri v Akcii</h5>
          <p>Nebojte sa, nikdy v tom nie ste samy!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/trening3.jpg" class="d-block w-100 img-fluid" alt="Training3">
        <div class="carousel-caption d-none d-md-block">
          <h5>Nasi treneri v Akcii</h5>
          <p>Nezalezi od veku, pohlavia, U nas vo FitLife pomahame kazdemu!</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  
 <!-- JavaScript linkovanie-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="app.js"></script>
<?php
  include('partials/footer.php');
?>
</body>

</html>