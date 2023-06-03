<section id="honorees" class="my-5 py-5">
    <div class="container text-center">
        <?php
            $dir = file_get_contents( ROOTPATH . 'public/files/invitados_2023.json' );
            $json = json_decode( $dir );

            $homenajeados    = (array)$json->homenajeados;
            $miembros_jurado = (array)$json->miembros_del_jurado;
            $nacionales      = (array)$json->invitados_nacionales;
            $internacionales = (array)$json->invitados_internacionales;
        ?>

        
        <h1 class="text-red display-4">HOMENAJEADOS</h1>
        <div class="row justify-content-center mb-5">

        <?php
            for ($i=0; $i < count($homenajeados); $i++) { 
                echo '<div class="col-md-3 col-6">
                <div class="invitado_container">
                    <img src="'.base_url('img/invitados/'.$homenajeados[$i]->picture).'" class="w-100" alt="">
    
                    <div class="info_invitado text-black text-center p-3 mt-2 d-flex align-middle">
                        <span>
                            <p class="fs-3 lh-sm mb-0"><b>'.$homenajeados[$i]->name.'</b></p>
                            <p style="font-size:0.9rem;" class="lh-sm mb-0"><i>'.$homenajeados[$i]->description.'</i></p>
                            <p>
                                <a href="'.$homenajeados[$i]->social_network.'" target="_blank" class="text-red" >
                                    <b>Ir a su página &raquo;</b>
                                </a>
                            </p>
                        </span>
                    </div>
                </div>
            </div>';
            }
        ?>
        </div>

        <h1 class="text-red display-4">MIEMBROS DEL JURADO</h1>
        <div class="row justify-content-center mb-5">

        <?php
            for ($i=0; $i < count($miembros_jurado); $i++) { 
                if( $i == 3){
                    echo '<br>'; 
                }
                echo '<div class="col-md-3 col-6">
                <div class="invitado_container">
                    <img src="'.base_url('img/invitados/'.$miembros_jurado[$i]->picture).'" class="w-100" alt="">
    
                    <div class="info_invitado text-black text-center p-3 mt-2 d-flex align-middle">
                        <span>
                            <p class="fs-3 lh-sm mb-0"><b>'.$miembros_jurado[$i]->name.'</b></p>
                            <p style="font-size:0.9rem;" class="lh-sm mb-0"><i>'.$miembros_jurado[$i]->description.'</i></p>
                            <p>
                                <a href="'.$miembros_jurado[$i]->social_network.'" target="_blank" class="text-red" >
                                    <b>Ir a su página &raquo;</b>
                                </a>
                            </p>
                        </span>
                    </div>
                </div>
            </div>';
            }
        ?>
        </div>

        <h2 class="text-red display-4">INVITADOS NACIONALES</h2>
        <div class="row justify-content-center mb-5">
        
        <?php
            for ($i=0; $i < count($nacionales); $i++) { 
                if( $i == 3 ){
                    echo "<hr style='opacity:0;'>";
                }
                echo '<div class="col-md-3 col-6">
                <div class="invitado_container">
                    <img src="'.base_url('img/invitados/'.$nacionales[$i]->picture).'" class="w-100" alt="">
    
                    <div class="info_invitado text-black text-center p-3 mt-2 d-flex align-middle">
                        <span>
                            <p class="fs-3 lh-sm mb-0"><b>'.$nacionales[$i]->name.'</b></p>
                            <p style="font-size:0.9rem;" class="lh-sm mb-0"><i>'.$nacionales[$i]->description.'</i></p>
                            <p>
                                <a href="'.$nacionales[$i]->social_network.'" target="_blank" class="text-red" >
                                    <b>Ir a su página &raquo;</b>
                                </a>
                            </p>
                        </span>
                    </div>
                </div>
            </div>';
            }
        ?>

        </div>
        <!--
        <h1 class="text-red display-4">INTERNACIONALES</h1>
        <div class="row justify-content-center mb-5">
        
        <?php
            for ($i=0; $i < count($internacionales); $i++) { 
                echo '<div class="col-md-3 col-6">
                <div class="invitado_container">
                <img src="'.base_url('img/invitados/'.$internacionales[$i]->picture).'" class="w-100" alt="">
    
                <div class="info_invitado text-black text-center p-3 mt-2 d-flex align-middle">
                    <span>
                        <p class="fs-3 lh-sm mb-0"><b>'.$internacionales[$i]->name.'</b></p>
                        <p style="font-size:0.9rem;" class="lh-sm mb-0"><i>'.$internacionales[$i]->description.'</i></p>
                        <p>
                            <a href="'.$internacionales[$i]->social_network.'" target="_blank" class="text-red" >
                                <b>Ir a su página &raquo;</b>
                            </a>
                        </p>
                    </span>
                </div>
                </div>
            </div>';
            }
        ?>
        </div>
        -->
    </div>
    
</section>

<!--
<section id="portafolio" class="my-5 py-5">
    <div class="container text-center">
    <h2 class="text-red mb-5 display-4">REVISIÓN DE PORTAFOLIO</h2>
        <div class="row">
            <div class="col-md-6">
                <img src="<?= base_url('img/portafolio.jpg'); ?>" alt="" class="w-100">
            </div>
            <div class="col-md-6 text-start">
                <h1>En que consiste la revision del portafolio?</h1>
                <p>Durante los días viernes 16, sábado 17 y domingo 18 tendremos un espacio para que editores y artistas de gran experiencia puedan compartir de una instancia constructiva, entregar sugerencias, críticas y tips a los interesados en mostrar sus trabajos y portafolios.</p>
                <p><b>Requisitos:</b>
                    <ol>
                        <li>Edad minima 15 años en adelante.</li>
                        <li>Portafolio (físico o digital) para su revisión. Considerar que el recinto no cuenta con internet, por lo que el portafolio debe estar disponible sin conexión.</li>
                        <li>Cupos limitados.</li>
                    </ol>
                </p>
                <br>
                <a class="btn btn-primary bg-red btn-lg text-white hvr-grow" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSec2S18_T6ODMQ90vWDNbxVoSRRC32zEBKgCI2HVERdYDzc5A/viewform">
                    <b><i class="fas fa-forward"></i> Click Aqui para inscribirte</b>
                </a>
            </div>
        </div>
    </div>
</section>
-->