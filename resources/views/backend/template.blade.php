<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/normalize.min.css.map') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/page.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/all.min.css') }}">
    <script src="{{ asset('backend/js/all.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{ asset('backend/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>

    <title>@yield('title')</title>
          @yield('head')    
</head>
<body>
    <header class="box-header">
        <div class="container-fluid">
            <div class="row">
                <div class="box-header__banner">
                    <div class="col-md-12">
                        this is a banner
                    </div>
                </div>
            </div>
        </div>
        <div class="box-main__nav">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                        {{-- 0 --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                      Quản Lý Loại
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ Route('catogory') }}">Danh Sách Loại</a>
                            <a class="dropdown-item" href="{{ Route('categoryInsert') }}">Thêm Loại </a>
                        </div>
                     </li>
                    <!-- #1  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Quản Lý Sản Phẩm
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{Route('product')}}">Danh Sách Sản Phẩm</a>
                            <a class="dropdown-item" href="{{Route('getThem')}}">Thêm Sản Phẩm</a>
                        </div>
                     </li>
                     <!-- #2  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Quản Lý Đơn Hàng
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Thêm Sản Phẩm</a>
                            <a class="dropdown-item" href="#">Xóa </a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                     </li>
                     <!-- #3  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Quản Lý Khuyến Mãi
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Thêm Sản Phẩm</a>
                            <a class="dropdown-item" href="#">Xóa </a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                     </li>
                     <!-- #3  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Quản Lý Tin Tức
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Thêm Sản Phẩm</a>
                            <a class="dropdown-item" href="#">Xóa </a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                     </li>
                 </ul>
            </nav>
        </div>
    </header>

    <main class="box-main">
         @yield('content')
    </main>

    <footer class="box-footer">
        this is footer
    </footer>




  
    @yield('script')
  
    
</body>

=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/page.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/all.min.css') }}">
    <script src="{{ asset('backend/js/all.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>

    <title>@yield('title')</title>
          @yield('head')    
</head>
<body>
    <div class="container-fluid box__app">
    <header class="box-header">
        <div class="container-fluid">
            <div class="row row-header__banner">
                <div class="box-header__banner">
                    <div class="col-md-12">
                        this is a banner
                    </div>
                </div>
            </div>
        </div>
        <div class="box-main__nav">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                        {{-- 0 --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                      Quản Lý Loại
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ Route('catogory') }}">Danh Sách Loại</a>
                      
                        </div>
                     </li>
                    <!-- #1  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Quản Lý Sản Phẩm
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{Route('product')}}">Danh Sách Sản Phẩm</a>
                        <a class="dropdown-item" href="{{Route('getThem')}}">Thêm Sản Phẩm</a>
                        </div>
                     </li>
                     <!-- #2  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Quản Lý Đơn Hàng
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ Route('orderUser') }}">Danh sách đơn hàng</a>
                           
                        </div>
                     </li>
                     <!-- #3  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Quản Lý Khuyến Mãi
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Thêm Sản Phẩm</a>
                            <a class="dropdown-item" href="#">Xóa </a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                     </li>
                     <!-- #3  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Quản Lý Tin Tức
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Thêm Sản Phẩm</a>
                            <a class="dropdown-item" href="#">Xóa </a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ Route('mapapigeocode') }}">Load Google Map</a>
                     </li>
                 </ul>
            </nav>
        </div>
    </header>

    <main class="box-main">
         @yield('content')
    </main>

    <footer class="box-footer">
       
        <div class="row">
            <div class="col-12">this is footer</div>
        </div>
      
    </footer>


</div>

  
    @yield('script')
  
    
</body>

>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
</html>