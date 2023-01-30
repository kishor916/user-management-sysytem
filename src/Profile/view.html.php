
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
          <img src="src/PictureUpload/image/<?php echo $user['profile_image']; ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px; height: 150px; object-fit: cover;">
            <h5 class="my-3">  <?php echo $user['first_name']; ?>  <?php echo $user['last_name']; ?></h5>
            <p class="text-muted mb-1"> <?php echo $user['role']; ?></p>

            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
              <button type="button" class="btn btn-primary ms-1" onclick="window.location.href='index.php?module=PictureUpload&id=<?php echo $user['id'];?>'">Upload image</button>
            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $user['first_name']; ?>  <?php echo $user['last_name']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $user['email']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $user['phone']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">role</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $user['role']; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">gender</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $user['gender']; ?></p>
              </div>
              <hr>
              <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">created at</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $user['created_at']; ?></p>
              </div>
              <hr>
              <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">updated_at</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $user['updated_at']; ?></p>
              </div>
            </div>

        </div>
    </div>
</div>
</div>
    <button class="btn btn-primary btn-lg" onclick="location.href='index.php?module=Login'">Logout</button>
    <button class="btn btn-danger btn-lg ms-1" onclick="location.href='index.php?module=delete&id=<?php echo $user['id']; ?>'">Delete profile</button>
    <!-- <button class="btn btn-secondary btn-lg ms-1" onclick="location.href='index.php?module=Update<?php echo $user['id']; ?>'">Update</button> -->
    <button class="btn btn-secondary btn-lg ms-1" onclick="location.href='index.php?module=Update&id=<?php echo $user['id']; ?>'">Update</button>
    
    

   


</section>

