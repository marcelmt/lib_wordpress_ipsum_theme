<?php
query_posts(
	array(
		'category_name' => 'quem-somos',
		'order' => 'ASC',
		'posts_per_page' => 4
	));
?>

<section id="partners" class="container p-0">

	<div class="row">
		<div class="section-title">
		  Partners
		</div>
	</div>


	<div class="row justify-content-center p-0">
	<div class="col-12 col-lg-7 bg-white p-0" style="line-height: 0;">

<?php
$i = 1;
if(have_posts()) : while(have_posts()) : the_post();

  $partners[$i]['img']     = get_the_post_thumbnail_url();
  $partners[$i]['name']    = strtok(get_the_title(), ' ');
  $partners[$i]['title']   = get_the_title();
  $partners[$i]['slug']    = get_post_field('post_name', get_post());
  $partners[$i]['excerpt'] = get_the_excerpt();

$i = ++$i;
endwhile;
endif;
				/*
				* OBS: não é utilizado o loop aqui para controlar a quebra 
				* de linha no código e evitar 'whitespace' entre as div
				* de 'inline-block'
				*/
?>

		<div class="partner-img" data-slug="<?=$partners[1]['slug']?>" style="background-image: url('<?=$partners[1]['img']?>')">
			<a id="overlay_<?=$partners[1]['slug']?>" href="#" class="overlay"><?=$partners[1]['name']?></a>
		</div><div class="partner-img" data-slug="<?=$partners[2]['slug']?>" style="background-image: url('<?=$partners[2]['img']?>')">
			<a id="overlay_<?=$partners[2]['slug']?>" href="#" class="overlay"><?=$partners[2]['name']?></a>
		</div><div class="partner-img" data-slug="<?=$partners[3]['slug']?>" style="background-image: url('<?=$partners[3]['img']?>')">
			<a id="overlay_<?=$partners[3]['slug']?>" href="#" class="overlay"><?=$partners[3]['name']?></a>
		</div><div class="partner-img" data-slug="<?=$partners[4]['slug']?>" style="background-image: url('<?=$partners[4]['img']?>')">
			<a id="overlay_<?=$partners[4]['slug']?>" href="#" class="overlay"><?=$partners[4]['name']?></a>
		</div>

	</div>


	<div class="col-12 col-lg-3 p-0 bg-white">

<?php
$i = 1;
while($i <= 4) { ?>
	<div id="description_<?=$partners[$i]['slug']?>" class="partner-description">
		<p><?=$partners[$i]['title']?></p>

		<div><?=$partners[$i]['excerpt']?></div>

		<a href="#">
			<button>ver currículo completo</button>
		</a>
	</div>
<?php
$i = ++$i; }
?>

	</div>
	</div>

</section>