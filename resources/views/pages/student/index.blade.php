@extends('layouts.layout2')
@section('content')
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">

                    <!-- Uncomment below if you prefer to use an image logo -->
                    <a href="#" class="logo me-auto me-lg-0"><img src="{{ asset('assets2/img/ngit.png') }}" alt=""
                            class="img-fluid"></a>

                    <nav id="navbar" class="navbar order-last order-lg-0">
                        <ul>
                            <li><a class="nav-link scrollto active" href="#">Dashboard</a></li>
                            <li><a class="nav-link scrollto" href="{{ url('http://127.0.0.1:8000/') }}" data-toggle="modal"
                                    data-target="#logoutModal">Logout</a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->

                </div>
            </div>


        </div>
    </header>
    <section id="services" class="services">

        <div class="container">
            <?php $getStudentInfo = Session::get('getStudentInfo'); ?>

            @php
                $fullName = strtoupper($getStudentInfo['surname'] ?? '') . ', ' . ucfirst($getStudentInfo['first_name'] ?? '') . ' ' . ucfirst($getStudentInfo['other_names'] ?? '');
            @endphp
            {{-- {{ $getStudentInfo }} --}}
            <div class="alert alert-info p-2 mt-3"><img src="{{ asset('assets2/img/default.jpg') }}" name="image"
                    id="image" style="border-radius: 80px; border: 3px solid #ccc; width: 60px; height: 60px" />&nbsp;&nbsp;
                Hello! Welcome Back {{ $fullName }} <strong>({{ $getStudentInfo['registration_no'] ?? '' }})</strong>

            </div>



            <div class="row">


                <div class="col-lg-3 col-md-6 align-items-stretch mt-3">
                    <a href="{{-- {{ route('profile') }} --}}">
                        <div class="icon-box pt-4 pb-3">
                            <center>
                                <div class="icon"><i class="bx bx-user"></i></div>
                                <h6>Update Biodata</h6>
                            </center>
                        </div>
                    </a>
                </div>


                <div class="col-lg-3 col-md-6 align-items-stretch mt-3">
                    <a href='#'>
                        <div class="icon-box pt-4 pb-3">
                            <center>
                                <div class="icon"><i class="bx bx-tachometer"></i></div>
                                <h6>Course Registration</h6>
                            </center>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 align-items-stretch mt-3">
                    <a href='#'>
                        <div class="icon-box pt-4 pb-3">
                            <center>
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h6>Print Acceptance Letter</h6>
                            </center>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 align-items-stretch mt-3">
                    <a href='#'>
                        <div class="icon-box pt-4 pb-3">
                            <center>
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h6>Print Registration Slip</h6>
                            </center>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 align-items-stretch mt-3">
                    <a href='#'>
                        <div class="icon-box pt-4 pb-3">
                            <center>
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h6>Print Semester Result</h6>
                            </center>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 align-items-stretch mt-3">
                    <a href='#'>
                        <div class="icon-box pt-4 pb-3">
                            <center>
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h6>Print Receipt</h6>
                            </center>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 align-items-stretch mt-3">
                    <a href='#'>
                        <div class="icon-box pt-4 pb-3">
                            <center>
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h6>Pay Accomodation Fee</h6>
                            </center>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 align-items-stretch mt-3">
                    <a href='#'>
                        <div class="icon-box pt-4 pb-3">
                            <center>
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h6>Pay Tuition Fee</h6>
                            </center>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 align-items-stretch mt-3">
                    <a href='#'>
                        <div class="icon-box pt-4 pb-3">
                            <center>
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h6>Print Accomodation Slip</h6>
                            </center>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 align-items-stretch mt-3">
                    <a href='#'>
                        <div class="icon-box pt-4 pb-3">
                            <center>
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h6>Print Receipt</h6>
                            </center>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 align-items-stretch mt-3">
                    <a href='#' data-toggle='modal' data-target='#ChangePasswordModal'>
                        <div class="icon-box pt-4 pb-3">
                            <center>
                                <div class="icon"><i class="bx bx-arch"></i></div>
                                <h6>Change Password</h6>
                            </center>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 align-items-stretch mt-3">
                    <a href="#" data-toggle="modal" data-target="#logoutModal">
                        <div class="icon-box pt-4 pb-3">
                            <center>
                                <div class="icon"><i class="bx bx-slideshow"></i></div>
                                <h6>Logout</h6>
                            </center>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->
@endsection
