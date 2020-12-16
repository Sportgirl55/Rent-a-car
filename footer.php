
  <footer class="footer-page">
    <div class="container">
      <div class="footer-content">
        <div class="footer-nav">
          <a class="logo logo_footer"><img src="img/icons/logo-footer.png" alt="logo"></a>
          <ul class="list footer-menu">
            <li><a href="./page-cars.php">Автомобили</a></li>
            <li><a href="./page-about.php">О нас</a></li>
            <li><a href="./page-rent.php">Условия аренды</a></li>
            <li><a href="./page-lawyers.php">Юридическим лицам</a></li>
            <li><a href="./page-contacts.php">Контакты</a></li>
          </ul>
        </div><!-- footer-nav -->
        <address class="footer__address">
          <span class="footer__location"><?php include('./includes/address.php') ?></span>
          <?php include('./includes/phone.php') ?>
        </address>
      </div><!-- footer-content -->

      <span class="copyright">© 2020, Все права защищены.</span>
    </div><!-- container -->
  </footer>
</body>

</html>