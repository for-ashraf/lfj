$(document).ready(function () {

    const galleryContainer = $('#gallery-container');
    const loadMoreButton = $('#load-more');
    const maxPictures = 40; // Maximum number of pictures
    let currentPictures = 12; // Number of pictures initially shown
    const picturesPerPage = 12; // Number of pictures loaded on "Load More" click

    function loadPictures(start, end) {
     
        for (let i = start; i < end; i++) {
            const imageUrl = `home/diamondring.jpg`;
            const pictureCard = `<div class="col-md-3">
                <div class="picture-card">
                    <img src="${imageUrl}" class="img-fluid" alt="Image ${i + 1}">
                </div>
            </div>`;
            galleryContainer.append(pictureCard);
        }
    }

    function loadMorePictures() {
        currentPictures += picturesPerPage;
        if (currentPictures >= maxPictures) {
            loadMoreButton.hide();
        }
        loadPictures(currentPictures - picturesPerPage, currentPictures);
    }

    // Initial load
    loadPictures(0, currentPictures);

    // Load more pictures on button click
    loadMoreButton.click(loadMorePictures);

    // Keyboard navigation for the blog section
    $(".blog").on("keydown", function (event) {
        if (event.keyCode === 37) {
            $(this).animate({ scrollLeft: "-=300px" }, 300);
        } else if (event.keyCode === 39) {
            $(this).animate({ scrollLeft: "+=300px" }, 300);
        }
    });
});
$(document).ready(function () {
    // Function to open the image zoom card
    function openImageZoom(imageUrl, title) {
        $("#zoomed-image").attr("src", imageUrl);
        $("#image-title").text(title);
        $("#image-zoom-card").fadeIn();
    }

    // Function to close the image zoom card
    function closeImageZoom() {
        $("#image-zoom-card").fadeOut();
    }

    // Click event for each image card
    $(".picture-card img").click(function () {
        const imageUrl = $(this).attr("src");
        const title = $(this).attr("alt");
        openImageZoom(imageUrl, title);
    });

    // Click event for the close button
    $("#close-zoom-card").click(function () {
        closeImageZoom();
    });

    // Allow closing the image zoom card by pressing the Escape key
    $(document).keydown(function (e) {
        if (e.key === "Escape") {
            closeImageZoom();
        }
    });
});

