<?php
// session_start();

// if(isset($_SESSION['status'])){
//   if($_SESSION['status']!=1){
//       header("location: index.php");
//   }
// }else{
//   header("location: index.php");
// }

require_once 'inc/header.php';
require_once 'inc/nav2.php';
?>

<!-- <input type="text" value="<?php
  if(isset($_SESSION['current_company_name'])){
      echo $_SESSION['current_company_name']; 
    }
    ?>"
id="currentCompany" hidden> -->

<input type="text" value="<?php
  if(isset($_SESSION['totalLeads'])){
      echo $_SESSION['totalLeads']; 
    }
    ?>"
id="totalLead" hidden>

<div id="lead_page_container">

</div>


<?php
require_once 'inc/footer.php';
?>

<script>
    if(localStorage.getItem("status") == null){
       location.href = "index.html";
    }
    loadLeadPage();
</script>