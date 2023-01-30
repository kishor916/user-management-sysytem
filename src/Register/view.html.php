<section class="vh-25 sec" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

           
                <form class="mx-1 mx-md-4" method="post" action="" enctype="multipart/form-data">


                <div class="d-flex flex-row align-items-center mb-4">
  <i class="fas fa-user fa-lg me-3 fa-fw"></i>
  <div class="form-outline flex-fill mb-0">
    <input type="text" name="fname" id="fname" class="form-control" pattern="[a-zA-Z]+" required />
    <label class="form-label" for="fname">First Name</label>
    <div id="fnameError" class="error" style="display:none;">Numbers are not allowed,unless you are Elon's son</div>
  </div>
</div>
<div class="d-flex flex-row align-items-center mb-4">
  <i class="fas fa-user fa-lg me-3 fa-fw"></i>
  <div class="form-outline flex-fill mb-0">
    <input type="text" name="lname" id="lname" class="form-control" pattern="[a-zA-Z]+" required />
    <label class="form-label" for="lname">Last Name</label>
    <div id="lnameError" class="error" style="display:none;">Numbers are not allowed, unless you are Elon's son</div>
  </div>
</div>
<script>
  const fname = document.getElementById("fname");
  const fnameError = document.getElementById("fnameError");
  
  fname.addEventListener("input", function() {
    if (!fname.validity.valid) {
      fnameError.style.display = "block";
    } else {
      fnameError.style.display = "none";
    }
  });
  
  const lname = document.getElementById("lname");
  const lnameError = document.getElementById("lnameError");
  
  lname.addEventListener("input", function() {
    if (!lname.validity.valid) {
      lnameError.style.display = "block";
    } else {
      lnameError.style.display = "none";
    }
  });
</script>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="email" id="form3Example3c" class="form-control" />
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password"  name="password" id="form3Example4c" class="form-control" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-phone fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <input type="tel" name="phone" id="form3Example5" class="form-control" placeholder="Enter your phone number">
                        <label class="form-label" for="form3Example5">Phone Number</label>
                    </div>
                  </div>


                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-transgender fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    </div>
                  </div>
                  <!-- <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-upload fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <input type="file" name="file" id="form3Example6" class="form-control">
                    <label class="form-label" for="form3Example6">Upload Photo</label>
                      </div>
                  </div> -->



                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                  <input type="submit" value="Register" name="Register" class="register btn btn-primary">
                  </div>


                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="src/profile_pics/signup.png"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
