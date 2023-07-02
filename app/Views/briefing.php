<section id="briefing" class="py-5 mt-5">
    <div class="container">
        <h2 class="text-red display-4 text-center">CARACTERISTICAS DE STANDS Y CONSIDERACIONES</h2>
        <div class="row">
            <div class="col-md-7">
                <div class="card w-100 h-100">
                    <div class="card-body">
                        <h2 class="card-title">Stands</h2>
                        <p class="card-text">
                        <table class="table">
                            <tr>
                                <td width="150"><b>Valor: </b></td>
                                <td>$119.000.- (incluye IVA)</td>
                            </tr>
                            <tr>
                                <td><b>Modulación: </b></td>
                                <td>2x2 mts. (4 mts<sup>2</sup>)</td>
                            </tr>
                            <tr>
                                <td><b>Iluminación: </b></td>
                                <td>2 focos spot y tomacorriente triple (maximo 3 amperios)</td>
                            </tr>
                            <tr style="border-color:transparent;">
                                <td><b>Extras: </b></td>
                                <td>
                                    2 repisas<br>
                                    1 mesa tipo counter (100x50x75 cms.)<br>
                                    2 sillas<br>
                                </td>
                            </tr>
                        </table>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card w-100 h-100 ext-start">
                    <div class="card-body">
                        <h2 class="card-title">Adicionalmente</h2>
                        <p class="card-text">
                        <ol>
                            <li>Cenefa incluye numeración, nombre y logotipo del expositor.</li>
                            <li>Visualización del expositor en nuestra página web para difusión durante los meses septiembre, octubre, noviembre y diciembre.</li>
                            <li>Publicación del expositor en nuestras redes sociales Facebook e Instagram.</li>
                            <li>Credenciales.</li>
                            <li>Bodega.</li>
                        </ol>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-3">
                <div class="card w-100 text-start">
                    <div class="card-body">
                        <h2 class="card-title">A considerar</h2>
                        <p class="card-text">
                        <ol>
                            <li>Máximo 2 marcas por stand.</li>
                            <li>Máximo 2 personas por stand (se permite rotar durante los días del evento, con personas mencionadas en la postulación).</li>
                            <li>El stand no incluye mantel.</li>
                            <li>En caso de necesitarlo, se permite el uso de mesas y accesorios que sean de propiedad de los expositores. Es responsabilidad de cada expositor velar por el cuidado de sus pertenencias.</li>
                            <li>Les recomendamos anticiparse al uso del espacio que proporciona el stand, ya que la organización no proporcionará elementos adicionales a los indicados anteriormente, debido a malas prácticas de algunos participantes en versiones anteriores.</li>
                            <li>Cada seleccionado debe hacerse responsable de realizar el trámite en el Servicio de Impuestos Internos, ya sea, tasación de renta presunta o traslado de boletas.</li>
                            <li>De acuerdo a la <b>Ordenanza Municipal de Derechos</b>, cada stand seleccionado debe pagar ½ UTM, correspondiente al ejercicio de la actividad e impuesto municipal. </li>
                        </ol>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check_stands" onclick="is_checked()">
                    <label class="form-check-label" for="check_stands" style="cursor:pointer;">
                        He leído y estoy de acuerdo con las características y condiciones mencionadas para participar.
                    </label>
                </div>
            </div>
            <div class="col-md-12 mt-3">
                <a href="<?= base_url('home/stands'); ?>" class="btn btn-primary btn-lg w-100 bg-red text-white disabled pt-2 w-10" id="next_stands">
                    <h2><i class="fa-solid fa-paste"></i> Ir al Formulario</h2>
                </a>
            </div>

        </div>
    </div>
</section>
<script>
    function is_checked() {
        var checkBox = document.getElementById("check_stands");
        var button = document.getElementById("next_stands");
        if (checkBox.checked == true) {
            button.classList.remove("disabled");
        } else {
            button.classList.add("disabled");
        }
    } 
</script>