window.onload = function(){
	
};

function confirmarExclusao(msg, url){

	// var txt;
	var r = confirm(msg);

	if (r == true) {
	    
	    document.getElementById("form").submit();
	    
	}
};