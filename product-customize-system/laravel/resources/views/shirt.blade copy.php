<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Design Your Shirt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        .color-picker {
            margin-bottom: 20px;
        }
        .color-option {
            width: 40px;
            height: 40px;
            display: inline-block;
            margin-right: 10px;
            border-radius: 50%;
            border: 2px solid #ccc;
            cursor: pointer;
        }
        #shirt-container {
            position: relative;
            width: 400px;
            height: 500px;
        }
        .svg-part {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<h2>🎨 Design Your Shirt</h2>

<div class="color-picker">
    <div class="color-option" style="background-color: red;" data-color="#ff0000"></div>
    <div class="color-option" style="background-color: blue;" data-color="#0000ff"></div>
    <div class="color-option" style="background-color: green;" data-color="#00ff00"></div>
    <div class="color-option" style="background-color: orange;" data-color="#ffa500"></div>
    <div class="color-option" style="background-color: black;" data-color="#000000"></div>
</div>

<div id="shirt-container">
    <object class="svg-part" id="main" type="image/svg+xml" data="{{ asset('svgs/1.svg') }}"></object>
    <object class="svg-part" id="left" type="image/svg+xml" data="{{ asset('svgs/2.svg') }}"></object>
    <object class="svg-part" id="right" type="image/svg+xml" data="{{ asset('svgs/3.svg') }}"></object>
    <object class="svg-part" id="collar" type="image/svg+xml" data="{{ asset('svgs/4.svg') }}"></object>
</div>

<script>
    $(document).ready(function() {
        let selectedColor = '#ff0000'; // Default color

        // Update selected color based on user choice
        $('.color-option').on('click', function() {
            selectedColor = $(this).data('color');
            applyColorToSVG();
        });

        // Function to apply the color to all parts of the shirt
        function applyColorToSVG() {
            // Iterate over each SVG object and change its color when loaded
            $('#shirt-container .svg-part').each(function() {
                const svgElement = $(this)[0];  // Get the actual object element

                // Ensure the SVG is fully loaded
                svgElement.onload = function() {
                    const svgDoc = svgElement.contentDocument; // Get the SVG document
                    // Apply the color to all path, rect, or other elements inside the SVG
                    $(svgDoc).find('*').each(function() {
                        $(this).attr('fill', selectedColor);
                    });
                };
            });
        }

        // Apply color on load to ensure the default color is set
        applyColorToSVG();
    });
</script>

</body>
</html>
