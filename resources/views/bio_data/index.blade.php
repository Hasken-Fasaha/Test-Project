<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata Form</title>
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

        .container form {
            width: 700px;
            top: 70px;
            position: absolute;
            left: 50px;
            transition: 0.5s;
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
            width: 100%;
            margin: 30px auto;
            text-align: center;
        }

        form button {
            width: 150px;
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
    <div class="container">
        <form action="" id="form1">
            <h2>Basic Information <i class="fa fa-info"></i></h2>
            <input type="text" name="" id="" placeholder="Surname" required>
            <input type="text" name="" id="" placeholder="Middle name" required>
            <input type="text" name="" id="" placeholder="First name" required>
            <input type="date" name="" id="" placeholder="Birth date" required>
            <select name="" id="" required>
                <option value="">Select gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <select name="" id="" required>
                <option value="">Select Marital Status</option>
                <option value="Married">Married</option>
                <option value="Single">Single</option>
            </select>

            <div class="btn-box">
                <button type="button" id="Next1">Next</button>
            </div>

        </form>

        <form action="" id="form2">
            <h2>Contact Information <i class="fa fa-info"></i></h2>
            <input type="text" name="" id="" placeholder="Email ID" required>
            <input type="text" name="" id="" placeholder="Phone Number" required>
            <textarea cols="30" rows="5" placeholder="Address" required></textarea>
            <select name="" id="" required>
                <option value="">Select LGA</option>
                <option value="Gombe">Gombe</option>
                <option value="Bauchi">Bauchi</option>
            </select>
            <select name="" id="" required>
                <option value="">Select State</option>
                <option value="Gombe">Gombe</option>
                <option value="Bauchi">Bauchi</option>
            </select>
            <input type="text" name="" id="" placeholder="Countryr" value="Nigeria" required>


            <div class="btn-box">
                <button type="button" id="Back1">Back</button>

                <button type="button" id="Next2">Next</button>
            </div>

        </form>

        <form action="" id="form3">
            <h2>Sponsor Information <i class="fa fa-info"></i></h2>
            <input type="text" name="" id="" placeholder="Surname" required>
            <input type="text" name="" id="" placeholder="Middle name" required>
            <input type="text" name="" id="" placeholder="First name" required>
            <input type="date" name="" id="" placeholder="Birth date" required>
            <select name="" id="" required>
                <option value="">Select gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <div class="btn-box">
                <button type="button" id="Back2">Back</button>

                <button type="button" id="Next3">Next</button>
            </div>

        </form>

        <form action="" id="form4">
            <h2>Next of Kin Information <i class="fa fa-info"></i></h2>
            <input type="text" name="" id="" placeholder="Surname" required>
            <input type="text" name="" id="" placeholder="Middle name" required>
            <input type="text" name="" id="" placeholder="First name" required>
            <input type="date" name="" id="" placeholder="Birth date" required>
            <select name="" id="" required>
                <option value="">Select gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <div class="btn-box">
                <button type="button" id="Back3">Back</button>

                <button type="button" id="Next4">Next</button>
            </div>

        </form>

        <form action="" id="form5">
            <h2>Programme Information <i class="fa fa-info"></i></h2>
            <input type="text" name="" id="" placeholder="Surname" required>
            <input type="text" name="" id="" placeholder="Middle name" required>
            <input type="text" name="" id="" placeholder="First name" required>
            <input type="date" name="" id="" placeholder="Birth date" required>
            <select name="" id="" required>
                <option value="">Select gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <div class="btn-box">
                <button type="button" id="Back4">Back</button>

                <button type="Submit">Submit</button>
            </div>

        </form>

        <div class="step-row">
            <div id="progress"></div>
            <div class="step-col">
                <small id="p-text" style="color: #fff;">Basic Info</small>
            </div>
            <div class="step-col">
                <small id="p-text2">Contact Info</small>
            </div>
            <div class="step-col">
                <small id="p-text3">Sponsor Info</small>
            </div>
            <div class="step-col">
                <small id="p-text4">Next of Kin Info</small>
            </div>
            <div class="step-col">
                <small id="p-text5">Program Info</small>
            </div>
        </div>

    </div>

    <script>
        var form1 = document.getElementById("form1");
        var form2 = document.getElementById("form2");
        var form3 = document.getElementById("form3");
        var form4 = document.getElementById("form4");
        var form5 = document.getElementById("form5");

        var Next1 = document.getElementById("Next1");
        var Next2 = document.getElementById("Next2");
        var Back1 = document.getElementById("Back1");
        var Next3 = document.getElementById("Next3");
        var Back2 = document.getElementById("Back2");
        var Next4 = document.getElementById("Next4");
        var Back3 = document.getElementById("Back3");
        var Back4 = document.getElementById("Back4");

        var progress = document.getElementById("progress");

        var p_text2 = document.getElementById("p-text2");
        var p_text3 = document.getElementById("p-text3");
        var p_text4 = document.getElementById("p-text4");
        var p_text5 = document.getElementById("p-text5");

        Next1.onclick = function() {
            form1.style.left = "-1000px";
            form2.style.left = "50px";
            progress.style.width = "300px";
            p_text2.style.color = "#fff";
        }

        Back1.onclick = function() {
            form1.style.left = "50px";
            form2.style.left = "1000px";
            progress.style.width = "150px";
            p_text2.style.color = "#777";
        }

        Next2.onclick = function() {
            form2.style.left = "-1000px";
            form3.style.left = "50px";
            progress.style.width = "450px";
            p_text3.style.color = "#fff";
        }

        Back2.onclick = function() {
            form2.style.left = "50px";
            form3.style.left = "1000px";
            progress.style.width = "300px";
            p_text3.style.color = "#777";
        }

        Next3.onclick = function() {
            form3.style.left = "-1000px";
            form4.style.left = "50px";
            progress.style.width = "600px";
            p_text4.style.color = "#fff";
        }

        Back3.onclick = function() {
            form3.style.left = "50px";
            form4.style.left = "1000px";
            progress.style.width = "450px";
            p_text4.style.color = "#777";
        }
        Next4.onclick = function() {
            form4.style.left = "-1000px";
            form5.style.left = "50px";
            progress.style.width = "800px";
            p_text5.style.color = "#fff";
        }

        Back4.onclick = function() {
            form4.style.left = "50px";
            form5.style.left = "1000px";
            progress.style.width = "600px";
            p_text5.style.color = "#777";
        }
    </script>

</body>

</html>
