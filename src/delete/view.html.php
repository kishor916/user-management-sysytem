<div class="text-center" style="margin-top: 20%;">
  <div class="alert alert-danger">
    <h4>AC has been deleted</h4>
  </div>
  <?php
  if ($user_role === "admin"){
    echo '<button class="btn btn-info btn-lg" onclick="location.href=\'index.php?module=admin\'" style="margin-right:10px;">back to admin</button>';
    echo '<button class="btn btn-primary btn-lg" onclick="location.href=\'index.php?module=Login\'">Logout</button>';
  } else {
    echo '<button class="btn btn-primary btn-lg" onclick="location.href=\'index.php?module=Login\'">Logout</button>';
  }
  ?>
</div>
