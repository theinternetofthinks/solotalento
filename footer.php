		</main>


		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-4">
						<div class="block-footer-info">
	
							<span>C/ Raimundo Fdez. Villaverde 45, 7º A Exterior</span>
							<span class="mb-4">28003 Madrid</span>

							<a href="mailto:talento@solotalento.com">talento@solotalento.com</a>
							<div class="icons-footer">
								<a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/icon-mail.png" class="icon-mail"></a>
								<a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/icon-phone.png" class="icon-phone"></a>
								<a href=""><img src="<?php bloginfo('template_url'); ?>/assets/images/icon-linkedin.png" class="icon-linkedin"></a>

							</div>

						</div>

					</div>
					<div class="col-12 col-md-4">
			

					</div>
					<div class="col-12 col-md-4">
						<div class="block-footer-info">
							<h2 class="text-right">CONÓCENOS</h2>
							<ul class="list-sites">
								<li><a target="_blank" href="https://mcrinternational.com//">MCR Internacional</a></li>
								<li><a target="_blank" href="https://solotalentosfarma.com/">Solo Talentos Farma</a></li>
								<li><a target="_blank" href="https://www.mujeresenfarma.com/">Mujeres en Farma</a></li>
								<li><a target="_blank" href="https://www.fundaciontalentomcr.org/">Fundación TALENTO-MCR</a></li>

							</ul>	
						</div>

					</div>


				</div>
			</div>
			<div class="footer-end">
				<span>2023 MCR Internationational </span>

				<?php if(ICL_LANGUAGE_CODE=='en'): ?>
					<ul>
						<li><a href="/politica-de-privacidad">Privacy Policy</a></li>
						<!-- <li><a href="/politica-de-cookies">Cookies Policy</a></ll>-->
					</ul>
				<?php elseif(ICL_LANGUAGE_CODE=='es'): ?>
					<ul>
						<li><a href="/politica-de-privacidad">Política de privacidad</a></li>
						<!-- <li><a href="/politica-de-cookies">Política de cookies</a></ll>-->
					</ul>
				<?php endif; ?>





			</div>
			<button id="upTop" class="up-top"></button>

		</footer>


	<!-- Modal sucess-->
	<div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog" aria-labelledby="formContact" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body text-center">
			<h2>Gracias por contactar con nosotros</h2>
			<p>Nos pondremos en contacto lo antes posible</p>
		</div>
		</div>
	</div>
	</div>




	<!-- Modal -->
	<div class="modal fade" id="formContact" tabindex="-1" role="dialog" aria-labelledby="formContact" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<?php echo do_shortcode( '[contact-form-7 id="5" title="Formulario de contacto 1"]' ); ?>

		</div>
		</div>
	</div>
	</div>


		<?php wp_footer(); ?>


	</body>
</html>