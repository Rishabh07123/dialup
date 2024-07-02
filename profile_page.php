<?php
require_once 'inc/connection.php';
require_once 'inc/header.php';
require_once 'inc/nav2.php';


?>

<div class="card text-center text-bg-primary border-success myCard mt-5 ml-2 mr-2 " style="width: 25rem;">
          
    <form enctype="multipart/form-data">
       <div class="mt-3 profile_container">
          <img src="" alt="" class="selectedimgDesign" id="selectedimgDesign">
          <div class="myDiv">
                <input type="file"  name="img_selector" id="img_selector">
                <Button name="uploadbtn" id="selectedbtn"><h5>+</h5></Button>
          </div>
          
        </div>
    </form>
    <div class="card-body">
       <h5 class="card-title" id="client_name"></h5>
       <p class="card-text" id="client_no"></p>
       <p class="card-text" id="client_email"></p>
       <p class="card-text" id="client_address"></p>
    </div>
</div>

<?php
require_once 'inc/footer.php';
?>

<script>
    if(localStorage.getItem("status") == null){
        location.href = "index.html";
    }
    loadProfile();
</script>