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
		'order': [],
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

			this.api().columns().every(function () {
				var column = this;

				if (column.index() != 4) {
					var select = $('<select><option value=""></option></select>')
						.appendTo($(column.footer()).empty())
						.on('change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
							);

							column
								.search(val ? '^' + val + '$' : '', true, false)
								.draw();
						});

					column.data().unique().sort().each(function (d, j) {
						select.append('<option value="' + d + '">' + d + '</option>')
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
