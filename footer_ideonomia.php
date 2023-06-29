		</main>


		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="wrapper-languaje">
							<div class="logo-footer">
								<?php echo get_custom_logo() ?>
							</div>

						</div>

					</div>
					<div class="col-md-8">
						<nav class="footer">
							<ul>
								<li><a href="">Blog</a></li>
								<li><a href="">Preguntas frecuentes</a></li>
								<li><a href="">Sala de prensa</a></li>
								<li><a href="">política de privacidad</a></li>
								<li><a href="">Política de cookies</a></li>
							</ul>
						</nav>
					</div>

				</div>
			</div>
	
		</footer>

		<?php wp_footer(); ?>


	</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
$('.close').click(function(){
  $(this).toggleClass('open');
  $('body').toggleClass('open-menu');
})
$('.submit-btn').click(function(){
    $('.spinner').addClass('visible');
})
document.addEventListener( 'wpcf7mailsent', function( event ) {
	console.log('mail sent')

	setTimeout(function(){ 
		$('#modalSuccess').modal('show'); 
	}, 500);
	$('.spinner').removeClass('visible');
	$('.wpcf7-response-output').hide();


})
document.addEventListener( 'wpcf7invalid', function( event ) {
	$('.spinner').removeClass('visible');
})
</script>