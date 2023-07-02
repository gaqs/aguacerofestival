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
        <h4 class="text-red mb-5"><b>Desde el 29 de Julio al 31 de Agosto.</b></h4>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <img src="<?= base_url('img/saval.jpg');?>" class="w-100" alt="">
            </div>
            <div class="col-md-5 text-start">
                <b>Resultados disponibles el 5 de Agosto.</b>
                <br><br>
                <p>Convocatoria para librerias, tiendas, artistas, relacionados a la narrativa grafica e ilustración.</p>
                <p>
                    <b>Cupos:</b> 100 Stands disponibles.<br>
                    <b>Fecha del evento:</b> Viernes 16 al Domingo 18 de Diciembre.<br>
                    <b>Lugar:</b> Centro de Ferias del Parque Saval. Ubicado en Av.Miguel Agüero s/n, Isla Teja, Valdivia.
                </p>
                <div class="btn btn-danger text-white mt-4"><i class="fa-solid fa-paste"></i> Ir a detalles y Formulario</div>
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