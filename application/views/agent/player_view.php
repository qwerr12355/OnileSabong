
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">My Player(s)</h5>
                    <div class="custom-breadcrumb ml-auto">
                      <a href="#!" class="breadcrumb">Agent</a>
                      <a href="#!" class="breadcrumb">Player(s)</a>
                    </div>
                </div>
            </div>
              <div class="container-fluid">
                <div class="card">
                  <div class="card-content">
                    <a type="button" href="#modal1" name="button" class="btn right modal-trigger">Add New Player</a>
                    <table id="tblPlayers" class="table centered table-bordered nowrap display">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Gcash Number</th>
                          <th>Gcash Name</th>
                          <th>Username</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>dsfasdfdsa</td>
                          <td>dsfasdfdsa</td>
                          <td>dsfasdfdsa</td>
                          <td>dsfasdfdsa</td>
                          <td>dsfasdfdsa</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div id="modal1" class="modal">
                <div class="modal-content">
                  <h5>Add new player</h5>
                  <div class="row">
                    <div class="input-field col s12 l4">
                      <input type="text" name="" value="" id="txtFirstname">
                      <label for="txtFirstname">Firstname</label>
                    </div>
                    <div class="input-field col s12 l4">
                      <input type="text" name="" value="" id="txtLastname">
                      <label for="txtLastname">Firstname</label>
                    </div>
                    <div class="input-field col s12 l4">
                      <input type="text" name="" value="" id="txtGcashNumber">
                      <label for="txtGcashNumber">Gcash Number</label>
                    </div>
                    <div class="input-field col s12 l4">
                      <input type="text" name="" value="" id="txtGcashName">
                      <label for="txtGcashName">Gcash Name</label>
                    </div>
                    <div class="input-field col s8">
                      <input type="text" name="" value="" id="txtFBLink">
                      <label for="txtFirstname">Facebook Link</label>
                    </div>
                    <div class="input-field col s12 l4">
                      <input type="text" name="" value="" id="txtUsername">
                      <label for="txtFirstname">Username</label>
                    </div>
                    <div class="input-field col s12 l4">
                      <input type="text" name="" value="" id="txtPassword">
                      <label for="txtFirstname">Password</label>
                    </div><div class="input-field col s12 l4">
                      <input type="text" name="" value="" id="txtCpass">
                      <label for="txtFirstname">Confirm Password</label>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn" name="button">Add</button>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <footer class="center-align m-b-30 m-l-15 m-r-15">All Rights Reserved by MatPress. Designed and Developed by <a href="https://wrappixel.com/">WrapPixel</a>.</footer>
        </div>
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/assets/libs/jquery/dist/jquery.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/assets/extra-libs/DataTables/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#tblPlayers").DataTable();
      });

    </script>
