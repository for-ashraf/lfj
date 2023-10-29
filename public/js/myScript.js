<script>
  // Initialize variables
  let currentIndex = {{ count($initialBlogs) }}; // Initialize currentIndex to the count of initially loaded blogs

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
  $('.scroll-right').click(function () {
    loadBlogs();
  });

  // Event listener for left arrow click (you can implement this)
  $('.scroll-left').click(function () {
    // Implement moving blogs to the left
  });

  // Initial load of blogs
  $(document).ready(function () {
    loadBlogs();
  });
</script>