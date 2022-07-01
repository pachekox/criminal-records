




			<div class="sidebar app-aside" id="sidebar">
				<div class="sidebar-container perfect-scrollbar">

					<nav>
						
						<!-- start: MAIN NAVIGATION MENU -->
						<div class="navbar-title">
							<span>Main Navigation</span>
						</div>
						<ul class="main-navigation-menu">
							<li>
								<a href="dashboard.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-home"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Dashboard </span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-user"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Police </span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu">
									<!-- <li>
										<a href="police-title.php">
											<span class="title"> Rank </span>
										</a>
									</li> -->
									<li>
										<a href="add-police.php">
											<span class="title"> Add Police</span>
										</a>
									</li>
									<li>
										<a href="Manage-police.php">
											<span class="title"> Manage Police </span>
										</a>
									</li>
									
								</ul>
								</li>

							<?php

								if ($_SESSION['privilege']!=0) {
									# code...
								
								echo'<li>
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-user"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Administrators </span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu">
									
									<li>
										<a href="manage-admin.php">
											<span class="title"> Manage Admins </span>
										</a>
										<a href="add-admin.php">
											<span class="title"> Add Admins </span>
										</a>
									</li>
									
								</ul>
								</li>';
							}

								?>
								<li>
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-user"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Criminal </span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu">
									
									<li>
										<a href="manage-criminals.php">
											<span class="title"> Manage Criminal </span>
										</a>
									</li>
									<li>
										<a href="add-criminal.php">
											<span class="title"> Add Criminal</span>
										</a>
									</li>
									
								</ul>
								</li>	

<!-- <li>
								<a href="appointment-history.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-file"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Appointment History </span>
										</div>
									</div>
								</a>
							</li> -->



							<!-- <li>
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-files"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Conatctus Queries </span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu">
									
									<li>
										<a href="unread-queries.php">
											<span class="title"> Unread Query </span>
										</a>
									</li>

									<li>
										<a href="read-query.php">
											<span class="title"> Read Query </span>
										</a>
									</li>
									
								</ul>
								</li> -->



	<li>
								<!-- <a href="doctor-logs.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-list"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Doctor Session Logs </span>
										</div>
									</div>
								</a>
							</li>		 -->



							<!-- <li>
								<a href="user-logs.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-list"></i>
										</div>
										<div class="item-inner">
											<span class="title"> User Session Logs </span>
										</div>
									</div>
								</a>
							</li>						
						<li> -->
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-files"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Reports </span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu">
									
									<li>
										<a href="between-dates-reports.php">
											<span class="title">Criminal Records reports </span>
										</a>
									</li>

									
									
								</ul>
								<li>
								<a href="criminal-search.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-search"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Criminal Search </span>
										</div>
									</div>
								</a>
							</li>
								</li>

						</ul>
						<!-- end: CORE FEATURES -->
						
					</nav>
					</div>
			</div>