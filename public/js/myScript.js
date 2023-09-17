// Initialize variables
let currentIndex = 0;
const batchSize = 3; // Number of blogs to load at a time

// Function to load and display blogs
function loadBlogs() {
    // Make an AJAX request to fetch blogs starting from currentIndex
    $.ajax({
        url: '/load-blogs', // Replace with your API endpoint
        method: 'GET',
        data: { startIndex: currentIndex, batchSize: batchSize },
        success: function (data) {
            // Append the loaded blogs to the blog section
            $('.blog .row').append(data);

            // Update currentIndex
            currentIndex += batchSize;
        },
        error: function (error) {
            console.error('Error loading blogs:', error);
        }
    });
}

// Event listener for right arrow click
$('.right-arrow').click(function () {
    loadBlogs();
});

// Event listener for left arrow click (you can implement this)
$('.left-arrow').click(function () {
    // Implement moving blogs to the left
});

// Initial load of blogs
loadBlogs();
