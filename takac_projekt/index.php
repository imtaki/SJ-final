<?php
  include('partials/header.php');

?>
      <!-- Landing page-->
        <section class="home">
            <div class="container">
                <h1 class="center">Zmen svoje <span>Telo</span></h1>
                <h1 class="center2">My sme <span>FitLife</span></h1>
            </div>
        </section>
      <br>
      <br>
      <br>
      <!-- O nas Akordeon-->
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Naše Hodnoty
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>Zdravie Prvým Umelcom: </strong> Veríme, že zdravie je základom šťastného a plnohodnotného života. Sledujeme najnovšie trendy a inovácie v oblasti wellnessu a fitness.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Naša Misia
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p> Našou misiou je motivovať, inšpirovať a viesť ľudí na ich ceste k zdraviu a pohode. Chceme poskytovať dôveryhodné informácie, praktické tipy a prostriedky, ktoré im umožnia žiť život plný energie a vitality. </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Čo Ponúkame
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <ul>
                    <li><strong>Informačný obsah:</strong> Články, návody, videá od odborníkov v oblasti wellnessu.</li>
                    <li><strong>Komunitná Platforma:</strong> Fórum a diskusné skupiny pre zdieľanie skúseností.</li>
                    <li><strong>Produkty a Služby:</strong> Kvalitné produkty a cvičebné plány podporujúce zdravý životný štýl.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div> 
    <!-- Sluzby-->
    <section class="about" id="aboutus">
  	  <div class="container">
  	  	  <div class="content">
  	  	  	   <div class="box">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="img/mealplan.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Jedalnicek na mieru</h4>
                       	   <p>Získajte prístup k vlastnému jedálničku navrhnutému presne pre vás. Naši experti vám pomôžu vytvoriť plán stravovania, ktorý bude zodpovedať vašim potrebám, preferenciám a cieľom v oblasti zdravého stravovania a životného štýlu.

                            </p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  	   	<div class="box">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="img/supplements.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Supplementacia</h4>
                       	   <p>U nás nájdete široký výber kvalitných doplnkov stravy, ktoré môžu podporiť váš zdravý životný štýl. Od vitamínov a minerálov po proteíny a ďalšie zložky, naše produkty sú navrhnuté s dôrazom na podporu vašich osobných cieľov v oblasti zdravia a výkonnosti.</p>
                       </div>
                    </div>
  	  	  	   	   </div>
  	  	  	   <div class="box">
  	  	  	   	   <div class="inner">
  	  	  	   	   	   <div class="img">
  	  	  	   	   	   	  <img src="img/coaching.jpg" alt="about" />
  	  	  	   	   	   </div>
                       <div class="text">
                       	   <h4>Coaching</h4>
                       	   <p>S nami dosiahnete ciele rýchlo a efektívne. Pomôžeme s jasným plánom, usmernením a motiváciou pre váš individuálny rast a dosiahnutie cieľov. Veríme v jedinečné potreby každého jednotlivca a náš tím coachov ponúka personalizovaný prístup.</p>
                       </div>
  	  	  	   	   </div>
  	  	  	   </div>
  	  	  </div>
  	  </div>
  </section>
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
    <br>
    <br>
    <br>
    <br>
    <!-- Contact Form-->
    <div class="container text-center">
      <i class="fa fa-envelope" aria-hidden="true"><a
      href="mailto:dominik.takac1337@gmail.com">
      dominik.takac1337@gmail.com</a></i>
      <i class="fa fa-phone" aria-hidden="true"><a
      href="tel:09095106210"> 09095106210</a></i>
    </div>
    <div class="container mt-5 text-center" id="kontaktcont">
      <form id="myForm" action="thank_you_page.html" method="get">
        <div class="form-group">
          <label for="meno">Meno:</label>
          <input type="text" class="form-control" id="meno" name="meno" required>
          <div class="invalid-feedback">
            Prosím, zadajte vaše meno.
          </div>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required>
          <div class="invalid-feedback">
            Prosím, zadajte platnú emailovú adresu.
          </div>
        </div>
        <div class="form-group">
          <label for="sprava">Poznamka:</label>
          <textarea class="form-control" id="sprava" name="sprava" rows="4" required></textarea>
          <div class="invalid-feedback">
            Prosím, zadajte správu.
          </div>
        </div>
        <br> 
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="suhlas" name="suhlas" required>
          <label class="form-check-label" for="suhlas">Súhlasím so spracovaním osobných údajov</label>
          <div class="invalid-feedback">
            Musíte súhlasiť so spracovaním osobných údajov.
          </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Odoslať</button>
      </form>
    </div>
      
    



<?php
  include('partials/footer.php');

?>
</body>

</html>