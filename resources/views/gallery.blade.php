<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <title>Document</title>

    <style>

        .box{
            background-color: #9ca3af;
            margin: 10%;
            border: 10px solid #2563eb;
        }

        .row{
        }

        /*.center {*/
        /*    width: 50%;*/
        /*}*/

        .column {
            float: left;
            padding: 10px;
        }
        .card {
            font-family: sans-serif;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #f7fafc;
            margin: 10px;
            position: relative;
            float: left;
            cursor: pointer;
        }



    </style>
</head>
<body>

<div class="box">
    <div class="row">
        <div class="column ">
                <div class="card" id="1">
                    <img onclick="filemanager()" src="{{asset('images/upload-image.png')}}">
                </div>



        </div>
    </div>

</div>

</body>
</html>

<script>
    function filemanager(){
        console.log('ok');
    }
</script>
