<?php
  include('partials/header.php');
?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- O nas Akordeon-->
    <section class="service" id="service">
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
</section>
<br>
<br>
<?php
  include('partials/footer.php');
?>