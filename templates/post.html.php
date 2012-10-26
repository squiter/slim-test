<h1><?php echo $post->title;?></h1>
<h2>Escrito por <?php echo $post->author;?> em <?php echo $post->created_at->format('d/m/Y à\s H:i');?></h2>
<div><?php echo $post->content;?></div>