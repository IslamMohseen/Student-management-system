<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Student Management ! | </title>

<!-- Bootstrap -->
<link href="{{asset('public/theme/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{asset('public/theme/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
<!-- NProgress -->
<link href="{{asset('public/theme/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
<!-- bootstrap-wysiwyg -->
{{-- <link href="{{asset('public/theme/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet"> --}}
<link href="{!! asset('public/theme/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') !!}" rel="stylesheet">

<!-- Custom styling plus plugins -->
<link href="{{asset('public/theme/build/css/custom.min.css')}}" rel="stylesheet">

{{-- @if (App::getLocale() == 'ar')
    <link rel="stylesheet" href="{{URL::asset('public/theme/css/rtl.css')}}">
@else 
    <link rel="stylesheet" href="{{URL::asset('public/theme/css/ltr.css')}}">

@endif --}}

</head>

<body  class="nav-md">
	<div class="container body">
		<div id="dir" class="main_container">
			<div class="col-md-3 left_col ">
				<div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>{{ trans('main_trans.DashBoard') }}</span></a>

        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
            <img src="{{ asset('public/theme/images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
            <h1>{{ trans('main_trans.Admin') }}</h1>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
            <h2 style="font-size: 20px; text-align:center">{{ trans('main_trans.General') }}</h2>
            <ul class="nav side-menu">

                <li><a href="{{url('addstudent')}}"><i class="fa fa-home"></i> {{ trans('main_trans.Students Registration') }} </a>
                </li>

                <li><a href="{{url('studentdetails')}}"><i class="fa fa-edit"></i> {{ trans('main_trans.Students Detalis') }} </span></a>
                </li>

                <li><a><i class="fa fa-desktop"></i> {{ trans('main_trans.Courses') }} <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('addcourse')}}">{{ trans('main_trans.Add Course') }}</a></li>
                    <li><a href="{{url('coursesdetails')}}">{{ trans('main_trans.View Course') }}</a></li>
                </ul>
                </li>

                <li><a><i class="fa fa-table"></i> {{ trans('main_trans.Branchs') }} <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{url('addbranch')}}">{{ trans('main_trans.Add Branch') }}</a></li>
                    <li><a href="{{url('branchesdetails')}}">{{ trans('main_trans.View Branchs') }}</a></li>
                </ul>
                </li>
            </ul>
            </div>

            <div class="menu_section">
            <h3>{{ trans('main_trans.Live On') }}</h3>
            <ul class="nav side-menu">
                <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> {{ trans('main_trans.Landing Page') }} <span class="badge badge-warning pull-right">{{ trans('main_trans.Coming Soon') }}</span></a></li>
            </ul>
            </div>
        </div>

        <!-- /sidebar menu -->
        

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
        </div>
    </div>

    <!-- top navigation -->
    <div  class="top_nav">
        <div class="nav_menu">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <nav id="dir" class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('public/theme/images/img.jpg')}}" alt=""> {{ trans('main_trans.Admin') }}
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> {{ trans('main_trans.Profile') }}</a>
                    <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>{{ trans('main_trans.Settings') }}</span>
                    </a>
                <a class="dropdown-item"  href="javascript:;">{{ trans('main_trans.Help') }}</a>
                    <a class="dropdown-item"  href="#"><i class="fa fa-sign-out pull-right"></i> {{ trans('main_trans.Log Out') }}</a>
                </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i>{{ trans('main_trans.Language') }}</i>
                </a>
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                    
                    
                    
        
                </ul>
                </li>
            </ul>
            <ul>
                
            </ul>
            </nav>
        </div>
        </div>
    <!-- /top navigation -->

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="clearfix"></div>
        <div class="x_panel">

        @yield('content')
        
        </div>
        </div>
        

    <!-- /page content -->

    <!-- footer content -->
    <footer>
        
    </footer>
    <!-- /footer content -->
    
<!-- jQuery -->
<script src="{{asset('public/theme/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{asset('public/theme/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- FastClick -->
<script src="{{asset('public/theme/vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{asset('public/theme/vendors/nprogress/nprogress.js') }}"></script>
<!-- bootstrap-wysiwyg -->
<script src="{{asset('public/theme/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
<script src="{{asset('public/theme/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
<script src="{{asset('public/theme/vendors/google-code-prettify/src/prettify.js') }}"></script>

<!-- Custom Theme Scripts -->
<script src="{{asset('public/theme/build/js/custom.min.js') }}"></script>
</div>
</body>
</html>