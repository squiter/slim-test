<h1>Index!</h1>
<h2>Um teste com Templates e Views personalizadas</h2>
<ul>
  <?php if(!empty($posts)){ ?>
    <?php foreach($posts as $post){ ?>
      <li><a href="#"><?php echo $post->title;?></a> escrito por <?php echo $post->author;?></li>
    <?php } ?>
  <?php }else{ ?>
    <li>Nenhum post encontrado</li>
    <?php } ?>
</ul>
