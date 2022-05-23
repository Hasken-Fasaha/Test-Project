<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GSU</title>
    <meta name="description" content="Sybit Edu-Consults">
    <meta name="keywords" content="Sybit, Consultation, Edu-Consults, CBT, Senior, Secondary, Education, Nigeria">
    <meta name="author" content="Abubakar Abdulahi +2348022777887">
    <!-- <meta name="theme-color" content="#003399"/> -->
    <meta name="theme-color" content="#090" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />


    <!-- Favicons -->
    <link href="assets2/img/favicon.png" rel="icon">
    <link href="assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets2/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets2/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets2/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Template Main CSS File -->
    <link href="assets2/css/style.css" rel="stylesheet">
    <script src="sweetalert/sweetalert.min.js"></script>

    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />




    <!-- =======================================================
    * Template Name: KnightOne - v4.7.0
    * Template URL: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->



    <style type="text/css">
        .bb-login {
            margin-top: 100px;
            margin-bottom: 300px
        }

        input {
            outline: none;
            border: none
        }

        textarea {
            outline: none;
            border: none
        }

        textarea:focus,
        input:focus {
            border-color: transparent !important
        }

        input:focus::-webkit-input-placeholder {
            color: transparent
        }

        input:focus:-moz-placeholder {
            color: transparent
        }

        input:focus::-moz-placeholder {
            color: transparent
        }

        input:focus:-ms-input-placeholder {
            color: transparent
        }

        textarea:focus::-webkit-input-placeholder {
            color: transparent
        }

        textarea:focus:-moz-placeholder {
            color: transparent
        }

        textarea:focus::-moz-placeholder {
            color: transparent
        }

        textarea:focus:-ms-input-placeholder {
            color: transparent
        }

        input::-webkit-input-placeholder {
            color: #adadad
        }

        input:-moz-placeholder {
            color: #adadad
        }

        input::-moz-placeholder {
            color: #adadad
        }

        input:-ms-input-placeholder {
            color: #adadad
        }

        textarea::-webkit-input-placeholder {
            color: #adadad
        }

        textarea:-moz-placeholder {
            color: #adadad
        }

        textarea::-moz-placeholder {
            color: #adadad
        }

        textarea:-ms-input-placeholder {
            color: #adadad
        }

        button {
            outline: none !important;
            border: none;
            background: transparent
        }

        button:hover {
            cursor: pointer
        }

        iframe {
            border: none !important
        }

        .txt1 {
            font-family: Poppins-Regular;
            font-size: 13px;
            color: #666666;
            line-height: 1.5
        }

        .txt2 {
            font-family: Poppins-Regular;
            font-size: 13px;
            color: #333333;
            line-height: 1.5
        }

        .p-t-115 {
            padding-top: 40px
        }

        .p-b-48 {
            padding-bottom: 35px
        }

        .limit {
            width: 100%;
            margin: 0 auto
        }

        .login-container {
            width: 100%;
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;
            margin: 0 auto;

        }

        .bb-login {
            width: 390px;
            background: #fff;
            border-radius: 0px;
            overflow: hidden;
            padding: 26px 23px 35px 21px;
            box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
            -o-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1)
        }

        .bb-form {
            width: 100%
        }

        .bb-form-title {
            display: block;
            font-family: Poppins-Bold;
            font-size: 30px;
            color: #333333;
            line-height: 1.2;
            text-align: center
        }

        .bb-form-title i {
            font-size: 60px
        }

        .wrap-input100 {
            width: 100%;
            position: relative;
            border-bottom: 2px solid #adadad;
            margin-bottom: 37px
        }

        .input100 {
            font-family: Poppins-Regular;
            font-size: 15px;
            color: #555555;
            line-height: 1.2;
            display: block;
            width: 100%;
            height: 45px;
            background: transparent;
            padding: 0 5px
        }

        .bbb-input {
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none
        }

        .bbb-input::before {
            content: "";
            display: block;
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
            background: #6a7dfe;
            background: -webkit-linear-gradient(left, #21d4fd, #b721ff);
            background: -o-linear-gradient(left, #21d4fd, #b721ff);
            background: -moz-linear-gradient(left, #21d4fd, #b721ff);
            background: linear-gradient(left, #21d4fd, #b721ff)
        }

        .bbb-input::after {
            font-family: Poppins-Regular;
            font-size: 15px;
            color: #999999;
            line-height: 1.2;
            content: attr(data-placeholder);
            display: block;
            width: 100%;
            position: absolute;
            top: 16px;
            left: 0px;
            padding-left: 5px;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s
        }

        .input100:focus+.bbb-input::after {
            top: -15px
        }

        .input100:focus+.bbb-input::before {
            width: 100%
        }

        .has-val.input100+.bbb-input::after {
            top: -15px
        }

        .has-val.input100+.bbb-input::before {
            width: 100%
        }

        .btn-show-pass {
            font-size: 15px;
            color: #999999;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            position: absolute;
            height: 100%;
            top: 0;
            right: 0;
            padding-right: 5px;
            cursor: pointer;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s
        }

        .btn-show-pass:hover {
            color: #6a7dfe;
            color: -webkit-linear-gradient(left, #21d4fd, #b721ff);
            color: -o-linear-gradient(left, #21d4fd, #b721ff);
            color: -moz-linear-gradient(left, #21d4fd, #b721ff);
            color: linear-gradient(left, #21d4fd, #b721ff)
        }

        .btn-show-pass.active {
            color: #6a7dfe;
            color: -webkit-linear-gradient(left, #21d4fd, #b721ff);
            color: -o-linear-gradient(left, #21d4fd, #b721ff);
            color: -moz-linear-gradient(left, #21d4fd, #b721ff);
            color: linear-gradient(left, #21d4fd, #b721ff)
        }

        .login-container-form-btn {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-top: 13px
        }

        .bb-login-form-btn {
            width: 100%;
            display: block;
            position: relative;
            z-index: 1;
            border-radius: 25px;
            overflow: hidden;
            margin: 0 auto
        }

        .bb-form-bgbtn {
            position: absolute;
            z-index: -1;
            width: 300%;
            height: 100%;
            background: #0f0;
            background: -webkit-linear-gradient(right, #090, #090, #000, #f00);
            background: -o-linear-gradient(right, #090, #090, #000, #f00);
            background: -moz-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff);
            background: linear-gradient(right, #090, #ff0, #000, #f00);
            top: 0;
            left: -100%;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s
        }

        .bb-form-btn {
            font-family: Poppins-Medium;
            font-size: 15px;
            color: #fff;
            line-height: 1.2;
            text-transform: uppercase;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            width: 100%;
            height: 50px
        }

        .bb-login-form-btn:hover .bb-form-bgbtn {
            left: 0
        }

        @media (max-width: 576px) {
            .bb-login {
                padding: 77px 15px 33px 15px
            }
        }

        .validate-input {
            position: relative
        }

        .alert-validate::before {
            content: attr(data-validate);
            position: absolute;
            max-width: 70%;
            background-color: #fff;
            border: 1px solid #c80000;
            border-radius: 2px;
            padding: 4px 25px 4px 10px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 0px;
            pointer-events: none;
            font-family: Poppins-Regular;
            color: #c80000;
            font-size: 13px;
            line-height: 1.4;
            text-align: left;
            visibility: hidden;
            opacity: 0;
            -webkit-transition: opacity 0.4s;
            -o-transition: opacity 0.4s;
            -moz-transition: opacity 0.4s;
            transition: opacity 0.4s
        }

        .alert-validate::after {
            content: "\f06a";
            font-family: FontAwesome;
            font-size: 16px;
            color: #c80000;
            display: block;
            position: absolute;
            background-color: #fff;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 5px
        }

        .alert-validate:hover:before {
            visibility: visible;
            opacity: 1
        }

        @media (max-width: 992px) {
            .alert-validate::before {
                visibility: visible;
                opacity: 1
            }
        }

        a {
            text-decoration: none !important
        }

        .mdi {
            color: #f2f2f2 !important
        }

        .show_password {
            color: black !important;
            margin-right: 8px
        }

        :root {
            --primary-color: rgb(11, 78, 179)
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box
        }



        label {
            display: block;
            margin-bottom: 0.5rem
        }



        .width-50 {
            width: 50%
        }

        .ml-auto {
            margin-left: auto
        }

        .text-center {
            text-align: center
        }

        .progressbar {
            position: relative;
            display: flex;
            justify-content: space-between;
            counter-reset: step;
            margin: 2rem 0 4rem
        }

        .progressbar::before,
        .progress {
            content: "";
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            height: 4px;
            width: 100%;
            background-color: #dcdcdc;
            z-index: 1
        }

        .progress {
            background-color: rgb(0 128 0);
            width: 0%;
            transition: 0.3s
        }

        .progress-step {
            width: 2.1875rem;
            height: 2.1875rem;
            background-color: #dcdcdc;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1
        }

        .progress-step::before {
            counter-increment: step;
            content: counter(step)
        }

        .progress-step::after {
            content: attr(data-title);
            position: absolute;
            top: calc(100% + 0.5rem);
            font-size: 0.85rem;
            color: #666
        }

        .progress-step-active {
            background-color: var(--primary-color);
            color: #f3f3f3
        }

        .form {
            width: clamp(320px, 30%, 430px);
            margin: 0 auto;
            border: none;
            border-radius: 10px !important;
            overflow: hidden;
            padding: 1.5rem;
            background-color: #fff;
            padding: 20px 30px
        }

        .step-forms {
            display: none;
            transform-origin: top;
            animation: animate 1s
        }

        .step-forms-active {
            display: block
        }

        .group-inputs {
            margin: 1rem 0
        }

        @keyframes animate {
            from {
                transform: scale(1, 0);
                opacity: 0
            }

            to {
                transform: scale(1, 1);
                opacity: 1
            }
        }

        .btns-group {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem
        }

        .progress-step-check {
            position: relative;
            background-color: green !important;
            transition: all 0.8s
        }

        .progress-step-check::before {
            position: absolute;
            content: '\2713';
            width: 100%;
            height: 100%;
            top: 8px;
            left: 13px;
            font-size: 12px
        }

        .group-inputs {
            position: relative
        }

        .group-inputs label {
            font-size: 13px;
            position: absolute;
            height: 19px;
            padding: 4px 7px;
            top: -14px;
            left: 10px;
            color: #a2a2a2;
            background-color: white
        }

        .welcome {
            height: 450px;
            width: 350px;
            background-color: #fff;
            border-radius: 6px;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .welcome .content {
            display: flex;
            align-items: center;
            flex-direction: column
        }

        .checkmark__circle {
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 2;
            stroke-miterlimit: 10;
            stroke: #7ac142;
            fill: none;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards
        }

        .checkmark {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: block;
            stroke-width: 2;
            stroke: #fff;
            stroke-miterlimit: 10;
            margin: 10% auto;
            box-shadow: inset 0px 0px 0px #7ac142;
            animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both
        }

        .checkmark__check {
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards
        }

        @keyframes stroke {
            100% {
                stroke-dashoffset: 0
            }
        }

        @keyframes scale {

            0%,
            100% {
                transform: none
            }

            50% {
                transform: scale3d(1.1, 1.1, 1)
            }
        }

        @keyframes fill {
            100% {
                box-shadow: inset 0px 0px 0px 30px #7ac142
            }
        }

    </style>
    {{-- Landing page CSS --}}
    <style type="text/css">
        .bb-login {
            margin-top: 100px;
            margin-bottom: 300px
        }

        input {
            outline: none;
            border: none
        }

        textarea {
            outline: none;
            border: none
        }

        textarea:focus,
        input:focus {
            border-color: transparent !important
        }

        input:focus::-webkit-input-placeholder {
            color: transparent
        }

        input:focus:-moz-placeholder {
            color: transparent
        }

        input:focus::-moz-placeholder {
            color: transparent
        }

        input:focus:-ms-input-placeholder {
            color: transparent
        }

        textarea:focus::-webkit-input-placeholder {
            color: transparent
        }

        textarea:focus:-moz-placeholder {
            color: transparent
        }

        textarea:focus::-moz-placeholder {
            color: transparent
        }

        textarea:focus:-ms-input-placeholder {
            color: transparent
        }

        input::-webkit-input-placeholder {
            color: #adadad
        }

        input:-moz-placeholder {
            color: #adadad
        }

        input::-moz-placeholder {
            color: #adadad
        }

        input:-ms-input-placeholder {
            color: #adadad
        }

        textarea::-webkit-input-placeholder {
            color: #adadad
        }

        textarea:-moz-placeholder {
            color: #adadad
        }

        textarea::-moz-placeholder {
            color: #adadad
        }

        textarea:-ms-input-placeholder {
            color: #adadad
        }

        button {
            outline: none !important;
            border: none;
            background: transparent
        }

        button:hover {
            cursor: pointer
        }

        iframe {
            border: none !important
        }

        .txt1 {
            font-family: Poppins-Regular;
            font-size: 13px;
            color: #666666;
            line-height: 1.5
        }

        .txt2 {
            font-family: Poppins-Regular;
            font-size: 13px;
            color: #333333;
            line-height: 1.5
        }

        .p-t-115 {
            padding-top: 40px
        }

        .p-b-48 {
            padding-bottom: 35px
        }

        .limit {
            width: 100%;
            margin: 0 auto
        }

        .login-container {
            width: 100%;
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 15px;
            margin: 0 auto;

        }

        .bb-login {
            width: 390px;
            background: #fff;
            border-radius: 0px;
            overflow: hidden;
            padding: 26px 23px 35px 21px;
            box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
            -o-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1)
        }

        .bb-form {
            width: 100%
        }

        .bb-form-title {
            display: block;
            font-family: Poppins-Bold;
            font-size: 30px;
            color: #333333;
            line-height: 1.2;
            text-align: center
        }

        .bb-form-title i {
            font-size: 60px
        }

        .wrap-input100 {
            width: 100%;
            position: relative;
            border-bottom: 2px solid #adadad;
            margin-bottom: 37px
        }

        .input100 {
            font-family: Poppins-Regular;
            font-size: 15px;
            color: #555555;
            line-height: 1.2;
            display: block;
            width: 100%;
            height: 45px;
            background: transparent;
            padding: 0 5px
        }

        .bbb-input {
            position: absolute;
            display: block;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none
        }

        .bbb-input::before {
            content: "";
            display: block;
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
            background: #6a7dfe;
            background: -webkit-linear-gradient(left, #21d4fd, #b721ff);
            background: -o-linear-gradient(left, #21d4fd, #b721ff);
            background: -moz-linear-gradient(left, #21d4fd, #b721ff);
            background: linear-gradient(left, #21d4fd, #b721ff)
        }

        .bbb-input::after {
            font-family: Poppins-Regular;
            font-size: 15px;
            color: #999999;
            line-height: 1.2;
            content: attr(data-placeholder);
            display: block;
            width: 100%;
            position: absolute;
            top: 16px;
            left: 0px;
            padding-left: 5px;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s
        }

        .input100:focus+.bbb-input::after {
            top: -15px
        }

        .input100:focus+.bbb-input::before {
            width: 100%
        }

        .has-val.input100+.bbb-input::after {
            top: -15px
        }

        .has-val.input100+.bbb-input::before {
            width: 100%
        }

        .btn-show-pass {
            font-size: 15px;
            color: #999999;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            align-items: center;
            position: absolute;
            height: 100%;
            top: 0;
            right: 0;
            padding-right: 5px;
            cursor: pointer;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s
        }

        .btn-show-pass:hover {
            color: #6a7dfe;
            color: -webkit-linear-gradient(left, #21d4fd, #b721ff);
            color: -o-linear-gradient(left, #21d4fd, #b721ff);
            color: -moz-linear-gradient(left, #21d4fd, #b721ff);
            color: linear-gradient(left, #21d4fd, #b721ff)
        }

        .btn-show-pass.active {
            color: #6a7dfe;
            color: -webkit-linear-gradient(left, #21d4fd, #b721ff);
            color: -o-linear-gradient(left, #21d4fd, #b721ff);
            color: -moz-linear-gradient(left, #21d4fd, #b721ff);
            color: linear-gradient(left, #21d4fd, #b721ff)
        }

        .login-container-form-btn {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-top: 13px
        }

        .bb-login-form-btn {
            width: 100%;
            display: block;
            position: relative;
            z-index: 1;
            border-radius: 25px;
            overflow: hidden;
            margin: 0 auto
        }

        .bb-form-bgbtn {
            position: absolute;
            z-index: -1;
            width: 300%;
            height: 100%;
            background: #0f0;
            background: -webkit-linear-gradient(right, #090, #090, #000, #f00);
            background: -o-linear-gradient(right, #090, #090, #000, #f00);
            background: -moz-linear-gradient(right, #21d4fd, #b721ff, #21d4fd, #b721ff);
            background: linear-gradient(right, #090, #ff0, #000, #f00);
            top: 0;
            left: -100%;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s
        }

        .bb-form-btn {
            font-family: Poppins-Medium;
            font-size: 15px;
            color: #fff;
            line-height: 1.2;
            text-transform: uppercase;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 20px;
            width: 100%;
            height: 50px
        }

        .bb-login-form-btn:hover .bb-form-bgbtn {
            left: 0
        }

        @media (max-width: 576px) {
            .bb-login {
                padding: 77px 15px 33px 15px
            }
        }

        .validate-input {
            position: relative
        }

        .alert-validate::before {
            content: attr(data-validate);
            position: absolute;
            max-width: 70%;
            background-color: #fff;
            border: 1px solid #c80000;
            border-radius: 2px;
            padding: 4px 25px 4px 10px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 0px;
            pointer-events: none;
            font-family: Poppins-Regular;
            color: #c80000;
            font-size: 13px;
            line-height: 1.4;
            text-align: left;
            visibility: hidden;
            opacity: 0;
            -webkit-transition: opacity 0.4s;
            -o-transition: opacity 0.4s;
            -moz-transition: opacity 0.4s;
            transition: opacity 0.4s
        }

        .alert-validate::after {
            content: "\f06a";
            font-family: FontAwesome;
            font-size: 16px;
            color: #c80000;
            display: block;
            position: absolute;
            background-color: #fff;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            right: 5px
        }

        .alert-validate:hover:before {
            visibility: visible;
            opacity: 1
        }

        @media (max-width: 992px) {
            .alert-validate::before {
                visibility: visible;
                opacity: 1
            }
        }

        a {
            text-decoration: none !important
        }

        .mdi {
            color: #f2f2f2 !important
        }

        .show_password {
            color: black !important;
            margin-right: 8px
        }

    </style>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />
</head>

<body data-sidebar="dark">

    @guest
        @yield('content')
    @else
        <div id="layout-wrapper">
            @include('layouts.partials._navbar')
            @include('layouts.partials._sidebar')
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
                @include('layouts.partials._footer')
            </div>
        </div>
    @endguest

    <!-- Scripts -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script> --}}
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('scripts')

    <!-- JAVASCRIPT -->

    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>



    <!-- dashboard init -->
    <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/course.js') }}"></script>
    <script src="{{ asset('js/session.js') }}"></script>
    <script src="{{ asset('js/payment.js') }}"></script>
    <script src="{{ asset('js/profile.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
        @if (\Session::has('success'))
            <
            script >
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });

            Toast.fire({
                icon: 'success',
                title: "{!! \Session::get('success') !!}",
            });
    </script>
    @endif

    @if (\Session::has('error'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            Toast.fire({
                icon: 'error',
                title: "{!! \Session::get('success') !!}",
            });
        </script>
    @endif

</body>

</html>
