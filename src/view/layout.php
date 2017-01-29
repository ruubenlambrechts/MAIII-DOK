<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DOK</title>
    <?php echo $css;?>
  </head>
  <header class="header <?php if ($_GET['page'] !== 'home') {
    echo 'header_small';
  } ?>">
    <nav class="nav center">
      <a href="index.php" class="nav_logo"><span class="nav_logo_span">DOK</span></a>
      <a href="index.php?page=agenda" class="nav_link">Agenda</a>
      <a href="index.php?page=404" class="nav_link">Info</a>
      <a href="index.php?page=404" class="nav_link">Activiteiten</a>
      <a href="index.php?page=404" class="nav_link">Praktisch</a>
      <a href="index.php?page=404" class="nav_link">Blogs</a>
    </nav>
    <h1 class="center header_title">Werfplek voor verpozing en creatieve manoeuvres</h1>
    <h2 class="center header_subtitle">Open vanaf 1 mei 2017 tot 25 september 2017</h2>
  </header>
  <body>
    <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.8";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
    <div class="container">
      <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
      <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

      <?php echo $content; ?>
    </div>

    <?php echo $js;?>
  </body>
  <footer class="footer_box">
    <article class="footer_social">
      <a href="https://www.twitter.com" class="footer_twitter" target="_blank"><span class="footer_span">twitter</span></a>
      <a href="https://www.facebook.com" class="footer_facebook" target="_blank"><span class="footer_span">facebook</span></a>
      <a href="https://www.instagram.com" class="footer_instagram" target="_blank"><span class="footer_span">instagram</span></a>
      <a href="mailto:dok@info.be" class="footer_email" target="_blank"><span class="footer_span">email</span></a>
      <a href="tel:0499999999" class="footer_phone" target="_blank"><span class="footer_span">phone</span></a>
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
