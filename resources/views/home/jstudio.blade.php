@extends('../layout/landing_master')
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Image Studio - Creative Image Development Hub</title>
        <meta name="description" content="Unlock your creativity with Image Studio. Transform your ideas into stunning images. Follow these simple steps to craft and download your masterpiece.">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin: 0;
                padding: 0;
                /* Added to remove body padding */
            }

            .container {
                text-align: center;
                background-color: #fff;
                border: 2px solid #ddd;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                width: 100%;
                padding-top: 10px;
            }

            h1 {
                color: #333;
            }

            #canvas-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin: 10px 0;
            }

            #canvas {
                border: 2px solid #3498db;
                border-radius: 10px;
                background-color: #ecf0f1;
            }

            #upload {
                margin: 10px 0;
                padding: 10px;
                border: 2px solid #3498db;
                border-radius: 5px;
                background-color: #3498db;
                color: #fff;
                cursor: pointer;
            }

            #save {
                margin: 10px 0;
                padding: 10px;
                border: 2px solid #e74c3c;
                border-radius: 5px;
                background-color: #e74c3c;
                color: #fff;
                cursor: pointer;
            }

            #download {
                display: none;
            }

            input[type="file"] {
                display: none;
            }

            .upload {
                margin: 10px 0;
                padding: 10px;
                border: 2px solid #3498db;
                border-radius: 5px;
                background-color: #3498db;
                color: #fff;
                cursor: pointer;
            }

            /* Styling for "need some styling section" */
            #styling-section {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin: 10px 0;
            }

            #lfjCode {
                margin: 10px 0;
                padding: 10px;
                border: 2px solid #3498db;
                border-radius: 5px;
            }

            /* Attractive Introduction Styles */
            #introduction {
                background-color: #3498db;
                padding: 20px;
                border-radius: 10px;
                color: #fff;
                text-align: center;
            }

            #introduction h2 {
                font-size: 24px;
                margin: 10px 0;
            }

            #introduction p {
                font-size: 18px;
                margin: 10px 0;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1>Image Studio - Creative Image Development Hub</h1>

            <!-- Attractive Introduction -->
            <div id="introduction">
                <h2>Welcome to Image Studio - Your Creative Image Development Hub</h2>
                <p>Unlock Your Creativity with Image Studio: Transform Ideas into Stunning Images</p>
                <p>Start your visual journey today. Follow these simple steps to craft and download your masterpiece:</p>
            </div>

            <div id="canvas-container">
                <div id="styling-section">
                    <label for="upload" class="upload" id="upload-label">Upload Image</label>
                    <input type="file" id="upload" accept="image/*" /> or
                    <form id="lfjCodeForm" method="post" action="seachproduct">

                        <input type="text" id="lfjCode" placeholder="Enter LFJ Code" />
                        <input class="upload" type="submit" style="background-color: orange" value="Load Image" />
                        <div id="error-message" style="color: red;"></div>

                    </form>
                    <a href="products" style="font: bold">Search for LFJ Codes</a>
                </div>
                <canvas id="canvas" width="800" height="600"></canvas>
            </div>
            <button id="save">Save Image</button>
            <a id="download" download="image.png" style="display: none;"></a>
        </div>

       <script src="{{ asset('js/fabric.min.js') }}"></script>
        <script>
            var canvas = new fabric.Canvas('canvas');
            var currentImages = []; // Array to store all loaded images

            // Function to handle image upload from the client's computer
            document.getElementById('upload').addEventListener('change', function(e) {
                var file = e.target.files[0];
                var reader = new FileReader();

                reader.onload = function(f) {
                    var data = f.target.result;
                    fabric.Image.fromURL(data, function(img) {
                        img.scaleToWidth(400);
                        img.scaleToHeight(400);
                        canvas.add(img).renderAll();
                        currentImages.push(img);
                        document.getElementById('upload').value = '';
                    });
                };

                reader.readAsDataURL(file);
            });

            // Function to load an image by LFJ code
            function loadImageByLFJCode() {
                var lfjCode = document.getElementById('lfjCode').value;

                if (lfjCode) {
                    // Construct the image source URL
                    var imageSrc = '/uploads/products/' + lfjCode + '.jpg';

                    // Check if the image exists
                    fabric.Image.fromURL(imageSrc, function(img) {
                        img.scaleToWidth(400);
                        img.scaleToHeight(400);
                        canvas.add(img).renderAll();
                        currentImages.push(img);
                        document.getElementById('error-message').textContent = ''; // Clear the error message
                    }, function() {
                        document.getElementById('error-message').textContent =
                        'Image not found'; // Display error message
                    });
                } else {
                    document.getElementById('error-message').textContent = 'Please enter LFJ Code'; // Display error message
                }
            }

            // Attach the function to the form's submit event
            document.getElementById('lfjCodeForm').addEventListener('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission
                loadImageByLFJCode();
            });

            // Function to save the canvas as an image and trigger download
            document.getElementById('save').addEventListener('click', function() {
    var dataURL = canvas.toDataURL({
        format: 'png'
    });
    var downloadLink = document.getElementById('download');
    downloadLink.href = dataURL;

    // Programmatically trigger the click event on the download link
    downloadLink.click();
});

            document.addEventListener('keydown', function(event) {
                if (event.key === 'Delete' || event.key === 'Backspace') {
                    var activeObject = canvas.getActiveObject();
                    if (activeObject && activeObject.type === 'image') {
                        // Remove the selected image from the canvas
                        canvas.remove(activeObject);
                        var index = currentImages.indexOf(activeObject);
                        if (index !== -1) {
                            currentImages.splice(index, 1);
                        }
                    }
                }
            });
        </script>
    @endsection
