
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Operator</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">User</a>
                        <a href="#!" class="breadcrumb">Operator</a>
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
                                  <h5 class="card-title">All operators</h5>
                                  <div class="ml-auto">
                                      <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Add new operator</a>
                                  </div>
                              </div>
                              <div class="table-responsive">
                                  <table id="tblOperator" class="table centered table-bordered nowrap display">
                                      <thead>
                                          <tr>
                                              <th>Name</th>
                                              <th>Username</th>
                                              <th>Wallet Balance</th>
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
                                <h5 class="card-title"> <i class="fas fa-phone-square m-r-10"></i>New operator</h5>
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12 l4">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="fname" type="text" class="validate">
                                                <label for="fname">Enter Firstname Here</label>
                                            </div>
                                            <div class="input-field col s12 l4">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="lname" type="text" class="validate">
                                                <label for="lname">Enter Lastname Here</label>
                                            </div>
                                            <div class="input-field col s12 l4">
                                                <i class="material-icons prefix">phone</i>
                                                <input id="gcashnumber" type="number" class="validate">
                                                <label for="gcashnumber">Gcash number</label>
                                            </div>
                                            <div class="input-field col s12 l4">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="gcashname" type="text" class="validate">
                                                <label for="gcashname">Enter gcash name</label>
                                            </div>
                                            <div class="input-field col s12 l8">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="facebooklink" type="text" class="validate">
                                                <label for="facebooklink">Enter Facebook Link</label>
                                            </div>
                                            <div class="input-field col s12 l4">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="username" type="text" class="validate">
                                                <label for="username">Username</label>
                                            </div>
                                            <div class="input-field col s12 l4">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="password" type="password" class="validate">
                                                <label for="password">Password</label>
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
                                <button class="modal-action waves-effect waves-green btn white-text" id="btnAddNewOperator"><i class="far fa-save m-r-10"></i> Add</a>
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
        $( document ).ready(function() {
            var operatorArray=[];
            loadOperator();
            $("#btnAddNewOperator").click(function() {
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url(); ?>index.php/Operator/AddNewOperator",
                  dataType:"json",
                  data: {
                    "Username":$("#username").val(),
                    "Password":$("#password").val(),
                    "Cpass":$("#cpassword").val(),
                    "Firstname":$("#fname").val(),
                    "Lastname":$("#lname").val(),
                    "GcashNumber":$("#gcashnumber").val(),
                    "FacebookLink":$("#facebooklink").val(),
                    "GcashName":$("#gcashname").val(),
                  },
                  success: function(response){
                    if(response.success){
                      Swal.fire({
                        icon: 'success',
                        title: 'Successfully added.',
                        showConfirmButton: false,
                        timer: 1500
                      })
                      loadOperator();
                    }else{
                      Swal.fire({
                        icon: 'warning',
                        title: response.error,
                        showConfirmButton: false,
                        timer: 1500
                      })
                    }
                  }
                });
            });
            function loadOperator() {
              $.ajax({
                url: "<?php echo base_url(); ?>index.php/Operator/GetAllOperator",
                type: "POST",
                dataType:"json",
                async:false,
                success: function(result){
                    operatorArray=result;
                }
              });
              var _html='';
              $('#tblOperator').dataTable().fnClearTable();
              $('#tblOperator').dataTable().fnDestroy();
              for (var i = 0; i < operatorArray.length; i++) {
                _html+='<tr>'
                            +'<td>'+ operatorArray[i].Firstname+' '+operatorArray[i].Lastname +'</td>'
                            +'<td>'+ operatorArray[i].Username +'</td>'
                            +'<td> ₱ '+ operatorArray[i].WalletBalance +'</td>'
                            +'<td><a href="<?php echo base_url(); ?>index.php/Admin/OperatorInfo/'+operatorArray[i].OperatorID+'" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete">MORE INFO</a></td>'
                      +'</tr>';

              }
              $("#tblOperator tbody").html(_html);

              $("#tblOperator").DataTable();
            }
        });
    </script>
