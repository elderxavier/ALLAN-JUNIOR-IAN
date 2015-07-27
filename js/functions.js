$(document).ready(function(){
	reflexao();
	//empreendimento();
	ancora_menu();
	$(".mask-fone").mask("(99) 9999-9999"); //telefone


	$(".cbox-el").colorbox({inline:true, width:"90%"});




	$("#emailForm").submit(function(event) {
		event.preventDefault();
		var _form = $(this);
		$.ajax({
			url  : 'enviar.php',
			type : 'POST',
			data : {
				'nome'     : _form.find('#nome').val(),
				'email'    : _form.find('#email').val(),
				'telefone' : _form.find('#telefone').val(),
				'assunto'  : _form.find('#assunto').val(),
				'mensagem' : _form.find('#mensagem').val()
			},
			success : function(data){
				_form.find('#resposta').html(data);
			}
		})
		
	});
	
});







//reflexao
function reflexao(){

	$("#reflexao").click(function(){
		if($("#reflexao").data("status") == "fechado"){
	    $("#img-reflexao").slideToggle();
	    $("#reflexao").data("status", "aberto");

	  }else{
	    $("#img-reflexao").slideToggle();
	    $("#reflexao").data("status", "fechado");
	  }
	});
}












/*
function empreendimento(){

	$("#empreendimentos .box-img li").click(function(){

		var index = $(this).index();

		$("#empreendimentos-principal").fadeOut(300);
		
		$("#em-"+index).fadeIn(300);
		$(".fechar").fadeIn(300);
	});

	$(".fechar").click(function(){
		$(".em").fadeOut(300);
		$("#empreendimentos-principal").fadeIn(300);
		$(".fechar").fadeOut(300);
	});
}
*/








//ancora menu
function ancora_menu(){
	$('#menu a, .btn-empreendimentos a').click(function(){
      var alvo = $(this).attr('href').split('#').pop();
      $('html, body').animate({scrollTop: $('#'+alvo).offset().top - 45 }, 1700);
      return false;
   });
}



