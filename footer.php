<footer>
	<div class="container">
	<div class="row">
		<div class="col-lg-4 logo-footer">
			&nbsp;
		</div>

		<div class="footer-contact col-lg-4 pt-3 pb-3 pl-lg-5">
			<h5><?=bloginfo('name')?></h5>

			<?=nl2br(get_theme_mod('text_contact_footer', '---'))?>

			<div class="social-media-footer mt-5">
			<h5>Redes Sociais</h5>
				<?=wp_nav_menu(array('theme_location' => 'social-links'))?>
			</div>
		</div>

		<div class="col-lg-4 pt-3 pb-3">
			<h5>Entre em Contato</h5>

			<form action="#">
				<input type="text" class="form-control" placeholder="Nome">
				<input type="email" class="form-control" placeholder="e-mail">
				<input type="tel" class="form-control" placeholder="Telefone">
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="4">Mensagem</textarea>
					
					<div class="text-right">
						<button class="btn btn-primary">enviar</button>
					</div>
			</form>
		</div>
	</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>