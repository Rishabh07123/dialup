const APP_URL = 'http://management.c1.is/dialup_admin/admin/api/api.php';



function loadBanner(){
    $.ajax({
        url: APP_URL,
        method: 'POST',
        data: {type: '009'},
        success: function(res){
            let data = JSON.parse(res);
            
            let card="";
            data.forEach(item => {
            card+= `<div class="carousel-item active" data-bs-interval="1000">
                        <img src="${item.img}" alt="${item.img}" class="d-block w-100 img-d">
                    </div>`;
            });
          $('#innerCarousel').html(card);

        }
    });
}

function loadServiceCategory(){
    $.ajax({
        url: APP_URL,
        method: 'POST',
        data: {type: '001'},
        success: function(res){
            let data = JSON.parse(res);
            
            
            let card = "";
            
            data.forEach(item => {
                card+= `<div class="car-rental">
                            <img alt="${item.name}" title="${item.name}" src="${item.img}" onclick="showParticularCompany('${item.name}')">
                            <h5 class="text-center">${item.name}</h5>
                        </div>`;
            });
          $('#total_service').html(card);

        }
    });
}

function loadSecondaryService() {
    $.ajax({
        url: APP_URL,
        method: 'POST',
        data: { type: '0011' },
        success: function (res) {
            let data = JSON.parse(res);
            let card = "";
            
            var keys = Object.keys(data);
            
            keys.forEach(item => {
                card += `<div class="first_container">
                            <h6 class="text-center">${item}</h6>
                            <div class="inner_cont">`;
                data[item].forEach(result => {
                    card += `<div class="card1-group">
                                <div class="card1">
                                    <img src="${result.catg_img}" onclick="showParticularCompany('${result.category}')" class="card-img-top" alt="..." >
                                    <div class="card-body">
                                       <p class="card-text mt-2"><small class="text-body-secondary">${result.category}</small></p>
                                    </div>
                                </div>
                            </div>`;
                        
                });
                card += `</div >
                         </div >`;
            });
                $('#container2').html(card);
        }
    });
}

function loadCompany(category){
    // alert(category);
    $.ajax({
        url: APP_URL,
        method: 'POST',
        data: {type: '002' , category: category},
        success: function(res){
            
            $("#allCompanyyy").html('');
            let email = localStorage.getItem("signup_email");
            if(res){
              
                let data = JSON.parse(res);
                // console.log(data);
                let card='';
                if(data[0].name=='No data'){
                    card = `<h2 class="mt-5 ms-5">No company listed under this cateogry</h2>`
                }else{
                    data.forEach(item => {
                        card+=`
                        <div class="car-rental-box">
                            <div class="img-div">
                                <img src="${item.img}" alt="">
                            </div>
                            <div class="details-div">
                            <h5>${item.name}</h5>
                            <p>${item.address}</p>
                            
                            ${
                              email==null?
                              `<button class="btn btn-outline-success"><a href="tel:+91-${item.mobile}"><i class="fa-solid fa-phone"></i> ${item.mobile}</a></button>
                               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enqueryModal" data-bs-mobile="${item.mobile}">Send Enquery</button>
                             `:`
                             <button class="btn btn-outline-success" id="genLeadbtn" onclick="generateLead(${item.mobile})"><a href="tel:+91-${item.mobile}"><i class="fa-solid fa-phone"></i> ${item.mobile}</a></button>`
                            }
                            </div>
                            </div>
                    `;
                        
                    });
                }
                
                $("#allCompanyyy").html(card);
               
            }else{
                console.log("error");
            }
        }
    });
}

$('#fetchCompany').on("keyup" , (e)=>{
    e.preventDefault();
    let search = $(e.target).val();
    let card='';
    let email = localStorage.getItem("signup_email");
    $.ajax({
      url: APP_URL,
      type: 'POST',
      data: {type: '0010' , search: search , category: category},
      success: function(res){
        let data = JSON.parse(res);
        console.log(data);
        if(data[0].status==1){
          data.forEach(item => {
                        card+=`
                        <div class="car-rental-box">
                            <div class="img-div">
                                <img src="${item.img}" alt="">
                            </div>
                            <div class="details-div">
                            <h5>${item.name}</h5>
                            <p>${item.address}</p>
                            
                            ${
                              email==null?
                              `<button class="btn btn-outline-success"><a href="tel:+91-${item.mobile}"><i class="fa-solid fa-phone"></i> ${item.mobile}</a></button>
                               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enqueryModal" data-bs-mobile="${item.mobile}">Send Enquery</button>
                             `:`
                             <button class="btn btn-outline-success" id="genLeadbtn" onclick="generateLead(${item.mobile})"><a href="tel:+91-${item.mobile}"><i class="fa-solid fa-phone"></i> ${item.mobile}</a></button>`
                            }
                            </div>
                            </div>
                    `;
                        
                    });
                
                
              }else{
                  card = `<h2 class="mt-5 ms-5">No company found</h2>`
               }
               $("#allCompanyyy").html(card);
        }
    });
  });


