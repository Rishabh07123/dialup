<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <h4 class="app-heading">My App</h4>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="btn btn-outline-success" aria-current="page" href="index.php">Home</a>
                </li>
            </ul>
            <li class="nav-item">
                <button id="first_letter">S</button>
            </li>
        </div>
    </div>
    </div>
</nav> -->



<div class="wrapper">
    <aside id="sidebar">
        <div class="d-flex">
            <button id="toggle-btn" type="button">
                <i class="bi bi-grid"></i>
            </button>
            <div class="sidebar-logo">
                <a href="">Menu</a>
            </div>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-item">
                <a href="login_home.php" class="sidebar-link">
                    <i class="bi bi-house"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="profile_page.php" class="sidebar-link">
                    <i class="bi bi-person-circle"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="lead_page.php" class="sidebar-link">
                    <i class="bi bi-envelope"></i>
                    <span>Leads</span>
                </a>
            </li>
            <!-- <li class="sidebar-item">
                <a href="" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                    <i class="bi bi-shield-check"></i>
                    <span>Auth</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Login</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">Register</a>
                    </li>
                </ul>
            </li> -->
            <li class="sidebar-item">
                <a href="help_page.php" class="sidebar-link">
                    <i class="bi bi-headset"></i>
                    <span>Customer Service</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="bi bi-bell"></i>
                    <span>Notification</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <i class="bi bi-gear"></i>
                    <span>Setting</span>
                </a>
            </li>
        </ul>
        <div class="sidebar-footer">
            <a href="#" class="sidebar-link" onclick="logout()">
                <i class="bi bi-box-arrow-in-left"></i>
                <span>Logout</span>
            </a>
        </div>
    </aside>




<script>
  const hamburger = document.querySelector("#toggle-btn");
  hamburger.addEventListener("click" , function(){
  document.querySelector("#sidebar").classList.toggle("expand");
});

</script>