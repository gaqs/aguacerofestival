<style type="text/css"> 
.flipdown.flipdown__theme-dark .rotor::after {
	border-top: 1px solid white !important; 
}
.rotor-leaf-rear{
	background-color: #a01c1b  !important;
}
.rotor-leaf-front{
	background-color: #861717 !important;
}
.rotor-top{
	background-color: #861717 !important;
}
.rotor-bottom{
	background-color: #a01c1b !important;
	
}
</style>
<section id="countdown" class="py-4">
	<div class="row justify-content-center text-red">
		<h3 class="col-md-8 text-center mb-2">
			PREPÁRATE! EL FESTIVAL COMIENZA EN...
		</h3>
		<div class="col-md-12 text-center">
			<div id="flipdown" class="flipdown" style="display: inline-block;"></div>
		</div>
	</div>
</section>


<section id="countdown" class="py-4" style="display:none;">
	<div class="row justify-content-center text-center text-red">
		<h3 class="col-md-8 text-center mb-3">
			¡YA COMENZÓ! ESTAMOS ONLINE EN NUESTRAS RRSS.
		</h3>
		<div class="sn_container">
          <div>
            <a href="https://www.facebook.com/Aguacero-Comics-165652900212261/" target="_blank">
              <img src="img/rrss/facebook.png" class="ml-2 mr-2 hvr-bob" style="width:100px;" alt="">
            </a>
            <a href="https://www.instagram.com/festivalaguacerocomics/?hl=es" target="_blank">
              <img src="img/rrss/instagram.png" class="ml-2 mr-2 hvr-bob" style="width:100px;" alt="">
            </a>
            <a href="https://www.youtube.com/@festivalaguacerocomics" target="_blank">
              <img src="img/rrss/youtube.png" class="ml-2 mr-2 hvr-bob" style="width:100px;" alt="">
            </a>
          </div>
        </div>
	</div>
</section>


<script>
	$(document).ready(function(){
		var flipdown = new FlipDown(1701428400);
  		flipdown.start();
	});
</script>