function showParticularCompany(name) {
    let status = localStorage.getItem("status");
    let signup_email = localStorage.getItem("signup_email");

    let encodedName = encodeURIComponent(name);
    let encodedSignupEmail = encodeURIComponent(signup_email);
    let encodedStatus = encodeURIComponent(status);
    location.href = "company.php?name=" + encodedName + "&status=" + encodedStatus + "&signup_email=" + encodedSignupEmail;
}


function generateLead(mobile){
    let email = localStorage.getItem("signup_email");
    let client_name = localStorage.getItem("username");
    let client_mobile = localStorage.getItem("usermobile");
    if(client_mobile!=mobile){
        $.ajax({
            url: APP_URL,
            method: 'POST',
            data: {type: '003' , mobile: mobile , email: email , client_name: client_name , client_mobile: client_mobile},
            success: function (res) {
                let data = JSON.parse(res);
                if(data.status == 1){
                   alert("Enquery Send");
                }else{
                    alert("Error");
                }
            }
        });
    }else{
        // console.log("same");
    }
   
}

var generated_otp;
function login(){
    let email = $('#login_email').val();
    generated_otp = Math.floor(Math.random() * 1000000);
    $.ajax({
        url: APP_URL,
        method: 'POST',
        data: { type: '007', email: email, otp: generated_otp },
        success: function(res){
            let data = JSON.parse(res);
            // console.log(data);
            if(data.status == 1){
                localStorage.setItem("image" , data.img);
                localStorage.setItem("username" , data.signup_name);
                localStorage.setItem("usermobile" , data.signup_mobile);
                localStorage.setItem("address" , data.signup_address);
                localStorage.setItem("subscription" , data.subscription);
                localStorage.setItem("u_id" , data.u_id);

                $('#login_msg').css('display', 'none');
                $('#input_otp_box').css('display', 'block');
                $('#verifyOTPbtn').css('display', 'block');
                $('#clbtn').css('display', 'none');
                $('#logbtn').css('display', 'none');
            }else{
                $('#login_msg').css('display', 'block');
                $('#login_msg').html("Signup required!!!");
                $('#login_email').val('');
                
            }
        }
    });
}

function verify(){
    let OTP = $('#input_otp').val();
    let email = $('#login_email').val();
    // console.log(generated_otp);
    if (OTP == generated_otp) {
        localStorage.setItem("signup_email", email);
        localStorage.setItem("status", 1);
        location.href = "login_home.php";
    } else {
        $('#login_msg').css('display', 'block');
        $('#login_msg').html("Wrong Password!!!");
        $('#input_otp').val('');
    }
}

var signup_generated_otp;
var user_name;
var mobile;
var email;
function signup(){
    user_name =  $('#signup_name').val();
    mobile =  $('#signup_mobile').val();
    email = $('#signup_email').val();
    signup_generated_otp = Math.floor(Math.random() * 1000000);
    // let otp = $('#signup_otp').val();
    $.ajax({
        url: APP_URL,
        method: 'POST',
        data: { type: '006', name: user_name, mobile: mobile, email: email, otp: signup_generated_otp},
        success: function(res){
            let data = JSON.parse(res);
            if(data.status == 1){
                $('#signup_msg').css('display', 'none');
                $('#signup_otp_box').css('display', 'block');
                $('#verifysignupOTPbtn').css('display', 'block');
                $('#signupclbtn').css('display', 'none');
                $('#signupbtn').css('display', 'none');
            }else{
                $('#signup_msg').css('display', 'block');
                $('#signup_msg').html("This email ia already registered");
                $('#signup_name').val('');
                $('#signup_mobile').val('');
                $('#signup_email').val('');
                
            }
        }
    });
}

