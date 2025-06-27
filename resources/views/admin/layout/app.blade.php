<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{env('APP_NAME')}} - Dashboard</title>

        <!-- Custom fonts for this template-->
        <link href="{{asset('/admin-assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <link href="{{ asset('/admin-assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="{{asset('/admin-assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

        <style>
            /* Hide the default file input */
            #myFile {
                opacity: 0;
                position: absolute;
                z-index: -1;
            }
    
            /* Style the custom button */
            .custom-file-button {
                display: inline-block;
                padding: 10px 20px;
                background-color: #0f5ef7;
                /* Blue color */
                color: #fff;
                /* White text */
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
                transition: background-color 0.3s ease;
            }
    
            /* Hover effect for the button */
            .custom-file-button:hover {
                background-color: #0d4ec6;
                /* Darker blue on hover */
            }
    
            /* Container to hold the custom button and file name */
            .file-input-container {
                position: relative;
                display: inline-block;
            }
    
            /* Style for the file name display */
            .file-name {
                margin-left: 10px;
                color: #666;
            }
        </style>
        @stack('css')
    </head>
    <body id="page-top">
        <div id="wrapper">
            @include('admin.partials.sidebar')
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @include('admin.partials.topbar')
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
                @include('admin.partials.footer')
            </div>
        </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        @include('admin.partials.logout_modal')
        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('/admin-assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('/admin-assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{asset('/admin-assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        
        <script src="{{ asset('/admin-assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('/admin-assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
        
        <!-- Page level custom scripts -->
        <script src="{{ asset('/admin-assets/js/demo/datatables-demo.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{asset('/admin-assets/js/sb-admin-2.min.js')}}"></script>

        <script>
            $(document).ready(function() {
                setTimeout(function() {
                    $('.alert').fadeOut('slow');
                }, 5000); // Hide after 5 seconds (5000 ms)
            });
        </script>
        <script>
            function displayFileName() {
                var fileInput = document.getElementById('myFile');
                var fileNameDisplay = document.getElementById('file-name-display');
                var fileName = fileInput.files[0] ? fileInput.files[0].name : '';
                if (fileName) {
                    fileNameDisplay.textContent = 'Selected file: ' + fileName;
                } else {
                    fileNameDisplay.textContent = ''; // Clear the file name if no file is selected
                }
            }
        </script>
        @stack('script')
    </body>
</html>