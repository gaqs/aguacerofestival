<div class="container my-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
        
        <?php if( $id == "1"): ?>

            <div class="card border-danger">
                <div class="card-header bg-danger text-white p-5 text-center">
                    <i class="fa-solid fa-circle-exclamation mb-3" style="font-size:5rem;"></i><br>
                    <h1>¡ERROR!</h1>
                </div>
                <div class="card-body text-danger text-center">
                    <h3 class="card-title">No fue posible realizar el registro.</h3>
                    <p>No ha sido posible registrarse al newsletter, intente nuevamente. </p>
                    <a href="<?= base_url();?>" class="btn btn-lg btn-danger text-white"><i class="fa-solid fa-house"></i> Volver al inicio</a>
                </div>
            </div>

        <?php endif; ?>

        </div>
    </div>
</div>