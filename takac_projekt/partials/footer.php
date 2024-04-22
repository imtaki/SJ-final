<footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
  <div class="container text-center">
    <small>Copyright &copy; FitLife</small>
    <div class="col-md-3">
      <div class="footer-socials">
        <div class="socials inline-inside socials-colored">

          <a href="https://www.facebook.com/" target="_blank" title="Facebook" class="socials-item">
            <i class="fa fa-facebook-f facebook"></i>
          </a>
          <a href="https://twitter.com/?lang=en" target="_blank" title="Twitter" class="socials-item">
            <i class="fa fa-twitter twitter"></i>

          </a>
          <a href="https://www.instagram.com/" target="_blank" title="Instagram" class="socials-item">
            <i class="fa fa-instagram instagram"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  
</footer>
<?php
//add_scripts();
$page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
$page_object = new Page($page_name);
$page_object->add_scripts();
?>
</body>

</html>