<a href="index.php?page=agenda">Go back</a>

<article>
  <header><h2><?php echo $event['title'] . $event['id'] ?></h2></header>
  <dl>
    <dt>start</dt><dd><?php echo $event['start'];?></dd>
    <dt>end</dt><dd><?php echo $event['end'];?></dd>
    <dt>organiser</dt><dd><?php echo $event['organiser_id'];?></dd>
    <dt>locations</dt><dd>s<ul><?php foreach($event['locations'] as $location): ?><li><?php echo $location['name'];?></li><?php endforeach;?></ul></dd>
    <dt>tags</dt><dd><ul><?php foreach($event['tags'] as $tag): ?><li><?php echo $tag['tag'];?></li><?php endforeach;?></ul></dd>
    <dt>description</dt><dd><pre><?php echo $event['description'];?></pre></dd>
  </dl>
</article>
