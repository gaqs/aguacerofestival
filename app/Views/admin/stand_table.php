<style>
  .table_container {
    height: 500px;
    overflow: scroll;
  }
#tblData {
  width:100%;
}
</style>

<div class="container my-5 pt-5">
  <div class="row">
    <div class="col-md-12">
      <button class="btn btn-success mb-3" onclick="tableToExcel('tblData', 'W3C Example Table')" >
        <i class="fa-solid fa-file-excel"></i> Descargar nuevamente
      </button>
    </div>
    <div class="col-md-12 table_container">
      <table class="table table-sm" id="tblData" border="1">
      <meta http-equiv="content-type" content="application/vnd.ms-excel;" charset="UTF-8">
      <meta charset="UTF-8">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Red Social</th>
            <th>Descripcion</th>
            <th>Mediano</th>
            <th>Grande</th>
            <th>Nombre Resp.</th>
            <th>Email Resp.</th>
            <th>Telefono Resp.</th>
            <th>Participantes</th>
            <th>Nombre Empresa y/o Persona</th>
            <th>RUT Empresa</th>
            <th>Giro Comercial SII</th>
            <th>Actividad Comercial</th>
            <th>Nombre Completo</th>
            <th>RUT</th>
            <th>Correo</th>
            <th>Nombre Banco</th>
            <th>Tipo Cuenta</th>
            <th>Numero Cuenta</th>
            <th>Creado</th>
            <th>Foto perfil</th>
            <th>Pase movilidad</th>
        </tr>
        <?php
          for ($i=0; $i < count($stand); $i++) { 
          
            $dir = ROOTPATH . 'public/files/stands/' . $stand[$i]['id'] . '/';

            $logo = array_map('basename', glob($dir."logo_*", GLOB_BRACE));
            $pase = array_map('basename', glob($dir."pase_*", GLOB_BRACE));

          echo '<tr>
                  <td>'.$stand[$i]['id'].'</td>
                  <td>'.$stand[$i]['name'].'</td>
                  <td>'.$stand[$i]['rrss'].'</td>
                  <td>'.$stand[$i]['description'].'</td>
                  <td>'.$stand[$i]['medium'].'</td>
                  <td>'.$stand[$i]['big'].'</td>
                  <td>'.$stand[$i]['resp_name'].'</td>
                  <td>'.$stand[$i]['resp_email'].'</td>
                  <td>'.$stand[$i]['resp_phone'].'</td>
                  <td>'.$stand[$i]['resp_participants'].'</td>
                  <td>'.$stand[$i]['business_name'].'</td>
                  <td>'.$stand[$i]['business_rut'].'</td>
                  <td>'.$stand[$i]['business_sii'].'</td>
                  <td>'.$stand[$i]['business_sell'].'</td>
                  <td>'.$stand[$i]['bank_titular'].'</td>
                  <td>'.$stand[$i]['bank_rut'].'</td>
                  <td>'.$stand[$i]['bank_email'].'</td>
                  <td>'.$stand[$i]['bank_name'].'</td>
                  <td>'.$stand[$i]['bank_type'].'</td>
                  <td>'.$stand[$i]['bank_number'].'</td>
                  <td>'.$stand[$i]['created_at'].'</td>';
            echo '<td>';
                  for ($j=0; $j < count($logo); $j++) { 
                    echo base_url('files/stands/'.$stand[$i]['id'].'/'.$logo[$j].'/' ).'<br>';
                  }
            echo '</td>'; 
            echo '<td>';
                  for ($k=0; $k < count($pase); $k++) { 
                    echo base_url('files/stands/'.$stand[$i]['id'].'/'.$pase[$k].'/' ).'<br>';
                  }
            echo '</td>';     
            echo '</tr>'; 
          }
        ?>
      </table>
    </div>
  </div>
</div>
<script>

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

