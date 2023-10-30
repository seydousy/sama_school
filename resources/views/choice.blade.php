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
            
            <section class="content">
                <!-- Default box -->

                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row ">
                                <div class="col-12 ">
                                    <div class="d-flex position-relative mb-3 p-1 " style="background-color: #FFC0CB;">
                                        <a href="{{ route('admin.apprenant.index') }}" class=" text-dark ">Partie Apprenant</a>
                                    </div>
                                </div>


                            </div>
                            <div class="row ">
                                <div class="col-12 ">
                                    <div class="d-flex position-relative mb-3 p-1 " style="background-color: #6fb1f0;">
                                        <a href="{{ route('admin.professeur.index') }}" class=" text-dark ">Partie Professeur</a>
                                    </div>
                                </div>


                            </div>
                            <div class="row ">
                                <div class="col-12 ">
                                    <div class="d-flex position-relative mb-3 p-1 " style="background-color: #8168f0;">
                                        <a href="{{ route('admin.cour.index') }}" class=" text-dark ">Partie Cour</a>
                                    </div>
                                </div>
                            </div>
                            


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