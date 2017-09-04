function init() {
    $('#logoff_btn').click(function(){
        var url = "../../Controller/routes.php";
        var params = "logoff=true";
        var http = new XMLHttpRequest();
        http.open("POST", url, false);
        
        //Send the proper header information along with the request
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.setRequestHeader("Content-length", params.length);
        http.setRequestHeader("Connection", "close");
        
        http.send(params);
        // console.log("aqui");
    });

}

window.addEventListener("load", init);