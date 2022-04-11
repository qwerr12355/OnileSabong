<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/material-press/package/html/dark/starter-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Apr 2022 01:57:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/assets/images/favicon.png">
    <title>Admin - Material Design Demo</title>
    <link href="<?php echo base_url(); ?>assets/dist/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/dist/css/pages/data-table.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper" id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">MatPress Admin</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <header class="topbar">
            <!-- ============================================================== -->
            <!-- Navbar scss in header.scss -->
            <!-- ============================================================== -->
            <nav>
                <div class="nav-wrapper">
                    <!-- ============================================================== -->
                    <!-- Logo you can find that scss in header.scss -->
                    <!-- ============================================================== -->
                    <a href="javascript:void(0)" class="brand-logo">
                        <span class="icon">
                            <img class="light-logo" src="<?php echo base_url(); ?>assets/assets/images/logo-light-icon.png">
                            <img class="dark-logo" src="<?php echo base_url(); ?>assets/assets/images/logo-icon.png">
                        </span>
                        <span class="text">
                            <img class="light-logo" src="<?php echo base_url(); ?>assets/assets/images/logo-light-text.png">
                            <img class="dark-logo" src="<?php echo base_url(); ?>assets/assets/images/logo-text.png">
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo you can find that scss in header.scss -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Left topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                    <ul class="left">
                        <li class="hide-on-med-and-down">
                            <a href="javascript: void(0);" class="nav-toggle">
                                <span class="bars bar1"></span>
                                <span class="bars bar2"></span>
                                <span class="bars bar3"></span>
                            </a>
                        </li>
                        <li class="hide-on-large-only">
                            <a href="javascript: void(0);" class="sidebar-toggle">
                                <span class="bars bar1"></span>
                                <span class="bars bar2"></span>
                                <span class="bars bar3"></span>
                            </a>
                        </li>
                        <li class="search-box">
                            <a href="javascript: void(0);"><i class="material-icons">search</i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-info"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Left topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Right topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                    <ul class="right">
                        <li class="lang-dropdown"><a class="dropdown-trigger" href="javascript: void(0);" data-target="lang_dropdown"><i class="flag-icon flag-icon-us"></i></a>
                            <ul id="lang_dropdown" class="dropdown-content">
                                <li>
                                    <a href="#!" class="grey-text text-darken-1">
                                        <i class="flag-icon flag-icon-us"></i> English</a>
                                </li>
                                <li>
                                    <a href="#!" class="grey-text text-darken-1">
                                        <i class="flag-icon flag-icon-fr"></i> French</a>
                                </li>
                                <li>
                                    <a href="#!" class="grey-text text-darken-1">
                                        <i class="flag-icon flag-icon-es"></i> Spanish</a>
                                </li>
                                <li>
                                    <a href="#!" class="grey-text text-darken-1">
                                        <i class="flag-icon flag-icon-de"></i> German</a>
                                </li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Notification icon scss in header.scss -->
                        <!-- ============================================================== -->
                        <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="noti_dropdown"><i class="material-icons">notifications</i></a>
                            <ul id="noti_dropdown" class="mailbox dropdown-content">
                                <li>
                                    <div class="drop-title">Notifications</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#">
                                                <span class="btn-floating btn-large red"><i class="material-icons">link</i></span>
                                                <span class="mail-contnet">
                                                    <h5>Launch Admin</h5>
                                                    <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                                </span>
                                            </a>
                                        <!-- Message -->
                                        <a href="#">
                                                <span class="btn-floating btn-large blue"><i class="material-icons">date_range</i></span>
                                                <span class="mail-contnet">
                                                    <h5>Event today</h5>
                                                    <span class="mail-desc">Just a reminder that you have event</span>
                                                    <span class="time">9:10 AM</span>
                                                </span>
                                            </a>
                                        <!-- Message -->
                                        <a href="#">
                                                <span class="btn-floating btn-large cyan"><i class="material-icons">settings</i></span>
                                                <span class="mail-contnet">
                                                    <h5>Settings</h5>
                                                    <span class="mail-desc">You can customize this template as you want</span>
                                                    <span class="time">9:08 AM</span>
                                                </span>
                                            </a>
                                        <!-- Message -->
                                        <a href="#">
                                                <span class="btn-floating btn-large green"><i class="material-icons">face</i></span>
                                                <span class="mail-contnet">
                                                    <h5>Lily Jordan</h5>
                                                    <span class="mail-desc">Just see the my admin!</span>
                                                    <span class="time">9:02 AM</span>
                                                </span>
                                            </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="center-align" href="javascript:void(0);"> <strong>Check all notifications</strong> </a>
                                </li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Comment topbar icon scss in header.scss -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- Profile icon scss in header.scss -->
                        <!-- ============================================================== -->
                        <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="user_dropdown"><img src="<?php echo base_url(); ?>assets/assets/images/users/3.jpg" alt="user" class="circle profile-pic"></a>
                            <ul id="user_dropdown" class="mailbox dropdown-content dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-text">
                                            <h4>Steve Harvey</h4>
                                            <p>steve@gmail.com</p>
                                            <a class="waves-effect waves-light btn-small red white-text">View Profile</a>
                                        </div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="material-icons">account_circle</i> My Profile</a></li>
                                <li><a href="#"><i class="material-icons">account_balance_wallet</i> My Balance</a></li>
                                <li><a href="#"><i class="material-icons">inbox</i> Inbox</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="material-icons">settings</i> Account Setting</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="material-icons">power_settings_new</i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                </div>
            </nav>
            <!-- ============================================================== -->
            <!-- Navbar scss in header.scss -->
            <!-- ============================================================== -->
        </header>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <ul id="slide-out" class="sidenav">
                <li>
                    <div class="user-profile" style="background-image: url(<?php echo base_url(); ?>assets/assets/images/user-bg.jpg);">
                        <div class="user-name dropdown-trigger" data-target='dropdownuser'>
                            <h6 class="white-text name"><i class="material-icons m-r-10">account_circle</i> <span class="hidden">Steve Harvey</span> <i class="material-icons ml-auto hidden">expand_more</i></h6>
                        </div>
                        <ul id='dropdownuser' class='dropdown-content'>
                            <li><a href="#"><i class="material-icons">account_circle</i> My Profile</a></li>
                            <li><a href="#"><i class="material-icons">account_balance_wallet</i> My Balance</a></li>
                            <li><a href="#"><i class="material-icons">inbox</i> Inbox</a></li>
                            <li role="separator" class="divider m-t-0"></li>
                            <li><a href="#"><i class="material-icons">settings</i> Account Setting</a></li>
                            <li role="separator" class="divider m-t-0"></li>
                            <li><a href="#"><i class="material-icons">power_settings_new</i> Logout</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <ul class="collapsible p-t-30">
                         <li>
                            <a href="javascript:void(0)" class="collapsible-header"><i class="material-icons">repeat</i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li>
                            <a class="collapsible-header has-arrow"><i class="material-icons">clear_all</i><span class="hide-menu">User</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible" data-collapsible="accordion">
                                    <li>
                                        <a href="#">
                                            <i class="material-icons">grade</i>
                                            <span class="hide-menu">Operator</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="material-icons">grade</i>
                                            <span class="hide-menu">Agent</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="material-icons">grade</i>
                                            <span class="hide-menu">Player</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Operator Information</h5>
                    <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Operator</a>
                        <a href="#!" class="breadcrumb">Operator Information</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                                <div class="container-fluid">
                                  <h5 class="card-title">Personal Information</h5>
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
                                      <input id="txtGcashNumber" type="number" value="<?php echo $info->GcashNumber; ?>">
                                      <label for="txtGcashNumber" class="">GCASH Number :</label>
                                  </div>
                                  <div class="input-field col s12 l6">
                                      <input id="txtGcashname" type="text" value="<?php echo $info->GcashName; ?>">
                                      <label for="txtGcashname" class="">GCASH Name :</label>
                                  </div>
                                  <a class="btn modal-trigger col s12 l6" href="#modal1">CHANGE ACCOUNT INFO</a>
                                  <button class="btn info col s12 l6" type="button" name="button">SAVE CHANGES</button>
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
                  <input type="hidden" name="" value="<?php echo $accountinfo->UserID; ?>" id="txtUserID">
                  <div class="input-field col s12">
                    <input type="text" name="" value="<?php echo $accountinfo->Username; ?>" id="txtUsername">
                    <label for="txtUsername">Username</label>
                  </div>
                  <div class="input-field col s12">
                    <input type="password" name="" value="<?php echo $accountinfo->Password; ?>" id="txtPassword">
                    <label for="txtPassword">Password</label>
                  </div>
                  <div class="input-field col s12">
                    <input type="password" name="" value="<?php echo $accountinfo->Password; ?>" id="txtConfirmPassword">
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
    <script src="<?php echo base_url(); ?>assets/dist/js/materialize.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!-- ============================================================== -->
    <!-- Apps -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/dist/js/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/app.init.dark.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/app-style-switcher.js"></script>
    <!-- ============================================================== -->
    <!-- Custom js -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url(); ?>assets/dist/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets/extra-libs/DataTables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/pages/datatable/datatable-advanced.init.js"></script>
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
                  alert("success");
                }esle{
                  if(result.UsernameExist)
                }
              });
            });
        })
    </script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/material-press/package/html/dark/starter-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Apr 2022 01:57:30 GMT -->
</html>
