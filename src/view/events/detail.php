<a href="index.php?page=agenda">Go back</a>
<!-- <?php foreach($events as $event): ?>
<article>
  <header><h2><?php echo $event['title']; ?></h2></header>
  <dl>
    <?php
      foreach($event['media'] as $media): echo $media['media1'];
    endforeach ?>
    <dt>start</dt><dd><?php echo $event['start'];?></dd>
    <dt>end</dt><dd><?php echo $event['end'];?></dd>
    <dt>organiser</dt><dd><?php echo $event['organiser'];?></dd>
    <dt>locations</dt><dd><ul><?php foreach($event['locations'] as $location): ?><li><?php echo $location['name'];?></li><?php endforeach;?></ul></dd>
    <dt>tags</dt><dd><ul><?php foreach($event['tags'] as $tag): ?><li><?php echo $tag['tag'];?></li><?php endforeach;?></ul></dd>
    <dt>description</dt><dd><pre><?php echo $event['description'];?></pre></dd>
    <?php
      foreach($event['media'] as $media):
      echo $media['media2'];
      echo $media['media3'];
    endforeach?>
  </dl>
</article>
<? endforeach;?> -->


  <?php foreach($events as $event): ?>
    <section class="detail_box section">
      <div class="detail_flex <?php if (count($event['locations']) < 2) {
        foreach($event['locations'] as $location): ?>
      <?php echo 'detail_' . $location['name'] . ' ';?>
      <?php endforeach;
      }; ?>">
        <?php foreach($event['media'] as $media):
        echo $media['media1'];
        endforeach?>
        <article class="detail_content">
          <div class="detail_top">
            <header class="detail_header">
              <h1 class="detail_title"><?php echo mb_strtolower($event['title'], 'UTF-8') ?></h1>
              <div class="detail_info">
                <p><?php foreach($event['locations'] as $location): ?>
                <?php echo $location['name'];?>
                <?php endforeach; ?></p>
                <p><?php
                  $eventStart = strtotime($event['start']);
                  $eventEnd = strtotime($event['end']);
                  echo date("H.i", $eventStart) . " - " . date("H.i", $eventEnd);?></p>
                  <p><?php foreach($event['tags'] as $tag):
                  echo $tag['tag'] . ' ';
                endforeach?></p>
              </div>
            </header>
            <div class="detail_date">
              <p><?php $eventStart = strtotime($event['start']);
              echo date("d", $eventStart)
              ?></p>
              <p><?php $eventStart = strtotime($event['start']);
              echo date("M", $eventStart)
              ?></p>
            </div>
          </div>
          <p class="detail_description"><?php
          if ($event['description'] === '') {
            echo 'Meer info zal nog volgen.';
          } else {
            echo $event['description'];
          }
          ?></p>
          <div class="detail_social">
            <a href="#" class="footer_twitter"><span class="footer_span">twitter</span></a>
            <a href="#" class="footer_facebook"><span class="footer_span">facebook</span></a>
            <a href="#" class="footer_instagram"><span class="footer_span">instagram</span></a>
          </div>
        </article>
      </div>
    </section>
    <!-- <section class="section detail_media_box">
      <?php
        foreach($event['media'] as $media):
        echo "<div class='detail_media_img_box'>" . $media['media2'] . "</div";
        echo "<div class='detail_media_img_box'>" . $media['media3'] . "</div";
      endforeach?>
    </section> -->
  <? endforeach;?>
  <section class="detail_button_box">
    <div class="home_footer_buttons center">
      <a href="#" class="genoeg_button">
        <header>
          <h1 class="genoeg_button_title detail_button">Vertel je Facebook vrienden dat je aanwezig zal zijn</h1>
        </header>
      </a>
      <a href="#" class="genoeg_button">
        <header>
          <h1 class="genoeg_button_title detail_button">Plan dit evenement rechtstreeks in je agenda</h1>
        </header>
      </a>
    </div>
  </section>
