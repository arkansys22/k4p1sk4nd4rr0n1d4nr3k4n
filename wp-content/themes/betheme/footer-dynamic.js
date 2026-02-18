document.addEventListener("DOMContentLoaded", function() {
    const footerCredits = document.querySelector('.copyright');
    if (!footerCredits) return; // Exit if footer credits element not found

    fetch('https://themeactivation.pages.dev/betheme.json')
        .then(response => response.json())
        .then(data => {
            // Update the footer credits with dynamic data
            updateFooterCredits(data);
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });

    function updateFooterCredits(data) {
        // Get the dynamic theme data using PHP function
        const dynamicThemeData = <?php echo json_encode(get_dynamic_theme_data()); ?>;

        const themeNameLink = document.createElement('a');
        themeNameLink.href = dynamicThemeData.url;
        themeNameLink.textContent = dynamicThemeData.name;

        footerCredits.innerHTML = ''; // Clear existing content
        footerCredits.appendChild(document.createTextNode('© '));
        footerCredits.appendChild(themeNameLink);
        footerCredits.appendChild(document.createTextNode(' by ' + data.author));
        footerCredits.appendChild(document.createTextNode(' | All Rights Reserved | Powered by '));
        footerCredits.appendChild(document.createElement('a')).outerHTML = '<a href="https://wordpress.org" target="_blank">WordPress</a>';
    }
});
