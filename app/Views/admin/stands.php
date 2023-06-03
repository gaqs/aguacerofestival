<div class="container my-5 pt-5">
  <div class="row">
    <div class="col-5">
      <!--
      <a name="" id="" class="btn btn-success text-white mb-3" target="_blank" href="<?= base_url('admin/full_stands?token='.$token); ?>" role="button">
        <i class="fa-solid fa-file-excel"></i> Exportar Stands a Excel
      </a>
-->
      <button name="" id="download_excel" class="btn btn-success text-white mb-3" target="_blank" role="button" onclick="tableToExcel('tblData', 'W3C Example Table')">
        <i class="fa-solid fa-file-excel"></i> Exportar Stands a Excel
      </button>
    </div>
  </div>
    <div class="row justify-content-center">
        <div class="col-md-12">

        <table id="stands_table" class="table table-striped display cell-border responsive w-100 align-middle">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>M</th>
                <th>G</th>
                <th>Responsable</th>
                <th>Telefono</th>
                <th data-priority="1">Email</th>
                <th data-priority="1">Creado</th>
                <th data-priority="1">Acción</th>
            </tr>
        </thead>
        <tbody>

          <?php
            for ($i=0; $i < count($stands); $i++) {
              echo '<tr>
                      <td>'.$stands[$i]['id'].'</td>
                      <td>'.$stands[$i]['name'].'</td>
                      <td>'.substr($stands[$i]['description'], 0, 100).'...</td>
                      <td>'.$stands[$i]['medium'].'</td>
                      <td>'.$stands[$i]['big'].'</td>
                      <td>'.$stands[$i]['resp_name'].'</td>
                      <td>'.$stands[$i]['resp_phone'].'</td>
                      <td>'.$stands[$i]['resp_email'].'</td>
                      <td>'.$stands[$i]['created_at'].'</td>
                      <td>
                        <button class="btn btn-primary" id="show_stand" value="'.$stands[$i]['id'].'">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                        </td>
                    </tr>';
            }
           ?>
        </tbody>
        <tfoot>
            <tr>
               <th>ID</th>
               <th>Nombre</th>
               <th>Descripción</th>
               <th>M</th>
               <th>G</th>
               <th>Responsable</th>
               <th>Telefono</th>
               <th>Email</th>
               <th>Creado</th>
               <th>Acción</th>
            </tr>
        </tfoot>
        </table>

        </div>
    </div>
</div>

<!-- Modal agregar/editar usuario -->
<div class="modal fade" id="view_modal" tabindex="-1" aria-labelledby="view_modal_label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    </div>
  </div>
</div>

<div id="hidden_page" style="display:none;"></div>

<script>
var url = '<?= base_url(); ?>';
var token = '<?= $token ?>';

$(function(){
  $('#hidden_page').load( url + '/admin/full_stands?token='+ token);
});

$('body').on('click', '#show_stand', function(){
    var id = $(this).val();
    $.ajax({
      url : url + "/admin/show_stand?id=" + id,
      type: "GET",
      success: function(html){
        $('#view_modal .modal-dialog .modal-content').html(html);
        $('#view_modal').modal('toggle');
      }
    });
});

var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><meta http-equiv="content-type" content="application/vnd.ms-excel; charset=UTF-8"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
</script>