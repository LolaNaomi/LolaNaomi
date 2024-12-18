<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <style type="text/css">
        label {
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
      <div class="container" align="center;" style="padding-top : 100px;">
      
        <!-- Alert success -->
        @if(session()->has('message'))
        <div class="alert alert-success">
        <button type="button"class="close" data-dismiss="alert">x</button>
        {{ session()->get('message') }}
        </div>
        @endif


      
        <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

                @csrf
                <div style="padding:15px;">
                    <label>Doctor Name</label>
                    <input type="text" style="color:black"; name="name" placeholder="Write The Doctor's Name..." required="">
                </div>

                <div style="padding:15px;">
                    <label>Phone</label>
                    <input type="number" style="color:black"; name="phone" placeholder="Write The Phone Number..." required="">
                </div>


                <div style="padding:15px;">
                    <label>Department</label>
                    <select name="department" style="color: black; width: 200px;" required="">
                        <option>--Select--</option>
                        <option value="Pediatric">Pediatric</option>
                        <option value="Ear, Nose, and Throat (ENT)">Ear, Nose, and Throat (ENT)</option>
                        <option value="Eye">Eye</option>
                        <option value="Dental">Dental</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="General Surgery">General Surgery</option>
                        <option value="Psychiatry">Psychiatry</option>
                        <option value="Internal Medicine">Internal Medicine</option>
                    </select>
                </div>

                <div style="padding:15px;">
                    <label>Room No</label>
                    <input type="text" style="color:black"; name="room" placeholder="Write The Room Number..." required="">
                </div>

                <div style="padding:15px;">
                    <label>Doctor Image</label>
                    <input type="file" name="file" required="">
                </div>

                <div style="padding:15px;">
                    <input type="submit" class="btn btn-success">
                </div>
                
            </form>
        </div>
    </div>
        
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->


    </body>
</html>