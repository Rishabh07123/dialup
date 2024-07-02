<?php
// session_start();
// require_once 'inc/session.php';
require_once 'inc/header.php';


// if(!isset($_SESSION['signup_email'])){
//   $_SESSION['signup_email'] = "";
// }
$status = isset($_GET['status']) ? $_GET['status'] : '';
// $signup_email = isset($_GET['signup_email']) ? $_GET['signup_email'] : '';

// if(!isset($_SESSION['signup_email'])){
//   $_SESSION['signup_email'] = "";
// }



  if($status == 1){
     require_once 'inc/nav2.php';
  }else{
    require_once 'inc/nav.php';
   }


// if (isset($_SESSION['status'])) {
//   if ($_SESSION['status'] != 1) {
//     header("location: index.php");
//   }
// }
$name = isset($_GET['name']) ? $_GET['name'] : '';

?>



<!-- <input type="text" value="<?php echo $signup_email; ?>" id="session_email" hidden> -->
<input type="text" value="<?php echo $name; ?>" id="catego_name" hidden>

<div style="width:100vw">
    <form class="form-inline mt-3 ms-2 me-2">
        <div class="row">
            <div class="col">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"  id="fetchCompany">
            </div>
        </div>
    </form>



<div id="allCompanyyy" class="extra_margin2">
  
</div>

</div>





<div class="modal fade" id="enqueryModal" class="enqueryModal" tabindex="-1" aria-labelledby="enqueryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="enqueryModalLabel">Enquiry</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
          <div class="mb-3 form-group">
            <label for="recipient-name" class="col-form-label">Name*</label>
            <input type="text" class="form-control" id="nonLoginUserName" requird>
          </div>
          <div class="mb-3 form-group">
            <label for="recipient-name" class="col-form-label">Mobile Number*</label>
            <input type="text" class="form-control" id="nonLoginUserMobileNo" required>
          </div>
          <div class="mb-3 form-group">
            <label for="recipient-name" class="col-form-label">Email ID*</label>
            <input type="text" class="form-control" id="nonLoginUserEmailId" required>
          </div>
          <input type="text" id="selectedCompanyNo" hidden>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" id="sendEnquery">Send Enquery</button>
      </div>
    </div>
  </div>
</div>



<?php
require_once 'inc/footer.php';
?>

<script>
  // if(localStorage.getItem("status") == null){
  //      location.href = "index.php";
  //  }
  

  let category = $('#catego_name').val();
  loadCompany(category);
  
  document.addEventListener('DOMContentLoaded', function () {
    var dyAddressElement = document.querySelector('.dy_address');
    if (dyAddressElement) {
        dyAddressElement.addEventListener('click', function () {
            console.log("Clicked!");
        });
    }
});


</script>