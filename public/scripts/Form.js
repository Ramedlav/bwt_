$(document).ready(function() {
    $('form').submit(function (e) {
        var json;
        e.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                document.write(data);
                // json = $.parseJSON(data);
                // if (json.url){
                //     window.location.href = json.url;
                // }else{
                //     alert('ссылка не найдена');
                // }
            }
        });

    });
});