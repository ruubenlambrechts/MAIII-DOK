<section class="section agenda_months">
  <form action="index.php" method="get" class="agenda_form_months_box">
    <input name="page" value="agenda" hidden>
    <div class="agenda_months_box">
      <?php if (isset($_GET['tag'])) { ?>
        <a href="index.php?page=agenda&tag=<?php echo $_GET['tag']; ?>" class="agenda_reset">Toon alles</a>
      <? } else { ?>
        <a href="index.php?page=agenda" class="agenda_reset">Toon alles</a>
      <? } ?>
      <input type="submit" name="month" value="mei">
      <input type="submit" name="month" value="juni">
      <input type="submit" name="month" value="juli">
      <input type="submit" name="month" value="augustus">
      <input type="submit" name="month" value="september">
    </div>
    <?php if (isset($_GET['tag'])) { ?>
      <input name="tag" value="<?php echo $_GET['tag']; ?>" hidden>
    <? } ?>
  </form>
</section>
<section class="agenda_form_tag_box section">
  <form action="index.php" method="get">
    <input name="page" value="agenda" hidden>
    <?php if (isset($_GET['month'])) { ?>
      <input name="month" value="<?php echo $_GET['month']; ?>" hidden>
    <? } ?>
    <div>
      <input type="submit" name="tag" value="circus">
      <input type="submit" name="tag" value="concert">
      <input type="submit" name="tag" value="dj">
      <input type="submit" name="tag" value="expo">
      <input type="submit" name="tag" value="rommelmarkt">
      <input type="submit" name="tag" value="zondag">
      <input type="submit" name="tag" value="film">
      <input type="submit" name="tag" value="gastvrijheid">
      <input type="submit" name="tag" value="moestuin">
      <input type="submit" name="tag" value="cosy cozy">
      <input type="submit" name="tag" value="voorstelling">
      <input type="submit" name="tag" value="werkgroep">
    </div>
  </form>
  <?php if (isset($_GET['tag'])) { ?>
    <?php if (isset($_GET['month'])) { ?>
      <a href="index.php?page=agenda&month=<?php echo $_GET['month']; ?>" class="agenda_reset">bin</a>
    <? } else { ?>
      <a href="index.php?page=agenda" class="agenda_reset">bin</a>
    <? } ?>
  <? } ?>
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
