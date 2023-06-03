<footer class="page-footer font-small mdb-color pt-4 mt-4">
  <div class="container text-start">
    <div class="row text-start mt-3 pb-3">

      <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">AGUACERO COMICS 2023</h6>
        <p>
          <address>
            <strong>Aguacero Festival Internacional de Comics de Valdivia</strong>
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
        <p><i class="fa fa-envelope mr-3"></i> contactofestival@aguacerocomics.cl</p>
        <p><i class="fa fa-envelope mr-3"></i> competencia@aguacerocomics.cl</p>
        <!--
        <p><i class="fa fa-phone mr-3"></i>  (+65) 2 261315 </p>
        -->
      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Links Útiles</h6>
        <p><a href="https://www.cultura.gob.cl/" target="_blank">Ministerio de las Culturas, las Artes y el Patrimonio</a></p>
        <p><a href="https://www.prochile.gob.cl/" target="_blank">ProChile</a></p>
        <p><a href="https://www.munivaldivia.cl/web/" target="_blank">Ilustre Municipalidad de Valdivia</a></p>
        <!--
        <p><a href="http://www.cecs.cl/website/" target="_blank">CECs</a></p>
        -->
      </div>
    </div>

    <hr>

    <div class="row d-flex align-items-center pb-2">
      <div class="col-md-12 col-lg-12">
        <!--Copyright-->
        <small class="text-center text-md-left"><i>Asociación de Comics de Valdivia | <strong> Gustavo Quilodrán Sanhueza</strong> | Encargado Informática | gaqs.02@gmail.com</i></small>
      </div>
    </div>

  </div>

</footer>
</main>
</body>
</html>

<!-- modal pop up-->
<div class="modal fade" id="le_modal" tabindex="-1" aria-labelledby="le_modal_label" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" name="button_close" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="<?= base_url('public/img/afiche_2023.jpg');?>" alt="" class="w-100">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" name="button_close">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="<?= base_url('dist/bootstrap-5.1.3/js/bootstrap.bundle.js');?>"></script>
<script type="text/javascript" src="<?= base_url('dist/magnificpopup-1.1.0/jquery.magnific-popup.js')?>"></script>
<script type="text/javascript" src="<?= base_url('js/file-validator.js');?>"></script>

<script type="text/javascript" src="<?= base_url('dist/datatables-1.11.3/datatables.js');?>"></script>
<script type="text/javascript" src="<?= base_url('dist/datatables-1.11.3/Responsive-2.2.9/js/responsive.bootstrap5.js');?>"></script>

<script type="text/javascript" src="<?= base_url('js/countdown.js');?>"></script>  <!-- tucutucu tucutu cutu -->
<script type="text/javascript" src="<?= base_url('dist/flipdown/flipdown.js');?>"></script>

<script type="text/javascript" src="<?= base_url('js/scripts.js?v=0.1');?>"></script>

<!-- Custom script -->
<script type="text/javascript">

  $(document).ready(function(){

    $('#stands_table').DataTable({
      "language" : {
        "url" : "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json",
        "responsive": true
      },
      "bStateSave" : true,
      "fnStateSave" : function(oSettings, oData){
          localStorage.setItem('DataTables', JSON.stringify(oData));
      },
      "fnStateLoad": function(oSettings){
        return JSON.parse(localStoragegetItem('DataTables'));
      }
    });


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
      type: 'image/jpeg image/jpg image/png application/pdf'
      //.jpeg .jpg .png .pdf .doc .xls .docx .xslx .odt .odf
    });

  $('.popup-youtube_1').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });
  
  /*
  setTimeout(function(){
    $('.popup-youtube_1').click(); // Will open the popup
  }, 1000);
  */
  


  });//end document ready

var base_url = '<?= base_url(); ?>';

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


var now = Math.floor(Date.now() / 1000);

//console.log(now);

ScrollReveal().reveal('.rs-icons', {
  interval: 300,
  reset: false,
  delay: 40,
  scale: 0.8
});

ScrollReveal().reveal('.stands_img', {
  interval: 300,
  reset: false,
  delay: 40,
  scale: 0.8
});

</script>
