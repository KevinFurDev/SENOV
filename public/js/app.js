$(document).ready(function(){

	$(".open").click(function(){



		if ($(".barra-lateral").hasClass('abrir') && $(".main").hasClass('abrir-main')) {

			$(".barra-lateral").removeClass('abrir');
			$(".main").removeClass('abrir-main');

			$("#times").hide();
			$("#bars").show();

		}else{

			$(".barra-lateral").addClass('abrir');
			$(".main").addClass('abrir-main');
			$("#times").show();
			$("#bars").hide();

		}

	});
});
