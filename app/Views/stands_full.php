<style>
   .stand_img{
      -webkit-transition: all 200ms cubic-bezier(0.55, 0.055, 0.675, 0.19) 10ms;
      -moz-transition: all 200ms cubic-bezier(0.55, 0.055, 0.675, 0.19) 10ms;
      -o-transition: all 200ms cubic-bezier(0.55, 0.055, 0.675, 0.19) 10ms;
      transition: all 200ms cubic-bezier(0.55, 0.055, 0.675, 0.19) 10ms;
   }
   .hover_parent:hover img.stands_img{
      border: 5px solid #0d6efd;
   }
   

</style>
<div class="container my-5 pt-5">
   <div class="row justify-content-center">
      <?php
         $content = file_get_contents('img/stands/2022/stands.json');
         $json = json_decode($content);
         $aux = 0;

         for ($i=0; $i < count($json) ; $i++) {
            echo '<div class="col-md-3 col-sm-6 mb-4 hover_parent hvr-shrink">
                     <a href="'.$json[$i]->rrss.'" target="_blank">
                        <img src="'.base_url().'/img/stands/2022/'.$json[$i]->logo.'?v=0.3" class="w-100 stands_img" alt="">
                     </a>
                  </div>';
         }
      ?>

   </div>
</div>