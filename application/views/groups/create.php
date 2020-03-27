<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create Group</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Group</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12 col-xs-12">
          
          <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php elseif($this->session->flashdata('error')): ?>
            <div class="alert alert-error alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
          <?php endif; ?>

          <div class="card">
           
            <form role="form" action="<?php base_url('groups/create') ?>" method="post">
              <div class="card-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">
                  <label for="group_name">Group Name</label>
                  <div class="custom-control custom-switch"><input type="text" class="form-control" id="group_name" name="group_name" placeholder="Enter group name" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="permission">Permission</label>

                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Create</th>
                        <th>Update</th>
                        <th>View</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Users</td>
                        <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch1" value="createUser"><label class="custom-control-label" for="customSwitch1">&nbsp;</label></div></td>
                        <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch2" value="updateUser"><label class="custom-control-label" for="customSwitch2">&nbsp;</label></div></td>
                        <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch3" value="viewUser"><label class="custom-control-label" for="customSwitch3">&nbsp;</label></div></td>
                        <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch4" value="deleteUser"><label class="custom-control-label" for="customSwitch4">&nbsp;</label></div></td>
                      </tr>
                      <tr>
                        <td>Groups</td>
                        <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch5" value="createGroup"><label class="custom-control-label" for="customSwitch5">&nbsp;</label></div></td>
                        <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch6" value="updateGroup"><label class="custom-control-label" for="customSwitch6">&nbsp;</label></div></td>
                        <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch7" value="viewGroup"><label class="custom-control-label" for="customSwitch7">&nbsp;</label></div></td>
                        <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch8" value="deleteGroup"><label class="custom-control-label" for="customSwitch8">&nbsp;</label></div></td>
                      </tr>
                      <tr>
                        <td>Stores</td>
                        <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch9" value="createStore"><label class="custom-control-label" for="customSwitch9">&nbsp;</label></div></td>
                        <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch10" value="updateStore"><label class="custom-control-label" for="customSwitch10">&nbsp;</label></div></td>
                        <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch11" value="viewStore"><label class="custom-control-label" for="customSwitch11">&nbsp;</label></div></td>
                        <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch12" value="deleteStore"><label class="custom-control-label" for="customSwitch12">&nbsp;</label></div></td>
                      </tr>
                      
                      <tr>
                        <td>Company</td>
                        <td> - </td>
                        <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch13" value="updateCompany"><label class="custom-control-label" for="customSwitch13">&nbsp;</label></div></td>
                        <td> - </td>
                        <td> - </td>
                      </tr>
                      <tr>
                        <td>Profile</td>
                        <td> - </td>
                        <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch14" value="updateSetting"> <label class="custom-control-label" for="customSwitch14">&nbsp;</label></div></td>
                        <td><div class="custom-control custom-switch"><input type="checkbox" name="permission[]" class="custom-control-input" id="customSwitch15" value="viewProfile"><label class="custom-control-label" for="customSwitch15">&nbsp;</label></div></td>
                        <td> -</td>
                      </tr>
                      
					
                    </tbody>
                  </table>
                  
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
                <a href="<?php echo base_url('groups/') ?>" class="btn btn-warning">Back</a>
              </div>
            </form>
          </div>
          <!-- /.card-->
        </div>
        <!-- col-md-12 -->
      </div>
      <!-- /.row -->
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    $(document).ready(function() {
      $("#li-groups").addClass('menu-open');
    $("#link-groups").addClass('active');
    $("#create-groups").addClass('active');
    });
  </script>

