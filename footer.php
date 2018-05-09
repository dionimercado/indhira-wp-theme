
</main>
<footer class="footer pt-5">
  <a href="#" class="footer__gotop">
    <i class="fas fa-angle-up"></i>
    <span>Top</span>
  </a>
  <div class="d-flex justify-content-center align-items-center mt-5">
    <div class="footer__contacts text-right">
      <p>+123 456 7890<br />
      info@indhiraortega.com</p>
    </div>
    <div class="footer__logo">
      <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/images/icon.svg" alt="">
    </div>
    <div class="footer__location">
      <p>421W 202nd Street<br />
      New York , NY 10034</p>
    </div>
  </div>
  <div class="footer__socials my-5 py-5 text-center">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
  </div>
  <div class="footer__copyright text-center mt-5">
    <p>&copy; <?php echo date("Y") ?> Indhira Ortega. All rights reserved.</p>
  </div>
</footer>

<?php wp_footer() ?>
</body>
</html>
