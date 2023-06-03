<section id="briefing" class="py-5 mt-5">
    <div class="container">
        <h2 class="text-red display-4 text-center">CARACTERISTICAS DE STANDS Y CONSIDERACIONES</h2>
        <div class="row justify-content-center">
            <div class="col-md-6 text-start">
            <div class="card w-100">
                <div class="card-body">
                    <h2 class="card-title">Stand Mediano</h2>
                    <p class="card-text">
                        <table class="table">
                            <tr>
                                <td width="150"><b>Valor: </b></td>
                                <td>$50.000.-</td>
                            </tr>
                            <tr>
                                <td><b>Modulación: </b></td>
                                <td>2x2 mts.</td>
                            </tr>
                            <tr>
                                <td><b>Iluminación: </b></td>
                                <td>2 focos spot y tomacorriente triple (maximo 3 amperios)</td>
                            </tr>
                            <tr style="border-color:transparent;">
                                <td><b>Extras: </b></td>
                                <td>
                                    2 repisas<br>
                                    1 mesa (100x50x75 cms.)<br>
                                    2 sillas<br>
                                    *No incluye mantel<br>
                                    Limite de 2 marcas  por stand<br>
                                    Máximo 2 personas  por stand (Se permite rotar durante los dias del evento, con personas previamente inscritas).
                                </td>
                            </tr>
                        </table>
                    </p>
                </div>
            </div>
                
            </div>
            <div class="col-md-6">
            <div class="card w-100">
                <div class="card-body">
                    <h2 class="card-title">Stand Grande</h2>
                    <p class="card-text">
                        <table class="table">
                            <tr>
                                <td width="150"><b>Valor: </b></td>
                                <td>$100.000.-</td>
                            </tr>
                            <tr>
                                <td><b>Modulación: </b></td>
                                <td>3x2 mts.</td>
                            </tr>
                            <tr>
                                <td><b>Iluminación: </b></td>
                                <td>2 focos spot y tomacorriente triple (maximo 3 amperios)</td>
                            </tr>
                            <tr style="border-color:transparent;">
                                <td><b>Extras: </b></td>
                                <td>
                                    2 repisas<br>
                                    1 mesa (100x50x75 cms.)<br>
                                    3 sillas<br>
                                    *No incluye mantel<br>
                                    Limite de 2 marcas  por stand<br>
                                    Máximo 3 personas  por stand (Se permite rotar durante los dias del evento, con personas previamente inscritas).
                                </td>
                            </tr>
                        </table>
                    </p>
                </div>
            </div>
            </div>

            <div class="col-md-4 mt-3">
            <div class="card w-100 text-start">
                <div class="card-body">
                    <h2 class="card-title">Adicionalmente</h2>
                    <p class="card-text">
                        <ol>
                            <li>Cenefa con nombre y logotipo del expositor.</li>
                            <li>Visualización del expositor en nuestra página web para difusión durante los meses octubre, noviembre y diciembre.</li>
                            <li>Publicación del expositor en nuestras redes sociales Facebook e Instagram.</li>
                            <li>Entrega de credenciales.</li>
                            <li>Bodega.</li>
                            <li>Guardias de Seguridad.</li>
                        </ol>
                    </p>
                </div>
            </div>
            </div>

            <div class="col-md-8 mt-3">
            <div class="card w-100 text-start">
                <div class="card-body">
                    <h2 class="card-title">A considerar</h2>
                    <p class="card-text">
                        <ol>
                            <li>La postulación es de carácter <b>exclusivo e inalterable</b>. Por lo que, una vez enviada no es posible realizar modificaciones.</li>
                            <li>Cada stand debe hacerse responsable de <b>realizar el trámite</b> en el Servicio de Impuestos Internos, ya sea, tasación de renta presunta o traslado de boletas.</li>
                            <li>Se debe considerar como <b>costo adicional</b>, el pago del permiso municipal, el cual no supera los $5.000 (dicho pago se realiza directamente con la municipalidad).</li>
                            <li>Es <b>obligatorio</b> contar con pase de movilidad.</li>
                            <li><b>Donación</b> de 1 título de cómic o cuento ilustrado (idealmente con registro ISBN): Con motivo de promover la lectura de narrativa gráfica de autoría nacional, se destinarán dichos ejemplares a la Biblioteca Municipal de Valdivia.</li>
                            <li>El pago del stands se realiza <b>máximo 48 hrs.</b> despues de ser notificado vía correo electrónico de la selección. De lo contrario, perderá el cupo.</li>
                            <li>Se podrá pedir devolución del dinero hasta el <b>lunes 31 de octubre.</b></li>
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
                <a href="<?= base_url('home/stands'); ?>" class="btn btn-primary btn-lg w-100 bg-red text-white disabled" id="next_stands"><i class="fa-solid fa-paste"></i> Ir al Formulario</a>
            </div>
            
        </div>
    </div>
</section>
<script>
    function is_checked() {
        var checkBox = document.getElementById("check_stands");
        var button = document.getElementById("next_stands");
        if (checkBox.checked == true){
            button.classList.remove("disabled");
        } else {
            button.classList.add("disabled");
        }
    } 
</script>