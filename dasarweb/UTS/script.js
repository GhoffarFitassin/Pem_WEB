$(document).ready(function(){
    function displaySongs() {
        $.ajax({
            type: 'GET',
            url: 'list_lagu.php', 
            success: function (response) {
                $('#result').html(response);
            },
        });
    }

    displaySongs();

    $("#file").change(function (e) {
        if (this.files.length > 0) {
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    $('#upload-form').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: 'upload.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.includes("Ekstensi file yang diizinkan adalah")) {
                    alert(response);
                } else {
                    displaySongs(); 
                }
                // $('#result').html(response);
            },
            error: function(){
                $('#result').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});
