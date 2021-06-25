//--------------Program Pelatihan--------------//
$.ajax({
    type: "POST",
    url: "beranda/program_pelatihan",
    dataType: 'json',
    success: function(data){
        var html = '';
        for(var i=0; i<data.length; i++){
            html += '<div class="col-xl-4 col-lg-4 col-md-6">'+
                        '<div class="single_courses">'+
                            '<div class="thumb">'+
                                '<img src="assets/frontend/images/landing/courses/'+ data[i].gambar_pelatihan +'" alt="">'+
                            '</div>'+
                            '<div class="courses_info">'+
                                '<h3><a href="pelatihan/detail/'+ data[i].id_pelatihan +'">'+ data[i].nama_pelatihan +'</a></h3>'+
                                '<div class="star_prise d-flex justify-content-between">'+
                                    '<div class="star">'+
                                        '<i class="flaticon-mark-as-favorite-star"></i>'+
                                        '<span>(4.5)</span>'+
                                    '</div>'+
                                    '<div class="prise">'+
                                        '<span class="active_prise">Rp'+ Number(data[i].harga).toLocaleString("id-ID") +'</span>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>';
        }
        $('#program_pelatihan').html(html);
    }
});


//--------------Berita--------------//
$.ajax({
    type: "POST",
    url: "berita/get_berita",
    dataType: 'json',
    success: function(data){
        var html = '';
        for(var i=0; i<data.length; i++){
            if(data[i].deskripsi_berita.length > 420){
                data[i].deskripsi_berita = data[i].deskripsi_berita.substring(0,420)+'<a href="berita/detail/'+ data[i].id_berita +'">[...]</a>';
            }

            html += '<div class="row blog_details mb-4">'+
                        '<div class="col-md-4">'+
                            '<div class="blog_item_img">'+
                                '<img class="img-fluid" src="assets/frontend/images/landing/berita/'+ data[i].foto_berita +'" alt="">'+
                            '</div>'+
                        '</div>'+
                        '<div class="col-md-8">'+
                            '<div class="">'+
                                '<a class="d-inline-block" href="berita/detail/'+ data[i].id_berita +'"><h2>'+ data[i].nama_berita +'</h2></a>'+
                                '<p>'+ data[i].deskripsi_berita +'</p>'+
                                '<ul class="blog-info-link">'+
                                    '<li class="date"><i class="fa fa-calendar"></i>'+ data[i].tgl_berita +'</li>'+
                                '</ul>'+
                            '</div>'+
                        '</div>'+
                    '</div>';
        }
        $('#berita').html(html);
    }
});

