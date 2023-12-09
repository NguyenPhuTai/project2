<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="ad_assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="ad_assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="ad_assets/dist/css/skins/_all-skins.min.css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <a href="ad_assets/index2.html" class="logo">
        <span class="logo-mini"><b>A</b>LT</span>
        <span class="logo-lg"><b>Admin</b>LTE</span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="ad_assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">{{auth()->khachhangs()->name}}</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <aside class="main-sidebar">
      <section class="sidebar">
        <div class="user-panel">
          <div class="pull-left image">
            <img src="ad_assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{auth()->khachhangs()->name}}</p>
            <a href="{{route('admin.logout')}}"><i class="fa fa-circle text-success"></i> Logout</a>
          </div>
        </div>
        <ul class="sidebar-menu">
          <li>
            <a href="#">
              <i class="fa fa-home"></i> <span>Admin</span>
            </a>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-th"></i> <span>Category</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="ad_assets/index.html"><i class="fa fa-circle-o"></i> List</a></li>
              <li><a href="ad_assets/index2.html"><i class="fa fa-circle-o"></i> Add new</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-th"></i> <span>Product</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="ad_assets/index.html"><i class="fa fa-circle-o"></i> List</a></li>
              <li><a href="ad_assets/index2.html"><i class="fa fa-circle-o"></i> Add new</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-shopping-cart"></i> <span>Don hang</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="ad_assets/index.html"><i class="fa fa-circle-o"></i> List</a></li>
              <li><a href="ad_assets/index2.html"><i class="fa fa-circle-o"></i> Thong ke bao cao</a></li>
            </ul>
          </li>

        </ul>
      </section>
    </aside>
    <div class="content-wrapper">

      @if(Session::has('ok'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{Session::get('ok')}}
      </div>
      @endif
      @if(Session::has('err'))
      <div class="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{Session::get('err')}}
      </div>
      @endif
      <section class="content-header">
        <h1>
          @yield('title')
        </h1>
      </section>
      <section class="content">
        <div class="box">
          <div class="box-body">
            @yield('main')
          </div>
          <div class="box-footer">
            Footer
          </div>
        </div>
      </section>
    </div>

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.3
      </div>
      <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </footer>
  </div>
  <script src="ad_assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
  <script src="ad_assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="ad_assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="ad_assets/plugins/fastclick/fastclick.js"></script>
  <script src="ad_assets/dist/js/app.min.js"></script>
  <script src="ad_assets/dist/js/demo.js"></script>
</body>

</html>