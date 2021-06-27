(function ($) {
    $('#table_pelatihan').DataTable({
        "ajax":{
            "url": "member/ajax_list_pelatihan_aktif",
            "type": "POST",
        },
        "aLengthMenu": [
            [10, 30, 50, -1],
            [10, 30, 50, "All"]
        ],
        'order':[],
        "processing": true,
        "language": {
            'search': '<i class="fa fa-search"></i>',
            'searchPlaceholder': "search",
            "emptyTable": "No records available - Got it?",
        },
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                if(column.index() != 4){
                    var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
                        column.search( val ? '^'+val+'$' : '', true, false ).draw();
                    });
                    column.data().unique().sort().each( function ( d, j ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    });
                }
            });
        },
        "columns": [
            { data: "No" },
            { data: "Pelatihan" },
            { data: "Jumlah Kurikulum" },
            { data: "Status" },
            { data: "Aksi" , render : function ( data, type, row, meta ) {
                return type === 'display'  ?
                '<div class="btn-group" role="group">'
                    +'<a href="member/kurikulum/'+data+'">'
                        +'<button id="" type="button" class="btn btn-primary btn-sm">Masuk Kelas</button>'
                    +'</a>'
                +'</div>':
                data;
            }},
        ],
    });

    $("#kelas").parsley();
})(jQuery);


    