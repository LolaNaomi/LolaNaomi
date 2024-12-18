<!DOCTYPE html>
<html lang="en">
<head>

<link rel="icon" href="favicon-2.ico" type="image/x-icon">
    <!-- Required meta tags -->
    @include('admin.css')
</head>


<body>
  <div class="container-scroller">
      <!-- partial:partials/_sidebar -->
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.navbar')

      <!-- partial -->
        @include('admin.body')
      <!-- container-scroller -->
      <!-- plugins:js -->
        @include('admin.script')
      <!-- End custom js for this page -->
    
</body> 
</html>