<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with Hover Dialog</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style>
        body {
        margin: 0;
        padding: 0;
        background: #262626;
        }

        .try {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .table-container {
            width: 500px;
            height: 500px;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        table {
            width: 100%;
            height: 100%;
            border-collapse: collapse;
        }
        td {
            width: 10%;
            height: 10%;
            box-sizing: border-box;
            text-align: center;
            font-size: 24px;
        }
        /* .dot {
            font-size: 30px;
            color: red;
            cursor: pointer;
            position: relative;
        } */
        
        .dialog-box {
            position: absolute;
            width: 500px;
            background-color: #333;
            border: 1px solid #333;
            color: #ffffff;
            border-radius: 8px;
            padding: 10px;
            z-index: 1000;
            display: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .dialog-box img {
            max-width: 100px;
            max-height: 100px;
        }
        .dot {
        position: relative; 
        display: block;
        width: 30px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        background: #333;
        border-radius: 50%;
        font-size: 20px;
        color: #666;
        transition: .5s;
        }

        .dot::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: #ffee10;
        transition: .5s;
        transform: scale(.9);
        z-index: -1;
        }

        /* Apply the effect on normal state */
        .dot::before {
        transform: scale(1.1); /* Make it larger */
        box-shadow: 0 0 15px #ffee10; /* Apply glowing shadow */
        }

        .dot {
        color: #ffee10; /* Apply the text color */
        box-shadow: 0 0 5px #ffee10; /* Apply shadow */
        text-shadow: 0 0 5px #ffee10; /* Apply text glow */
        }

        /* Hover effect */
        .dot:hover::before {
        transform: scale(1.1);
        box-shadow: 0 0 15px #ffee10;
        }

        .dot:hover {
        color: #ffee10;
        box-shadow: 0 0 5px #ffee10;
        text-shadow: 0 0 5px #ffee10;
        }

    </style>
</head>
<body>
    <section style="margin-top: 40px;">
        <div class="container">
            <div class="row">
                <h1 style="color: white; text-align: center">Welcome to Product Detail System for Graficano</h1>
            </div>
        </div>
    </section>
    <section class="try">
        <div class="table-container" style="background-image: url('{{ asset('uploads/banners/' . $banners->image) }}');">
            <table>
                <tbody>
                    @for ($i = 1; $i <= 100; $i++)
                        @if ($i % 10 == 1) <tr> @endif
                        <td>
                            @if (in_array($i, $positions))
                                <!-- Dot that triggers hover dialog -->
                                <span class="dot" data-position="{{ $i }}"><i class="fas fa-info-circle"></i>
                                </span>
                            @endif
                        </td>
                        @if ($i % 10 == 0) </tr> @endif
                    @endfor
                </tbody>
            </table>
        </div>
        <!-- Hover dialog box -->
        <div id="hoverDialog" class="dialog-box"></div>
    </section>

    <!-- Pass records data to JavaScript -->
    <script>
        const records = @json($records); // Convert Laravel collection to JavaScript array
    </script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dots = document.querySelectorAll('.dot');
            const hoverDialog = document.getElementById('hoverDialog');

            // Function to show the hover dialog
            function showDialog(event, record) {
                hoverDialog.style.display = 'block';
                hoverDialog.style.left = `${event.pageX + 10}px`;
                hoverDialog.style.top = `${event.pageY + 10}px`;

                hoverDialog.innerHTML = `
                    <p> ${record.caption}</p>
                    ${record.image ? `<img src="/${record.image}" alt="${record.caption}">` : ''}
                `;
            }

            // Function to hide the hover dialog
            function hideDialog() {
                hoverDialog.style.display = 'none';
            }

            // Add hover event listeners to each dot
            dots.forEach(dot => {
                dot.addEventListener('mouseenter', function (event) {
                    const position = parseInt(this.getAttribute('data-position'));
                    const record = records.find(r => r.position === position);

                    if (record) {
                        showDialog(event, record);
                    }
                });

                dot.addEventListener('mouseleave', hideDialog);
            });
        });
    </script>
</body>
</html>
