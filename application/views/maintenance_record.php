<?php
include_once "../includes/sessions.php";
include_once "../api/auth_link.php";
auth_link($_SESSION['user_id']);
include_once "../includes/sidebar.php";

include_once "../includes/header.php";

?>




<div class="container-fluid">
  <!--  Row 1 -->
  <div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
        <div class="d-sm-flex d-flex align-items-center justify-content-between mb-9" style="border-bottom : solid 2px black">
            <div class="mb-3 mb-sm-0">
            <h5 class="card-title fw-semibold">Maintenance record Table</h5>
            </div>
            <div>
            <button class="btn btn-outline-primary float-right mt-4 mb-5" type="submit" id="btn_add_maintenance_record">Add New Maintenance</button>
            </div>
          </div>
         

          <div class="table-responsive">
            <table class="table" id="table_maintenance_record">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Maintenance Type</th>
                  <th>Description</th>
                  <th>Cost</th>
                  <th>Vehicle</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
          <div class="modal" tabindex="-1" role="dialog" id="modal_maintenance_record">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Maintenance record Information</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form id="form_maintenance_record">
                    <input type="hidden" name="update_info" id="update_info">
                    <div class="">
                      <div class="alert alert-success d-none" role="alert">
                        This is a success alert—check it out!
                      </div>
                      <div class="alert alert-danger d-none" role="alert">
                        This is a danger alert—check it out!
                      </div>
                    </div>
                   
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Maintenance Type</label>
                      <input id="maintenance_type" name= "maintenance_type" type="text" class="form-control maintenance_type" placeholder="Enter maintenance type">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                      <textarea class="form-control dexcription" id="description" rows="3" placeholder="Enter description"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Cost</label>
                      <input id="cost" type="text" class="form-control cost" placeholder="Enter cost">
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Vehicle</label>
                      <select class="form-control" name="vehicle" id="vehicle">
                       
                      </select>
                    </div>
                   
                   
                </div>
                <div class="modal-footer">
                  
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






<?php
include_once "../includes/footer.php";
?>
<script src="../js/maintenance_record.js"></script>