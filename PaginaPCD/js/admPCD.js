$(document).ready(function(){
  //CHANGING ICON, PLUS/MINUS
  //FINALLY F****** WORKING AS I WANTED
      $('.accordion-toggle').click(function() { 
        var button = this.id;

        if(button=="mtrow1"){
          $("#hrow1").collapse('toggle');

        }else if (button=="mtrow2"){
          $("#hrow2").collapse('toggle');

        }else if (button=="mtrow3"){         
          $("#hrow3").collapse('toggle');

        }

        
         
      });
  //VERIFICA SE As HIDDENROWs VÃO SER MOSTRADAS/ESCONDIDAS E MUDA O ICONE
  $("#hrow1").on('show.bs.collapse', function(){
    $("#btn1MT").html('<span class="glyphicon glyphicon-minus" style="color: blue"></span>');
  });
  $("#hrow1").on('hide.bs.collapse', function(){       
    $("#btn1MT").html('<span class="glyphicon glyphicon-plus"></span>');
  });

  $("#hrow2").on('show.bs.collapse', function(){
      $("#btn2MT").html('<span class="glyphicon glyphicon-minus" style="color: blue"></span>');
  });
  $("#hrow2").on('hide.bs.collapse', function(){       
    $("#btn2MT").html('<span class="glyphicon glyphicon-plus"></span>');
});

  $("#hrow3").on('show.bs.collapse', function(){
    $("#btn3MT").html('<span class="glyphicon glyphicon-minus" style="color: blue"></span>');
  });
  $("#hrow3").on('hide.bs.collapse', function(){       
    $("#btn3MT").html('<span class="glyphicon glyphicon-plus"></span>');
  });

});

