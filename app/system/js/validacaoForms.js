window.onload = function(){
	
};

function confirmarExclusao(msg, url){

	// var txt;
	var r = confirm(msg);

	if (r == true) {
	    
	    document.getElementById("form").submit();
	    
	}

};

function editarDado(n){

	var x = document.getElementById("categoria").rows[n];
	var cod = x.cells.item(0).innerHTML;
	// var nome = x.cells.item(1).innerHTML;
	// var departamento = x.cells.item(2).innerHTML;
	// alert('Cod: ' + cod + "\nNome: " + nome + "\nDepartamento: " + departamento);

	window.location.href = "http://localhost/framework/public/painel/categorias?editar=categoria&cod="+cod;

};


function modalClose(){
	x = document.getElementById("modal");
	x.setAttribute("style", "display: none;");
};

function manageGuia(total, n){

	var i = 1;

	
	while(i <= total){
		document.getElementById('t'+i).classList.remove('tb-t-active');
		document.getElementById('g'+i).classList.remove('active');
		i = i+1;
	}

	document.getElementById('t'+n).classList.add('tb-t-active');
	document.getElementById('g'+n).classList.add('active');

}