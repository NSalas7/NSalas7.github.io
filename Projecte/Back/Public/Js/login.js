var api = "http://api.gestioexcursions.me";


function logIn() {
    var u = $("#user").val();
    var p = $("#contrasenya").val();
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            var id = this.responseText;
            console.log(id);
            if (id === "1"){
                location.replace("http://admin.gestioexcursions.me/mostrarExcursions");
            }else{

            }
        }
    };
    xhttp.open(
        "POST",
        "http://api.gestioexcursions.me/Controladors/Professor/comprovarProfessor.php?email=" + u + "&password=" + p,
        true
    );
    xhttp.send();
}