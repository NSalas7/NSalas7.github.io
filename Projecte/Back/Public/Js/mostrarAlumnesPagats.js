$(document).ready(function() {
    var t = $('#taula').DataTable( {
        responsive: true,
        dom: 'Bfrtip',
        buttons: [ 'pdf' ],
        ajax: {
            url: 'http://api.gestioexcursions.me/Controladors/Pagament/veureAlumnesPagats.php',
            dataSrc: '',
            type:"POST",
        },
       /* columns:  [
            { data: 'id' },
            { data:'alumne' },
            { data:'pagat' }
            { data:'data' }
           ],*/
        language: {
            url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        },
        select: true
    });
});