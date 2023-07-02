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
            <th>Edad</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Nacionalidad</th>
            <th>Categoria</th>
            <th>Descripcion</th>
            <th>Link obra</th>
            <th>Fecha postulacion</th>
        </tr>
        <?php
          for ($i=0; $i < count($competition); $i++) { 
          
            $dir = ROOTPATH . 'public/files/competition/' . $competition[$i]['id'] . '/';
            $filename = array_map('basename', glob($dir."*.{jpg,png,pdf}", GLOB_BRACE));
            $link = base_url().'/public/files/competition/'.$competition[$i]['id'].'/'.$filename[0];

          echo '<tr>
                  <td>'.$competition[$i]['id'].'</td>
                  <td>'.$competition[$i]['name'].'</td>
                  <td>'.$competition[$i]['age'].'</td>
                  <td>'.$competition[$i]['email'].'</td>
                  <td>'.$competition[$i]['phone'].'</td>
                  <td>'.$competition[$i]['address'].'</td>
                  <td>'.$competition[$i]['nacionality'].'</td>
                  <td>'.$competition[$i]['category'].'</td>
                  <td>'.$competition[$i]['artwork_name'].'</td>
                  <td>'.$competition[$i]['description'].'</td>
                  <td>'.$competition[$i]['created_at'].'</td>
                  <td><a href="'.$link.'" target="_blank">Click aqui!</a></td>
            <tr>';   
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

