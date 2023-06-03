<div class="container my-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

        <?php if( $id == "1"): ?>

            <div class="card border-success">
                <div class="card-header bg-success text-white p-5 text-center">
                    <i class="fa-solid fa-circle-check mb-3" style="font-size:5rem;"></i><br>
                    <h1>¡ÉXITO!</h1>
                </div>
                <div class="card-body text-success text-center">
                    <h3 class="card-title">Registrado correctamente.</h3>
                    <p>Ha sido correctamente ingresado a nuestro newsletter. Mantente atento a las nuevas noticias que enviaermos para ti. </p>
                    <a href="<?= base_url();?>" class="btn btn-lg btn-success text-white"><i class="fa-solid fa-house"></i> Volver al inicio</a>
                </div>
            </div>

        <?php 
            endif; 
            if( $id == "2"):
        ?>
            <div class="card border-success">
                <div class="card-header bg-success text-white p-5 text-center">
                    <i class="fa-solid fa-circle-check mb-3" style="font-size:5rem;"></i><br>
                    <h1>¡ÉXITO!</h1>
                </div>
                <div class="card-body text-success text-center">
                    <h3 class="card-title">Postulacion ingresada correctamente.</h3>
                    <p>Su postulacion para ser expositor del Festival Aguacero comics 2023 ha sido ingresada correctamente.</p>
                    <a href="<?= base_url();?>" class="btn btn-lg btn-success text-white"><i class="fa-solid fa-house"></i> Volver al inicio</a>
                </div>
            </div>

        <?php 
            endif; 
            if ($id == "3"):
        ?>

            <div class="card border-success">
                <div class="card-header bg-success text-white p-5 text-center">
                    <i class="fa-solid fa-circle-check mb-3" style="font-size:5rem;"></i><br>
                    <h1>¡ÉXITO!</h1>
                </div>
                <div class="card-body text-success text-center">
                    <h3 class="card-title">Participación ingresada correctamente</h3>
                    <p>Su participación para la 9na Competencia Nacional de Cómics Aguacero 2023 ha sido ingresada correctamente.</p>
                    <a href="<?= base_url();?>" class="btn btn-lg btn-success text-white"><i class="fa-solid fa-house"></i> Volver al inicio</a>
                </div>
            </div>

        <?php endif; ?>

        </div>
    </div>
</div>