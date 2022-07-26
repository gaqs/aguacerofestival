<section id="stands_form" class="container mt-5 pt-5 mb-5">
    <?php if(isset($validation)): ?>
        <div class="col-12">
            <div class="alert alert-danger" role="alert">
            <?= $validation->listErrors() ?>
            </div>
        </div>
    <?php endif ?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fs-4 text-red">Postulacion Stands</h5>
            <hr>
            <h6 class="card-subtitle mb-2 text-muted"></h6>
            <div class="card-body">
                <form class="row needs-validation" action="<?= base_url('home/stands'); ?>" method="post" enctype="multipart/form-data"  novalidate>
                    <div class="mb-3 col-md-5">
                        <label for="input_email" class="form-label">Correo </label>
                        <input type="email" class="form-control" id="input_email" name="email" value="<?= set_value('email');?>" aria-describedby="email_help" required>
                        <div id="email_help" class="form-text">Correo electrónico de la persona responsable.</div>
                    </div>
                    <div class="mb-3 col-md-7">
                        <label for="input_name" class="form-label">Nombre Stand </label>
                        <input type="text" class="form-control" id="input_name" name="name" value="<?= set_value('name');?>" aria-describedby="name_help" required>
                        <div id="name_help" class="form-text">El nombre que indiques será utilizado para la página web y en la cenefa que va en el stand.</div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="input_rrss" class="form-label">Link Red Social </label>
                        <input type="text" class="form-control" id="rrss_email" name="rrss" value="<?= set_value('rrss');?>" aria-describedby="rrss_help" required>
                        <div id="rrss_help" class="form-text">Indicar sólo un link para la difusión en la página web y redes sociales. </div>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="file_logo" class="form-label" aria-describedby="rrss_logo">Logo expositor</label>
                        <input class="form-control" type="file" id="file_logo" name="logo" aria-describedby="logo_help" required>
                        <div id="logo_help" class="form-text">Tamaño máximo 20 mb. Formatos permitidos .jpeg, .jpg, .png, .pdf, .doc, .xls, .docx, .xslx, .odt, y .odf</div>
                        <div class="invalid-feedback">Archivo inválido</div>
                    </div>
                    <div class="mb-3 col-md-8">
                        <label for="input_description" class="form-label">Descripción de Marca/Artista/Tienda</label>
                        <textarea class="form-control" id="input_description" name="description" value="<?= set_value('description');?>" rows="3" aria-describedby="description_help" required></textarea>
                        <div id="description_help" class="form-text">La información que indiques, será utilizada para evaluar la compatibilidad con el evento al momento de seleccionar y para conocer el trabajo que planeas mostrar en el festival.</div>
                    </div>
                    <div class="mb-3 col-md-4">
                    <label for="" class="form-label">Cantidad de Stands a postular</label>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-8 col-form-label">Email</label>
                        <div class="col-sm-4">
                        <input type="number" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-8 col-form-label">Password</label>
                        <div class="col-sm-4">
                        <input type="number" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    </div>
                    
                    
                    <div class="col-md-12 mt-3">
                        <div class="card m-0">
                            <div class="card-body">
                                <h5 class="card-title text-red">Datos del Responsable</h5>
                                <hr>
                                <div class="row">
                                    <div class="mb-3 col-md-8">
                                        <label for="input_resp_name" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="input_resp_name" name="resp_name" value="<?= set_value('resp_name');?>" aria-describedby="resp_name_help" required>
                                        <div id="resp_name_help" class="form-text"></div>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="input_resp_phone" class="form-label">Teléfono contacto</label>
                                        <input type="text" class="form-control" id="input_resp_phone" name="resp_phone" value="<?= set_value('resp_phone');?>" aria-describedby="resp_phone_help" required>
                                        <div id="resp_phone_help" class="form-text"></div>
                                    </div>
                                    <div class="mb-3 col-md-5">
                                        <label for="input_resp_email" class="form-label">Correo electrónico</label>
                                        <input type="text" class="form-control" id="input_resp_email" name="resp_email" value="<?= set_value('resp_email');?>" aria-describedby="resp_email_help" required>
                                        <div id="resp_email_help" class="form-text"></div>
                                    </div>
                                    <div class="mb-3 col-md-7">
                                        <label for="select_activity" class="form-label">Actividad comercial </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radio_activity" id="radio_activity_1" value="Entrego Boleta" checked required>
                                            <label class="form-check-label" for="radio_activity_1">
                                                Entrego Boleta
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radio_activity" id="radio_activity_2" value="Tasación Independiente" required>
                                            <label class="form-check-label" for="radio_activity_2">
                                                Tasación Independiente
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radio_activity" id="radio_activity_3" value="Tasación Grupal" required>
                                            <label class="form-check-label" for="radio_activity_3">
                                                Tasación Grupal <small>(Aguacero Festival lo incluirá en su lista, costo adicional de $10.000)</small>
                                            </label>
                                        </div>
                                        <div id="activity_help" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="input_sii" class="form-label">Giro registrado en SII </label>
                                        <input type="text" class="form-control" id="input_sii" name="sii" value="<?= set_value('sii');?>" aria-describedby="sii_help" required>
                                        <div id="sii_help" class="form-text">Ya sea como persona natural o empresa, debe indicar a qué corresponde su tipo de venta</div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="input_participants" class="form-label">Listado de los participantes</label>
                                        <textarea class="form-control" id="input_participants" name="participants" value="<?= set_value('participants');?>" rows="3" aria-describedby="participants_help" required></textarea>
                                        <div id="participants_help" class="form-text">Indicar a las personas que participarán durante los días del evento ya que tendrán acceso exclusivo a la bodega. Separar nombres por una coma.</div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="file_pase" class="form-label" aria-describedby="file_pase">Pases de movilidad</label>
                                        <input class="form-control" type="file" id="file_pase" name="pase" aria-describedby="file_pase_help" required>
                                        <div id="file_pase_help" class="form-text">Tamaño máximo 20 mb. Formatos permitidos .jpeg, .jpg, .png, .pdf, .doc, .xls, .docx, .xslx, .odt, y .odf</div>
                                        <div class="invalid-feedback">Archivo inválido</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="card m-0" id="datos_bancarios">
                            <div class="card-body">
                                <h5 class="card-title text-red">Datos Bancarios en caso de devolución</h5>
                                <hr>
                                <div class="row">
                                <div class="mb-3">
                                        <label for="input_bank_titular" class="form-label">Nombre completo </label>
                                        <input type="text" class="form-control" id="input_bank_titular" name="bank_titular" value="<?= set_value('bank_titular');?>" aria-describedby="bank_titular_help" required>
                                        <div id="bank_titular_help" class="form-text"></div>
                                    </div>
                                    <div class="mb-3 col-md-5">
                                        <label for="input_bank_rut" class="form-label">RUT </label>
                                        <input type="text" class="form-control" id="input_bank_rut" name="bank_rut" value="<?= set_value('bank_rut');?>" oninput="checkRut(this)" aria-describedby="bank_rut_help" required>
                                        <div id="bank_rut_help" class="form-text"></div>
                                    </div>
                                    <div class="mb-3 col-md-7">
                                        <label for="input_bank_email" class="form-label">Correo </label>
                                        <input type="text" class="form-control" id="input_bank_email" name="bank_email" value="<?= set_value('bank_email');?>" aria-describedby="bank_email_help" required>
                                        <div id="bank_email_help" class="form-text"></div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="input_bank_name" class="form-label">Nombre del Banco</label>
                                        <select class="form-select" name="bank_name" id="input_bank_name">
                                            <?= bancos( set_value('bank_name') ); ?>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="input_bank_type" class="form-label">Tipo de Cuenta</label>
                                        <select class="form-select" name="bank_type" id="input_bank_type">
                                            <?= cuentas( set_value('bank_type') ); ?>
                                        </select>
                                        <div id="email_help" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="input_bank_number" class="form-label">Número de Cuenta </label>
                                        <input type="text" class="form-control" id="input_bank_number" name="bank_number" value="<?= set_value('bank_number');?>" aria-describedby="bank_number_help" required>
                                        <div id="bank_number_help" class="form-text"></div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <button class="btn btn-lg btn-primary w-100 mt-5" type="submit"><i class="fa-solid fa-arrow-up-right-from-square"></i> Enviar</button>


                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

