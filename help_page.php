<?php
// require_once 'inc/session.php';
require_once 'inc/header.php';
require_once 'inc/nav2.php';
?>

<div class="help_container">
    <div class="help_upper">
        <h2>How can we help you?</h2>
    </div>

    <div class="help_lower">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                <i class="bi bi-geo-alt-fill my_icon"></i>
                    <div class="card-body">
                        <h5 class="card-title">OUR MAIN OFFICE</h5>
                        <p class="card-text">Ganga Software Technology Complex,Sector-29 Noida-201303</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <i class="bi bi-telephone-fill my_icon"></i>
                    <div class="card-body">
                        <h5 class="card-title">PHONE NUMBER</h5>
                        <p class="card-text">+91 6206163345</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <i class="bi bi-printer-fill my_icon"></i>
                    <div class="card-body">
                        <h5 class="card-title">FAX</h5>
                        <p class="card-text">1-234-567-8900</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <i class="bi bi-envelope-fill my_icon"></i>
                    <div class="card-body">
                        <h5 class="card-title">EMAIL</h5>
                        <p class="card-text">pandeyrishabhcsk@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<?php
require_once 'inc/footer.php';
?>

<script>
    if(localStorage.getItem("status") == null){
        location.href = "index.html";
    }
</script>