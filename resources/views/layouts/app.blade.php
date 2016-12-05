<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/all.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="sidebar-mini">
    <div id="app" class="wrapper">
        
        <!-- Top Bar -->

        <header class="main-header">
            <a href="{{ url('/') }}" class="logo">
                <span class="logo-lg"><b>AZ</b>Service</span>
                <span class="logo-mini"><b>AZ</b></span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    
                </a>
                <span class="subtitle"></span>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu teal" style="border: solid white 1px;">
                                <li class="user-header">
                                    <h3>{{ Auth::user()->name }}</h3>
                                    <p>{{ Auth::user()->email }}</p>
                                    <p>Join at : {{ Auth::user()->created_at }}</p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-flat btn-teal">Change Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ url('/logout') }}" class="btn btn-flat btn-teal" 
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <!-- Sidae Bar -->
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu">
                    <li class="header">MAIN MENU</li>
                    @permission(('manage-user'))
                    <li>
                        <a href="{{ URL::to('/') }}">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>User</span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ URL::to('register') }}">
                                    <i class="fa fa-circle-o"></i>
                                    Create User
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to('manage-users') }}">
                                    <i class="fa fa-circle-o"></i>
                                    Manage User
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endpermission

                    @permission(('manage-privilege'))
                    <li class="treeview">
                        <a href="{{ URL::to('/') }}">
                            <i class="fa fa-user-secret"></i>
                            <span>Privilege</span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ URL::to('add-role')}}"><i class="fa fa-circle-o"></i>Add Role</a></li>
                            <li><a href="{{ URL::to('manage-privilege')}}"><i class="fa fa-circle-o"></i>Manage Privilege</a></li>
                        </ul>
                    </li>
                    @endpermission
                    <li class="treeview">
                        <a href="">
                            <i class="fa fa-address-card"></i>
                            <span>Customer</span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-circle-o"></i>
                                    Add Customer
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to('manage-customer') }}">
                                    <i class="fa fa-circle-o"></i>
                                    Manage Customer
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="{{ URL::to('transaksi') }}">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Transaksi</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-wrench"></i>
                            <span>Service</span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-circle-o"></i>
                                    Add Service
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-circle-o"></i>
                                    Manage Service
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-floppy-o"></i>
                            <span>Stock</span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-circle-o"></i>
                                    Add Stock
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-circle-o"></i>
                                    Manage Stock
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper" style="min-height: 916px;">
            @yield('content')    
        </div>
    </div>

    <!-- Scripts -->
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/app.js"></script>
    <script type="text/javascript">
    $("#resetBtn").click(function(){
        $(":input").val("");
    });
</script>
    @yield('script')
</body>
</html>
