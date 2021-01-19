<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 me-md-auto fw-normal">Projekt</h5>
  <nav class="my-2 my-md-0 me-md-3">
    <a class="p-2 text-dark" href="index.php">Głowna</a>
    <a class="p-2 text-dark" href="about.php">Kontakt</a>
  </nav>
  <?php
    if($_COOKIE['user']==''):
  ?>
  <a class="btn btn-outline-primary" href="auth.php">Zaloguj się</a>
  
  <?php
    else:
  ?>
  <a class="btn btn-outline-primary" href="auth.php">Mój profil</a>
  <?php endif; ?>
</div>  