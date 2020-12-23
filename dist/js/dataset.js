$(function () {

    $(document).on('click', '#pag-addMore a', function (e) {
        e.preventDefault();
        //console.log($(this).data("ci-pagination-page"));          
        get_more_data($(this).data("ci-pagination-page"));
    });

})


function get_more_data(page) {

    if (page == 'undefined') {
        page = 1;
    }

    $('.table-dataset').LoadingOverlay('show', {
        image       : "",
        fontawesome : "fa fa-cog fa-spin"
    });

    $('.table-dataset').LoadingOverlay('show');

    $.ajax({
        url: base_url + 'dashboard/get_more_dataset/' + page,
        type: 'GET',
        dataType: 'text', // added data type        
        success: function (res) {
            $('.table-dataset').html(res);
            $('.table-dataset').LoadingOverlay('hide', true);
        }
    });

}