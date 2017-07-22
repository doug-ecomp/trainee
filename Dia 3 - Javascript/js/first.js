var clicks_lamp1 = 0;
var clicks_lamp2 = 0;

function getClicks(id, acao2){
	switch (id){
		case "lamp1":
			if(acao2)
				return ++clicks_lamp1;
			else
				return clicks_lamp1;

		case "lamp2":
			if(acao2)
				return ++clicks_lamp2;
			else
				return clicks_lamp2;
	}
}

function acendeLamp(id) {
	
	var clicks = getClicks(id, false);
	
	if (clicks<3) {
		console.log(id + " on");
		var image = document.getElementById(id);
		image.src = "img/lamp_on.jpg";
 	} else {
		console.log(id + " broken");
	}

}

function apagaLamp(id) {
	
	var clicks = getClicks(id, false);
	
	if (clicks<3) {
		console.log(id + " off");
		var image = document.getElementById(id);
		image.src = "img/lamp_off.jpg";
	} else {
		console.log(id + " broken");
	}
}

function quebrarLamp(id) {
	var clicks = getClicks(id, true);
	
	if(clicks>3)
		console.log(id + " broken");
	else if(clicks == 3){

		var image = document.getElementById(id);
		image.src = "img/lamp_broken.jpg";
		console.log(id + "  clicks: " + clicks);
	}
	else
		console.log(id + "  clicks: " + clicks);
	
}

function action (acao, event ) {
	var id = event.target.id;
	switch (acao){
		case "acender":
			acendeLamp(id);
			break;

		case "apagar":
			apagaLamp(id);
			break;
		
		case "quebrar":
			quebrarLamp(id);
			break;
	}

}