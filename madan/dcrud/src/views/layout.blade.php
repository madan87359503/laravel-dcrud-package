
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name='csrf-token' content='{{csrf_token()}}'>
    <title>Gentelella Alela! | </title>
  <script src="{{asset("gentelella-master/vendors/dropzone/dist/min/dropzone.min.js")}}"></script>
  <script>
var modelData={!!json_encode($modelData)!!};

var	tabHeadsG={!!json_encode($tabHeadsG)!!};

var	 formDataG={!!json_encode($formDataG)!!};
var	allOptions={!!json_encode($options)!!};
var allSubModules={!!json_encode($subModules)!!}
var actions={!!json_encode($actions)!!}
var pType={!!json_encode($pType)!!}
var FormType={!!json_encode($formType)!!}
var apipath='{{route("public")}}/api/dcrud/'
var homedir='{{route("public")}}/'
@php $a=explode('/',Request::path());@endphp
var dashboardtools='{{end($a)}}'
</script>
    <!-- Bootstrap -->
    <link href="{{asset("gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css")}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset("gentelella-master/vendors/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset("gentelella-master/vendors/nprogress/nprogress.css")}}" rel="stylesheet">
<link href="{{asset("gentelella-master/vendors/dropzone/dist/min/dropzone.min.css")}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset("gentelella-master/build/css/custom.min.css")}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body" id='app'>
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title">   <img src="{{env('APP_LOGO')}}" alt="..." class="img-circle logo-img">&nbsp;{{env('APP_NAME')}}</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{auth()->user()->picture}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{auth()->user()->name}}</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                     <navbar :navtype='"side-menu"'></navbar>
            
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
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="{{asset("gentelella-master/production/images/img.jpg")}}" alt="">John Doe
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="{{asset("gentelella-master/production/images/img.jpg")}}" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="{{asset("gentelella-master/production/images/img.jpg")}}" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="{{asset("gentelella-master/production/images/img.jpg")}}" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="{{asset("gentelella-master/production/images/img.jpg")}}" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>

                     @yield('content')
                 
            </div>
          </div>
        </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           <strong>Copyright © {{date('Y')}} <a href="https://solutionswithmaster.com">Master Solutions Inc.</a>.</strong> All rights reserved.
<b>Version</b> 2.0.0
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/image@2.3.0"></script>
    <script src="{{ str_replace('http:','',url(asset('js').'/app.js')) }}"></script>
    <!-- jQuery -->
    <script src="{{asset("gentelella-master/vendors/jquery/dist/jquery.min.js")}}" ></script>
    <!-- Bootstrap -->
   <script src="{{asset("gentelella-master/vendors/bootstrap/dist/js/bootstrap.bundle.min.js")}}" ></script>
    <!-- FastClick -->
    <script src="{{asset("gentelella-master/vendors/fastclick/lib/fastclick.js")}}" ></script>
    <!-- NProgress -->
    <script src="{{asset("gentelella-master/vendors/nprogress/nprogress.js")}}" ></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset("gentelella-master/build/js/custom.min.js")}}"></script>

  </body>
</html>
