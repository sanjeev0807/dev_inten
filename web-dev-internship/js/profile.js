// JavaScript code for profile.html
$(document).ready(function() {
    // Fetch user profile data
    $.ajax({
        type: 'GET',
        url: 'php/profile.php',
        success: function(response) {
            var userData = JSON.parse(response);
            $('#username').text(userData.username);
            $('#email').text(userData.email);
            $('#age').text(userData.age);
            $('#dob').text(userData.dob);
            $('#contact').text(userData.contact);
        }
    });

    // Function to update user profile
    window.updateProfile = function() {
        // Add code to update user profile
        alert('Update Profile function is not implemented yet!');
    };
});
