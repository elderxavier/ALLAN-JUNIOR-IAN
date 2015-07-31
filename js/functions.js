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
				$('#nome').val('');
				$('#email').val('');
				$('#telefone').val('');
				$('#assunto').val('');
				$('#mensagem').val('');
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



$(document).ready(function(){     
        $('#kanji-menu').mouseover(function(event){
            event.preventDefault(event);
            //$('.top-logos').show(300);                  
              $(".top-logos").animate({height: '40px'});
              $("#topo").animate({margin: '40px 0 0 0'});     
      });
      $('#kanji-menu').click(function(event){    
            event.preventDefault();
            //$('.top-logos').hide(300);      
            $(".top-logos").animate({height: '3px'});
              $("#topo").animate({margin: '1px 0px 0px 0px'});
      });
     

  
      $('.facebook-2').mouseover(function(evt){
        $('.facebook-2 .social-toltip').css('display','block');            
        $('.facebook-2').css('opacity','1');
      });
      $('.facebook-2').mouseout(function(evt){
        $('.facebook-2 .social-toltip').css('display','none'); 
        $('.facebook-2').css('opacity','0.3');   
        
      });

      $('.linkedin').mouseover(function(evt){
        $('.linkedin .social-toltip').css('display','block');
        $('.linkedin').css('opacity','1');       
      });
      $('.linkedin').mouseout(function(evt){
        $('.linkedin .social-toltip').css('display','none');    
        $('.linkedin').css('opacity','0.3');       
      });

      $('.youtube').mouseover(function(evt){
        $('.youtube .social-toltip').css('display','block'); 
        $('.youtube').css('opacity','1');          
      });
      $('.youtube').mouseout(function(evt){
        $('.youtube .social-toltip').css('display','none'); 
        $('.youtube').css('opacity','0.3');   
      });

      $('.twitter').mouseover(function(evt){
        $('.twitter .social-toltip').css('display','block'); 
        $('.twitter').css('opacity','1');   
      });
      $('.twitter').mouseout(function(evt){
        $('.twitter .social-toltip').css('display','none');    
        $('.twitter').css('opacity','0.3');   
      });

      $('.skype').mouseover(function(evt){
        $('.skype .social-toltip').css('display','block'); 
        $('.skype').css('opacity','1');   
      });
      $('.skype').mouseout(function(evt){
        $('.skype .social-toltip').css('display','none');    
        $('.skype').css('opacity','0.3');   
      });

      $('.flickr').mouseover(function(evt){
        $('.flickr .social-toltip').css('display','block'); 
        $('.flickr').css('opacity','1');   
      });
      $('.flickr').mouseout(function(evt){
        $('.flickr .social-toltip').css('display','none');    
        $('.flickr').css('opacity','0.3');   
      });
});      