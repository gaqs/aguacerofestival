function checkRut(rut) {
    var valor = rut.value.replace('.','');
    valor = valor.replaceAll('-','');
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1).toUpperCase();
    rut.value = cuerpo + '-'+ dv
    if(cuerpo.length < 7) { return false; }
    suma = 0;
    multiplo = 2;
    for(i=1;i<=cuerpo.length;i++) {
        index = multiplo * valor.charAt(cuerpo.length - i);
        suma = suma + index;
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
    }
    dvEsperado = 11 - (suma % 11);
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;
    if(dvEsperado != dv) {  return false; }
    rut.setCustomValidity('');
}

$(document).ready(function() {

	var btn = $('#top_button');
	var btn2 = $('#top_button_2');
	//setInterval(function(){ console.log('mouseover'); }, 3000);

	$(window).scroll(function() {
		if ($(window).scrollTop() > 300) {
			btn.addClass('show');
		} else {
			btn.removeClass('show');
		}
	});

	btn.on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, '300');
	});
	
	/**
	 * This object controls the nav bar. Implement the add and remove
	 * action over the elements of the nav bar that we want to change.
	 *
	 * @type {{flagAdd: boolean, elements: string[], add: Function, remove: Function}}
	 */

	var myNavBar = {
		flagAdd: true,
		elements: [],
		init: function(elements) {
			this.elements = elements;
		},
		add: function() {
			if (this.flagAdd) {
				for (var i = 0; i < this.elements.length; i++) {
					//console.log(this.elements);
					document.getElementById(this.elements[i]).className += " fixed-theme";
				}
				this.flagAdd = false;
			}
		},
		remove: function() {
			for (var i = 0; i < this.elements.length; i++) {
				//console.log(this.elements);
				document.getElementById(this.elements[i]).className =
					document.getElementById(this.elements[i]).className.replace(/(?:^|\s)fixed-theme(?!\S)/g, '');
			}
			this.flagAdd = true;
		}
	};



	/**
	 * Init the object. Pass the object the array of elements
	 * that we want to change when the scroll goes down
	 */
	myNavBar.init([
		"header",
		"header-container",
		"brand"
	]);

	/**
	 * Function that manage the direction
	 * of the scroll
	 */

	function offSetManager() {
		var yOffset = 0;
		var currYOffSet = window.pageYOffset;
		if (yOffset < currYOffSet) {
			myNavBar.add();
		} else if (currYOffSet == yOffset) {
			myNavBar.remove();
		}
	}

	/**
	 * bind to the document scroll detection
	 */

	window.onscroll = function(e) {
		offSetManager();
	}

	/**
	 * We have to do a first detectation of offset because the page
	 * could be load with scroll down set.
	 */

	offSetManager();

	$(document).ready(function() {
		// Add smooth scrolling to all links

		$(".nav-link, #top_button_2, #news_link").on('click', function(event) {
			// Make sure this.hash has a value before overriding default behavior
			if (this.hash !== "") {
				// Prevent default anchor click behavior
				event.preventDefault();
				// Store hash

				var hash = this.hash;

				// Using jQuery's animate() method to add smooth page scroll
				// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
				$('html, body').animate({
					scrollTop: $(hash).offset().top
				}, 800, function() {
					// Add hash (#) to URL when done scrolling (default click behavior)
					window.location.hash = hash;
				});
			} // End if
		});
	});


	// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
	'use strict'
  
	// Fetch all the forms we want to apply custom Bootstrap validation styles to
	var forms = document.querySelectorAll('.needs-validation')
  
	// Loop over them and prevent submission
	Array.prototype.slice.call(forms)
	  .forEach(function (form) {
		form.addEventListener('submit', function (event) {

			var submitButton = document.querySelector('[name="submit_something"]');
			var defaultIcon = submitButton.children[0].className;
			submitButton.classList.add('disabled');
			submitButton.children[0].className = 'fa-solid fa-circle-notch fa-spin';

		  if (!form.checkValidity()) {
			event.preventDefault()
			event.stopPropagation()

			submitButton.classList.remove('disabled');
			submitButton.children[0].className = defaultIcon;

			$('html, body').animate({
				scrollTop: 0
			}, '300');

		  }
  
		  form.classList.add('was-validated')
		}, false)
	  })
  })()


  var closed = document.querySelectorAll('[name="button_close"]');

	closed.forEach( button => {
	button.addEventListener("click", function(){
		sessionStorage.setItem("wasClosed", "true");
	});
	
	})
	
	var admin = window.location.pathname.split( '/' )[3];
	console.log( admin );

	if( sessionStorage.getItem("wasClosed") != "true"){
		if( admin != 'competition' && admin != 'stands' ){
			setTimeout(function(){
				$('#le_modal').modal('toggle');
			}, 1000);
		}
	
	}
  


});//end document ready
