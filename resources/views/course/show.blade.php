<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Course</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('style.css') }}"> --}}

    <style>
           * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        body {
            background-image: linear-gradient(rgba(201, 203, 202, 0.8), rgba(201, 203, 202, 0.8)), url(gsu-logo.PNG);
            background-position: center;
            background-size: cover;
        }

        .container {
            width: 800px;
            height: 570px;
            margin: 2% auto;
            background: #fff;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
        }

        h2 {
            margin-top: 30px;
            text-align: center;
            margin-bottom: 20px;
            color: #777;
            font-weight: bolder;
        }

        small {
            color: #777;
            font-weight: bold;
        }

       

        form input,
        select,
        textarea {
            width: 100%;
            padding: 10px 5px;
            margin: 5px 0;
            border: 0;
            border-bottom: 1px solid #999;
            outline: none;
            background: transparent;
        }

        ::placeholder {
            color: #777;
        }

        .btn-box {
            width: auto;
            margin: 30px auto;
            text-align: center;
        }

        form button {
            width: auto;
            height: 40px;
            margin: 0 10px;
            background: linear-gradient(to right, #f24343, #46b17d);
            border-radius: 30px;
            border: 0;
            outline: none;
            color: #fff;
            cursor: pointer;
        }

        #form2 {
            left: 1000px;
        }

        #form3 {
            left: 1000px;
        }

        #form4 {
            left: 1000px;
        }

        #form5 {
            left: 1000px;
        }

        .step-row {
            width: 800px;
            height: 50px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            box-shadow: 0 -1px 5px -1px #000;
            position: relative;
        }

        .step-col {
            width: 150px;
            text-align: center;
            color: #333;
            position: relative;
        }

        #progress {
            position: absolute;
            height: 100%;
            width: 150px;
            background: linear-gradient(to right, #f24343, #46b17d);
            transition: 1s;
        }

        #progress::after {
            content: '';
            height: 0;
            width: 0;
            border-top: 25px solid transparent;
            border-bottom: 25px solid transparent;
            position: absolute;
            right: -20px;
            top: 0;
            border-left: 20px solid #46b17d;
        }
    </style>
</head>
<body>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('course.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course Code:</strong>
                {{ $course_cur->course_code }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Programe:</strong>
                {{ $course_cur->program_id }}
            </div>
        </div>
    </div>
</body>
</html>