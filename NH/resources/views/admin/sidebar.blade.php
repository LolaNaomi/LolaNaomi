


<style type="text/css">
  .profile-pic {
    /* Additional styles for modernization */
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
  }

  .img-xs {
    width: 35px;
    height: 35px;
    object-fit: cover;
    border-radius: 50%;
    /* Additional styles for modernization */
    border: 2px solid #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  }

  .nav-item.profile {
    /* Additional styles for modernization */
    margin-bottom: 10px;
  }
</style>
@include('admin.css')




<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" ><img src="admin/assets/images/nusantara hospital-logo.png" alt="logo; size: 35px"/></a>
          <a class="sidebar-brand brand-logo-mini" ><img src="admin/assets/images/nusantara hospital-logo-only.png" alt="logo; size: 35px" /></a>
        </div>
        
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="public/assets/img/admin/admin.jpeg" alt="logo; size 15px"></img>
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Admin NH</h5>
                  <span>Admin</span>
                </div>
              </div>

          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <!-- ADD DOCTOR -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('add_doctor_view')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Add Doctor</span>
            </a>
          </li>
        <!-- APPOINTMNETS -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showappointment')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Appointments</span>
            </a>
          </li>
          <!-- ALL DOCTOR -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showdoctor')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">All Doctors</span>
            </a>
          </li>

        </ul>
      </nav>