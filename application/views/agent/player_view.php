
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">My Player(s)</h5>
                </div>
            </div>
              <div class="container-fluid">
                <div class="card">
                  <div class="card-content">
                    <div class="d-flex no-block align-items-center">
                        <h5 class="card-title">My players</h5>
                        <div class="ml-auto">
                            <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Add new player</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                      <table id="tblPlayers" class="table centered table-bordered nowrap display">
                          <thead>
                              <tr class="grey lighten-4">
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
                      <label for="txtLastname">Lastname</label>
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
                      <label for="txtFBLink">Facebook Link</label>
                    </div>
                    <div class="input-field col s12 l4">
                      <input type="text" name="" value="" id="txtUsername">
                      <label for="txtUsername">Username</label>
                    </div>
                    <div class="input-field col s12 l4">
                      <input type="text" name="" value="" id="txtPassword">
                      <label for="txtPassword">Password</label>
                    </div><div class="input-field col s12 l4">
                      <input type="text" name="" value="" id="txtCpass">
                      <label for="txtCpass">Confirm Password</label>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="modal-close btn" id="btnAdd" type="button" name="button">Add</button>
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
    <script src="<?php echo base_url(); ?>assets/dist/js/materialize.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/assets/extra-libs/DataTables/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#tblPlayers").DataTable();
        var playerData=[];
        loadPlayer();
        $("#btnAdd").click(function() {
          $.ajax({
            url:"<?php echo base_url(); ?>index.php/Player/Add",
            type:"POST",
            data:{
              'Firstname': $("#txtFirstname").val(),
              'Lastname': $("#txtLastname").val(),
              'GcashNumber': $("#txtGcashNumber").val(),
              'GcashName': $("#txtGcashName").val(),
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
        function loadPlayer() {
          $.ajax({
            url: "<?php echo base_url(); ?>index.php/Agent/GetMyPlayers",
            type: "POST",
            dataType:"json",
            async:false,
            success: function(result){
                playerData=result;
            }
          });
          var _html='';
          $('#tblPlayers').dataTable().fnClearTable();
          $('#tblPlayers').dataTable().fnDestroy();
          for (var i = 0; i < playerData.length; i++) {
            _html+='<tr>'
                        +'<td>'+ playerData[i].Firstname+' '+playerData[i].Lastname +'</td>'
                        +'<td>'+ playerData[i].Gcashnumber +'</td>'
                        +'<td>'+ playerData[i].GcashName +'</td>'
                        +'<td>'+ playerData[i].Username +'</td>'
                        +'<td> ₱ '+ playerData[i].WalletBalance +'</td>'
                        +'<td>'+ playerData[i].DateCreated +'</td>'
                        +'<td><a href="<?php echo base_url(); ?>index.php/Agent/PlayerInfo/'+playerData[i].PlayerID+'/'+playerData[i].UserID+'" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-info" aria-hidden="true"></i>More info</a></td>'
                  +'</tr>';

          }
          $("#tblPlayers tbody").html(_html);

          $("#tblPlayers").DataTable();
        }
      });

    </script>
