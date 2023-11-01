@extends('../layout/landing_master')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Image Studio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 0; /* Added to remove body padding */
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Image Studio</h1>
        <div id="canvas-container">
            <div id="styling-section">
                <label for="upload" class="upload" id="upload-label">Upload Image</label>
                <input type="file" id="upload" accept="image/*" /> or 
                <form method="post" action="seachproduct">
                    <input type="text" id="lfjCode" placeholder="Enter LFJ Code"/>
                    <input class="upload" type="submit" style="background-color:orange" value="Load Image">
                </form>
                <a href="products" style="font: bold">Search for LFJ Codes</a>
            </div>
            <canvas id="canvas" width="800" height="600"></canvas>
        </div>
        <button id="save">Save Image</button>
        <a id="download" download="image.png">Download Image</a>
    </div>

    <script src="{{ asset('js/fabric.min.js') }}"></script>
    <script>
        var canvas = new fabric.Canvas('canvas');
        var currentImage;

        // Function to handle image upload from the client's computer
        document.getElementById('upload').addEventListener('change', function (e) {
            var file = e.target.files[0];
            var reader = new FileReader();

            reader.onload = function (f) {
                var data = f.target.result;
                fabric.Image.fromURL(data, function (img) {
                    currentImage = img;
                    canvas.add(img).renderAll();
                    document.getElementById('upload').value = '';
                });
            };

            reader.readAsDataURL(file);
        });

        // Function to save the canvas as an image and trigger download
        document.getElementById('save').addEventListener('click', function () {
            if (currentImage) {
                var dataURL = canvas.toDataURL({ format: 'png' });
                var downloadLink = document.getElementById('download');
                downloadLink.href = dataURL;
                downloadLink.style.display = 'block';
                downloadLink.click();
            } else {
                console.log('No image to save.');
            }
        });
    </script>
</body>
</html>

@endsection
