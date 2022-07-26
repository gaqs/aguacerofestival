<footer class="page-footer font-small mdb-color pt-4 mt-4">
  <div class="container text-start">
    <div class="row text-start mt-3 pb-3">

      <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">AGUACERO</h6>
        <p>
          <address>
            <strong>Festival Internacional de Comics de Valdivia</strong>
            <br>
            <a href="#" target="_blank">Más información</a>
          </address>
        </p>
      </div>

      <hr class="w-100 clearfix d-md-none">

      <hr class="w-100 clearfix d-md-none">


      <div class="col-md-5 col-lg-4 col-xl-4 mx-auto mt-4">
        <h6 class="text-uppercase mb-4 font-weight-bold">CONTACTO</h6>
        <!--
        <p><i class="fa fa-home mr-3"></i>Av. Presidente Ibañez #600.<br>Edificio Consistorial II<br></p>
        -->
        <p><i class="fa fa-envelope mr-3"></i> aguacerocomics@gmail.com</p>
        <!--
        <p><i class="fa fa-phone mr-3"></i>  (+65) 2 261315 </p>
        -->
      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Links Útiles</h6>
        <p><a href="https://www.cultura.gob.cl/" target="_blank">Ministerio de las Culturas, las Artes y el Patrimonio</a></p>
        <p><a href="https://www.prochile.gob.cl/" target="_blank">ProChile</a></p>
        <p><a href="https://www.munivaldivia.cl/web/" target="_blank">Municipalidad de Valdivia</a></p>
        <!--
        <p><a href="http://www.cecs.cl/website/" target="_blank">CECs</a></p>
        -->
      </div>
    </div>

    <hr>

    <div class="row d-flex align-items-center pb-2">
      <div class="col-md-12 col-lg-12">
        <!--Copyright-->
        <small class="text-center text-md-left"><i>Asociación de Comics de Valdivia Aguacero 2021 | <strong> Gustavo Quilodrán Sanhueza</strong> | Encargado Informática | gaqs.02@gmail.com</i></small>
      </div>
    </div>

  </div>

</footer>
</main>
</body>
</html>

<script type="text/javascript" src="<?= base_url('js/jquery-3.6.0.js');?>"></script>
<script type="text/javascript" src="<?= base_url('dist/bootstrap-5.1.3/js/bootstrap.bundle.js');?>"></script>
<script type="text/javascript" src="<?= base_url('js/scrollreveal.js');?>"></script>
<script type="text/javascript" src="<?= base_url('dist/magnificpopup-1.1.0/jquery.magnific-popup.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/instagram.js?v=0.22');?>"></script>
<script type="text/javascript" src="<?= base_url('js/file-validator.js');?>"></script>
<script type="text/javascript" src="<?= base_url('js/scripts.js?v=0.1');?>"></script>

<!-- Custom script -->
<script type="text/javascript">

  $(document).ready(function(){

    $('input[type=file]').fileValidator({
    onInvalid:
      function(type, file){
        $(this).addClass('is-invalid').val('');
        $(this).next('.feedback').addClass('invalid-feedback').html('Archivo inválido.');
      },
    onValidation:
      function(files){
        $(this).removeClass('is-invalid');
        $(this).next('.feedback').removeClass('invalid-feedback').html('');
      },
    maxSize: '20000000',
    type: 'image/jpeg image/jpg image/png application/pdf application/msword application/vnd.ms-powerpoint application/vnd.ms-excel application/vnd.openxmlformats-officedocument.wordprocessingml.document application/vnd.openxmlformats-officedocument.spreadsheetml.sheet application/vnd.oasis.opendocument.spreadsheet application/vnd.oasis.opendocument.text'
    //.jpeg .jpg .png .pdf .doc .xls .docx .xslx .odt .odf
  });


  });//end document ready

var base_url = '<?= base_url(); ?>';
/*
$('#carousel_top').carousel('pause')
*/
$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});


$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

/*
$("#galeria_aguacero").nanogallery2({
  thumbnailHeight:  300,
  thumbnailWidth:   "auto",
  thumbnailAlignment: "justified",
  thumbnailL1BorderHorizontal: 0,
  thumbnailL1BorderVertical: 0,
  thumbnailL1GutterWidth: 10,
  thumbnailL1GutterHeight: 10,
  thumbnailHoverEffect2: "scale120"

});
*/
var now = Math.floor(Date.now() / 1000);

//console.log(now);
/*
$('.countdown').final_countdown({
    'start': 1624896000,
    'end': 1639143000,
    'now': now,
    seconds:{
      borderColor:'#007bff',
      borderWidth:'15'
    },
    minutes:{
      borderColor:'#20c997',
      borderWidth:'15'
    },
    hours:{
      borderColor:'#dc3545',
      borderWidth:'15'
    },
    days:{
      borderColor:'#fd7e14',
      borderWidth:'15'
    }
}, function() {
        // Finish Callback
});
*/
ScrollReveal().reveal('.rs-icons', {
  interval: 300,
  reset: false,
  delay: 40,
  scale: 0.8
});

ScrollReveal().reveal('.clock-item', {
  interval: 400,
  reset: false,
  delay: 90,
  distance: '-100px'
});

$(document).ready(function() {

  $('.popup-youtube_1').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });


});
</script>
