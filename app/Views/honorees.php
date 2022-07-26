<section id="honorees" style="margin-top:10rem;margin-bottom:10rem;">
    <div class="container text-center">

        <?php
            $dir = file_get_contents( ROOTPATH . 'public/files/invitados_2022.json' );
            $json = json_decode( $dir );

            $homenajeados    = (array)$json->homenajeados;
            $nacionales      = (array)$json->invitados_nacionales;
            $internacionales = (array)$json->invitados_internacionales;
        ?>

        <!--
        <h1 class="text-red display-4">HOMENAJEADOS</h1>
        <div class="row justify-content-center mb-5">

        <?php
            for ($i=0; $i < count($homenajeados); $i++) { 
                echo '<div class="col-md-3 col-6">
                <div class="invitado_container">
                    <img src="'.base_url('img/invitados/2022/default_inv_circle.jpg').'" class="w-100" alt="">
    
                    <div class="info_invitado text-black text-center p-3">
                        <p>
                            <b class="fs-3">'.$homenajeados[$i]->name.'</b><br>
                            <i class="fs-6">'.$homenajeados[$i]->description.'</i><br>
                            <a href="'.$homenajeados[$i]->social_network.'" target="_blank" class="text-red" ><b>Ir a su página &raquo;</b></a>
                        </p>
                    </div>
                </div>
            </div>';
            }
        ?>
        </div>
        -->

        <h1 class="text-red mb-5">INVITADOS NACIONALES</h1>
        <div class="row justify-content-center mb-5">
        
        <?php
            for ($i=0; $i < count($nacionales); $i++) { 
                echo '<div class="col-md-3 col-6">
                <div class="invitado_container">
                    <img src="'.base_url('img/invitados/2022/'.$i.'.jpg').'" class="w-100" alt="">
    
                    <div class="info_invitado text-black text-center p-3">
                        <p>
                            <b class="fs-3">'.$nacionales[$i]->name.'</b><br>
                            <i>'.$nacionales[$i]->description.'</i><br>
                            <a href="'.$nacionales[$i]->social_network.'" target="_blank" class="text-red" ><b>Ir a su página &raquo;</b></a>
                        </p>
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
                    <img src="'.base_url('img/invitados/2022/default_inv_circle.jpg').'" class="w-100" alt="">
    
                    <div class="info_invitado text-black text-center p-3">
                        <p>
                            <b class="fs-3">'.$internacionales[$i]->name.'</b><br>
                            <i>'.$internacionales[$i]->description.'</i><br>
                            <a href="'.$internacionales[$i]->social_network.'" target="_blank" class="text-red" ><b>Ir a su página &raquo;</b></a>
                        </p>
                    </div>
                </div>
            </div>';
            }
        ?>
        </div>
        -->
    </div>
</section>