$(document).ready(function() {
    var t = $('#taula').DataTable( {
        responsive: true,
        dom: 'Bfrtip',
        buttons: [ 'pdf' ],
        ajax: {
            url: 'http://api.gestioexcursions.me/Controladors/Excursio/veureExcursio.php',
            dataSrc: '',
            type:"POST",
        },
      /*  columns:  [
            { data: 'id' },
            { data:'nom' },
            { data:'public' },
            { data:'bus' },
        { data: 'curs'},
        { data: 'data_inici'},
        { data: 'data_fi'}
           ],*/
        language: {
            url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        },
        select: true,
    });
    
    $('#cursos').on( 'change', function () {
        var s = $(this).val();
        t.search(s).draw();
        
    });
});