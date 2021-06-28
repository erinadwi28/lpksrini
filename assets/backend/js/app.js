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
    $("#ubah_profil").parsley();

	//--------------Program Pelatihan Dashboard--------------//
	$.ajax({
		type: "GET",
		url: "beranda/program_pelatihan",
		dataType: 'json',
		success: function (data) {
			var html = '';
			for (var i = 0; i < data.length; i++) {
				html += '<div class="col-xl-4 col-lg-4 col-md-6">' +
					'<div class="single_courses">' +
					'<div class="thumb">' +
					'<img src="assets/frontend/images/landing/courses/' + data[i].gambar_pelatihan + '" alt="">' +
					'</div>' +
					'<div class="courses_info">' +
					'<h3><a href="detail-katalog/' + data[i].id_pelatihan + '">' + data[i].nama_pelatihan + '</a></h3>' +
					'<div class="star_prise d-flex justify-content-between">' +
					'<div class="star">' +
					'<i class="flaticon-mark-as-favorite-star"></i>' +
					'<span>Rp' + Number(data[i].harga).toLocaleString("id-ID") + '</span>' +
					'</div>' +
					'<div class="prise">' +
					'<span class="active_prise"><a href ="detail-katalog/' + data[i].id_pelatihan + '">' +
					'<button type="button" class="btn btn-primary btn-sm gabung">Gabung</button>' +
					'</a>' +
					'</span>' +
					'</div>' +
					'</div>' +
					'</div>' +
					'</div>' +
					'</div>';
			}
			$('#katalog').html(html);
		}
	});

	// Ubah Total Transfer
	$(document).ready(function () {
		var harga = document.getElementById('harga').value;
		var diskon = document.getElementById('diskon').value;

		var total = harga - diskon;

		document.querySelector("input[name='total']").value = total;
	});

	// Insert transaksi
	$(document).ready(function () {
		$('.form_beli').submit(function (e) {
            
			$.ajax({
				type: "post",
				url: $(this).attr('action'),
				data: $(this).serialize(),
				dataType: "json",
				success: function (response) {
					if (response.error) {
						$('.pesan').html(response.error).show();
					}

					if (response.sukses) {
						Swal.fire({
							icon: 'success',
							title: 'Berhasil',
							showConfirmButton: true,
                            text: response.sukses,
							
						})
						
					}
				},
				error: function (xhr, ajaxOptions, thrownError) {
					alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
				}
			})
			return false;
		})
	});

	// Insert testimoni
	// $(document).ready(function () {
	// 	$('.testimoni').submit(function (e) {
            
	// 		$.ajax({
	// 			type: "post",
	// 			url: $(this).attr('action'),
	// 			data: $(this).serialize(),
	// 			dataType: "json",
	// 			success: function (response) {
	// 				if (response.error) {
	// 					$('.pesan').html(response.error).show();
	// 				}

	// 				if (response.sukses) {
	// 					Swal.fire({
	// 						icon: 'success',
	// 						title: 'Berhasil',
	// 						showConfirmButton: true,
    //                         text: response.sukses,
							
	// 					})
	// 				}
	// 			},
	// 			error: function (xhr, ajaxOptions, thrownError) {
	// 				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
	// 			}
	// 		})
	// 		return false;
	// 	})
	// });
})(jQuery);


    