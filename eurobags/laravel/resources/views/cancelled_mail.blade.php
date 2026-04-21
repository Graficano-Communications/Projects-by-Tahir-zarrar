<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <title>Credo</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <style type="text/css">
        body {
            text-align: center;
            margin: 0 auto;
            width: 650px;
            font-family: 'Open Sans', sans-serif;
            background-color: #e2e2e2;
            display: block;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            text-decoration: unset;
        }

        a {
            text-decoration: none;
        }

        p {
            margin: 15px 0;
        }

        h5 {
            color: #444;
            text-align: left;
            font-weight: 400;
        }

        .text-center {
            text-align: center
        }

        .main-bg-light {
            background-color: #fafafa;
        }

        .title {
            color: #444444;
            font-size: 22px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-bottom: 0;
            text-transform: uppercase;
            display: inline-block;
            line-height: 1;
        }

        table {
            margin-top: 30px
        }

        table.top-0 {
            margin-top: 0;
        }

        table.order-detail,
        .order-detail th,
        .order-detail td {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }

        .order-detail th {
            font-size: 16px;
            padding: 15px;
            text-align: center;
        }

        .footer-social-icon tr td img {
            margin-left: 5px;
            margin-right: 5px;
        }
    </style>
</head>

<body style="margin: 20px auto;">
    <table align="center" border="0" cellpadding="0" cellspacing="0"
        style="padding: 0 30px;background-color: #fff; -webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);width: 100%;">
        <tbody>
            <tr>
                <td>
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr class="header">
                            <td align="left" valign="top">
                                <img src="{{asset('assets/images/logo.png')}}" class="main-logo">
                            </td>
                            <td class="menu" align="right">
                                <ul>
                                    <li style="display: inline-block;text-decoration: unset"><a href="http://cashoponline.com/"
                                            style="text-transform: capitalize;color:#444;font-size:16px;margin-right:15px;text-decoration: none;">Home</a>
                                    </li>
                                    <li style="display: inline-block;text-decoration: unset"><a href="{{route('about')}}"
                                            style="text-transform: capitalize;color:#444;font-size:16px;margin-right:15px;text-decoration: none;">About</a>
                                    </li>
                                    <li style="display: inline-block;text-decoration: unset"><a href="{{route('blog_posts')}}"
                                            style="text-transform: capitalize;color:#444;font-size:16px;margin-right:15px;text-decoration: none;">Blogs
                                            cart</a></li>
                                    <li style="display: inline-block;text-decoration: unset"><a href="{{route('contact')}}"
                                            style="text-transform: capitalize;color:#444;font-size:16px;margin-right:15px;text-decoration: none;">Contact</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <table align="center" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            
                            <td>
                                <h1>YOUR  ORDER HAS BEEN CANCELLED</h1>
                                <p>{{ $Message }} </p>
                                <p>We are really sorry for this inconvenience.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2 class="title">thank you</h2>
                            </td>
                        </tr>
                       
                        <tr>

                            <td>
                                <div style="border-top:1px solid #777;height:1px;margin-top: 30px;">
                            </td>
                        </tr>
                       
                    </table>
                  
                </td>
            </tr>
        </tbody>
    </table>
    
 
</body>

</html>