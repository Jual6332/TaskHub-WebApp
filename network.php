<?php 
session_start();
include("includes/connection.php");
include("functions/functions.php");
if(!isset($_SESSION['user_email'])){
  
  header("location: index.php"); 
}
else {
          $user = $_SESSION['user_email'];
          $get_user = "select * from users where username='$user'";
          $run_user = mysqli_query($con,$get_user);
          $row = mysqli_fetch_array($run_user);
          $user_id = $row['id'];
          $user_name = $row['name'];
          $user_email = $row['username'];
          $user_key = $row['key'];
          $user_req = $row['emp_requests'];
          $user_bosses = $row['manager'];
          $user_emps = $row['employees'];
?>

<!DOCTYPE HTML>
<html>
	<header>
		<!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="home.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="network.php">
            <i class="fa fa-dashboard"></i> <span>Network</span>
          </a>
        </li>
        </li>
        <li class="active treeview">
          <a href="tasks_sent_dash.php">
            <i class="fa fa-user"></i> <span>Manager</span>
          </a>
        </li><!--
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <small class="label pull-right bg-red">3</small>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <small class="label pull-right bg-yellow">12</small>
          </a>
        </li>
        <li><a href="#"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Urgent</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>New</span></a></li>-->
      </ul>
    </section>
    <!-- /.sidebar -->
	</header>
	<body>
		<div>
		<?php echo "Your employment key:<br><font size=20>$user_key</font>" ?>
		</div>
		<br>
		<div>
			<form action="" method="post">
				<table>
					<tr>
						<td><input type="text" name="empkey" placeholder = "Enter key here" required = "required"/></td>
					</tr>
					<br>
					<tr>
						<td><button name="enter_empkey">Enter Employment Request</button></td>
					</tr>
				</table>
			</form>
			<?php
			include("emp_req.php")
			?>
		</div>
		<div>
			<br>
			<form action="" method="post">
				Employment Requests:
					<br>
					<?php
					$user_req_array = explode(',',$user_req);
					$user_req_array_len = count($user_req_array);
					$button_pos = 0;
					$html_req_table = "";
					while($button_pos < $user_req_array_len && $user_req != NULL){
						$int_requester_id = (int)$user_req_array[$button_pos];
						$get_requester = "SELECT * FROM `users` WHERE `id`='$int_requester_id'";
          				$run_requester = mysqli_query($con,$get_requester);
          				$row3 = mysqli_fetch_array($run_requester);
          				$requester_id = $row3['id'];
          				$requester_name = $row3['name'];
						
						echo "<input type='checkbox' name='userCheck_req[]' value=$requester_id> $requester_name<br>";
						
						$button_pos++;
					}
					if($user_req == NULL){
						echo "No requests";
					}else{
						echo "<input type='submit' value='Submit'>";
					}
					?>
			</form>
			<?php
				include("insert_emp.php");
			?>
		</div>
		<br>
		<div>
			<table border="1" style="width:25%">
				<tr>
					<td><b>Employees</b></td>
				</tr>
				<?php
				$emp_array = explode(',',$user_emps);
				$bos_array = explode(',',$user_bosses);
				$countEmps = count($emp_array);
				$countBos = count($bos_array);
				for($i=0;$i < $countEmps || $i < $countBos;$i++){
					if($i<count($emp_array)){
						$currEmp = $emp_array[$i];
						$get_empl = "SELECT * FROM `users` WHERE `id`='$currEmp'";
						$run_empl = mysqli_query($con,$get_empl);
						$row5 = mysqli_fetch_array($run_empl);
						$currEmpName = $row5['name'];
						echo "<tr><td>$currEmpName</td>";
					}else{
						echo "<tr>";
					}
					if($i<count($bos_array)){
						$curBos = $bos_array[$i];
						$get_bos = "SELECT * FROM `users` WHERE `id`='$curBos'";
						$run_bos = mysqli_query($con,$get_bos);
						$row5 = mysqli_fetch_array($run_bos);
						$currBosName = $row5['name'];
					}else{
						;
					}
				}
				?>
			</table>
		</div>
	</body>
</html>
<?php } ?>