jQuery(document).ready(function ($) {
    // Automatically display the popup after 30 seconds
    setTimeout(function () {
        $('#shortcode-popup-overlay').fadeIn();
    }, 20000); // 20 seconds

    // Close the popup when the close button is clicked
    $('#shortcode-popup-close').click(function () {
        $('#shortcode-popup-overlay').fadeOut();
    });
});
