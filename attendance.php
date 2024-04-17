<!DOCTYPE html>
<html lang="en">


<!-- attendance23:24-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index-2.php" class="logo">
					<img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Preclinic</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
                        <span>Admin</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.php">My Profile</a>
						<a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
						<a class="dropdown-item" href="settings.php">Settings</a>
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.php">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                    <a class="dropdown-item" href="settings.php">Settings</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="index-2.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						<li>
                            <a href="doctors.php"><i class="fa fa-user-md"></i> <span>Doctors</span></a>
                        </li>
                        <li>
                            <a href="patients.php"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                        </li>
                        <li>
                            <a href="appointments.php"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
                        <li>
                            <a href="schedule.php"><i class="fa fa-calendar-check-o"></i> <span>Doctor Schedule</span></a>
                        </li>
                        <li>
                            <a href="departments.php"><i class="fa fa-hospital-o"></i> <span>Departments</span></a>
                        </li>
						<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="employees.php">Employees List</a></li>
								<li><a href="leaves.php">Leaves</a></li>
								<li><a href="holidays.php">Holidays</a></li>
								<li><a class="active" href="attendance.php">Attendance</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-money"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="invoices.php">Invoices</a></li>
								<li><a href="payments.php">Payments</a></li>
								<li><a href="expenses.php">Expenses</a></li>
								<li><a href="taxes.php">Taxes</a></li>
								<li><a href="provident-fund.php">Provident Fund</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="salary.php"> Employee Salary </a></li>
								<li><a href="salary-view.php"> Payslip </a></li>
							</ul>
						</li>
                        <li>
                            <a href="chat.php"><i class="fa fa-comments"></i> <span>Chat</span> <span class="badge badge-pill bg-primary float-right">5</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-video-camera camera"></i> <span> Calls</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="voice-call.php">Voice Call</a></li>
                                <li><a href="video-call.php">Video Call</a></li>
                                <li><a href="incoming-call.php">Incoming Call</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-envelope"></i> <span> Email</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="compose.php">Compose Mail</a></li>
                                <li><a href="inbox.php">Inbox</a></li>
                                <li><a href="mail-view.php">Mail View</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-commenting-o"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="blog-details.php">Blog View</a></li>
                                <li><a href="add-blog.php">Add Blog</a></li>
                                <li><a href="edit-blog.php">Edit Blog</a></li>
                            </ul>
                        </li>
						<li>
							<a href="assets.php"><i class="fa fa-cube"></i> <span>Assets</span></a>
						</li>
						<li>
							<a href="activities.php"><i class="fa fa-bell-o"></i> <span>Activities</span></a>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-flag-o"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="expense-reports.php"> Expense Report </a></li>
								<li><a href="invoice-reports.php"> Invoice Report </a></li>
							</ul>
						</li>
                        <li>
                            <a href="settings.php"><i class="fa fa-cog"></i> <span>Settings</span></a>
                        </li>
                        <li class="menu-title">UI Elements</li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-laptop"></i> <span> Components</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="uikit.php">UI Kit</a></li>
                                <li><a href="typography.php">Typography</a></li>
                                <li><a href="tabs.php">Tabs</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-edit"></i> <span> Forms</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="form-basic-inputs.php">Basic Inputs</a></li>
                                <li><a href="form-input-groups.php">Input Groups</a></li>
                                <li><a href="form-horizontal.php">Horizontal Form</a></li>
                                <li><a href="form-vertical.php">Vertical Form</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-table"></i> <span> Tables</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="tables-basic.php">Basic Tables</a></li>
                                <li><a href="tables-datatables.php">Data Table</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.php"><i class="fa fa-calendar"></i> <span>Calendar</span></a>
                        </li>
                        <li class="menu-title">Extras</li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-columns"></i> <span>Pages</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="login.php"> Login </a></li>
                                <li><a href="register.php"> Register </a></li>
                                <li><a href="forgot-password.php"> Forgot Password </a></li>
                                <li><a href="change-password2.php"> Change Password </a></li>
                                <li><a href="lock-screen.php"> Lock Screen </a></li>
                                <li><a href="profile.php"> Profile </a></li>
                                <li><a href="gallery.php"> Gallery </a></li>
                                <li><a href="error-404.php">404 Error </a></li>
                                <li><a href="error-500.php">500 Error </a></li>
                                <li><a href="blank-page.php"> Blank Page </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fa fa-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Level 1</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                            <ul style="display: none;">
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><span>Level 1</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Attendance Sheet</h4>
                    </div>
                </div>
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Employee Name</label>
                            <input type="text" class="form-control floating">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Select Month</label>
                            <select class="select floating">
                                <option>-</option>
                                <option>Jan</option>
                                <option>Feb</option>
                                <option>Mar</option>
                                <option>Apr</option>
                                <option>May</option>
                                <option>Jun</option>
                                <option>Jul</option>
                                <option>Aug</option>
                                <option>Sep</option>
                                <option>Oct</option>
                                <option>Nov</option>
                                <option>Dec</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus select-focus">
                            <label class="focus-label">Select Year</label>
                            <select class="select floating">
                                <option>-</option>
                                <option>2017</option>
                                <option>2016</option>
                                <option>2015</option>
                                <option>2014</option>
                                <option>2013</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="btn btn-success btn-block"> Search </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
						<div class="table-responsive">
                            <table class="table table-striped custom-table mb-0">
                                <thead>
                                    <tr>
                                        <th>Employee</th>
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                        <th>6</th>
                                        <th>7</th>
                                        <th>8</th>
                                        <th>9</th>
                                        <th>10</th>
                                        <th>11</th>
                                        <th>12</th>
                                        <th>13</th>
                                        <th>14</th>
                                        <th>15</th>
                                        <th>16</th>
                                        <th>17</th>
                                        <th>18</th>
                                        <th>19</th>
                                        <th>20</th>
                                        <th>22</th>
                                        <th>23</th>
                                        <th>24</th>
                                        <th>25</th>
                                        <th>26</th>
                                        <th>27</th>
                                        <th>28</th>
                                        <th>29</th>
                                        <th>30</th>
                                        <th>31</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Albina Simonis</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td>
                                            <div class="half-day"><span class="first-off"><i class="fa fa-check text-success"></i></span> <span class="first-off"><i class="fa fa-close text-danger"></i></span></div>
                                        </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td>
                                            <div class="half-day"><span class="first-off"><i class="fa fa-close text-danger"></i></span> <span class="first-off"><i class="fa fa-check text-success"></i></span></div>
                                        </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Cristina Groves</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Haylie Feeney</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Mary Mericle</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Zoe Butler</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Cristina Groves</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Marie Wells</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Henry Daniels</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Mark Hunter</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Michael Sullivan</td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-close text-danger"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                        <td><i class="fa fa-check text-success"></i> </td>
                                    </tr>
                                </tbody>
                            </table>
						</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- attendance23:24-->
</html>