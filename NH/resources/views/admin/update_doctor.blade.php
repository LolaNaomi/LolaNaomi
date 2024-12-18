<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->

    <base href="/public">

    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;
        }


    </style>
    @include('admin.css')
</head>


<body>
  <div class="container-scroller">
      <!-- partial:partials/_sidebar -->
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.navbar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <div class="container" align="justify" style="padding:100px">

        <!-- Alert success -->
        @if(session()->has('message'))
        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="closeButton">
        <span aria-hidden="true">&times;</span>
        </button>

        {{ session()->get('message') }}
        </div>
        @endif

        <form action="{{url('editdoctor', $data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div style="padding:15px">
                <label>Doctor Name</label>
                <input type="text" style="color:black" name="name" value="{{$data->name}}">
            </div>

            <div style="padding:15px">
                <label>Phone</label>
                <input type="number" style="color:black" name="phone" value="{{$data->phone}}">
            </div>

            <div style="padding:15px">
                <label>Department</label>
                <input type="text" style="color:black" name="department" value="{{$data->department}}">
            </div>

            <div style="padding:15px">
                <label>Room No</label>
                <input type="text" style="color:black" name="room" value="{{$data->room}}">
            </div>

            <div style="padding:15px" align="justify">
                <label>Old Image</label>
                <img height="150px" width="150px" src="C:/xampp/htdocs/NH/public/doctorimage{{$data->image}}">
            </div>

            <div style="padding:15px">
            <label>Change Image</label>
            <input type="file" name="file">
            </div>

            <div style="padding:15px" align="justify">
            <input type="submit"  class="btn btn-primary">
            </div>

        </form>


        </div>

        </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
        @include('admin.script')
      <!-- End custom js for this page -->
        <script>
        var closeButton = document.getElementById('closeButton');
        closeButton.addEventListener('click', function() {
        var alertElement = closeButton.closest('.alert');
        alertElement.style.display = 'none';
        });
        </script>

    
</body> 
</html>