<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" action="{{url('appointment')}}" method="POST">

        @csrf
        <div class="row mt-5 ">

          <!-- Name Patient -->
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Your Full Name..">
          </div>

          <!-- Patient Email -->
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Your Email Address..">
          </div>

          <!-- Date Appointment -->
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>

          <!-- Doctors + Department -->
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select"> 
            <option>---Select Your Doctor---</option>
              @foreach($doctor as $doctors )
              <option value="{{$doctors->name}}">{{$doctors->name}} --- [{{$doctors->department}}]</option>
              @endforeach
          </select>
          </div>

          <!-- Phone Number -->
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Your Number..">
          </div>

          <!-- Message from patients -->
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter your message to the doctor.."></textarea>
          </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mt-3 wow zoomIn" align="center" style="visibility: visible; background-color: #00D9A5; color: white;">Submit Request</button>
      </form>
    </div>
  </div> 
