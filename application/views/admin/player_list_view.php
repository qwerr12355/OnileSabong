
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Player</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">User</a>
                        <a href="#!" class="breadcrumb">Player</a>
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
                                  <h5 class="card-title">All players</h5>
                                  <div class="ml-auto">
                                      <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Add new player</a>
                                  </div>
                              </div>
                                  <table id="tblPlayer" class="table centered table-bordered nowrap display">
                                      <thead>
                                          <tr>
                                              <th>Name</th>
                                              <th>Gcash number</th>
                                              <th>Gcash name</th>
                                              <th>Username</th>
                                              <th>Wallet Balance</th>
                                              <th>Date joined</th>
                                              <th>Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                  </table>
                            </div>
                        </div>
                        <!-- Create Modal Structure -->
                        <div id="modal2" class="modal">
                            <div class="modal-content">
                                <h5 class="card-title"> <i class="fas fa-phone-square m-r-10"></i>New Player</h5>
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
                                <button class="modal-action modal-close waves-effect waves-green btn-flat indigo white-text" id="btnAdd"><i class="far fa-save m-r-10"></i> Add</a>
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

    <script src="<?php echo base_url(); ?>assets/assets/extra-libs/DataTables/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        loadPlayer();
        $("#btnAdd").click(function() {
          $.ajax({
            url:"<?php echo base_url(); ?>index.php/Player/Add",
            type:"POST",
            data:{
              'Firstname': $("#txtFirstname").val(),
              'Lastname': $("#txtLastname").val(),
              'GcashNumber': $("#txtGcashNumber").val(),
              'GcashName': $("#txtGcashname").val(),
              'FacebookLink': $("#txtFBLink").val(),
              'Username': $("#txtUsername").val(),
              'Password': $("#txtPassword").val()
            },
            dataType:"json",
            success: function(response) {
              if(response.error==""){
                alert("success");
                loadPlayer();
              }else{
                alert(response.error);
              }
            }
          })
        });
        var playerData=[];
        function loadPlayer() {
          $.ajax({
            url: "<?php echo base_url(); ?>index.php/Player/GetAllPlayer",
            type: "POST",
            dataType:"json",
            async:false,
            success: function(result){
                playerData=result;
            }
          });
          var _html='';
          $('#tblPlayer').dataTable().fnClearTable();
          $('#tblPlayer').dataTable().fnDestroy();
          for (var i = 0; i < playerData.length; i++) {
            _html+='<tr>'
                        +'<td>'+ playerData[i].Firstname+' '+playerData[i].Lastname +'</td>'
                        +'<td>'+ playerData[i].Gcashnumber +'</td>'
                        +'<td>'+ playerData[i].GcashName +'</td>'
                        +'<td>'+ playerData[i].Username +'</td>'
                        +'<td> ₱ '+ playerData[i].WalletBalance +'</td>'
                        +'<td>'+ playerData[i].DateCreated +'</td>'
                        +'<td><a href="<?php echo base_url(); ?>index.php/Admin/PlayerInfo/'+playerData[i].PlayerID+'/'+playerData[i].UserID+'" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-info" aria-hidden="true"></i>More info</a></td>'
                  +'</tr>';

          }
          $("#tblPlayer tbody").html(_html);

          $("#tblPlayer").DataTable();
        }
      });

    </script>
