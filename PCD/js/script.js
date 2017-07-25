function initModal() {
    const modal = document.body.querySelector('[data-role="modal"]');
	const modalTrigger = document.querySelector('[data-role="modalTrigger"]');
	const closes = document.querySelectorAll('[data-role="close"]');

	modalTrigger.addEventListener('click', function(){
		modal.style.display = "flex";
	}, false);

	for (let i = 0; i < closes.length; i++) {
        closes[i].addEventListener('click', function(){
    		modal.style.display = "none";
    	}, false)
    }

	window.addEventListener('click', function(event){
		if ( event.target == modal ){
			modal.style.display = "none";
		}
	}, false);
}


function initPage() {
	initModal();

	$('#data').datepicker({
            format: "dd/mm/yyyy",
            language: "pt-BR"
        });
}

window.addEventListener("load", initPage);
