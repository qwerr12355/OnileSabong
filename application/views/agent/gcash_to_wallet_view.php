
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">GCASH to Wallet</h5>
                    <div class="custom-breadcrumb ml-auto">
                      <a href="#!" class="breadcrumb">Transaction</a>
                        <a href="#!" class="breadcrumb">GCASH to Wallet</a>
                    </div>
                </div>
            </div>
              <div class="container-fluid">
                  <div class="card">
                      <div class="card-content">
                        <h5 class="card-title">Cash In</h5>
                            <div class="row">
                                <div class="col l7 m12 s12">
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <select searchable='Search' id="selectPlayer">

                                      </select>
                                      <label for="selectPlayer">Select Player</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input type="number" id="txtAmount">
                                      <label for="txtAmount">Enter Amount</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input type="password" id="txtPassword">
                                      <label for="txtPassword">Enter your password</label>
                                    </div>
                                  </div>
                                  <button id="btnCashIn" class="btn right m-b-15">Cash In</button>
                                </div>
                                <div class="col l4 m12 s12 ml-auto">
                                    <h4 class="card-title m-t-30">Player Info</h4>
                                    <p id="pName">Name :</p>
                                    <p id=pGcashNumber>Gcash Number :</p>
                                    <p id="pGcashName">Gcash Name :</p>
                                    <p id="pUsername">Username :</p>
                                    <p id="pWalletBalance">Wallet Balance :</p>
                                    <p id="pDateJoined">Date Joined :</p>
                                </div>
                        </div>
                      </div>
                  </div>
              </div>
              <!-- Modal Trigger -->
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

    <script src="<?php echo base_url(); ?>assets/assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/materialize.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/formsearchcustom.js"></script>
    <script type="text/javascript">

            $(document).ready(function() {
                loadAgentPlayer();
                var playerData=[];
                function loadAgentPlayer() {
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
                        for (var i = 0; i < playerData.length; i++) {
                          _html+='<option value="'+playerData[i].PlayerID+'">'+ playerData[i].Firstname+' '+playerData[i].Lastname +'</option>'

                        }

                        $("#selectPlayer").html(_html);
                }
                loadPlayerInfo();
                function loadPlayerInfo() {
                  $.ajax({
                          url: "<?php echo base_url(); ?>index.php/Player/GetInfoByID",
                          type: "POST",
                          dataType:"json",
                          data:{
                            'PlayerID':$("#selectPlayer").val()
                          },
                          success: function(response){
                            $("#pName").html("Name : "+response.Firstname+" "+response.Lastname);
                            $("#pGcashNumber").html("Gcash Number : "+response.Gcashnumber);
                            $("#pGcashName").html("Gcash Name : "+response.GcashName);
                            $("#pUsername").html("Username : "+response.Username);
                            $("#pWalletBalance").html("Wallet Ballance: <span class='label label-info'>₱"+response.WalletBalance+"</span>");
                            $("#pDateJoined").html("Ddate joined : "+response.DateCreated);
                          }
                        });
                }
                $("#selectPlayer").change(function() {
                  loadPlayerInfo();
                });
                var instances;
                document.addEventListener('DOMContentLoaded', function() {
                    var elems = document.querySelectorAll('select');
                    instances = M.FormSelect.init(elems, playerData);
                });
                $("#btnCashIn").click(function() {
                  $.ajax({
                          url: "<?php echo base_url(); ?>index.php/PlayerWalletTransaction/AddTransaction",
                          type: "POST",
                          dataType:"json",
                          data:{
                            'PlayerID':$("#selectPlayer").val(),
                            'Amount':$("#txtAmount").val(),
                            'TransactionType':'Cash in',
                            'Password':$("#txtPassword").val()
                          },
                          success: function(response){
                            if(response.error==""){
                              loadPlayerInfo();
                              Swal.fire({
                                icon: 'success',
                                title: 'Successfully cash in.',
                                showConfirmButton: false,
                                timer: 1500
                              })
                            }else{
                              Swal.fire({
                                icon: 'warning',
                                title: response.error,
                                showConfirmButton: false,
                                timer: 1500
                              });
                            }
                          }
                        });
                })
            });


    </script>
