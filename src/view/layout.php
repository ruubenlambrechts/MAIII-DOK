<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DOK</title>
    <?php echo $css;?>
  </head>
  <header class="header">
    <nav class="nav center">
      <a href="index.php" class="nav_logo"><span class="nav_logo_span">DOK</span></a>
      <a href="index.php?page=agenda">Agenda</a>
      <a href="index.php?page=404">Info</a>
      <a href="index.php?page=404">Activiteiten</a>
      <a href="index.php?page=404">Praktisch</a>
      <a href="index.php?page=404">Blogs</a>
    </nav>
    <h1 class="center header_title">Werfplek voor verpozing en creatieve manoeuvres</h1>
    <h2 class="center header_subtitle">Open vanaf 1 mei 2017 tot 25 september 2017</h2>
  </header>
  <body>

    <div class="container">
      <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
      <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

      <?php echo $content; ?>
    </div>

    <?php echo $js;?>
  </body>
  <footer class="footer_box">
    <article class="footer_social">
      <a href="#" class="footer_twitter"><span class="footer_span">twitter</span></a>
      <a href="#" class="footer_facebook"><span class="footer_span">facebook</span></a>
      <a href="#" class="footer_instagram"><span class="footer_span">instagram</span></a>
      <a href="#" class="footer_email"><span class="footer_span">email</span></a>
      <a href="#" class="footer_phone"><span class="footer_span">phone</span></a>
    </article>
    <article class="sponsor_box">
      <img src="../assets/img/sogent_ok.jpg" alt="" class="sponsor">
      <img src="../assets/img/pepsi_ok.jpg" alt="" class="sponsor">
      <img src="../assets/img/pa-vlaamse-overheid.jpg" alt="" class="sponsor">
      <img src="../assets/img/pa-vedett.jpg" alt="" class="sponsor">
      <img src="../assets/img/pa-thuis.jpg" alt="" class="sponsor">
      <img src="../assets/img/pa-gent.jpg" alt="" class="sponsor">
      <img src="../assets/img/pa-democrazy.jpg" alt="" class="sponsor">
      <img src="../assets/img/pa-cirq.jpg" alt="" class="sponsor">
      <img src="../assets/img/biofresh_ok.jpg" alt="" class="sponsor">
      <img src="../assets/img/bionade_ok.jpg" alt="" class="sponsor">
      <img src="../assets/img/eulala_ok.jpg" alt="" class="sponsor">
    </article>
  </footer>
</html>
