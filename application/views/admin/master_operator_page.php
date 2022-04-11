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
                                  <h5 class="card-title">All Contacts</h5>
                                  <div class="ml-auto">
                                      <a class="waves-effect waves-light btn blue-grey darken-4 modal-trigger" href="#modal2">Add new operator</a>
                                  </div>
                              </div>
                              <div class="table-responsive">
                                  <table id="tblOperator" class="table centered table-bordered nowrap display">
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
                                <button class="modal-action modal-close waves-effect waves-green btn-flat indigo white-text" id="btnAddNewOperator"><i class="far fa-save m-r-10"></i> Add</a>
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
        <a href="#" data-target="right-slide-out" class="sidenav-trigger right-side-toggle btn-floating btn-large waves-effect waves-light red"><i class="material-icons">settings</i></a>
        <aside class="right-sidebar">
            <!-- Right Sidebar -->
            <ul id="right-slide-out" class="sidenav right-sidenav p-t-10">
                <li>
                    <div class="row">
                        <div class="col s12">
                            <!-- Tabs -->
                            <ul class="tabs">
                                <li class="tab col s4"><a href="#settings" class="active"><span class="material-icons">build</span></a></li>
                                <li class="tab col s4"><a href="#chat"><span class="material-icons">chat_bubble</span></a></li>
                                <li class="tab col s4"><a href="#activity"><span class="material-icons">local_activity</span></a></li>
                            </ul>
                            <!-- Tabs -->
                        </div>
                        <!-- Setting -->
                        <!-- chat -->
                        <div id="chat" class="col s12">
                            <ul class="mailbox m-t-20">
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_1' data-user-id='1'>
                                            <span class="user-img">
                                                <img src="<?php echo base_url(); ?>assets/assets/images/users/3.jpg" alt="user" class="circle">
                                                <span class="profile-status online pull-right" data-status="online"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Chris Evans</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:30 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_2' data-user-id='2'>
                                            <span class="user-img">
                                                <img src="<?php echo base_url(); ?>assets/images/users/3.jpg" alt="user" class="circle">
                                                <span class="profile-status busy pull-right" data-status="busy"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Ray Hudson</h5>
                                                <span class="mail-desc">I've sung a song! See you at</span>
                                                <span class="time">9:10 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_3' data-user-id='3'>
                                            <span class="user-img">
                                                <img src="<?php echo base_url(); ?>assets/assets/images/users/3.jpg" alt="user" class="circle">
                                                <span class="profile-status away pull-right" data-status="away"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Lb James</h5>
                                                <span class="mail-desc">I am a singer!</span>
                                                <span class="time">9:08 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_4' data-user-id='4'>
                                            <span class="user-img">
                                                <img src="<?php echo base_url(); ?>assets/assets/images/users/4.jpg" alt="user" class="circle">
                                                <span class="profile-status offline pull-right" data-status="offline"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Don Andres</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:02 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_5' data-user-id='5'>
                                            <span class="user-img">
                                                <img src="<?php echo base_url(); ?>assets/assets/images/users/3.jpg" alt="user" class="circle">
                                                <span class="profile-status online pull-right" data-status="online"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Chris Evans</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:30 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_6' data-user-id='6'>
                                            <span class="user-img">
                                                <img src="<?php echo base_url(); ?>assets/assets/images/users/3.jpg" alt="user" class="circle">
                                                <span class="profile-status busy pull-right" data-status="busy"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Ray Hudson</h5>
                                                <span class="mail-desc">I've sung a song! See you at</span>
                                                <span class="time">9:10 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_7' data-user-id='7'>
                                            <span class="user-img">
                                                <img src="<?php echo base_url(); ?>assets/assets/images/users/3.jpg" alt="user" class="circle">
                                                <span class="profile-status away pull-right" data-status="away"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Lb James</h5>
                                                <span class="mail-desc">I am a singer!</span>
                                                <span class="time">9:08 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_8' data-user-id='8'>
                                            <span class="user-img">
                                                <img src="<?php echo base_url(); ?>assets/assets/images/users/4.jpg" alt="user" class="circle">
                                                <span class="profile-status offline pull-right" data-status="offline"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Don Andres</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:02 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_9' data-user-id='9'>
                                            <span class="user-img">
                                                <img src="<?php echo base_url(); ?>assets/assets/images/users/3.jpg" alt="user" class="circle">
                                                <span class="profile-status online pull-right" data-status="online"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Chris Evans</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:30 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_10' data-user-id='10'>
                                            <span class="user-img">
                                                <img src="<?php echo base_url(); ?>assets/assets/images/users/3.jpg" alt="user" class="circle">
                                                <span class="profile-status busy pull-right" data-status="busy"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Ray Hudson</h5>
                                                <span class="mail-desc">I've sung a song! See you at</span>
                                                <span class="time">9:10 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_11' data-user-id='11'>
                                            <span class="user-img">
                                                <img src="<?php echo base_url(); ?>assets/assets/images/users/3.jpg" alt="user" class="circle">
                                                <span class="profile-status away pull-right" data-status="away"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Lb James</h5>
                                                <span class="mail-desc">I am a singer!</span>
                                                <span class="time">9:08 AM</span>
                                            </span>
                                        </a>
                                        <!-- Message -->
                                        <a href="#" class="user-info" id='chat_user_12' data-user-id='12'>
                                            <span class="user-img">
                                                <img src="<?php echo base_url(); ?>assets/assets/images/users/4.jpg" alt="user" class="circle">
                                                <span class="profile-status offline pull-right" data-status="offline"></span>
                                            </span>
                                            <span class="mail-contnet">
                                                <h5>Don Andres</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                                <span class="time">9:02 AM</span>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Activity -->
                        <div id="activity" class="col s12">
                            <div class="m-t-10 p-10">
                                <h6 class="font-medium">Activity Timeline</h6>
                                <div class="steamline">
                                    <div class="sl-item">
                                        <div class="sl-left green"> <i class="ti-user"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                            <div class="desc">you can write anything </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left blue"><i class="fa fa-image"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Send documents to Clark</div>
                                            <div class="desc">Lorem Ipsum is simply </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img class="circle" alt="user" src="<?php echo base_url(); ?>assets/assets/images/users/3.jpg"> </div>
                                        <div class="sl-right">
                                            <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">Contrary to popular belief</div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img class="circle" alt="user" src="<?php echo base_url(); ?>assets/assets/images/users/3.jpg"> </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">Approve meeting with tiger</div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left teal"> <i class="ti-user"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                            <div class="desc">you can write anything </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left purple"><i class="fa fa-image"></i></div>
                                        <div class="sl-right">
                                            <div class="font-medium">Send documents to Clark</div>
                                            <div class="desc">Lorem Ipsum is simply </div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img class="circle" alt="user" src="<?php echo base_url(); ?>assets/assets/images/users/4.jpg"> </div>
                                        <div class="sl-right">
                                            <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">Contrary to popular belief</div>
                                        </div>
                                    </div>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img class="circle" alt="user" src="<?php echo base_url(); ?>assets/assets/images/users/6.jpg"> </div>
                                        <div class="sl-right">
                                            <div><a href="javascript:void(0)">Stephen</a> <span class="sl-date">5 minutes ago</span></div>
                                            <div class="desc">Approve meeting with tiger</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </aside>
        <div class="chat-windows"></div>
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
        $( document ).ready(function() {
            var operatorArray=[];
            loadOperator();
            $("#btnAddNewOperator").click(function functionName() {
                $.ajax({
                  type: "POST",
                  url: "<?php echo base_url(); ?>index.php/Operator/AddNewOperator",
                  data: {
                    "Username":$("#username").val(),
                    "Password":$("#password").val(),
                    "Firstname":$("#fname").val(),
                    "Lastname":$("#lname").val(),
                    "GcashNumber":$("#gcashnumber").val(),
                    "GcashName":$("#gcashname").val(),
                  },
                  success: function(result){
                      loadOperator();
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
                            +'<td>'+ operatorArray[i].GcashNumber +'</td>'
                            +'<td>'+ operatorArray[i].GcashName +'</td>'
                            +'<td>'+ operatorArray[i].Username +'</td>'
                            +'<td>'+ operatorArray[i].DateCreated +'</td>'
                            +'<td><a href="<?php echo base_url(); ?>index.php/Operator" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-info" aria-hidden="true"></i>More info</a></td>'
                      +'</tr>';

              }
              $("#tblOperator tbody").html(_html);

              $("#tblOperator").DataTable();
            }
        });
    </script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/material-press/package/html/dark/starter-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Apr 2022 01:57:30 GMT -->
</html>
