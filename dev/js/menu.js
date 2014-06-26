$( "li" ).click(function() {

	$( "li" ).each(function(){
    	$( this ).removeClass("active");
  	});

	var selector = $( this ).attr('id');
	
	$( "#"+selector ).addClass("active");
	$( "#content" ).load("include/productos.php", {cat: selector});

});

