<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('public/backend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('public/backend/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('public/backend/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('public/backend/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

<!-- tinymce -->
    <script src="{{asset('public/backend/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('public/backend/vendor/tinymce/init-tinymce.js')}}"></script>
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::to('/')}}">Admin Panel</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                @include('admin.layouts.dropdown_message')

            <!-- /.dropdown -->

            <!-- /.dropdown -->
            @include('admin.layouts.notification')

            <!-- /.dropdown -->


                    <!-- Authentication Links -->
                    @if (Auth::guest())

                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-user" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif




                    {{--<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>--}}
                    {{--</li>--}}
                    {{--<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>--}}
                    {{--</li>--}}
                    {{--<li class="divider"></li>--}}
                    {{--<li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>--}}
                    {{--</li>--}}
                </ul>
                <!-- /.dropdown-user -->

        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                @include('admin.layouts.side-menu')
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            @if(Session::has('success'))
  <div class="col-md-12">
      <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
         <b>{!! Session::get('success')!!}</b> 
         </div>
  </div>
  @elseif(Session::has('error'))
    <div class="col-md-12">
      <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
         <b>{!! Session::get('error')!!}</b> 
         </div>
    </div>
  @endif

            @yield('main-content')
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('public/backend/vendor/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('public/backend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('public/backend/vendor/metisMenu/metisMenu.min.js')}}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{asset('public/backend/dist/js/sb-admin-2.js')}}"></script>

@yield('summernotejs')

</body>

</html>
