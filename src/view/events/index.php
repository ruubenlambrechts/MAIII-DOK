<section class="section event_home_box first_section">
  <header class="title_box">
    <h1 class="title">De eerst volgende evenementen</h1>
  </header>
  <div class="event_container event_home">
    <? $i = 0;
    foreach($events as $event): ?>
      <a class="event_box<?php
        if (count($event['locations']) < 2) {
        foreach($event['locations'] as $location):
          echo " event_" . $location['name'];
        endforeach;
      }; ?>" href="index.php?page=detail&id=<?php echo $event['id']?>">

        <?php foreach($event['media'] as $media): ?>
          <picture>
            <source type="image/webp"
                  srcset="assets/img/database/<? echo $media['media1']; ?>.webp">
            <img
              src="assets/img/database/<? echo $media['media1']; ?>.jpg"
              alt="<? echo $media['media1']; ?>">
          </picture>
        <? endforeach ?>
        <div class="event_context_box">
          <header class="event_title"r>
            <h1><?php echo mb_strtolower($event['title'], 'UTF-8') ?></h1>
          </header>
          <p class="event_date"><?php
              $eventStart = strtotime($event['start']);
              echo date("d M Y", $eventStart)
            ?></p>
          <p class="event_time"><?php
            $eventEnd = strtotime($event['end']);
            echo date("H.i", $eventStart) . " - " . date("H.i", $eventEnd);
            ?></p>
        </div>
        <div class="event_extra">
          <p class="event_location"><?php
              foreach($event['locations'] as $location):
                echo $location['name'] . " ";
            endforeach?></p>
          <?php
              foreach($event['tags'] as $tag):
                echo '<p class="event_tag">' . $tag['tag'];
            endforeach?></p>
        </div>
      </a>
      <?php
      $i++;
      if ($i === 2) {
        break;
      }
       ?>
    <? endforeach;?>
  </div>
</section>
<section class="section">
  <header class="title_box">
    <h1 class="title">Elke zondag bij DOK</h1>
  </header>
  <div class="zondag_text_box">
    <article class="zondag_text">
      <p>Vanaf 1 mei 2017 tot 25 september 2017 opent DOK haar deuren iedere zondag én feestdagen van 11u tot 22u. Dit wordt de vaste afspraak. De DOKbewoners openen DOK ook op andere dagen (voor meer info hierover raadpleeg je best de agenda).</p>
    </article>
    <picture>
      <source type="image/webp"
              srcset="assets/img/zondag_text_img.webp">
      <img src="assets/img/zondag_text_img.jpg" alt="zondag_text_img" class="zondag_text_img">
    </picture>
  </div>
  <div class="zondag_box">
    <article class="zondag_taart_box">
      <div class="zondag_taart zondag_img_box">
        <picture>
          <source type="image/webp" srcset="assets/img/zondag_taart.webp">
          <img src="assets/img/zondag_taart.jpg" alt="zondag taart" class="zondag_img">
        </picture>
      </div>
      <header>
        <h1 class="zondag_img_h1">Taart, Koffie, Gebak</h1>
        <p><a href="#" class="zondag_img_link ">Kantine</a> 11u</p>
      </header>
    </article>
    <article class="zondag_dj_box">
      <div class="zondag_dj zondag_img_box">
        <picture>
          <source type="image/webp" srcset="assets/img/zondag_dj.webp">
          <img src="assets/img/zondag_dj.jpg" alt="zondag dj" class="zondag_img">
        </picture>
      </div>
      <header class="zondag_img_text_box">
        <h1 class="zondag_img_h1">Gezellige DJ's</h1>
        <p><a href="#" class="zondag_img_link">Arena</a> 14-19u</p>
      </header>
    </article>
    <article class="zondag_markt_box">
      <div class="zondag_markt zondag_img_box">
        <picture>
          <source type="image/webp" srcset="assets/img/zondag_markt.webp">
          <img src="assets/img/zondag_markt.jpg" alt="zondag markt" class="zondag_img">
        </picture>
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
  <div class="link_zone_box">
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
  <form class="newsletter_form" action="index.php" method="post">
    <label for="newsletter_email" class="newsletter_label">Schrijf je dan in voor de nieuwsbrief!</label>
    <div class="newsletter_input_box">
      <input type="email" name="newsletter_email" value="" placeholder="info@dokgent.be"><input type="submit" name="" value="Inschrijven">
    </div>
  </form>
  <div class="home_footer_buttons">
    <a href="#" class="genoeg_button genoeg_1">
      <header>
        <h1 class="genoeg_button_title">DOK Rommelmarkt</h1>
      </header>
      <p>Verkoop je oude spulletjes op de DOK Rommelmarkt</p>
    </a>
    <a href="#" class="genoeg_button genoeg_r">
      <header>
        <h1 class="genoeg_button_title">DOK Bewoner</h1>
      </header>
      <p>Wordt een DOK Bewoner en beleef elke dag het DOK leven</p>
    </a>
  </div>
</section>
