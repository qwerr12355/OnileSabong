
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Agent Information</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Agent</a>
                        <a href="#!" class="breadcrumb">Agent Information</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                                  <h5 class="card-title">Agent Personal Information</h5>
                                  <input type="hidden" id="txtAgentID" value="<?php echo $info->AgentID; ?>">
                                  <div class="row">
                                      <div class="input-field col s12 l6">
                                          <input id="txtFirstname" type="text" value="<?php echo $info->Firstname; ?>">
                                          <label for="txtFirstname">First Name :</label>
                                      </div>
                                      <div class="input-field col s12 l6">
                                          <input id="txtLastname" type="text" value="<?php echo $info->Lastname; ?>">
                                          <label for="txtLastname" class="">Last Name :</label>
                                      </div>
                                      <div class="input-field col s12 l6">
                                          <input id="txtGcashNumber" type="number" value="<?php echo $info->Gcashnumber; ?>">
                                          <label for="txtGcashNumber" class="">GCASH Number :</label>
                                      </div>
                                      <div class="input-field col s12 l6">
                                          <input id="txtGcashname" type="text" value="<?php echo $info->GcashName; ?>">
                                          <label for="txtGcashname" class="">GCASH Name :</label>
                                      </div>
                                      <div class="input-field col s12">
                                          <input id="txtFBLink" type="text" value="<?php echo $info->FacebookLink; ?>">
                                          <label for="txtFBLink" class="">Facebook Link :</label>
                                      </div>
                                      <div class="input-field col l6 s12 right">
                                        <button class="btn modal-trigger col s12 m6" href="#modal1">CHANGE ACCOUNT INFO</button>
                                        <button class="btn info col s12 m6" id="btnSaveChanges">SAVE CHANGES</button>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <!-- Modal Trigger -->


              <!-- Modal Structure -->
              <div id="modal1" class="modal">
              <div class="modal-content">
                <h4>CHANGE ACCOUNT INFORMATION</h4>
                <div class="row">
                  <input type="hidden" name="" value="<?php echo $info->UserID; ?>" id="txtUserID">
                  <div class="input-field col s12">
                    <input type="text" name="" value="<?php echo $info->Username; ?>" id="txtUsername">
                    <label for="txtUsername">Username</label>
                  </div>
                  <div class="input-field col s12">
                    <input type="password" name="" value="<?php echo $info->Password; ?>" id="txtPassword">
                    <label for="txtPassword">Password</label>
                  </div>
                  <div class="input-field col s12">
                    <input type="password" name="" value="<?php echo $info->Password; ?>" id="txtConfirmPassword">
                    <label for="txtConfirmPassword">Confirm Password</label>
                  </div>
                  <div class="input-field col s12">
                    <input type="password" name="" value="" id="txtOldPass">
                    <label for="txtOldPass">Please provide your old password</label>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <a href="#!" class="waves-effect waves-blue btn red modal-close">Cancel</a>
                <button id="btnChangeAccountInfo" class="waves-effect waves-blue btn">Change</button>
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
            $("#btnChangeAccountInfo").click(function() {
              $.ajax({
                url: "<?php echo base_url(); ?>index.php/User/UpdateUser",
                type: "POST",
                data:{
                  'UserID': $('#txtUserID').val(),
                  'Username': $('#txtUsername').val(),
                  'Password': $('#txtPassword').val(),
                  'OldPass': $('#txtOldPass').val()
                },
                dataType:"json",
                success: function(result){
                    if(result.UsernameExist){
                      alert("Username already exist");
                    }
                    if(result.OldPasswordIncorrect){
                      alert("Old password was incorrect");
                    }
                    if(result.success){
                      alert("success");
                      location.reload();
                    }
                }
              });
            });

            $("#btnSaveChanges").click(function() {
              $.ajax({
                url: "<?php echo base_url(); ?>index.php/Agent/UpdateAgent",
                type: "POST",
                data:{
                  'Firstname': $('#txtFirstname').val(),
                  'Lastname': $('#txtLastname').val(),
                  'GcashNumber': $('#txtGcashNumber').val(),
                  'GcashName': $('#txtGcashname').val(),
                  'FacebookLink': $('#txtFBLink').val(),
                  'AgentID':$("#txtAgentID").val()
                },
                dataType:"json",
                success: function(response){
                    if(response.success){
                      alert("Agent Info Successfully Updated");
                      location.reload();
                    }
                }
              });
            });
        })
    </script>
