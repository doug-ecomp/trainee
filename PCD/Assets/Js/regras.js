function init(){

  $('.btn').click(function() { 
    var button = this.id;
    
    if(button=="btn1"){
      $("#motivo1").collapse('toggle');

    }else if (button=="btn2"){
      $("#motivo2").collapse('toggle');

    }else if (button=="btn3"){         
      $("#motivo3").collapse('toggle');

    }else if (button=="btn4"){
      $("#motivo4").collapse('toggle');

    }else if (button=="btn5"){
      $("#motivo5").collapse('toggle');

    }else if (button=="btn6"){
      $("#motivo6").collapse('toggle');

    }

  });
}

function initPage() {
	init();
}

window.addEventListener("load", initPage);