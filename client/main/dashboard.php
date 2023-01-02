
<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div style="position: relative;">
								<img src="..\assets\img\default.png" alt="" style="width: 150px;" class="rounded-circle">
								<div style="display: inline-block;position: relative;left: 40px;top: 30px;">
									<h2 class="text-white pb-2 fw-bold">概览 Dashboard</h2>
									<h5 class="text-white op-7 mb-2">香榭丽花园——历山路233号</h5>
								</div>
							</div>
							<div class="ml-md-auto py-2 py-md-0">
								<a href="../../admin/index.php" class="btn btn-white btn-border btn-round mr-2">后台管理</a>
								<a href="?tab=2" class="btn btn-secondary btn-round">新增住户</a>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row row-card-no-pd mt--2">
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-chart-pie text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">剩余容量</p>
												<h4 class="card-title"><?php
                                                    $ii=0;
                                                    $t = $res;
                                                    while($row = $t->fetchArray(SQLITE3_ASSOC))
                                                    $ii++;
                                                    echo 5000 - $ii;
                                                    
                                                ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-users text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">社区总住户</p>
												<h4 class="card-title"><?php
                    
                                                    

                                                    echo $ii;

                                                
                                                ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-add-user text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">今日新登记</p>
												<h4 class="card-title"><?php
                                                $i=0;
                                                $t = $res;
                                                while($row=$t->fetchArray(SQLITE3_ASSOC))
                                                    if($row['settletime']==date("Ymd"))
                                                    $i++;

                                                    echo $i;
                                                ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-box text-primary"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">社区总容量</p>
												<h4 class="card-title">5000</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					
					
					
				</div>
			</div>