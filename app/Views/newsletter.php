<section id="newsletter" class="mt-5 pt-5">
  <div class="icon_back">
    <i class="fas fa-envelope-open-text"></i>
  </div>

  <div class="container text-center" style="position:relative !important;z-index:5;">
    <h1 class="text-bolder text-red display-4">NEWSLETTER</h1>
    <div class="row mb-3">
      <div class="col-md-12 text-center">
        <p><b>¿Quieres conocer paso a paso, las actividades del Festival?<br>¡Inscribete y entérate de las últimas noticias, actividades, charlas y concursos que el Festival Aguacero Cómics tiene para ti!</b></p>
      </div>
    </div>
    <div class="row text-start justify-content-center">
      <form id="newsletter_form" class="row g-3 needs-validation" action="<?= base_url('home/save_newsletter'); ?>" method="post" novalidate>
        <div class="col-md-3">
          <label for="input_name" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="input_name" name="name" placeholder="Juan" required>
          <div class="invalid-feedback">Porfavor ingrese su nombre.</div>
        </div>
        <div class="col-md-4">
          <label for="input_lastname" class="form-label">Apellidos</label>
          <input type="text" class="form-control" id="input_lastname" name="lastname" placeholder="Pérez" required>
          <div class="invalid-feedback">Porfavor ingrese su apellido.</div>
        </div>
        <div class="col-md-5">
          <label for="input_email" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="input_email" name="email" placeholder="juan@ejemplo.com" required>
          <div class="invalid-feedback">Porfavor ingrese un correo electrónico válido.</div>
        </div>

        <div class="col-md-12 text-center mt-3">
          <small class="text-center"><i>Acepto expresamente recibir la newsletter de Aguacero Festival de Comics y que puedo darme de baja facilmente en cualquier momento.</i></small>
        </div>
        <div class="col-md-12 text-center mb-5">
          <button type="submit" class="btn btn-primary bg-red text-white w-25 mt-3 hvr-grow submit_something" name="button">
            <i class="fas fa-newspaper"></i> Suscribete
          </button>
        </div>
      </form>
    </div>

  </div>
</section>

