<section class="section">
    <div class="section-header">
      <h1>Users</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a class="btn btn-primary" href="simpan_user.php">Insert Data </a></div>
      </div>
    </div>
    <div class="section-body">
      <div class="row ">
        <div class="col-12 col-md-6 col-lg-12">
          <div class="card">
            <div class="card-body">
            <div class="container">
            <form action="../be/inputuser-pros.php" method="POST">
              <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label">Username</label>
                <div class="col-sm-4">
                  <input type="text" name="Username" class=" form-control" id="colFormLabelSm">
                </div>
              </div>
              <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label">Email</label>
                <div class="col-sm-4">
                  <input type="email" name="email" class=" form-control" id="colFormLabelSm">
                </div>
              </div>
              <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label">Password</label>
                <div class="col-sm-4">
                  <input type="password" name="password" class=" form-control" id="colFormLabelSm">
                </div>
              </div>
              <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label">Role</label>
                <div class="col-sm-4">
                  <input type="text" name="Role" class=" form-control" id="colFormLabelSm">
                </div>
              </div>
              <input class="btn btn-success" type="submit" name="simpan" value="Simpan">
           </form>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
