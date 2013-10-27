
$(document).ready(function(){
	$('#pesquisa').submit(function (e){ 
		e.preventDefault();
		console.log('o');
		$.ajax("/teste2/testefluxo/teste2/pesquisademarcas.php", {
			 data: {id: 1},
			 dataType: 'json',
			success: function(response) {
				console.log(response);
			},
			errror: function(error) {
				console.log(errror);
			}
		});
	});
});
/*
$(document).ready(function(){
	var modelo= $('input[name="modelo"]').val();
	var marca = $('select[name="marca"]:selected').attr('value');
	var tipo  = $('select[name="tipo"]:selected').attr('value');
	var url = 'listar.php?op='+modelo+'&format=jason&jasoncallback=?'
	$('#resultado').empty();
		$getJSON(url,
			function(data){
			if((data.items).lenght == 0) {
				alert.('Não há nenhum \nresultado com estes criterios!');
				return false;
			};
			$.each(data.items, function(i,obj) {
				$('<tr><td>').appendTo('#resultado').attr({
					obj.marca
				});
			});
		});

	})
	*/