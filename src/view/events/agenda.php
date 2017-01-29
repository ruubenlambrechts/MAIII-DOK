<section class="section agenda_months">
  <nav class="agenda_months_nav">
    <a href="index.php?page=agenda">Toon alles</a>
    <a href="index.php?page=agenda&month=mei">Mei</a>
    <a href="index.php?page=agenda&month=juni">Juni</a>
    <a href="index.php?page=agenda&month=juli">Juli</a>
    <a href="index.php?page=agenda&month=augustus">Augustus</a>
    <a href="index.php?page=agenda&month=september">September</a>
  </nav>
</section>
<section>
  <form class="agenda_form_box" action="index.php?page=agenda" method="get">
    <label for="moestuin">Moestuin</label>
    <input name="page" value="agenda" hidden>
    <input type="checkbox" name="tag" value="moestuin" id="moestuin">
    <input type="submit">
  </form>
</section>

<section class="section">
  <header class="title_box">
    <h1 class="title">De eerst volgende evenementen</h1>
  </header>
  <div class="event_container">
    <?php $i = 0;
    foreach($events as $event): ?>
      <a class="event_box<?php
        if (count($event['locations']) < 2) {
        foreach($event['locations'] as $location):
          echo " event_" . $location['name'];
        endforeach;
      }; ?>" href="index.php?page=detail&id=<?php echo $event['id']?>">

        <?php
          foreach($event['media'] as $media): echo $media['media1'];
          // echo $media['media2'];
          // echo $media['media3'];
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
    <? endforeach;?>
  </div>
</section>
