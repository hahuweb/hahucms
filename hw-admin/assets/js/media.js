
/**
 * Media
 * 
 * andling for upload media, image, themes, plugins and updates.
 */



$('document').ready(function () {

    // validate 
    $(".sf").on('click', function () {
        var fn = document.forms["ulg"]["firstname"].value;
        if (fn != "") {
            alert('Problem for login');
            return false;
        }
    });

    // file
    $("#files").on('submit', function (event) {
        event.preventDefault();
        var file = $('#file').val();
        var extension = file.split('.').pop().toLowerCase();
        if (file == "") {
            $('#loader-icon').html('<p class=""><strong>Please choose file to be uploaded.</strong></p>');
            return false;
        } else if (extension != "zip") {
            $('#loader-icon').html('<p class=""><strong>Sorry, only zip files are allowed.</strong></p>');
            return false;
        } else {
            $.ajax({
                xhr: function () {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function (evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = parseInt(((evt.loaded / evt.total) * 100));
                            $("#progress").width(percentComplete + '%');
                            $("#percent").html(percentComplete + '%');
                            // $('#status').html(evt.loaded);
                            // $('#total').html(evt.total);
                            $('.status, .progress').css({ "display": "block" })
                        }
                    }, false);
                    return xhr;
                },
                url: "upload.php",
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    $("#progress-bar").width('0%');
                    $('#loader-icon').show();
                },
                error: function () {
                    $('#loader-icon').html('<p style="color:#EA4335;">File upload failed, please try again.</p>');
                },
                success: function () {
                    $('#vid').add('.btn-success').css('cursor', 'no-drop').prop('disabled', true);
                    $('#loader-icon').html('<meta http-equiv="refresh" content="0">');
                    $('.skip').hide();
                    $('.succes').show();
                }
            });
        }
    });

    // media
    $("#formedia").on('submit', function (event) {
        event.preventDefault();
        var media = $('#media').val();
        var extension = media.split('.').pop().toLowerCase();

        if (media == "") {
            $('#loader-icon').html('<p class=""><strong>Please choose at least 1 file to be uploaded.</strong></p>');
            return false;
        } else if (extension != "jpeg" &&
            extension != "png" &&
            extension != "jpg" &&
            extension != "gif" &&
            extension != "jpeg" &&
            extension != "mp4" &&
            extension != "wmv" &&
            extension != "mp3" &&
            extension != "wav" &&
            extension != "pdf" &&
            extension != "docx" &&
            extension != "pptx" &&
            extension != "accdb" &&
            extension != "xlsx" &&
            extension != "zip") {
            $('#loader-icon').html('<p class=""><strong>Sorry, only image, video, audio & document files are allowed.</strong></p>');
            return false;
        } else {
            $.ajax({
                xhr: function () {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function (evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = parseInt(((evt.loaded / evt.total) * 100));
                            $("#progress").width(percentComplete + '%');
                            $("#percent").html(percentComplete + '%');
                            // $('#status').html(evt.loaded);
                            // $('#total').html(evt.total);
                            $('.status, .progress').css({ "display": "block" })
                        }
                    }, false);
                    return xhr;
                },
                url: "upload.php",
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    $("#progress-bar").width('0%');
                    $('#loader-icon').show();
                },
                error: function () {
                    $('#loader-icon').html('<p style="color:#EA4335;">File upload failed, please try again.</p>');
                },
                success: function () {
                    $('#vid').add('.btn-success').css('cursor', 'no-drop').prop('disabled', true);
                    $('#loader-icon').html('<meta http-equiv="refresh" content="0">');
                    $('.skip').hide();
                    $('.succes').show();
                }
            });
        }
    });


    // image
    $("#formImg").on('submit', function (event) {
        event.preventDefault();

        var img = $('#img').val();
        var extension = img.split('.').pop().toLowerCase();

        if (img == "") {
            $('#loader-icon').html('<p class="fade show">Please choose at least 1 file to be uploaded.</p>');
            return false;
        } else if (extension != "jpeg" && extension != "png" && extension != "jpg" && extension != "gif") {
            $('#loader-icon').html('<p class="fade show" >Sorry, only jpeg, png & jpg files are allowed.</p>');
            return false;
        } else {
            $.ajax({
                xhr: function () {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function (evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = parseInt(((evt.loaded / evt.total) * 100));
                            $("#progress").width(percentComplete + '%');
                            $("#percent").html(percentComplete + '%');
                            $('.status, .progress').css({ "display": "block" })
                        }
                    }, false);
                    return xhr;
                },
                url: "upload.php",
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    $("#progress-bar").width('0%');
                    $('#loader-icon').show();
                },
                error: function () {
                    $('#loader-icon').html('<p style="color:#EA4335;">File upload failed, please try again.</p>');
                },
                success: function (data) {
                    $('#uploaded_image').html(data);
                }
            });
        }
    });

});