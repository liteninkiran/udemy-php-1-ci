<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Library Management</title>
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>lib/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>lib/font-awesome/css/font-awesome.css">

        <script src="<?php echo base_url(); ?>lib/jquery-1.11.1.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>style/theme.css"/>

    </head>

    <body class=" theme-blue">

        <div class="navbar navbar-default" role="navigation">

            <div class="navbar-header custommenu">
                Library Management
            </div>

            <div class="navbar-collapse collapse" style="height: 1px;">

                <ul id="main-menu" class="nav navbar-nav navbar-right">

                    <li class="dropdown hidden-xs">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user padding-right-small" style="position:relative;top: 3px;"></span>User
                            <i class="fa fa-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">

                            <li><a href="./">My Account</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Admin Panel</li>
                            <li><a href="./">Users</a></li>             
                            <li><a tabindex="-1" href="sign-in.html">Logout</a></li>

                        </ul>

                    </li>

                </ul>

            </div>

        </div>
        
        <div class="sidebar-nav">

            <ul>

                <li>
                    <a href="#" data-target=".dashboard-menu" class="nav-header" data-toggle="collapse"><i class="fa fa-fw fa-dashboard"></i>Dashboard<i class="fa fa-collapse"></i></a>
                </li>

                <li>

                    <ul class="dashboard-menu nav nav-list collapse in">

                        <li><a href="addstudent.html"><span class="fa fa-caret-right"></span>Add Student</a></li>
                        <li><a href="studentlist.html"><span class="fa fa-caret-right"></span>Student List</a></li>
                        
                        <li><a href="adddep.html"><span class="fa fa-caret-right"></span>Add Department</a></li>
                        <li><a href="deplist.html"><span class="fa fa-caret-right"></span>Department List</a></li>
                                            
                        <li><a href="addauthor.html"><span class="fa fa-caret-right"></span>Add Author</a></li>
                        <li><a href="authorlist.html"><span class="fa fa-caret-right"></span>Author List</a></li>
                        
                        <li><a href="addbook.html"><span class="fa fa-caret-right"></span>Add Book</a></li>
                        <li><a href="booklist.html"><span class="fa fa-caret-right"></span>Book List</a></li>
                        
                        <li><a href="issuebook.html"><span class="fa fa-caret-right"></span>Issue Book</a></li>
                        <li><a href="listed.html"><span class="fa fa-caret-right"></span>Edit List</a></li>         
                
                    </ul>

                </li>

            </ul>
         
        </div>

        <div class="content">

            <div class="main-content">

                <div class="homesection">
                    <h2>Welcome to Library Management System</h2>
                </div>

                <div style="clear:both;"/>
                </div>

            </div>

            <footer class="footoption">
                <p>&copy; <a href="http://www.easylearningbd.com/" target="_blank">easy learning </a></p>
            </footer>

            <script src="<?php echo base_url(); ?>lib/bootstrap/js/bootstrap.js"></script>

        </div>

    </body>

</html>

