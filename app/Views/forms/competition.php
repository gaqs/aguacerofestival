<section id="stands_form" class="container mt-5 pt-5 mb-5">
   <?php if (isset($validation)): ?>
      <div class="col-12">
         <div class="alert alert-danger" role="alert">
            <?= $validation->listErrors() ?>
         </div>
      </div>
   <?php endif ?>
   <form class="row needs-validation" action="<?= base_url('home/competition'); ?>" method="post" enctype="multipart/form-data" novalidate> <!-- <?= base_url('home/competition'); ?> -->
      <div class="card">
         <div class="card-body">
            <h2 class="card-title fs-2 text-red text-center">9NA COMPETENCIA NACIONAL DE CÓMICS AGUACERO 2023</h2>
            <hr>
            <p class="ms-3 mb-0"><small>*Todos los datos son obligatorios</small></p>
            <div class="card-body">
               <div class="col-md-12">

                  <div class="card m-0">
                     <div class="card-body">
                        <div class="card-title text-red">Datos básicos</div>
                        <hr>
                        <p class="card-text">
                           <div class="row">
                              <div class="mb-3 col-md-10">
                                 <label for="input_name" class="form-label">Nombre completo</label>
                                 <input type="text" class="form-control" id="input_members" name="name" value="<?= set_value('name'); ?>" aria-describedby="name_help" required>
                                 <div id="name_help" class="form-text"></div>
                              </div>
                              <div class="mb-3 col-md-2 col-4">
                                 <label for="input_age" class="form-label">Edad</label>
                                 <input type="number" class="form-control" id="input_age" name="age" value="<?= set_value('age'); ?>" aria-describedby="age_help" required>
                                 <div id="age_help" class="form-text"></div>
                              </div>
                              <div class="mb-3 col-md-7">
                                 <label for="input_email" class="form-label">Correo electrónico</label>
                                 <input type="email" class="form-control" id="input_email" name="email" value="<?= set_value('email'); ?>" aria-describedby="email_help" required>
                                 <div id="email_help" class="form-text"></div>
                              </div>
                              <div class="mb-3 col-md-5">
                                 <label for="input_phone" class="form-label">Teléfono</label>
                                 <input type="text" class="form-control" id="input_phone" name="phone" value="<?= set_value('phone'); ?>" aria-describedby="phone_help" required>
                                 <div id="phone_help" class="form-text"></div>
                              </div>
                              <div class="mb-3 col-md-8">
                                 <label for="input_address" class="form-label">Dirección (calle, número, comuna, región)</label>
                                 <input type="text" class="form-control" id="input_address" name="address" value="<?= set_value('address'); ?>" aria-describedby="address_help" required>
                                 <div id="address_help" class="form-text">Ejemplo. Avenida Don Ramon 2335, Valdivia, Region de los Rios.</div>
                              </div>
                              <div class="mb-3 col-md-4">
                                 <label for="select_nacionality" class="form-label">Nacionalidad</label>
                                 <select class="form-select" aria-label="" name="nacionality" id="select_nacionality">
                                    <?= paises( set_value('nacionality') ); ?>
                                 </select>
                              </div>

                           </div>
                        </p>
                     </div>
                  </div>
                  <!--  --------------------------------------------  -->
                  <div class="card mt-5">
                     <div class="card-body">
                        <h5 class="card-title text-red">Datos de la obra</h5>
                        <hr>
                        <p class="card-text">

                           <div class="row">
                           <div class="mb-3 col-md-3 col-8">
                                 <label for="input_category" class="form-label"><b>Categoria a participar</b></label>
                                 <select class="form-select" aria-label="" name="category" id="input_category">
                                    <option value="junior">Junior (9 a 12 años)</option>
                                    <option value="emergente">Emergente (13 a 18 años)</option>
                                    <option value="master">Master (18+ años)</option>
                                 </select>
                              </div>

                              <div class="mb-3 col-md-9 col-12">
                                 <label for="input_artwork_name" class="form-label">Nombre de la obra </label>
                                 <input type="text" class="form-control" id="input_artwork_name" name="artwork_name" value="<?= set_value('artwork_name'); ?>" aria-describedby="artwork_name_help" required>
                                 <div id="artwork_name_help" class="form-text"></div>
                              </div>
                              <div class="mb-3 col-md-12">
                                 <label for="input_description" class="form-label">Nombre(s) miembro(s) del equipo y fecha(s) de nacimiento </label>
                                 <textarea class="form-control" id="input_description" name="description" rows="4" aria-describedby="description_help" required><?= set_value('description'); ?></textarea>
                                 <div id="description_help" class="form-text">En el caso de las categorías junior y emergente, acá deberá agregar el nombre del padre/tutor junto con el teléfono de contacto.</div>
                              </div>
                             

                              <div class="mb-3 col-md-12">
                                 <label for="file_comic" class="form-label" aria-describedby="">Sube tu trabajo aquí</label>
                                 <input class="form-control" type="file" id="file_comic" name="comic[]" aria-describedby="file_comic_help" required>
                                 <div id="file_comic_help" class="form-text">Formatos permitidos .jpg, .jpeg, .png, .pdf. Resolución no menor a 2480 x 3508 pixeles, 300 ppp.</div>
                                 <div class="invalid-feedback">Archivo inválido</div>
                              </div>

                              <div class="mb-3 col-md-12">
                                 <label for="file_comic_2" class="form-label" aria-describedby="">Sube un segundo trabajo aquí (opcional)</label>
                                 <input class="form-control" type="file" id="file_comic_2" name="comic[]" aria-describedby="file_comic_2_help">
                                 <div id="file_comic_2_help" class="form-text">Formatos permitidos .jpg, .jpeg, .png, .pdf. Resolución no menor a 2480 x 3508 pixeles, 300 ppp.</div>
                                 <div class="invalid-feedback">Archivo inválido</div>
                              </div>

                              <button class="btn btn-lg btn-primary w-100 mt-5" type="submit" id="submit_stand" name="submit_something">
										   <i class="fa-solid fa-arrow-up-right-from-square"></i> Enviar 
                              </button>
                           </div>

                        </p>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </form>
</section>