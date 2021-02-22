$(document).ready(function() {
    var t = $('#taula').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 'pdf' ],
        ajax: {
            url: 'http://api.gestioexcursions.me/Controladors/Excursio/veureExcursio.php',
            dataSrc: '',
            type:"POST",
        },
        /*columns:  [
            { data: 'id' },
            { data:'nom' },
            { data:'duracio' },
            { data:'public' },
            { data:'bus' }
           ],*/
        language: {
            url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        },
        select: true
    });
});


$(document).ready(function(){
    function loadCurs() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                var curs = JSON.parse(this.responseText);
                for (var c in curs) {
                    var nomcurs = curs[c][1];
                    var item = $("<li/>");
                    var a = $("<a/>", {text:nomcurs, class: "dropdown-item" , href : "#"});
                    item.append(a);
                    $("#cursos").append(item);
                }
            }
        }
        xhttp.open("GET", "http://api.gestioexcursions.me/Controladors/Curs/veureCurs.php", true);
        xhttp.send();
    }
    loadCurs();
});