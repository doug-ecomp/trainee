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

// function initScroll() {
//     const links = document.querySelectorAll("a[href^=#]");
//
//     for (let i = 0; i < links.length; i++) {
//         const link = links.item(i);
//
//         link.addEventListener("click", () => {});
//     }
// }

function initPage() {
    initModal();
}

window.addEventListener("load", initPage);
