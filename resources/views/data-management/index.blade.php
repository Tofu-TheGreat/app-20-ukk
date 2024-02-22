<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../../assets/"
    data-template="vertical-menu-template-free"
>
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
        />
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <title>
            InLivre
        </title>
        <meta name="description" content="" />

        <!-- Favicon -->
        <link
            rel="icon"
            type="image/x-icon"
            href="../../assets/img/favicon/favicon.ico"
        />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
        />

        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />

        <!-- Core CSS -->
        <link
            rel="stylesheet"
            href="../../assets/vendor/css/core.css"
            class="template-customizer-core-css"
        />
        <link
            rel="stylesheet"
            href="../../assets/vendor/css/theme-default.css"
            class="template-customizer-theme-css"
        />
        <link rel="stylesheet" href="../../assets/css/demo.css" />

        <!-- Vendors CSS -->
        <link
            rel="stylesheet"
            href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        {{-- Datatables --}}
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Helpers -->
        <script src="../../assets/vendor/js/helpers.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css" rel="stylesheet">
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="../../assets/js/config.js"></script>
        <style>
            .arrowup_colored{
                color:rgb(47, 255, 92);
            }
            .arrowdown_colored{
                color: rgba(255, 0, 0, 0.856);
            }
            .arrowup:hover{
                color:rgb(47, 255, 92);
            }
            .arrowdown:hover{
                color: rgba(255, 0, 0, 0.856);
            }
            .rating-input-pos[type=radio]:checked+label {
                color: rgb(47, 255, 92);
            }
            .rating-input-neg[type=radio]:checked+label {
                color: rgba(255, 0, 0, 0.856);
            }

            .card-guide{
                background-color: rgb(255, 230, 0, 0.5);
                color: black;
            }
            .text-card{
                text-shadow: 5px 0px 5px #263238;
            }
        </style>
    </head>

    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- Menu -->
                @include('data-management.partials.sidebar')
                <!-- / Menu -->

                <!-- Layout container -->
                <div class="layout-page">
                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->
                          @yield('contents')
                    </div>
                </div>
                <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../../assets/vendor/libs/popper/popper.js"></script>
        <script src="../../assets/vendor/js/bootstrap.js"></script>
        <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="../../assets/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->

        <!-- Main JS -->
        <script src="../../assets/js/main.js"></script>

        <!-- Datatables -->
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>
        <script src=" https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/script/monochrome/bundle.min.js"></script>
        <script>
            $(document).ready(function() {
                let table = new DataTable('#myTable');
            });
            $(document).ready(function() {
                let table = new DataTable('#myTableDipinjam');
            });
            $(document).ready(function() {
                let table = new DataTable('#myTableDikembalikan');
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#summernote').summernote({
                    height: 200,
                    focus: true
                });
                $('#summernoteEdit').summernote({
                    height: 200,
                    focus: true
                });
                $('.js-example-basic-multiple').select2();
            });
        </script>
                <!-- include libraries(jQuery, bootstrap) -->
        <!-- include summernote css/js -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    </body>

</html>
