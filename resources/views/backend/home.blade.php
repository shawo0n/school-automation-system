
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://zuramai.github.io/mazer/demo/assets/css/bootstrap.css">

    <link rel="stylesheet" href="https://zuramai.github.io/mazer/demo/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="https://zuramai.github.io/mazer/demo/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="https://zuramai.github.io/mazer/demo/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="https://zuramai.github.io/mazer/demo/assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                
                @include('backend.partial.sidebar')
  



                    
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>School automation system</h3>
            </div>
            



       @yield('page')
     





            
        </div>
    </div>
    <script src="https://zuramai.github.io/mazer/demo/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="https://zuramai.github.io/mazer/demo/assets/js/bootstrap.bundle.min.js"></script>

    <script src="https://zuramai.github.io/mazer/demo/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="https://zuramai.github.io/mazer/demo/assets/js/pages/dashboard.js"></script>

    <script src="https://zuramai.github.io/mazer/demo/assets/js/main.js"></script>
</body>

</html>