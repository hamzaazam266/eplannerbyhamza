
 <div id="wrapper">
<ul class="sidebar navbar-nav">
    <?php 
                    if($_SESSION['user']['u_type']=='Admin'){ ?>
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
       
        <!-- Admin Dashboard -->
       <br>
       <li id="id">Admin Dashboard</li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-user"></i>
            <span>My Profile</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-clock"></i>
            <span>Businesss For Approval </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-id-card"></i>
            <span>View Approved Bsns</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-power-off"></i>
            <span>Logout </span></a>
        </li>
        <?php } ?>
        
          <?php 
                    if($_SESSION['user']['u_type']=='Business Owner'){ ?>
        <!-- Business Owner Dashboard -->
        <li id="id">BusinessOwner Dashboard</li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-user"></i>
            <span>My Profile</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Add Business</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-bookmark"></i>
            <span>My Bookings</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Booking Schedule</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-plus-square"></i>
            <span>Create Offer</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>My Offers</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-tasks"></i>
            <span>My Clients</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-power-off"></i>
            <span>Logout</span></a>
        </li>
  
              <?php } ?>

  <?php if($_SESSION['user']['u_type']=='User'){ ?>

        <!-- user Dashboard -->
        <li id="id">User Dashboard</li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-user"></i>
            <span> <a href="naya.php" style="color: white;"> My Profile </a></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>My Bookings </span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-gift"></i>
            <span>New Offers</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-power-off"></i>
            <span>Logout</span></a>
        </li>
    <?php } ?>

      </ul>
    </div>