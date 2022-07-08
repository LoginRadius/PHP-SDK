<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" />
        <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script> 
        <script src="<?php echo base_url()?>assets/js/logout.js"></script> 
        <script src="<?php echo base_url();?>assets/js/account.js"></script>
        <script src="<?php echo base_url()?>assets/js/profile.js"></script>  
    </head>
    <body>
        <div class="section-menu">
            <div class="menu-header">
                <a href="">
                    <img src="<?php echo base_url()?>assets/images/lr-logo.png"/>
                </a>
                <span style="display:block;margin-left:70px">CodeIgniter Web Demo</span>
            </div>
            <div class="vertical-menu">
                <a href="<?php echo base_url();?>profile" id="menu-profile">Profile</a>
                <a href="<?php echo base_url();?>changepassword" id="menu-changepassword">Change Password</a>
                <a href="<?php echo base_url();?>setpassword" id="menu-setpassword">Set Password</a>
                <a href="<?php echo base_url();?>account" id="menu-account">Update Account</a>
                <a href="<?php echo base_url();?>accountlinking" id="menu-accountlinking">Account Linking</a>
                <a href="<?php echo base_url();?>customobjects" id="menu-customobjects">Custom Object Management</a>
                <a href="<?php echo base_url();?>multifactor" id="menu-multifactor">Reset MultiFactor</a>
                <a href="<?php echo base_url();?>roles" id="menu-roles">Roles Management</a>
                <a href="" id="menu-user-logout">Logout</a>
            </div>
        </div>
        <div class="section-main section-minimal">
            <center>
                <div class="container-small lr-profile-viewer" style="height: 300px;">
                    <span class="lr-image-frame">
                        <img src="assets/images/user-blank.png"/>
                    </span>
                    <div class="lr-heading">Hello, <span class="lr-user-name"> </span><br/>
                        <div class="lr-profile-info">           
                            <div class="lr-email-info">
                                <span class="lr-value lr-em emailid"></span>
                            </div>              
                            <div class="lr-uid-info">
                                <span class="lr-label" style="font-size: 12px;">Uid: </span>
                                <span class="lr-value useruid" style="font-size: 12px;"></span>
                            </div>
                            <div class="lr-uid-info">
                                <span class="lr-label" style="font-size: 12px;">Last Login: </span>
                                <span class="lr-value lastlogin" style="font-size: 12px;"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </center>                
        </div>       
    </body>
</html>