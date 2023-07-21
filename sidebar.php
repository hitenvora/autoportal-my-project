<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-linkx" href="<?php echo $mainurl;?>admin-dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed"  href="<?php echo $mainurl;?>admin-managecustomer">
        <i class="bi bi-menu-button-wide"></i><span>Manage Custmoers</span>
      </a>
    
    </li><!-- End Components Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="<?php echo $mainurl;?>admin-showcar">
        <i class="bi bi-menu-button-wide"></i><span>Mange Car</span>
      </a>
      
    </li><!-- End Forms Nav -->
    </li><!-- End Components Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav3" data-bs-toggle="collapse" href="#">
        <i class="bi bi-cart"></i><span>Add Brand</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?php echo $mainurl;?>admin-addbrand">
            <i class="bi bi-circle"></i><span>Add Brand Car</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $mainurl;?>admin-mangebrand">
            <i class="bi bi-circle"></i><span>Manage Brand car </span>
          </a>
        </li>
     
      </ul>
    </li><!-- End Forms Nav -->
    </li><!-- End Components Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav4" data-bs-toggle="collapse" href="#">
        <i class="bi bi-cart"></i><span>Add City</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav4" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?php echo $mainurl;?>admin-addcity">
            <i class="bi bi-circle"></i><span>Add city</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $mainurl;?>admin-mangecity">
            <i class="bi bi-circle"></i><span>Manage city</span>
          </a>
        </li>
     
      </ul>
    </li><!-- End Forms Nav -->



    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav2" data-bs-toggle="collapse" href="#">
        <i class="bi bi-cart"></i><span>Add Model </span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?php echo $mainurl;?>admin-addmodel">
            <i class="bi bi-circle"></i><span>Add Model</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $mainurl;?>admin-mangemodel ">
            <i class="bi bi-circle"></i><span>Manage Model</span>
          </a>
        </li>
     
      </ul>
    <!-- End Profile Page Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="<?php echo $mainurl;?>admin-manageorders">
        <i class="bi bi-file-earmark"></i>
        <span>Manage Orders</span>
      </a>
    </li><!-- End Blank Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?php echo $mainurl;?>admin-managereviews">
        <i class="bi bi-file-earmark"></i>
        <span>Manage Reviews</span>
      </a>
    </li><!-- End Blank Page Nav -->

    
    
  </ul>

</aside><!-- End Sidebar-->