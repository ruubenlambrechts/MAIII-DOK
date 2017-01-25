<section>
  <header class="title_box">
    <h1 class="title">De eerst volgende evenementen</h1>
  </header>
  <?php $i = 0;
  foreach($events as $event): ?>
    <!-- <article>
      <header><h2><?php echo $event['title']; ?></h2></header>
      <dl>
        <dt>start</dt><dd><?php echo $event['start'];?></dd>
        <dt>end</dt><dd><?php echo $event['end'];?></dd>
        <dt>organiser</dt><dd><?php echo $event['organiser'];?></dd>
        <dt>title</dt><dd><?php echo $event['title'];?></dd>
        <dt>locations</dt><dd>s<ul><?php foreach($event['locations'] as $location): ?><li><?php echo $location['name'];?></li><?php endforeach;?></ul></dd>
        <dt>tags</dt><dd><ul><?php foreach($event['tags'] as $tag): ?><li><?php echo $tag['tag'];?></li><?php endforeach;?></ul></dd>
        <dt>description</dt><dd><pre><?php echo $event['description'];?></pre></dd>
      </dl>
    </article> -->
    <?php
    $i++;
    if ($i === 2) {
      break;
    }
     ?>
  <? endforeach;?>
</section>
<section class="section">
  <header class="title_box">
    <h1 class="title">Elke zondag bij DOK</h1>
  </header>
  <div class="zondag_text_box center">
    <article class="zondag_text">
      <p>Vanaf 1 mei 2017 tot 25 september 2017 opent DOK haar deuren iedere zondag én feestdagen van 11u tot 22u. Dit wordt de vaste afspraak. De DOKbewoners openen DOK ook op andere dagen (voor meer info hierover raadpleeg je best de agenda).</p>
    </article>
    <img src="../assets/img/zondag_text_img.jpg" alt="zondag_text_img" class="zondag_text_img">
  </div>
  <div class="zondag_box">
    <article class="zondag_taart_box">
      <div class="zondag_taart zondag_img_box">
        <img src="../assets/img/zondag_taart.jpg" alt="zondag taart" class="zondag_img">
      </div>
      <header>
        <h1 class="zondag_img_h1">Taart, Koffie, Gebak</h1>
        <p><a href="#" class="zondag_img_link ">Kantine</a> 11u</p>
      </header>
    </article>
    <article class="zondag_dj_box">
      <div class="zondag_dj zondag_img_box">
        <img src="../assets/img/zondag_dj.jpg" alt="zondag dj" class="zondag_img">
      </div>
      <header class="zondag_img_text_box">
        <h1 class="zondag_img_h1">Gezellige DJ's</h1>
        <p><a href="#" class="zondag_img_link">Arena</a> 14-19u</p>
      </header>
    </article>
    <article class="zondag_markt_box">
      <div class="zondag_markt zondag_img_box">
        <img src="../assets/img/zondag_markt.jpg" alt="zondag markt" class="zondag_img">
      </div>
      <header class="zondag_img_text_box">
        <h1 class="zondag_img_h1">Rommelmarkt</h1>
        <p><a href="#" class="zondag_img_link">Markt</a> vanaf 31 juli</p>
      </header>
    </article>
  </div>
</section>
<section class="section zones">
  <header class="title_box">
    <h1 class="title">Ontdek alle zones van DOK</h1>
  </header>
  <div class="link_zone_box center">
    <a href="#" class="link_zone link_kantine">DOKKantine</a>
    <a href="#" class="link_zone link_box">DOKBox</a>
    <a href="#" class="link_zone link_park">DOKPark</a>
    <a href="#" class="link_zone link_markt">DOKMarkt</a>
    <a href="#" class="link_zone link_arena">DOKArena</a>
  </div>
</section>
<section class="home_footer">
  <header class="title_box">
    <h1 class="genoeg_title">Krijg je niet genoeg van DOK?</h1>
  </header>
  <form class="newsletter_form center" action="index.php" method="post">
    <label for="newsletter_email" class="newsletter_label">Schrijf je dan in voor de nieuwsbrief!</label>
    <div class="newsletter_input_box">
      <input type="email" name="newsletter_email" value="" placeholder="info@dokgent.be"><input type="submit" name="" value="Inschrijven">
    </div>
  </form>
  <div class="home_footer_buttons center">
    <a href="#" class="genoeg_button">
      <header>
        <h1 class="genoeg_button_title">DOK Rommelmarkt</h1>
    </header>
    <p>Verkoop je oude spulletjes op de DOK Rommelmarkt</p>
  </a>
    <a href="#" class="genoeg_button">
      <header>
        <h1 class="genoeg_button_title">DOK Bewoner</h1>
    </header>
    <p>Wordt een DOK Bewoner en beleef elke dag het DOK leven</p>
    </a>
  </div>
</section>
