<style>
   .modal-body .row label{
      font-weight:bolder;
   }
</style>
<div class="modal-header">
  <h5 class="modal-title" id="show_modal_label">STAND</h5>
  <button tylabele="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">

<h5>Datos Stands</h5>
<hr>
<div class="row">
   <div class="col-md-6">
      <label>Nombre:</label>
      <?= $stand['name'];?>
   </div>
   <div class="col-md-6">
      <label>Logo:</label>
      <?php
         for ($i=0; $i < count($stand['logo']); $i++) { 
            echo '<a class="me-3" href="'.base_url('files/stands/'.$stand['id'].'/'.$stand['logo'][$i].'/' ).'" target="_blank" role="button">Logo #'.($i+1).'</a>';
         }
      ?>
   </div>
   <div class="col-md-6">
      <label>Red Social:</label>
      <?= $stand['rrss'];?>
   </div>
   <div class="col-md-12">
      <label>Descripcion:</label>
      <?= $stand['description'];?>
   </div>
   <div class="col-md-4">
      <label>Stands:</label>
      <?= $stand['stands'];?>
   </div>
</div>
<h5 class="mt-5">Datos Responsables</h5>
<hr>
<div class="row">
   <div class="col-md-8">
      <label>Nombre responsable:</label>
      <?= $stand['resp_name'];?>
   </div>
   <div class="col-md-4">
      <label>Teléfono responsable:</label>
      <?= $stand['resp_phone'];?>
   </div>
   <div class="col-md-12">
      <label>Correo electrónico:</label>
      <?= $stand['resp_email'];?>
   </div>
   <div class="col-md-12">
      <label>Pais:</label>
      <?= $stand['resp_country'];?>
   </div>
   <div class="col-md-12">
      <label> Listado de los participantes:</label>
      <?= $stand['resp_participants'];?>
   </div>
</div>
<h5 class="mt-5">Actividad Comercial</h5>
<hr>
<div class="row">
   <div class="col-md-12">
      <label>Nombre de la Empresa o Persona:</label>
      <?= $stand['business_name'];?>
   </div>
   <div class="col-md-12">
      <label>RUT Empresa:</label>
      <?= $stand['business_rut'];?>
   </div>
   <div class="col-md-12">
      <label>Dirección:</label>
      <?= $stand['business_address'];?>
   </div>
   <div class="col-md-12">
      <label>Giro comercial en SII :</label>
      <?= $stand['business_sii'];?>
   </div>
   <div class="col-md-12">
      <label>Actividad comercial:</label>
      <?= $stand['business_sell'];?>
   </div>
</div>
<h5 class="mt-5">Representante Legal</h5>
<hr>
<div class="row">
   <div class="col-md-12">
      <label>Nombre:</label>
      <?= $stand['business_legalname'];?>
   </div>
   <div class="col-md-12">
      <label>Dirección:</label>
      <?= $stand['business_legaladdress'];?>
   </div>
   <div class="col-md-12">
      <label>Teléfono:</label>
      <?= $stand['business_legalphone'];?>
   </div>

</div>
<h5 class="mt-5">Datos Bancarios en caso de devolución</h5>
<hr>
<div class="row">
   <div class="col-md-6">
      <label>Nombre completo:</label>
      <?= $stand['bank_titular'];?>
   </div>
   <div class="col-md-6">
      <label>RUT:</label>
      <?= $stand['bank_rut'];?>
   </div>
   <div class="col-md-12">
      <label>Correo:</label>
      <?= $stand['bank_email'];?>
   </div>
   <div class="col-md-6">
      <label>Nombre del Banco:</label>
      <?= $stand['bank_name'];?>
   </div>
   <div class="col-md-6">
      <label>Tipo de Cuenta:</label>
      <?= $stand['bank_type'];?>
   </div>
   <div class="col-md-12">
      <label>Número de Cuenta:</label>
      <?= $stand['bank_number'];?>
   </div>
</div>
</div>
<div class="modal-footer">
  <button tylabele="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
</div>
