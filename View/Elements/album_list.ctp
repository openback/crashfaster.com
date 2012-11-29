<nav class="<?php echo $class; ?>">
	<h1><?php echo $title; ?></h1>
	<ul>
		<?php foreach($albums as $album) { ?>
		<li><a href="<?php echo $this->Html->url(array('action' => 'view', $album['Album']['id'], $album['Album']['slug'])); ?>">
			<figure>
				<img src="http://placekitten.com/210/210" width="210" height="210" alt="album cover">
				<figcaption>
					<h2><?php echo $album['Album']['title']; ?></h2>
					<span class="label"><?php echo (empty($album['Album']['label'])) ? 'Self-Release' : $album['Album']['label']; ?></span>
					<time datetime="<?php echo $album['Album']['release_date']; ?>"><?php echo $this->Pixelpod->extractYear($album['Album']['release_date']); ?></time>
				</figcaption>
			</figure>
		</a></li>
		<?php }; ?>
	</ul>
	<nav class="pager"><a class="back" href="#">&lt;</a><a class="forward" href="#">&gt;</a></nav>
</nav>