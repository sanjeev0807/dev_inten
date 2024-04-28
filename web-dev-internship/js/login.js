// JavaScript code for login.html
$(document).ready(function() {
    $('#loginForm').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'php/login.php',
            data: formData,
            success: function(response) {
                $('#loginMessage').html(response);
                if (response.indexOf('success') >= 0) {
                    window.location.href = 'profile.html';
                }
            }
        });
    });
});
