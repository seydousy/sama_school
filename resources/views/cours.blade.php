<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrative Panel</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('path/to/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/vanillaCalendar.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/dycalendar.min.css')}}">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('partials.header')
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        
            <!-- Sidebar -->
            @include('partials.sidebar')
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Les Cours disponibles</h1>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <section class="content">
                <!-- Default box -->

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row ">
                                <div class="col-12 ">
                                    <div class="d-flex position-relative mb-3 p-1" style="background-color: #FFC0CB;">
                                        <img src="img/undraw_Landscape_photographer_blv1.png" style="width: 20%;" class="flex-shrink-0 me-3" alt=" " srcset=" ">
                                        <div class="inner m-2 p-1">
                                            <h4 class="mt-0">Cinema 4d</h4>
                                            <p class="mt-0">june 13,2022</p>
                                        </div>
                                        <div class="row align-items-end small-box-footer">
                                            <div class="icon ">
                                                <i class="ion ion-bag "></i>
                                            </div>
                                            <div class="small-box-footer">
                                                <a href="cours.html" class=" text-dark ">More info <i class="fas fa-arrow-circle-right "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row ">
                                <div class="col-12 ">
                                    <div class="d-flex position-relative mb-3 p-1" style="background-color: #6fb1f0;">
                                        <img src="img/undraw_design_community_rcft.png" style="width: 20%;" class="flex-shrink-0 me-3" alt=" " srcset=" ">
                                        <div class="inner m-2 p-1">
                                            <h4 class="mt-0">UI/UX design</h4>
                                            <p class="mt-0">june 13,2022</p>
                                        </div>
                                        <div class="row align-items-end small-box-footer">
                                            <div class="icon ">
                                                <i class="ion ion-bag "></i>
                                            </div>
                                            <div class="small-box-footer">
                                                <a href="cours.html" class=" text-dark ">More info <i class="fas fa-arrow-circle-right "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row ">
                                <div class="col-12 ">
                                    <div class="d-flex position-relative mb-3 p-1" style="background-color: #8168f0;">
                                        <img src="img/undraw_Static_website_re_x70h.png" style="width: 20%;" class="flex-shrink-0 me-3" alt=" " srcset=" ">
                                        <div class="inner m-2 p-1">
                                            <h4 class="mt-0">Website design</h4>
                                            <p class="mt-0">june 13,2022</p>
                                        </div>
                                        <div class="row align-items-end small-box-footer">
                                            <div class="icon ">
                                                <i class="ion ion-bag "></i>
                                            </div>
                                            <div class="small-box-footer">
                                                <a href="cours.html" class=" text-dark ">More info <i class="fas fa-arrow-circle-right "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row ">
                                <div class="col-12 ">
                                    <div class="d-flex position-relative mb-3 p-1" style="background-color: #f0bf65;">
                                        <img src="img/undraw_Static_website_re_x70h.png" style="width: 20%;" class="flex-shrink-0 me-3" alt=" " srcset=" ">
                                        <div class="inner m-2 p-1">
                                            <h4 class="mt-0">Logo design</h4>
                                            <p class="mt-0">june 13,2022</p>
                                        </div>
                                        <div class="row align-items-end small-box-footer">
                                            <div class="icon ">
                                                <i class="ion ion-bag "></i>
                                            </div>
                                            <div class="small-box-footer">
                                                <a href="cours.html" class=" text-dark ">More info <i class="fas fa-arrow-circle-right "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>
                        <div class="col-lg-4 ">
                            <!-- Default box -->
                            <div class="box">
                                <div class="container">
                                    <div id="dycalendar"></div>
                                </div>
                            </div>

                            <script src="{{asset('js/dycalendar.min.js') }}"></script>
                            <script src="{{asset('js/main.js') }}"></script>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </section>
            <!-- Main content -->

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer ">

            <strong>Copyright &copy; 2014-2022 AmazingShop All rights reserved.
			</footer>
			
		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
		<script src="{{asset('plugins/jquery/jquery.min.js') }} "></script>
		<!-- Bootstrap 4 -->
		<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
		<!-- AdminLTE App -->
		<script src="{{asset('js/adminlte.min.js') }}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{asset('js/demo.js') }}"></script>
	</body>
</html>