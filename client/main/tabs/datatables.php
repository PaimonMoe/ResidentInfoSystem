<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">已登记住户列表</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">管理前台</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">数据库</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">List of registered households</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="multi-filter-select" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>#</th>
													<th>姓名</th>
													<th>性别</th>
													<th>入住时间</th>
													<th>app用户名</th>
													<th>楼号</th>
													<th>单元</th>
													<th>房间</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>#</th>
													<th>姓名</th>
													<th>性别</th>
													<th>入住时间</th>
													<th>app用户名</th>
													<th>楼号</th>
													<th>单元</th>
													<th>房间</th>
												</tr>
											</tfoot>
											<tbody>
												<?php
													while($row = $res->fetchArray(SQLITE3_ASSOC)){
														echo "<tr>";
														$i=0;
														foreach($row as $v){
															if($i==8)
																break;
															echo '<th>'.$v.'</th>';
															$i++;
														}
															
														echo "</tr>";
													}
													
												?>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						
					</div>
				</div>
			</div>
			
	