function verify_signup(){
    let OTP = $('#signup_input_otp').val();
    $.ajax({
        url: APP_URL,
        method: 'POST',
        data: { type: '006', OTP: OTP, signup_generated_otp: signup_generated_otp, name: user_name, mobile: mobile, email: email},
        success: function(res){
            let data = JSON.parse(res);
            console.log(data);
            if(data.status == 1){
                localStorage.setItem("username" , data.signup_name);
                localStorage.setItem("signup_email" , data.signup_email);
                localStorage.setItem("usermobile" , data.signup_mobile);
                localStorage.setItem("status" , data.status);
                localStorage.setItem("subscription" , data.subscription);
                localStorage.setItem("u_id", data.u_id);
                localStorage.setItem("address", 'null');
                location.href = "login_home.php";
            }else{
                $('#signup_msg').css('display', 'block');
                $('#signup_msg').html("Wrong Password!!!");
                $('#signup_otp').val('');
                
            }
        }
    });
}

function logout(){
    localStorage.clear();
    location.href = "index.html";
}





const enqueryModal = document.getElementById('enqueryModal')
if (enqueryModal) {
    enqueryModal.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget
    const mobile = button.getAttribute('data-bs-mobile');
    $('#selectedCompanyNo').val(mobile);
    
  });
}
$("#sendEnquery").on("click" , function(e){
    e.preventDefault();
    let name = $('#nonLoginUserName').val();
    let mobile = $('#nonLoginUserMobileNo').val();
    let email = $('#nonLoginUserEmailId').val();
    let selectedCompanyNo = $('#selectedCompanyNo').val();

    sendingEnquery(name , mobile , email , selectedCompanyNo);

    $('#nonLoginUserName').val('');
    $('#nonLoginUserMobileNo').val('');
    $('#nonLoginUserEmailId').val('');
});

function sendingEnquery(name , mobile , email , selectedCompanyNo){
    $.ajax({
        url: APP_URL,
        method: 'POST',
        data: {type: '004' , name: name , mobile: mobile , email: email , selectedCompanyNo: selectedCompanyNo},
        success: function(res){
            let data = JSON.parse(res)
            if(data.status == 1){
               alert(data.msg);
                
            }else{
                alert(data.msg);
            }
        }
    });
}


function loadLeadPage(){
    
    let email = localStorage.getItem("signup_email");
    let totalLead = $("#totalLead").val();
    $.ajax({
        url: APP_URL,
        method: 'POST',
        data:{type: '005' , email: email},
        success: function(res){
            let data = JSON.parse(res);
            // console.log(data);
            if(data[0].name != 'No data'){
                $("#lead_page_container").append(`
                <div class="lead_container">
                    <h5>${data[0].companyName}</h5>
                    <hr>
                    <div class="card text-center text-bg-danger" style="width: 18rem;">
                        <i class="bi bi-envelope my_icon2"></i>
                        <div class="card-body">
                        <h5 class="card-title">Leads Received</h5>
                        <h5>${data[0].count}</h5>
                        </div>
                    </div>
                    <hr>
                    <h6 class="making_bold">Recent Leads</h6>
                `);
                data.forEach((item)=>{
                    $("#lead_page_container").append(`
                    <h5 class="making_bold">${item.name}</h5>
                    <p class="above_space">Mobile No :- ${item.mobile}</p>
                    <p>${item.email}</p>
                    <p>${item.time}</p>
                    <hr>
                    `);
                })
                
            
            }else{
                $("#lead_page_container").append(`<h6 class="making_bold">No Leads</h6>`);
            }
        }
    });
}

function loadProfile(){
    let image = localStorage.getItem("image");
    let name = localStorage.getItem("username");
    let mobile = localStorage.getItem("usermobile");
    let email = localStorage.getItem("signup_email");
    let address = localStorage.getItem("address");
    if(image!=""){
        $('#selectedimgDesign').attr("src" , image);
    }
    $('#client_name').html(name);
    $('#client_no').html(`Contact No : ${mobile}`);
    $('#client_email').html(`Email id : ${email}`);
    console.log(address);
    if (address != 'undefined' && address != 'null'){
        $('#client_address').html(`Address : ${address}`);
    }
}
$('#selectedbtn').on("click" , (e)=>{
    e.preventDefault();
    var formData = new FormData();
    var img = $('#img_selector')[0].files[0];
    var subscription = localStorage.getItem("subscription");
    var u_id = localStorage.getItem("u_id");
    formData.append('img', img);
    formData.append('type', '008');
    formData.append('subscription', subscription);
    formData.append('u_id', u_id);
    if(img != undefined){
        $.ajax({
            url: APP_URL,
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(res){
                let data = JSON.parse(res);
                if(data.status==1){
                    alert("Image updated");
                    localStorage.setItem("image" , data.img);
                    loadProfile();
                }else{
                    alert("error");
                }
    
            }
        });
    }else{
        alert('Select image');
    }
    
})