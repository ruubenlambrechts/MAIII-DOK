<a href="index.php?page=agenda">Go back</a>
  <?php $currentTitle = 'none';
        $i = 0; ?>
  <?php foreach($events as $event): ?>
    <?php if ($event['id'] == $_GET['id']): ?>
      <?php $currentTitle = $event['title'];
      $currentDate = $event['start'];
      $currentTags = $event['tags']; ?>
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
      <section class="section detail_media_box">
          <?php if ($event['media']['0']['media2'] != ''):
            echo "<div class='detail_media_img_box'>" . $event['media']['0']['media2'] . "</div>";
          endif; ?>
          <?php if ($event['media']['0']['media3'] != ''):
            echo "<div class='detail_media_img_box'>" . $event['media']['0']['media3'] . "</div>";
          endif; ?>
      </section>
    <?php endif; ?>
  <?php endforeach ?>

  <section class="section detail_next_recommended_box">
    <article class="detail_next_box">
      <header class="title_box">
        <h1 class="title">Het eerst volgende evenement</h1>
      </header>
      <?php foreach($events as $event): ?>
        <?php if ($currentTitle == $event['title'] && $currentDate < $event['start']) { ?>
          <article>
            <a class="event_box<?php
              if (count($event['locations']) < 2) {
              foreach($event['locations'] as $location):
                echo " event_" . $location['name'];
              endforeach;
            }; ?>" href="index.php?page=detail&id=<?php echo $event['id']?>">

              <?php
                foreach($event['media'] as $media): echo $media['media1'];
              endforeach?>
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
          </article>
          <?php
          $i++;
          if ($i === 1 ) {
            break;
          }
           ?>
        <? } ?>
      <? endforeach;?>
    </article>
    <article class="detail_recommended_box">
      <header class="title_box">
        <h1 class="title">Aanbevelingen</h1>
      </header>
      <article class="detail_recommended_article">
        <?php foreach($events as $event): ?>
        <?php if ($currentTags == $event['tags'] && $currentDate < $event['start']) {
          echo 'lol';
        }; ?>
         <? endforeach;?>
      </article>
    </article>
  </section>

  <section class="detail_button_box">
    <div class="fb-share-button home_footer_buttons center" data-href="http://student.howest.be/ruuben.lambrechts/20162017/ma3/dok/index.php?page=detail&amp;id=22">
      <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fstudent.howest.be%2Fruuben.lambrechts%2F20162017%2Fma3%2Fdok%2Findex.php%3Fpage%3Ddetail%26id%3D22&amp;src=sdkpreparse" target="_blank" data-mobile-iframe="true" class="genoeg_button fb-xfbml-parse-ignore">
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
