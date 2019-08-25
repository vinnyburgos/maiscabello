	// COMPORTAMENTO DISPARO DE IMAGENS FORM
	function imgForm() {
	  $("#foto_frente").click(function(){
	    $(".msgChangePhoto").fadeIn();
	    $("#imageFrente").click();
	  });
	  $("#foto_topo").click(function(){
	    $(".msgChangePhoto").fadeIn();
	    $("#imageTopo").click();
	  });
	};
	// COMPORTAMENTO DISPARO DE IMAGENS FORM

	// PREVISUALIZAR FOTO DO FORM
	function readURL(input, id) {
	 if (input.files && input.files[0]) {
	     var reader = new FileReader();

	     reader.onload = function (e) {
	         $('#'+id).attr('src', e.target.result);
	     }

	     reader.readAsDataURL(input.files[0]);
	 }
	};
	// PREVISUALIZAR FOTO DO FORM

	// COMPORTAMENTO MENU
	function menu() {
		$(".btnOpenMenu").click(function(){
			$(".btnOpenMenu").hide();
			$(".menuBlue").slideToggle();
		});
		$(".btnCloseMenu").click(function(){
			$(".menuBlue").slideToggle();
			$(".btnOpenMenu").fadeIn();
		});
	};
	// COMPORTAMENTO MENU

	// ACCORDION
	function accordFaq() {
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
			acc[i].onclick = function(){
				this.classList.toggle("active");
				this.nextElementSibling.classList.toggle("show");
			}
		}
	};
	// ACCORDION

	// BTN AVALIACAO FLOAT
	function btnAvaliacao() {
		var url = location.href;
		if(url.indexOf("contato")==-1) {  
		   } else {                
		   $(".btnAvaliacaoFixo").hide();
		}
		if(url.indexOf("obrigado")==-1) {  
		   } else {                
		   $(".btnAvaliacaoFixo").hide();
		}
	};
	// BTN AVALIACAO FLOAT



$(document).ready(function() {
	accordFaq();
	menu();
	btnAvaliacao();
	imgForm();
	readURL();
});