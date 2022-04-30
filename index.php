<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://unpkg.com/feather-icons"></script>
    <meta name="theme-color" content="#640700">
    <link rel="manifest" href="manifest.json">
    <!---->
    <link rel="apple-touch-icon" href="assets/icons/icon.png">
    <!---->
    <link rel="stylesheet" href="index.css">
    <title>Prabandh</title>
</head>

<body>
    <nav class="navbar navbar-dark " style="background-color:darkblue;">
        <div class="container-fluid">
          <div class="me-4 mx-3">
            

            
            <b>
            <a href="/" class="navbar-brand" style="color: white; text-shadow: 1px 1px 2px black, 0 0 25px red, 0 0 5px yellow;">
            PRABANDH</a>
              </b>
          
          </div>
          <form class="d-flex" method='get' action='/search/1'>
            <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="search" id="search">

            <button class="btn btn-outline-warning" type="submit" ><a href="/search/1" style="color:white; text-decoration: none;" >Search </a></button>
          </form>

          
          <div class="color">
            <a href="/noti" style="color:white;text-decoration:none;" class="mx-2"><i data-feather="bell"></i>()</a>

            
              
              <a href="/user/" class="text-decoration-none" style="color: white">Sign Up</a>
              <span style="color: white">/</span>
              <a href="/user/login" class="text-decoration-none" style="color: white">Login</a>

            
          </div>
        </div>
    </nav>



<div class="container">
  <!-- Just Checking -->
  <div class="row top no-gutters justify-content-center">
      <div class="col-lg-5 col-sm-12 super">
          <div class="col-lg-12 below-right no-gutters">
          </div>
          <div class="col-lg-12 cover-right no-gutters">
              
          </div>
      </div>
      <div class="col-lg-5 left">
          <div class="container-left container col-lg-12 col-sm-12">
              <div class="container col-lg-10">
                  <div class="row register-heading">
                      <h3>Register</h3>
                  </div>
                  <div class="row top-left side-row ">
                      <form method="POST" id="formid">
                              <input type="hidden" name="csrfmiddlewaretoken" value="bwP2rkm7s9mn22D6YM9MmsfJZe86ZvZ1yIK4uzx0l7dnlOt2ZUreL5N8O1Dtl4NE">   
                              <div class="form-group">
                              <div class="fieldWrapper">
                                  <label for="id_username" class="down">Username</label>
                                  <input type="text" name="username" data-id="1" class="form-control textinput" onfocus="move()" autocomplete="off" maxlength="150" autofocus required id="id_username" onkeyup="isavail(this.value,this.getAttribute('data-id'))">
                                  <p style="color:red;font-weight:bold"><span id="1"></span></p>
                              </div>
                              
                              <div class="fieldWrapper">
                                      <label for="id_email" class="down">Name</label>
                                      <input type="text" name="name" data-id="2" class="form-control textinput" onclick="move()" maxlength="254" id="id_email" onkeyup="isavail(this.value,this.getAttribute('data-id'))">
                                      <p style="color:red;font-weight:bold"><span id="2"></span></p>

                              </div>
                              
                              <div class="fieldWrapper">
                                  <label for="id_password1" class="down">Password</label>
                                  <input type="password" name="password1" class="form-control textinput" align="center" required id="id_password1">
                              </div>
                              
                              <div class="fieldWrapper">
                                  <label for="id_password2"class="down">Confirm Password</label>
                                  <input type="password" name="password2" data-id="3" class="form-control textinput" align="center" required id="id_password2" onkeyup="isavail(this.value,this.getAttribute('data-id'))">
                                  <p style="color:red;font-weight:bold"><span id="3"></span></p>

                              </div>
                              
                              <div class="fieldWrapper">
                                  <label for="id_bank_acc_no"class="down">College</label>
                                  <input type="text" name="college" data-id="5" class="form-control textinput" maxlength="16" required id="id_bank_acc_no" onkeyup="isavail(this.value,this.getAttribute('data-id'))">
                                  <p style="color:red;font-weight:bold"><span id="5"></span></p>

                              </div>
                              
                              <br>
                              <div class="fieldWrapper">
                                  <p class="text-muted" style="font-weight: bold;">By clicking on below button, you agree with our <a href='#'>Terms and Conditions</a></p>
                              </div>
                              <button class="btn btn-info" type="button" onclick="subform()">Submit</button>
                              <p style="color:red;font-weight:bold"><span id="4"></span></p>
                              </div>
                      </form> 
                  </div>
              </div>
          </div>
      </div>
  </div>  
</div>


    <script type="text/javascript">
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker
                .register(`service-worker.js`)
                .then(function () {
                    console.log("Service Worker Registered");
                });
        }
    </script>
    <script>
        function subform(){

            const e=document.getElementById("formid");
            let fdata=new FormData(e);
            var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        console.log("gsfss");
                        console.log(this.responseText);
                        document.getElementById("4").innerHTML = this.responseText;
                        document.getElementById("4").style.color = 'green';
                    }
                    };
                    xmlhttp.open("POST","form.php", true);
                    xmlhttp.send(fdata);
        }
        function isavail(str,id) {
            if(id==="3"){
                const r=document.getElementById('id_password1').value;
                const r1=document.getElementById('id_password2').value;
                if(r===r1){
                    document.getElementById(id).innerHTML = "matched";
                    document.getElementById(id).style.color = 'green';
                }
                else{
                    document.getElementById(id).innerHTML = "not matching";
                }
            }
            else{

                if (str.length == 0) {
                    document.getElementById(id).innerHTML = "";
                    return;
                } else {

                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById(id).innerHTML = this.responseText;
                    }
                    };
                    xmlhttp.open("GET", "db.php?q=" + str+"&id="+id, true);
                    xmlhttp.send();
                }
            }
        }
    </script>

    <script src="index.js"></script>
</body>

</html>