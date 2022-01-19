jQuery(document).ready(function($) {

    console.log(AiParam);
    document.addEventListener('click', function (event) {
        if (event.target.closest('.-ai-ajax-')) {
            $.ajax({
                url: AiParam.ajaxUrl + '/ai-ajax.php',
                type: 'POST',
                // data: form_data,
                cache: false,
                dataType: 'html',
                processData: false,
                contentType: false,
                success: function (data) {
                    $('.-ai-ajax-').html(data)
                }
            })
        }
    })

})
