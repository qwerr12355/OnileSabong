
  <div class="container-fluid">
      <div class="row">
        <input type="hidden" id="txtEventID" value="<?php echo $eventinfo->EventID; ?>">
          <h6><?php echo $eventinfo->EventName; ?> - <?php echo $eventinfo->DateCreated; ?></h6>
          <div class="col s12 l6">
            <div class="twitch">
                <div class="twitch-video">
                      <?php echo $eventinfo->iframe; ?>
                </div>
            </div>
          </div>
          <div class="col l6 s12 grey lighten-4">
            <div class="row">
              <div class="grey darken-4 p-t-5">
                  <div class="center-align white-text display-6">
                    <h6 class="green" id="lblStatusOpen"> BETTING IS NOW OPEN!!!</h6>
                    <h6 class="red" id="lblStatusClose"> BETTING IS NOW CLOSED!!!</h6>
                    <h6 id="lblWinner">Winner</h6>
                  </div>
              </div>
            </div>
            <div class="center-align white-text display-6">
              <h6> Fight Number:# <span id="lblFightNumber" class="label label-info">60</span> </h6>
            </div>
            <div class="row">
              <div class="col s6">
                  <div class="row">
                      <div class="card">
                          <div class="red darken-3 p-t-5">
                              <div class="center-align white-text display-6">
                                  <h5>MERON</h5>
                              </div>
                          </div>
                          <div class="card-content">
                            <div class="center">
                              <div class="row">
                                  <h6 class="red-text m-b-0">TOTAL BET MONEY</h6>
                                  <h4 id="lblTotalMerondBets" class="red-text font-medium">₱ 0</h4>
                              </div>
                              <div class="row">
                                  <h6 class="red-text m-b-0">WINNING PRICE</h6>
                                  <h6 class="red-text font-medium">₱ 100 = ₱200 </h6>
                              </div>
                              <div class="row">
                                <button type="button" id="btnMeron" class="btn col s12 red">BET MERON</button>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
                <div class="col s6">
                    <div class="row">
                        <div class="card">
                            <div class="blue darken-3 p-t-5">
                                <div class="center-align white-text display-6">
                                    <h5>WALA</h5>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="center">
                                    <div class="row">
                                        <h6 class="blue-text m-b-0">TOTAL BET MONEY</h6>
                                        <h4 id="lblTotalWalaBets" class="blue-text font-medium">₱ 0</h4>
                                    </div>
                                    <div class="row">
                                        <h6 class="blue-text m-b-0">WINNING PRICE</h6>
                                        <h6 class="blue-text font-medium">₱ 100 = ₱200 </h6>
                                    </div>
                                    <div class="row">
                                      <button type="button" id="btnWala" class="btn col s12 indigo">BET WALA</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              <input type="hidden" id="txtCockFightID">
                <div class="input-field col s12 l4">
                    <input type="number" id="txtBetAmount">
                    <label for="txtBetAmount">ENTER AMOUNT HERE</label>
                </div>
                <div class="col s12 l8">
                  <div class="row">
                    <button type="button" id="btn10" class="btn col s3 grey darken-4">₱10</button>
                    <button type="button" id="btn50" class="btn col s3 grey darken-4">₱50</button>
                    <button type="button" id="btn100" class="btn col s3 grey darken-4">₱100</button>
                    <button type="button" id="btn200" class="btn col s3 grey darken-4">200</button>
                  </div>
                  <div class="row">
                    <button type="button" id="btn300" class="btn col s3 grey darken-4">₱300</button>
                    <button type="button" id="btn400" class="btn col s3 grey darken-4">₱400</button>
                    <button type="button" id="btn500" class="btn col s3 grey darken-4">₱500</button>
                    <button type="button" id="btn1000" class="btn col s3 grey darken-4">₱1000</button>
                  </div>
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
<footer class="center-align m-b-30 m-l-15 m-r-15">All Rights Reserved by MatPress. Designed and Developed by Raymundo R. Alfeche Jr.</footer>
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
<script src="<?php echo base_url(); ?>assets/assets/libs/sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#lblStatusOpen").hide();
        $("#lblStatusClose").hide();
        $("#lblStatus").hide();
        $("#btnMeron").hide();
        $("#btnWala").hide();
        $("#btnMeron").click(function() {

          if($("#txtBetAmount").val()==""||$("#txtBetAmount").val()<1)
          {
            Swal.fire({
              icon: 'warning',
              title: 'Please enter amount.',
              showConfirmButton: false,
              timer: 3000
            })
          }else{

          }
        });
        setInterval(function(){loadLastCockFight()},3000);
        function loadLastCockFight(){
          $.ajax({
              url:"<?php echo base_url(); ?>index.php/Cockfight/GetLastCockfight",
              type:"POST",
              dataType:"json",
              async:false,
              data:{
                "EventID":$("#txtEventID").val()
              },
              success: function(response){
                if(response.FightNumber==""){
                  $("#lblFightNumber").html("0");
                }else{
                  $.ajax({
                      url:"<?php echo base_url(); ?>index.php/Player/GetCockFightTotalMeronBet",
                      type:"POST",
                      dataType:"json",
                      data:{
                        CockFightID:response.GetLastCockfight.CockfightID
                      },
                      async:false,
                      success: function(response) {
                        $("#lblTotalMerondBets").text("₱ "+response.totalmeronbet);
                      }
                  });
                  $("#totalmeronbet").val(response.GetLastCockfight.CockfightID);
                  if(response.GetLastCockfight.Status=="Open"){
                    $("#lblStatusOpen").show();
                    $("#lblStatusClose").hide();
                    $("#btnMeron").show();
                    $("#btnWala").show();
                  }else{
                    $("#lblStatus").html("BETTING IS NOW CLOSED");
                    $("#lblStatusOpen").hide();
                    $("#lblStatusClose").show();
                    $("#btnMeron").hide();
                    $("#btnWala").hide();
                  }
                  $("#lblFightNumber").html(response.GetLastCockfight.FightNumber);
                  if(response.GetLastCockfight.Winner!=null){
                    if(response.GetLastCockfight.Winner=="Meron"){
                      $("#lblWinner").html("MERON WINS!!!");
                    }else if(response.GetLastCockfight.Winner=="Wala"){
                      $("#lblWinner").html("WALA WINS!!!");
                    }else if(response.GetLastCockfight.Winner=="Draw"){
                      $("#lblWinner").html("DRAW. Your bet is returned to your wallet!");
                    }else{
                      $("#lblWinner").html("Canceled amount is returned to your wallet!");
                    }

                    $("#lblStatusOpen").hide();
                    $("#lblStatusClose").hide();

                    $("#lblWinner").show();
                  }else{
                    $("#lblWinner").hide();
                  }
                }
              }

          })
        }
        $("#btn10").click(function() {
            $("#txtBetAmount").val("10");
            M.updateTextFields();
        });
        $("#btn50").click(function() {
            $("#txtBetAmount").val("50");
            M.updateTextFields();
        });
        $("#btn100").click(function() {
            $("#txtBetAmount").val("100");
            M.updateTextFields();
        });
        $("#btn200").click(function() {
            $("#txtBetAmount").val("200");
            M.updateTextFields();
        });
        $("#btn300").click(function() {
            $("#txtBetAmount").val("300");
            M.updateTextFields();
        });
        $("#btn400").click(function() {
            $("#txtBetAmount").val("400");
            M.updateTextFields();
        });
        $("#btn500").click(function() {
            $("#txtBetAmount").val("500");
            M.updateTextFields();
        });
        $("#btn1000").click(function() {
            $("#txtBetAmount").val("1000");
            M.updateTextFields();
        });

    });
</script>
