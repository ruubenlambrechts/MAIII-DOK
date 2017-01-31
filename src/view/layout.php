<!DOCTYPE html>
<html>
  <head>
    <?php echo $css;?>
    <script type="text/javascript">
      WebFontConfig = {
        custom: {
          families: ['Bevan', 'Superclarendon'],
          urls: ['assets/fonts/bevan/bevan.css', 'assets/fonts/super_clarendon/superclarendon.css']
        }
      };
      (function(d) {
      var wf = d.createElement('script'), s = d.scripts[0];
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
      wf.async = true;
      s.parentNode.insertBefore(wf, s);
   })(document);
    </script>
    <meta charset="utf-8">
    <meta name="author" content="Ruuben Lambrechts">
    <meta name="description" content="DOK is de zomerbar gelegen in Gent met een hoekje af, geniet van verschillende activiteiten op het terein.">
    <meta name="keywords" content="DOK, Gent, Zomerbar, dj, kantine, oude, dokken, devine, rommelmarkt, taart, koffie, gebak, zondag">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>DOK</title>
  </head>
  <header class="header <?php if ($_GET['page'] !== 'home') {
    echo 'header_small';
  } ?>">
    <nav class="nav">
      <a href="index.php" class="nav_logo"><span class="nav_logo_span">DOK</span></a>
      <div class="nav_link_box">
        <a href="index.php?page=agenda" class="nav_link nav_agenda">Agenda</a>
        <a href="index.php?page=404" class="nav_link nav_info">Info</a>
        <a href="index.php?page=404" class="nav_link nav_activiteiten">Activiteiten</a>
        <a href="index.php?page=404" class="nav_link nav_praktisch">Praktisch</a>
        <a href="index.php?page=404" class="nav_link nav_blogs">Blogs</a>
      </div>
    </nav>
    <nav class="nav_hamburger">
      <a class="nav_hamburger_link"><img src="assets/img/hamburger.svg" alt="hamburger menu"></a>
        <div class="nav_hamburger_menu hidden">
            <a href="index.php?page=agenda" class="nav_link nav_hamburger_agenda hidden">Agenda</a>
            <a href="index.php?page=404" class="nav_link nav_hamburger_info hidden">Info</a>
            <a href="index.php?page=404" class="nav_link nav_hamburger_activiteiten hidden">Activiteiten</a>
            <a href="index.php?page=404" class="nav_link nav_hamburger_praktisch hidden">Praktisch</a>
            <a href="index.php?page=404" class="nav_link nav_hamburger_blogs hidden">Blogs</a>
        </div>
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
      <picture>
        <source type="image/webp" srcset="assets/img/sogent_ok.webp">
        <img src="assets/img/sogent_ok.jpg" alt="" class="sponsor">
      </picture>
      <picture>
        <source type="image/webp" srcset="assets/img/pepsi_ok.webp">
        <img src="assets/img/pepsi_ok.jpg" alt="" class="sponsor">
      </picture>
      <picture>
        <source type="image/webp" srcset="assets/img/pa-vlaamse-overheid.webp">
        <img src="assets/img/pa-vlaamse-overheid.jpg" alt="" class="sponsor">
      </picture>
      <picture>
        <source type="image/webp" srcset="assets/img/pa-vedett.webp">
        <img src="assets/img/pa-vedett.jpg" alt="" class="sponsor">
      </picture>
      <picture>
        <source type="image/webp" srcset="assets/img/pa-thuis.webp">
        <img src="assets/img/pa-thuis.jpg" alt="" class="sponsor">
      </picture>
      <picture>
        <source type="image/webp" srcset="assets/img/pa-gent.webp">
        <img src="assets/img/pa-gent.jpg" alt="" class="sponsor">
      </picture>
      <picture>
        <source type="image/webp" srcset="assets/img/pa-democrazy.webp">
        <img src="assets/img/pa-democrazy.jpg" alt="" class="sponsor">
      </picture>
      <picture>
        <source type="image/webp" srcset="assets/img/pa-cirq.webp">
        <img src="assets/img/pa-cirq.jpg" alt="" class="sponsor">
      </picture>
      <picture>
        <source type="image/webp" srcset="assets/img/biofresh_ok.webp">
        <img src="assets/img/biofresh_ok.jpg" alt="" class="sponsor">
      </picture>
      <picture>
        <source type="image/webp" srcset="assets/img/bionade_ok.webp">
        <img src="assets/img/bionade_ok.jpg" alt="" class="sponsor">
      </picture>
      <picture>
        <source type="image/webp" srcset="assets/img/eulala_ok.webp">
        <img src="assets/img/eulala_ok.jpg" alt="" class="sponsor">
      </picture>
    </article>
  </footer>
</html>
