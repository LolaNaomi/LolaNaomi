<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
    .table-container {
      padding-top: 100px;
      overflow-x: auto; /* Add horizontal scrolling if needed */
    }
    .modern-table {
      width: max-content; /* Use max-content to make the table fit its content */
      border-collapse: collapse;
      border: 1px solid black; /* Add a black border to the table */
      margin: 0 auto; /* Center the table horizontally */
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
      background-color: black; /* Change the background color of table headers to dark */
      color: white; /* Change the text color of table headers to white */
      font-family: "Arial", sans-serif;
      font-weight: bold;
      border-top: none; /* Remove top border for table headers */
    }
    .modern-table tbody {
      background-color: white; /* Change the background color of the table body to white */
    }
    .modern-table tbody tr:hover {
      background-color: #f2f2f2; /* Change the background color of the hovered row to a lighter shade */
    }
    .modern-table td {
      color: #333; /* Change the text color of table cells to a darker shade */
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
    <h2 class="table-title">All Appointment History</h2>
    <div class="table-responsive"> <!-- Add a responsive wrapper around the table -->
      <table class="modern-table">
        <colgroup> <!-- Add colgroup to set the width of the Cancelled column -->
          <col style="width: 10%"><col style="width: 10%"><col style="width: 10%"><col style="width: 10%"><col style="width: 10%"><col style="width: 10%"><col style="width: 10%"><col style="width: 15%"><col style="width: 15%">
        </colgroup>
        <thead>
          <tr style="background-color: black;">
            <th style="padding: 10px;">Patients Name</th>
            <th style="padding: 10px;">Email</th>
            <th style="padding: 10px;">Phone</th>
            <th style="padding: 10px;">Doctor Name</th>
            <th style="padding: 10px;">Date</th>
            <th style="padding: 10px;">Message</th>
            <th style="padding: 10px;">Status</th>
            <th style="padding: 10px;">Approved</th>
            <th style="padding: 10px;">Cancelled</th>
          </tr>
        </thead>


        <tbody>
          @foreach($data as $appoint)
          <tr align="center" style="background-color:white;">
              <td>{{$appoint->name}}</td>
              <td>{{$appoint->email}}</td>
              <td>{{$appoint->phone}}</td>
              <td>{{$appoint->doctor}}</td>
              <td>{{$appoint->date}}</td>
              <td>{{$appoint->message}}</td>
              <td>{{$appoint->status}}</td>
              <td>
                  <a class="btn btn-primary" href="{{url('approved', $appoint->id)}}">Approved</a>
              </td>
              <td>
                  <a class="btn btn-danger" href="{{url('cancelled', $appoint->id)}}">Cancelled</a>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
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
