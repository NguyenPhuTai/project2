<?
use Illuminate\Support\Facades\Auth;
?>

<!DOCTYPE html>
<html>

<head>
  <base href="/">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="ad_assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="ad_assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="ad_assets/dist/css/skins/_all-skins.min.css">
  @yield('css')
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <a href="ad_assets/index2.html" class="logo">
        <span class="logo-mini"><b></b></span>
        <span class="logo-lg"><b>Admin</b></span>
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
                <span class="hidden-xs">{{auth('admin')->user()->email}}</span>
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
            <p>{{auth('admin')->user()->email}}</p> 
            <!-- dang de trong -->
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
              <i class="fa fa-th"></i> <span>Danh mục</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i> Danh sách Danh mục</a></li>
              <li><a href="{{route('category.create')}}"><i class="fa fa-circle-o"></i> Thêm mới Danh mục</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-th"></i> <span>Sản phẩm</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('product.index')}}"><i class="fa fa-circle-o"></i> Danh sách Sản phẩm</a></li>
              <li><a href="{{route('product.create')}}"><i class="fa fa-circle-o"></i> Thêm mới Sản phẩm</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-shopping-cart"></i> <span>Đơn hàng</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="ad_assets/index.html"><i class="fa fa-circle-o"></i> Danh sách Đơn hàng</a></li>
              <li><a href="ad_assets/index2.html"><i class="fa fa-circle-o"></i> Thống kê báo cáo Đơn hàng</a></li>
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
            
          </div>
        </div>
      </section>
    </div>

    
  </div>
  <script src="ad_assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
  <script src="ad_assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="ad_assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="ad_assets/plugins/fastclick/fastclick.js"></script>
  <script src="ad_assets/dist/js/app.min.js"></script>
  <script src="ad_assets/dist/js/demo.js"></script>
  @yield('js')
</body>

</html>

