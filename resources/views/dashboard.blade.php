<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('include.css')
    <style>
        html,
        body {
            /* background-color: #EDEFF0; */
            background-image: url(public/img/dashbord_background.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;

        }

        #edge {
            border-radius: 10px;
        }

        #glass {
            background: inherit;
        }

        #glass:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            box-shadow: inset 0 0 2000px rgba(255, 255, 255, .5);
            filter: blur(10px);
            background: inherit;
        }
        .fa-user-circle{
            color:white;    
            font-size:35px;
        }

    </style>
</head>

<body id="glass">
    @include('include.nav')
    @include('include.side_bar')
    <div class="container">
        <div class="row">
            
        </div>
    </div>

    @include('include.js')
</body>

</html>
