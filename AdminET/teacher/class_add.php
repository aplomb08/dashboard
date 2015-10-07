<?php
  
  session_start();
  if(isset($_SESSION['etsu_username']))
  {
    $username = $_SESSION['etsu_username'];

    include 'include/db.php';

    $sql = "SELECT name, profilePic, teacherId FROM teacher WHERE username='$username'";
    $result = mysql_query($sql);
    if($test = mysql_fetch_array($result))
    {
      $teacherId = $test['teacherId'];
      $teacherName = $test['name'];
      $profilePic = $test['profilePic'];
    }

?>


<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Teacher_Dashboard</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <?php include 'include/teacher_script_list.php'; ?>

  
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <?php include 'include/logo.php' ?>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="<?php echo "img/profile_pic/".$profilePic; ?>" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo "img/profile_pic/".$profilePic; ?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $teacherName; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo "img/profile_pic/".$profilePic; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $teacherName; ?>
                  <small>Member since Sep. 2015</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="signout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      
      <?php include 'include/sidebar_menu/sidebar_user.php' ?>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <?php include 'include/sidebar_menu/sidebar_menu.php'; ?>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Class
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Class</a></li>
        <li class="active">Add Class</li>
      </ol>
    </section>

    <script>
      $(document).ajaxStart(function() { Pace.restart(); });
      
      function addClassFunc()
      {
        var className = document.forms["addClassForm"]["className"].value;
        var classSection = document.forms["addClassForm"]["classSection"].value;
        var subjectName = document.forms["addClassForm"]["subjectName"].value;
        var teacherMode = document.forms["addClassForm"]["teacherMode"].value;
        var username = document.forms["addClassForm"]["username"].value;
        var action = "add_class";

        $.ajax({
          type: "POST",
          url: "add_process.php",
          data: {action:action, className:className, classSection:classSection, subjectName:subjectName, teacherMode:teacherMode, username:username}
          }).done(function(result) {
            if(result.trim() != 'error')
            {
              $("#sidemenu").load("class_add.php #sidemenu" );
              $("#deleteClassTable").load("class_add.php #deleteClassTable" );
              
              $("#addClassAlert").css("display","block");

              setTimeout(function() {
                $('#addClassAlert').fadeOut('fast');
              }, 5000);

            }
            else
            {  
              $("#addClassError").css("display","block");  
            }
        });

        return false;

      }

      function deleteClassFunc(classId)
      {
        var action = "delete_class";

        var r = confirm("Are you sure you want to delete this class ?");
        if (r == true)
        {
          $.ajax({
            type: "POST",
            url: "delete_process.php",
            data: {action:action, classId:classId}
            }).done(function(result) {
              if(result.trim() != 'error')
              {
                $("#sidemenu").load("class_add.php #sidemenu" );
                $("#deleteClassTable").load("class_add.php #deleteClassTable" );
                
                $("#deleteClassAlert").css("display","block");

                setTimeout(function() {
                  $('#deleteClassAlert').fadeOut('fast');
                }, 5000);

              }
              else
              { 
                $("#deleteClassError").css("display","block");  
              }
          });
        }
        

      }
    </script>

    <!-- Main content -->
    <section class="content">
      
      <div class="row"><!-- row -->
        
        <div class="col-md-10"><!-- col-md 1 -->

          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Add Class</a></li>
              <li><a href="#tab_2" data-toggle="tab">Delete Class</a></li>
            </ul>
            <div class="tab-content">

              <div class="tab-pane active" id="tab_1"><!-- tab_1 -->
                
                <form class="form-horizontal" action="#" method="post" name="addClassForm" onSubmit="return addClassFunc();">
                  <input type="hidden" value="<?php echo $username; ?>" name="username">
                  <div class="box-body">

                    <!-- alert -->
                    <div class="callout callout-danger" style="display:none" id="addClassError">
                      <h5><i class="icon fa fa-warning"></i>&nbsp;&nbsp;&nbsp;Error, try again.</h5>
                    </div>
                    <div class="callout callout-success" style="display:none" id="addClassAlert">
                      <h5><i class="icon fa fa-check"></i></i>&nbsp;&nbsp;&nbsp;Successfully Added</h5>
                    </div>
                    <!-- alert end -->

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Select Class</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="className">
                          <option value="Class I">Class I</option>
                          <option value="Class II">Class II</option>
                          <option value="Class III">Class III</option>
                          <option value="Class IV">Class IV</option>
                          <option value="Class V">Class V</option>
                          <option value="Class VI">Class VI</option>
                          <option value="Class VII">Class VII</option>
                          <option value="Class VIII">Class VIII</option>
                          <option value="Class IX">Class IX</option>
                          <option value="Class X">Class X</option>
                          <option value="Class XI">Class XI</option>
                          <option value="Class XII">Class XII</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Select Section</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="classSection">
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                        </select>
                      </div>
                    </div>                
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Subject</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Subject Name" name="subjectName" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Mode</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="teacherMode">
                          <option value="Subject">Subject Teacher</option>
                          <option value="Class">Class Teacher</option>
                        </select>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  
                  <div class="box-footer">
                    <button type="submit" class="btn btn-info" >Add Class</button>
                  </div>
                </form>

              </div><!-- tab_1 end-->
              
              <div class="tab-pane" id="tab_2"><!-- tab_2-->
                  <div class="box-body">

                    <!-- alert -->
                    <div class="callout callout-danger" style="display:none" id="deleteClassError">
                      <h5><i class="icon fa fa-warning"></i>&nbsp;&nbsp;&nbsp;Error, try again.</h5>
                    </div>
                    <div class="callout callout-success" style="display:none" id="deleteClassAlert">
                      <h5><i class="icon fa fa-check"></i></i>&nbsp;&nbsp;&nbsp;Successfully Deleted</h5>
                    </div>
                    <!-- alert end -->

                    <table id="deleteClassTable" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Class Name</th>
                          <th>Subject</th>
                          <th>Mode</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            $sql = "SELECT *FROM class WHERE teacherId='$teacherId'";
                            $result = mysql_query($sql);
                            while($test = mysql_fetch_array($result))
                            {
                                $classId = $test['classId'];
                                $classNameShow = $test['name'];
                                $subjectNameShow = $test['subject'];
                                $teacherModeShow = $test['mode'];
                                ?>
                                <tr>
                                    <td><?php echo $classNameShow; ?></td>
                                    <td><?php echo $subjectNameShow; ?></td>
                                    <td><?php echo $teacherModeShow; ?></td>
                                    <td onclick="deleteClassFunc('<?php echo $classId; ?>')" style="cursor:pointer">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-remove"></i></td>
                                </tr>
                                <?php
                            }
                        ?>
                        <tr>
                          
                        </tr>
                      </tbody>
                    </table>

                  </div>
                  <!-- /.box-body -->
              </div><!-- tab_2 end-->
              
            </div>
            <!-- /.tab-content -->
          </div>

        </div><!-- col-md 1 end -->

      </div><!-- row end-->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php include 'include/footer.php'; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

</body>
</html>

<?php
  }
  else
  {
    header('location:../index.php');
  }

?>
