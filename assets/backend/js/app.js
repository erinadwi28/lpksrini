(function ($) {

    $('#table_pelatihan').DataTable({
        // "ajax": {
        //     "url": "",
        //     "type": "POST"
        // },
        "aLengthMenu": [
            [10, 30, 50, -1],
            [10, 30, 50, "All"]
        ],
        'order':[],
        'columnDefs': [{
            "targets": [4],
            "orderable": false,
        }],
        "iDisplayLength": 10,
        "language": {
            search: '<i class="fa fa-search"></i>',
            searchPlaceholder: "search",
        },
        buttons: [],
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
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                     select.append( '<option value="'+d+'">'+d+'</option>' )
                  });
                }
        
            });
        },

        // columns: [
        //     { data: "No" },
        //     { data: "Location Name" },
        //     { data: "Contact Number" },
        //     { data: "Address" },
        //     {data: "Action" , render : function ( data, type, row, meta ) {
        //           return type === 'display'  ?
        //             '<div class="btn-group" role="group">'
        //             +'<button id="btnGroupDrop1Location" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'
        //                 +'Action'
        //             +'</button>'
        //             +'<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">'
        //                 +'<a class="dropdown-item" href="#" data-id="'+data+'" data-toggle="modal" data-target="#LocationModal" data-whatever="@fat" id="edit_location"><i class="fa fa-pencil-square-o"></i> Edit</a>'
        //                 +'<a class="dropdown-item" href="#" data-id="'+data+'" id="remove_location"><i class="fa fa-trash"></i> Remove</a>'
        //             +'</div>'
        //             +'</div>':
        //             data;
        //         }},
        // ],
        
    });

})(jQuery);
