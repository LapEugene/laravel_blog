$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
});

$(function () {
    var count = 0;
    $('body').on('click', '#search', function () {

        var $self = $(this);
        var formData = new FormData();
        formData.append('string', $self.data('string'));
        formData.append('action', 'upload_photo');
        if (count > 10)count = 1;
        formData.append('count', count);

        $.ajax({
            'url': '/ajax',
            'type': 'post',
            'dataType': 'json',
            contentType: false,
            processData: false,
            'data': formData
        }).done(function (resp) {
            if (resp.status == true) {
                $('#searchingImg').find('img').attr('src', resp.img);
            }
        });
        count++;
    });
    $('body').on('click', '#insert', function () {
        var $self = $(this);
        var src = $('#searchedImg').attr('src');
        $('#imgInArticle').attr('src', src);

    });
});