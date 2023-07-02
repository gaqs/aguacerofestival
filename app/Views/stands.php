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
    #stands{
        
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
<section id="stands" >
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
    <!--
    <div class="container mt-5 text-center">
        <h2 class="text-red mb-5 display-4">STANDS</h2>
        <div class="row justify-content-center">

            <div class="col-md-12">
                <div class="slick-image mb-3">
                    <?php /*
                        $content = file_get_contents('img/stands/2022/stands.json');
                        $json = json_decode($content);
                        $aux = 0;
                        $rrss = [];
                        for ($i=0; $i < count($json) ; $i++) {
                            $rrss = explode(",", $json[$i]->rrss);
                            
                            if( count($rrss) > 1 ){
                                echo '<div style="position:relative;">
                                        <img src="'.base_url().'/img/stands/2022/'.$json[$i]->logo.'?v=0.3" class="w-100 rounded-3 border border-4 border-dark hvr-shrink" alt="">
                                        <a href="'.$rrss[0].'" target="_blank" class="link_a" title="'.$rrss[0].'"></a>
                                        <a href="'.$rrss[1].'" target="_blank" class="link_b" title="'.$rrss[1].'"></a>
                                    </div>';
                                
                            }else{
                                echo '<div>
                                        <a href="'.$json[$i]->rrss.'" target="_blank">
                                            <img src="'.base_url().'/img/stands/2022/'.$json[$i]->logo.'?v=0.3" class="w-100 rounded-3 border border-4 border-dark hvr-shrink" alt="">
                                        </a>
                                    </div>';
                            }
                            
                            
                        }
                    */ ?>
                </div>
            </div>

        </div>
        <div class="slick">
            <?php /*
                for ($i=0; $i < count($json) ; $i++) {
                    echo '<div>
                            <img src="img/stands/2022/'.$json[$i]->logo.'" class="w-100 rounded-3 border border-4 border-dark" alt="">
                        </div>';
                }
            */ ?>
        </div>
        
    </div>
    <div class="text-center mt-3 mb-5 pb-5">
        <a href="<?= base_url('home/all_stands'); ?>"><h2>Ver todos los stands >></h2></a>
    </div>
            -->
</section>

<script>
    /*
    $(document).ready(function(){
        $('.slick-image').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slick',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            arrows:false,
            responsive: [{
                breakpoint:767,
                settings:{
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }]

        });
        $('.slick').slick({
            slidesToShow: 11,
            slidesToScroll: 3,
            asNavFor: '.slick-image',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            autoplay: false,
            autoplaySpeed: 1500,
            responsive: [
                {
                    breakpoint:991,
                    settings:{
                        slidesToShow: 7,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint:767,
                    settings:{
                        slidesToShow: 5,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint:540,
                    settings:{
                        slidesToShow: 3,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
        $('.slick').slick('slickUnfilter');
    });
    */
</script>