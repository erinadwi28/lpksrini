(function ($) {
	$('#table_pelatihan').DataTable({
		"ajax": {
			"url": "member/ajax_list_pelatihan_aktif",
			"type": "POST",
		},
		"aLengthMenu": [
			[10, 30, 50, -1],
			[10, 30, 50, "All"]
		],
		'order': [],
		"processing": true,
		"language": {
			'search': '<i class="fa fa-search"></i>',
			'searchPlaceholder': "search",
			"emptyTable": "No records available - Got it?",
		},
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
							column.search(val ? '^' + val + '$' : '', true, false).draw();
						});
					column.data().unique().sort().each(function (d, j) {
						select.append('<option value="' + d + '">' + d + '</option>')
					});
				}
			});
		},
		"columns": [{
				data: "No"
			},
			{
				data: "Pelatihan"
			},
			{
				data: "Jumlah Kurikulum"
			},
			{
				data: "Status"
			},
			{
				data: "Aksi",
				render: function (data, type, row, meta) {
					return type === 'display' ?
						'<div class="btn-group" role="group">' +
						'<a href="member/kurikulum/' + data + '">' +
						'<button id="" type="button" class="btn btn-primary btn-sm">Masuk Kelas</button>' +
						'</a>' +
						'</div>' :
						data;
				}
			},
		],
	});

	// Parsley validation
	$("#kelas").parsley();
	$("#ubah_profil").parsley();
	$("#tambah_voucher").parsley();


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
						setTimeout(() => {
							window.location.reload();
						}, 1000);
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

	$("#file-upload").change(function () {
		var i = $(this).prev("label").clone();
		var file = $("#file-upload")[0].files[0].name;
		if (file.length > 25) {
			file = file.substr(0, 15) + "..." + file.substr(-10);
		}
		$(this).prev("label").text(file);
	});

	// sweet ubah foto
	const flashData = $('.flash-data-foto').data('flashdata');
	if (flashData) {

		Swal.fire({
			icon: 'success',
			title: 'Berhasil',
			text: flashData,
			type: 'success'
		});
	}

	// Insert voucher
	$('.simpan_voucher').submit(function (e) {
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			dataType: 'json',
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
					$('#modaltambah').modal('hide');
					setTimeout(() => {
						window.location.reload();
					}, 1000);
				}
			},
			error: function (xhr, ajaxOptions, thrownError) {
				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
			}
		})
		return false;
	});

	// Update voucher
	$('.ubah_voucher').submit(function (e) {
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			dataType: 'json',
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
					$('.ubah_data_voucher').modal('hide');
					setTimeout(() => {
						window.location.reload();
					}, 1000);
				}
			},
			error: function (xhr, ajaxOptions, thrownError) {
				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
			}
		})
		return false;
	});

	// Hapus / Nonaktifkan voucher
	$('.btn_hapus_voucher').click(function () {
		$id = $(this).parents("tr").attr("id");
		$kode = $(this).parents("tr").attr( "data-id" );

		Swal.fire({
			title: 'Hapus Voucher',
			text: "Apakah anda yakin ingin menghapus voucher dengan kode "+$kode+" ?",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Ya, Hapus',
			cancelButtonText: 'Tidak'
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					url: "admin/aksi_hapus_voucher/" + $id,
					type: 'POST',
					dataType: 'json',
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
							setTimeout(() => {
								window.location.reload();
							}, 1000);
						}
					},
					error: function (xhr, ajaxOptions, thrownError) {
						alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
					}
				});
			}
		});
	});
	

	// Update member data (admin)
	$('.ubah_data_member').submit(function (e) {
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			dataType: 'json',
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
					setTimeout(() => {
						window.location.reload();
					}, 1000);
				}
			},
			error: function (xhr, ajaxOptions, thrownError) {
				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
			}
		})
		return false;
	});

	// Setujui transaksi
	$('.btn_acc_transaksi').click(function () {
		$id_transaksi = document.getElementById("id_transaksi_acc").value ;

		Swal.fire({
			title: 'Setujui',
			text: "Apakah anda yakin ingin menyetujui transaksi ini ?",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Ya, Setujui',
			cancelButtonText: 'Tidak'
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					url: "../admin/aksi_acc_transaksi/" + $id_transaksi,
					type: 'POST',
					dataType: 'json',
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
							setTimeout(() => {
								location.href = "../list-transaksi-selesai";
							}, 1500);
						}
					},
					error: function (xhr, ajaxOptions, thrownError) {
						alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
					}
				});
			}
		});
	});

	// Update pelatihan data (admin)
	$('.ubah_detail_pelatihan').submit(function (e) {
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			dataType: 'json',
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
					setTimeout(() => {
						window.location.reload();
					}, 1000);
				}
			},
			error: function (xhr, ajaxOptions, thrownError) {
				alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
			}
		})
		return false;
	});

	// Lightbox
	$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
    });

})(jQuery);