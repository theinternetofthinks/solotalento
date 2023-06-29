$('#openMenu').click(function() {
  $('body').toggleClass('menu-opened');
});
$(window).scroll(function() {
  const scroll = $(window).scrollTop();
  // Do something
  if (scroll > 60) {
    $('header.header').addClass('show-submenu');
    $('.up-top').addClass('visible');
  } else {
    $('header.header').removeClass('show-submenu');
    $('.up-top').removeClass('visible');
  }
});
$('.js-show-more').click(function(e) {
  e.preventDefault();
  $(this).prev().toggleClass('opened');
  if ($(this).prev().hasClass('opened')) {
    $(this).find('.elementor-button-text').text('Leer menos');
  } else {
    $(this).find('.elementor-button-text').text('Leer más');
  }
});

$('#upTop').click(function() {
  $('html, body').animate({scrollTop: 0}, 'slow');
  return false;
});
$('.sub-menu li').click(function(e) {
  console.log('clicked');
  $('body').removeClass('menu-opened');
  e.stopPropagation();
  setTimeout(() => {
    const target = $(this).find('a').attr('href');
    const position = $(target).position();
    if ($('.block-europe').length) {
      console.log('yes');
      const offset = position.top + 200;
      $('html, body').scrollTop(offset, 'slow');
    } else {
      console.log('no');
      $('body').removeClass('menu-opened');
      const offset = position.top - 160;
      $('html, body').scrollTop(offset, 'slow');
    }
  }, 100);
});

$('.js-contact').click(function(e) {
  e.preventDefault();
  console.log('clicked');
  $('#formContact').modal('show');
});

$('.submit-btn').click(function() {
  $('.spinner').addClass('visible');
});
document.addEventListener( 'wpcf7mailsent', function( event ) {
  console.log('mail sent');
  setTimeout(function() {
    $('#modalSuccess').modal('show');
  }, 500);
  $('.spinner').removeClass('visible');
  $('.wpcf7-response-output').hide();
});
document.addEventListener( 'wpcf7invalid', function( event ) {
  $('.spinner').removeClass('visible');
});
$('[name=servicio]').on('change', function( e ) {
  const valueSelected = this.value;
  if (valueSelected=='Excutive Search') {
    $('#posicion').removeClass('hidden');
  } else {
    $('#posicion').addClass('hidden');
  }
});
