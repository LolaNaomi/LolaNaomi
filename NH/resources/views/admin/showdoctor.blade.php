<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .table-container {
          padding-top: 100px;
        }

        .modern-table {
          width: 100%;
          border-collapse: collapse;
        }

        .modern-table th,
        .modern-table td {
          padding: 10px;
          text-align: center;
          border-bottom: 1px solid #ddd;
          border-top: 1px solid #ddd;
          border-left: 1px solid #ddd;
          border-right: 1px solid #ddd;
        }

        .modern-table th {
          background-color: black;
          color: white;
          border-color: black; /* Set the border color to black */
          font-family: "Arial", sans-serif; /* Change the font */
          font-weight: bold; /* Make the font bold */
        }

        .modern-table tbody {
          background-color: #f2f2f2;
        }

        .modern-table tbody tr:nth-child(even) {
          background-color: #f9f9f9;
        }

        .modern-table tbody tr:nth-child(odd) {
          background-color: white;
        }

        .modern-table tbody tr:hover {
          background-color: #f2f2f2;
        }

        .modern-table tbody tr.clicked {
          background-color: rgba(0, 0, 0, 0.05);
        }

        .modern-table img {
          height: 100px;
          width: 100px;
        }

        .modern-table td {
          color: #333; /* Change the text color to a darker shade */
        }

        .btn {
          display: inline-block;
          padding: 5px 10px;
          text-decoration: none;
          border-radius: 5px;
          cursor: pointer;
        }

        .btn-primary {
          background-color: #007bff;
          color: white;
          border: none;
        }

        .btn-primary:hover {
          background-color: #0069d9;
        }

        .btn-danger {
          background-color: #dc3545;
          color: white;
          border: none;
        }

        .btn-danger:hover {
          background-color: #c82333;
        }

        .table-title {
          font-family: "Arial", sans-serif;
          font-size: 24px;
          font-weight: bold;
          margin-bottom: 20px;
        }
        
        .modern-table img {
          max-height: 100px;
          max-width: 100px;
          object-fit: contain;
        }
    </style>


</head>


<body>
<div class="container-scroller">
      <!-- partial:partials/_sidebar -->
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.navbar')

  <!-- partial -->
  
  <div class="container-fluid page-body-wrapper">
  <div class="table-container" align="center">
    <h2 class="table-title">All Nusantara Hospital Doctors</h2> <!-- Add the table title -->
    <table class="modern-table">
      <thead>
          <tr>
            <th>Doctor Name</th>
            <th>Phone</th>
            <th>Department</th>
            <th>Room No</th>
            <th>Image</th>
            <th>Delete</th>
            <th>Update</th>
          </tr>
      </thead>


      <tbody>
        @foreach($data as $doctor)
        <tr>
            <td>{{$doctor->name}}</td>
            <td>{{$doctor->phone}}</td>
            <td>{{$doctor->department}}</td>
            <td>{{$doctor->room}}</td>             
            <td><img height="100px" width="100px" src="doctorimage/{{$doctor->image}}"></td>
            <td><a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" 
            href="{{url('deletedoctor', $doctor->id)}}">Delete</a></td>
            <td><a class="btn btn-primary" href="{{url('updatedoctor', $doctor->id)}}">Update</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <p>ㅤ</p><p>ㅤ</p><p>ㅤ</p>
  </div>
</div>
      <!-- container-scroller -->
      <!-- plugins:js -->
        @include('admin.script')
      <!-- End custom js for this page -->

      <!-- For the alert -->
      <script>
        var closeButton = document.getElementById('closeButton');
        closeButton.addEventListener('click', function() {
        var alertElement = closeButton.closest('.alert');
        alertElement.style.display = 'none';
        });
        </script>
    
</body> 
</html>
