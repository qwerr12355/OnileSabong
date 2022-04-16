
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Agent</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">User</a>
                        <a href="#!" class="breadcrumb">Agent</a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                              <div class="d-flex no-block align-items-center">
                                  <h5 class="card-title">All agents</h5>
                                  <div class="ml-auto">
                                      <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Add new agent</a>
                                  </div>
                              </div>
                              <div class="table-responsive">
                                  <table id="tblAgent" class="table centered table-bordered nowrap display">
                                      <thead>
                                          <tr>
                                              <th>Name</th>
                                              <th>Gcash number</th>
                                              <th>Gcash name</th>
                                              <th>Username</th>
                                              <th>Date joined</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                  </table>
                              </div>
                            </div>
                        </div>
                        <!-- Create Modal Structure -->
                        <div id="modal2" class="modal">
                            <div class="modal-content">
                                <h5 class="card-title"> <i class="fas fa-phone-square m-r-10"></i>New Agent</h5>
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12 l4">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="txtFirstname" type="text" class="validate">
                                                <label for="txtFirstname">Enter Firstname Here</label>
                                            </div>
                                            <div class="input-field col s12 l4">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="txtLastname" type="text" class="validate">
                                                <label for="txtLastname">Enter Lastname Here</label>
                                            </div>
                                            <div class="input-field col s12 l4">
                                                <i class="material-icons prefix">phone</i>
                                                <input id="txtGcashNumber" type="number" class="validate">
                                                <label for="txtGcashNumber">Gcash number</label>
                                            </div>
                                            <div class="input-field col s12 l4">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="txtGcashname" type="text" class="validate">
                                                <label for="txtGcashname">Enter gcash name</label>
                                            </div>
                                            <div class="input-field col s12 l8">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="txtFBLink" type="text" class="validate">
                                                <label for="txtFBLink">Facebook link</label>
                                            </div>
                                            <div class="input-field col s12 l4">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="txtUsername" type="text" class="validate">
                                                <label for="txtUsername">Username</label>
                                            </div>
                                            <div class="input-field col s12 l4">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="txtPassword" type="password" class="validate">
                                                <label for="txtPassword">Password</label>
                                            </div>
                                            <div class="input-field col s12 l4">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="cpassword" type="password" class="validate">
                                                <label for="cpassword">Confirm Password</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="modal-action waves-effect waves-green btn-flat indigo white-text" id="btnAdd"><i class="far fa-save m-r-10"></i> Add</a>
                            </div>
                        </div>
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

    <script src="<?php echo base_url(); ?>assets/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/assets/extra-libs/DataTables/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        loadAgent();
        $("#btnAdd").click(function() {
          $.ajax({
            url:"<?php echo base_url(); ?>index.php/Agent/AddAgent",
            type:"POST",
            data:{
              'Firstname': $("#txtFirstname").val(),
              'Lastname': $("#txtLastname").val(),
              'GcashNumber': $("#txtGcashNumber").val(),
              'GcashName': $("#txtGcashname").val(),
              'FacebookLink': $("#txtFBLink").val(),
              'Username': $("#txtUsername").val(),
              'Password': $("#txtPassword").val(),
              'CPass': $("#cpassword").val()
            },
            dataType:"json",
            success: function(response) {
              if(response.success){
                $("#modal2").modal('close');
                Swal.fire({
                  icon: 'success',
                  title: "Successfully Added.",
                  showConfirmButton: false,
                  timer: 1500
                })
                loadAgent();
              }else{
                Swal.fire({
                  icon: 'warning',
                  title: response.error,
                  showConfirmButton: false,
                  timer: 1500
                })
              }
            }
          })
        });
        var agentData=[];
        function loadAgent() {
          $.ajax({
            url: "<?php echo base_url(); ?>index.php/Agent/GetAllAgents",
            type: "POST",
            dataType:"json",
            async:false,
            success: function(result){
                agentData=result;
            }
          });
          var _html='';
          $('#tblAgent').dataTable().fnClearTable();
          $('#tblAgent').dataTable().fnDestroy();
          for (var i = 0; i < agentData.length; i++) {
            _html+='<tr>'
                        +'<td>'+ agentData[i].Firstname+' '+agentData[i].Lastname +'</td>'
                        +'<td>'+ agentData[i].Gcashnumber +'</td>'
                        +'<td>'+ agentData[i].GcashName +'</td>'
                        +'<td>'+ agentData[i].Username +'</td>'
                        +'<td>'+ agentData[i].DateCreated +'</td>'
                        +'<td><a href="<?php echo base_url(); ?>index.php/Admin/AgentInfo/'+agentData[i].UserID+'"/"'+agentData[i].UserID+'" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete">MORE INFO</a></td>'
                  +'</tr>';

          }
          $("#tblAgent tbody").html(_html);

          $("#tblAgent").DataTable();
        }
      });

    </script>
