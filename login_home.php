<?php
// require_once 'inc/session.php';
require_once 'inc/header.php';
require_once 'inc/nav2.php';



?>

<div class="content_login_home">
<h2 class="py-3 text-center">Services</h2>
  <div class="category" id="total_service">
  </div>

  <div class="container">
    
    <div class="row py-3">
      <div class="col">
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner" id="innerCarousel">
            
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>

<div id="container2">

</div>
</div>




<?php
require_once 'inc/footer.php';
?>

<script>
  if(localStorage.getItem("status") == null){
    location.href = "index.html";
  }
  $(document).ready(function() {
    loadServiceCategory();
  });
  loadBanner();
  loadSecondaryService();
</script>