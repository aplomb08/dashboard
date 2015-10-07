      <ul class="sidebar-menu" id="sidemenu">

        <li class="header">Welcome Admin</li>

        <li class="treeview active">
          <a href="#"><i class="fa fa-link"></i> <span>Class</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
              <li><a href='class_add.php'><i class="fa fa-plus-square-o"></i> Add Class</a></li>
            <?php
              $sql = "SELECT DISTINCT(name) FROM class WHERE teacherId IN (SELECT teacherId FROM teacher WHERE username='$username')";
              $result = mysql_query($sql);
              while($test = mysql_fetch_array($result))
              {
                $className = $test['name'];
                echo "<li><a href='#''><i class='fa fa-circle-o'></i> ".$className."</a></li>";
              }
            ?>
          </ul>
        </li>

        <li><a href="#"><i class="fa fa-link"></i> <span>Student</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>WorkSheet</span></a></li>

      </ul>