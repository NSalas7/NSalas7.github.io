function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("formul").innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "http://localhost/API/Controladors/Professor/comprovarProfessor.php", true);
    xhttp.send();}