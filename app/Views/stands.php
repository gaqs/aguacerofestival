<style>
    .aux{
        display: inherit;
        overflow-x: auto;
        white-space: nowrap;
        position:inherit;
    }
    .btn-aux{
        width: 160px !important;
        height: auto !important;
    }
    .link_a{
        position:absolute;
        top:0;
        left:0;
        width:50%;
        height:50%;
        /*background:red;*/
    }
    .link_b{
        position:absolute;
        bottom:0;
        right:0;
        width:50%;
        height:50%;
        /*background:blue;*/
    }
</style>
<div class="container">
    <hr>
</div>
<section id="stands" class="mb-5 pb-5" >
    <!--
    <div class="container mt-5 text-center">
        <h2 class="text-red display-4">POSTULACION STANDS 2023</h2>
        <h4 class="text-red mb-5"><b>Desde el 03 de Julio al 06 de Agosto a las 23:59</b></h4>
        <div class="row justify-content-center d-flex">
            <div class="col-md-7 align-self-center">
                <img src="<?= base_url('img/saval.jpg');?>" class="w-100" alt="">
            </div>
            <div class="col-md-5 text-start align-self-center">
                <b class="fs-5">La única vía de postulación es por medio de la página web.</b><br><br>
                <p>Contamos con una capacidad de <b>100 stands</b> para esta versión, dándole prioridad a postulantes relacionados a la narrativa gráfica y áreas afines. Se considerarán artistas, editoriales, librerías y tiendas con propuestas innovadoras que se ajusten a la 9º versión del festival. </p>
                <p>
                    <b>Fecha del evento:</b> Viernes 01 al Domingo 03 de Diciembre de 2023.<br>
                    <b>Lugar:</b> Centro de Ferias del Parque Saval. Ubicado en Av.Miguel Agüero s/n, Isla Teja, Valdivia.<br>
                    <b>Resultados postulación:</b> 09 de Agosto, vía correo electrónico.
                </p>
                <a href="<?= base_url('home/briefing'); ?>" class="btn btn-danger text-white mt-4 pt-2 w-100">
                    <h2><i class="fa-solid fa-paste"></i> Ir a detalles y Formulario</h2>
                </a>
            </div>
        </div>
    </div>
    -->
    
    <div class="container mt-5 text-center">
        <h2 class="text-red">Conocer a los expositores</h2>
        <h2 class="text-red mb-5 display-4">STANDS 2023</h2>
        <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="slick-stands mb-3">
                <?php 
                    $content = file_get_contents('img/stands/stands_2023_nolink.json');
                    $stands = (array)json_decode($content);

                    for ($i=0; $i < count($stands); $i++) { 
                        if ($i % 15 == 0) {
                            echo '<div><div class="row">';
                        }
                ?>
                
                    <div class="col-md-2dot4 col-4">
                        <a href="<?= $stands[$i]->RED_SOCIAL; ?>" target="_blank">
                            <div class="stand_container">
                                <img src="<?= base_url('img/stands/'.$stands[$i]->LOGO); ?>" class="w-100" alt="">
                
                                <div class="info_stand text-black text-center p-3 mt-2 d-flex justify-content-center">
                                    <span>
                                        <p class="fs-4 lh-sm mb-0"><b><?= $stands[$i]->NOMBRE; ?></b></p>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
               
                <?php
                        if (($i + 1) % 15 == 0 || $i == count($stands) - 1) {
                            echo '</div></div>';
                        }
                    }
                ?>
               
            </div>
        </div>

        </div>
    </div>
    <!--
    <div class="text-center mt-3 mb-5 pb-5">
        <a href="<?= base_url('home/all_stands'); ?>"><h2>Ver todos los stands >></h2></a>
    </div>
    -->
</section>

<script>
    $(document).ready(function(){

        $('.slick-stands').slick();

    });
</script>