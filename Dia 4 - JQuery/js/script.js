$(document).ready(function() {

    /*$("p").click(function(){
        $("p").hide(); //Parágrafo some ao se clicar nele
    })*/

    $("p").dblclick(function(){
        $("p").hide(); //Parágrafo some ao se clicar duas vezes nele
    });

    /*$("p").mouseenter(function(){
        $("p").hide(); //Parágrafo some ao se por o mause sobre ele
    });*/

    $("#btn_soma").click(function(){
        //alert("Texto do elemento: " + $("section").text());
        var a = parseInt($("#num1").val()) + parseInt($("#num2").val());
        $("#result").text(a);
    });

    $("#btn_addElem").click(function() {
        var num = $("#in_num").val();
        
        for (var index = 1; index <= num; index++) {
            $("form").append(
                "<div style=\"padding-top: 5px\">" +
                        "<label for=\"surname" +index+ "\">Sobrenome " +index+ "</label>" +
                        "<input id=\"surname" +index+ "\" type=\"text\">"+
                "</div>"
            )
        }
    });

    

});