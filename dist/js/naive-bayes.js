$(function () {

    $(document).on('click', '#pag-addMore a', function (e) {
        e.preventDefault();
        //console.log($(this).data("ci-pagination-page"));          
        get_more_data($(this).data("ci-pagination-page"));
    })


    $(document).on('click', '.executeBtn', function () {

        var start = $('#start_number').val();
        var end = $('#end_number').val();

        if (start == '') {
            swal({
                icon: 'warning',
                text: 'Nomor awal belum diisi!'
            });
        } else if (end == '') {
            swal({
                icon: 'warning',
                text: 'Nomor akhir belum diisi!'
            });
        } else {

            $('.execution_panel').LoadingOverlay('show', {
                image: "",
                fontawesome: "fa fa-cog fa-spin"
            });

            $('.execution_panel').LoadingOverlay('show');

            $.ajax({
                type: 'POST',
                url: site_url + 'nlp/runnaivebayes',
                data: {
                    start: start,
                    end: end
                },
                dataType: 'json',
                success: function (response) {

                    if (response.msg == 'success') {
                        get_more_data(page);
                        $('.execution_panel').LoadingOverlay('hide', true);
                    } else {
                        $('.execution_panel').LoadingOverlay('hide', true);
                    }
                }
            });

        }


    })


    $(document).on('click', '.generateBtn', function () {

        var input_text = $('#input_text').val();

        if (input_text == '') {
            swal({
                icon: 'warning',
                text: 'Text belum diisi!'
            });
        } else {

            $('#tab_1').LoadingOverlay('show', {
                image: "",
                fontawesome: "fa fa-cog fa-spin"
            });

            $('#tab_1').LoadingOverlay('show');

            $.ajax({
                type: 'POST',
                url: site_url + 'nlp/naiveBayesTest',
                data: {
                    input_text: input_text
                },
                dataType: 'json',
                success: function (response) {

                    var label = response.class;
                    var score = response.score;

                    $('.generate_panel').html(`
                        <table>
                            <tr>
                                <td>Arah Sentimen</td>
                                <td>: `+ label + `</td>
                            </tr>
                            <tr>
                                <td>Score</td>
                                <td>: `+ score + `</td>
                            </tr>
                        </table>
                    `);

                    $('#tab_1').LoadingOverlay('hide', true);

                }
            });

        }


    })

})


var page = 1;
function get_more_data(page) {

    if (page == 'undefined') {
        page = 1;
    } else {
        page = page;
    }

    $('.table-classification').LoadingOverlay('show', {
        image: "",
        fontawesome: "fa fa-cog fa-spin"
    });

    $('.table-classification').LoadingOverlay('show');

    $.ajax({
        url: base_url + 'dashboard/get_more_naivebayes/' + page,
        type: 'GET',
        dataType: 'text', // added data type        
        success: function (res) {
            $('.table-classification').html(res);
            $('.table-classification').LoadingOverlay('hide', true);
        }
    });

}