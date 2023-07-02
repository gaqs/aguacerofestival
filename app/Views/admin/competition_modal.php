<style>
   .modal-body .row label{
      font-weight:bolder;
   }
</style>
<div class="modal-header">
  <h5 class="modal-title" id="show_modal_label">COMPETIDOR</h5>
  <button tylabele="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">

<h5>Datos Competidor</h5>
<hr>
<div class="row">
   <div class="col-md-6">
      <label>Nombre Completo:</label>
      <?= $competition['name'];?>
   </div>
   <div class="col-md-6">
      <label>Edad:</label>
      <?= $competition['age']; ?>
   </div>
   <div class="col-md-6">
      <label>Correo eléctronico:</label>
      <?= $competition['email'];?>
   </div>
   <div class="col-md-6">
      <label>Teléfono:</label>
      <?= $competition['phone'];?>
   </div>
   <div class="col-md-6">
      <label>Direccion:</label>
      <?= $competition['address'];?>
   </div>
   <div class="col-md-6">
      <label>Nacionalidad:</label>
      <?= $competition['nacionality'];?>
   </div>
</div>

<h5 class="mt-5">Datos Obra</h5>
<hr>
<div class="row">
   <div class="col-md-12">
      <label>Categoria:</label>
      <?= $competition['category'];?>
   </div>
   <div class="col-md-12">
      <label>Nombre de la obra:</label>
      <?= $competition['artwork_name'];?>
   </div>
   <div class="col-md-12">
      <label>Miembros del equipo:</label>
      <?= $competition['description'];?>
   </div>
   <div class="col-md-12 float-right">
      <label>Obra en competencia:</label>
      <a href="<?= $image; ?>" target="_blank" rel="">Ver trabajo >></a>
   </div>
</div>

</div>
<div class="modal-footer">
  <button tylabele="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
</div>
