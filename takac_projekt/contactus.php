<?php
  include('partials/header.php');
?>
      <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- Contact Form-->
    <div class="container mt-5 text-center" id="kontaktcont">
      <form id="myForm" action="submit.php" method="POST">
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
        </div>
        <button type="submit"  name ="submitted" class="btn btn-primary mt-3">Odoslať</button>
      </form>
    </div>

      
 <?php
  include('partials/footer.php');
?>

</body>
</html>