$(function () {

    $(document).on('click', '#pag-addMore a', function (e) {
        e.preventDefault();
        //console.log($(this).data("ci-pagination-page"));          
        get_more_data($(this).data("ci-pagination-page"));
    })


    $(document).on('click', '.executeBtn', function(){

        var start = $('#start_number').val();
        var end = $('#end_number').val();

        if(start == ''){
            swal({
                icon: 'warning',
                text: 'Nomor awal belum diisi!'
            });
        }else if(end == ''){
            swal({
                icon: 'warning',
                text: 'Nomor akhir belum diisi!'
            });
        }else{
            
            $('.execution_panel').LoadingOverlay('show', {
                image       : "",
                fontawesome : "fa fa-cog fa-spin"
            });

            $('.execution_panel').LoadingOverlay('show');

            $.ajax({
                type: 'POST',
                url: site_url + 'textpreprocessing/execute',
                data: {
                    start: start,
                    end: end
                },
                dataType: 'json',
                success: function (response) {     

                    if(response.msg == 'success'){
                        get_more_data(page);
                        $('.execution_panel').LoadingOverlay('hide', true);
                    }else{
                        $('.execution_panel').LoadingOverlay('hide', true);
                    }
                }
            });

        }


    })

})


var page = 1;
function get_more_data(page) {

    if (page == 'undefined') {
        page = 1;
    }else{
        page = page;
    }

    $('.table-preprocessing').LoadingOverlay('show', {
        image       : "",
        fontawesome : "fa fa-cog fa-spin"
    });

    $('.table-preprocessing').LoadingOverlay('show');

    $.ajax({
        url: base_url + 'dashboard/get_more_preprocessing/' + page,
        type: 'GET',
        dataType: 'text', // added data type        
        success: function (res) {
            $('.table-preprocessing').html(res);
            $('.table-preprocessing').LoadingOverlay('hide', true);
        }
    });

}