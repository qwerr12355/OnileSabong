
              <div class="container-fluid">
                  <div class="row">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                              <div class="card col s12 l8">
                                <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FNarpimTV%2Fvideos%2F386073806677008%2F&width=800&show_text=false&height=413&appId" col s12 width="280px" height="280px" style="border:none;overflow:hidden"></iframe>
                              </div>
                              <div class="card col s12 l4">
                                <div class="card-content">
                                    <div class="row">

                                      <input type="hidden" value="<?php echo $EventID; ?>" readonly id="txtEventID">
                                      <input type="hidden" readonly id="txtCockFightID">
                                      <div class="input-field col s12">
                                          <input type="number" id="txtFightNumber">
                                          <label for="txtFightNumber">Fight No.</label>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <button type="button" id="btnOpenBet" class="btn col s12">OPEN BET</button>
                                    </div>
                                    <div class="row">
                                      <div class="input-field col s12">
                                          <input  readonly type="number" id="txtMeronBets">
                                          <label for="txtMeronBets">Total Meron bets</label>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="input-field col s12">
                                          <input  readonly type="number" id="txtWalaBets">
                                          <label for="txtWalaBets">Total Wala bets</label>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="input-field col s12">
                                          <input readonly type="number" id="txtTotalDraw">
                                          <label for="txtTotalDraw">Total draw bets</label>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <a href="#WinnerModal" type="button" id="btnChooseWinner" class="btn col s12 modal-trigger">CHOOSE WINNER</a>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>

              </div>
              <div id="WinnerModal" class="modal">
                  <div class="modal-content">
                    <div class="row">
                      <button type="button" id="btnMeronWins" class="btn red col s12 l3 ">Meron Wins</button>
                      <button type="button" id="btnWalaWins" class="btn blue col s12 l3">Wala Wins</button>
                      <button type="button" id="btnDraw" class="btn green col s12 l3">Draw</button>
                      <button type="button" id="btnCancel" class="btn grey col s12 l3">Cancel</button>
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
    <script src="<?php echo base_url(); ?>assets/dist/js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#WinnerModal').modal();
            loadLastCockFight();
            function loadLastCockFight() {
              $.ajax({
                url: "<?php echo base_url(); ?>index.php/Cockfight/GetLastCockfight",
                type: "POST",
                data:{
                  'EventID': $('#txtEventID').val()
                },
                async:false,
                dataType:"json",
                success: function(result){
                    if(result.FightNumber==""){
                      $("#txtFightNumber").val("");
                      M.updateTextFields();

                    }else{
                      if(result.GetLastCockfight.Winner==null){
                        $("#btnChooseWinner").show();
                      }else{
                        $("#btnChooseWinner").hide();
                      }
                      $("#txtFightNumber").val(parseInt(result.GetLastCockfight.FightNumber)+1);
                      $("#txtCockFightID").val(result.GetLastCockfight.CockfightID);
                      M.updateTextFields();
                    }
                }
              });
            }
            $("#btnOpenBet").click(function() {
                if($("#btnOpenBet").text()=="OPEN BET"){
                  if($("#txtCockFightID").val()!=""){
                    $.ajax({
                      url: "<?php echo base_url(); ?>index.php/Cockfight/GetLastCockfight",
                      type: "POST",
                      data:{
                        'EventID': $('#txtEventID').val()
                      },
                      async:false,
                      dataType:"json",
                      success: function(result){
                          if(result.GetLastCockfight.Winner==null){
                            $('#WinnerModal').modal('open');
                          }else{
                            $.ajax({
                              url: "<?php echo base_url(); ?>index.php/Cockfight/Add",
                              type: "POST",
                              data:{
                                'EventID': $('#txtEventID').val(),
                                'FightNumber': $('#txtFightNumber').val()
                              },
                              dataType:"json",
                              async:false,
                              success: function(result){
                                  if(result.success){
                                    $("#btnOpenBet").text("CLOSE BET");
                                    $("#txtCockFightID").val(result.CockFightID);
                                  }
                              }
                            });
                          }
                      }
                    });
                  }else{
                    $.ajax({
                      url: "<?php echo base_url(); ?>index.php/Cockfight/Add",
                      type: "POST",
                      data:{
                        'EventID': $('#txtEventID').val(),
                        'FightNumber': $('#txtFightNumber').val()
                      },
                      dataType:"json",
                      async:false,
                      success: function(result){
                          if(result.success){
                            $("#btnOpenBet").text("CLOSE BET");
                            $("#txtCockFightID").val(result.CockFightID);
                          }
                      }
                    });
                  }
                }else{
                  $.ajax({
                    url: "<?php echo base_url(); ?>index.php/Cockfight/UpdateStatus",
                    type: "POST",
                    data:{
                      'CockFightID': $('#txtCockFightID').val()
                    },
                    dataType:"json",
                    async:false,
                    success: function(result){
                        if(result.success){
                          $("#btnOpenBet").text("CLOSE BET");
                          $("#txtCockFightID").val(result.CockFightID);
                          loadLastCockFight();
                          $("#btnOpenBet").text("OPEN BET");
                        }
                    }
                  });

                }
            });
            $("#btnMeronWins").click(function() {
              $.ajax({
                url: "<?php echo base_url(); ?>index.php/Cockfight/UpdateWinner",
                type: "POST",
                data:{
                  'CockFightID': $('#txtCockFightID').val(),
                  'Winner':'Meron'
                },
                dataType:"json",
                async:false,
                success: function(result){
                    if(result.success){
                      $("#txtCockFightID").val(result.CockFightID);
                      loadLastCockFight();
                      $('#WinnerModal').modal('close');

                      alert("Meron Wins");
                    }
                }
              });
            });
            $("#btnWalaWins").click(function() {
              $.ajax({
                url: "<?php echo base_url(); ?>index.php/Cockfight/UpdateWinner",
                type: "POST",
                data:{
                  'CockFightID': $('#txtCockFightID').val(),
                  'Winner':'Wala'
                },
                dataType:"json",
                async:false,
                success: function(result){
                    if(result.success){
                      $("#txtCockFightID").val(result.CockFightID);
                      loadLastCockFight();
                      $('#WinnerModal').modal('close');

                      alert("Wala Wins");
                    }
                }
              });
            });
            $("#btnDraw").click(function() {
              $.ajax({
                url: "<?php echo base_url(); ?>index.php/Cockfight/UpdateWinner",
                type: "POST",
                data:{
                  'CockFightID': $('#txtCockFightID').val(),
                  'Winner':'Draw'
                },
                dataType:"json",
                async:false,
                success: function(result){
                    if(result.success){
                      $("#txtCockFightID").val(result.CockFightID);
                      loadLastCockFight();
                      $('#WinnerModal').modal('close');

                      alert("Draw");
                    }
                }
              });
            });
            $("#btnCancel").click(function() {
              $.ajax({
                url: "<?php echo base_url(); ?>index.php/Cockfight/UpdateWinner",
                type: "POST",
                data:{
                  'CockFightID': $('#txtCockFightID').val(),
                  'Winner':'Cancel'
                },
                dataType:"json",
                async:false,
                success: function(result){
                    if(result.success){
                      $("#txtCockFightID").val(result.CockFightID);
                      loadLastCockFight();
                      $('#WinnerModal').modal('close');

                      alert("Canceled");
                    }
                }
              });
            });
        });

    </script>
