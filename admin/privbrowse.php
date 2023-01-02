<?php
    class MyDB extends SQLite3
    {
      function __construct()
      {
         $this->open('../bin/database.db');
      }
   }
   $db = new MyDB();
   $sql = "select * from regist";
   $res = $db->query($sql);


    // $db->close();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>住户登记系统后台</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="请输入要查找的姓名——" class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>住户信息登记系统 </span><strong>&nbsp; 后台管理</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                
                <!-- Logout    -->
                <li class="nav-item"><a href="../" class="nav-link logout"> <span class="d-none d-sm-inline">退出</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/default.png" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">香榭丽花园</h1>
              <p>历山路233号</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li><a href="index.php"> <i class="icon-home"></i>概览 </a></li>
                    <li class="active"><a href="#"> <i class="icon-grid"></i>用户隐私信息查看 </a></li>

          </ul>
		<span class="heading">Extras</span>
			
          <ul class="list-unstyled">
            <li><a href="index.php?tab=phpinfo"> <i class="icon-padnote"></i>服务器信息 </a></li>
                    <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>密钥相关 </a>
                      <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="keyrelated.php?tab=keygen">SM2密钥对生成</a></li>
                        <li><a href="keyrelated.php?tab=keytest">SM2加解密测试</a></li>
                        <li><a href="keyrelated.php?tab=keybrowse">查看当前使用的公钥</a></li>
                      </ul>
                    </li>
			  
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          
			
			
<!--			从这里开始-->
			<header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">用户隐私信息查看</h2>
            </div>
          </header>
			
			
			<div style="margin: 50px;background-color: white;text-align: center;line-height: 60px;box-shadow: 1px 1px 1px 1px rgba(0,0,0,.1);padding: 10px;">
				<div style="font-family: Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', 'serif';font-weight: 600;">请输入查看密文的私钥</div>
				
				<form action="" method="POST">
					<input type="text" placeholder="PrivateKey" class="form-control" style="width: 80%;display: inline-block;" name="key" autocomplete="off"><br><input type="submit" value="执行" class="btn btn-primary">
				</form>
				
			</div>
			
			
			<div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>隐藏</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">已登记用户信息列表</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped table-hover">
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
								<th>车牌号</th>
								<th>电话</th>
								<th>身份证号</th>
								<th>app密码</th>
                            </tr>
                          </thead>
                          <tbody>
							  
							  
                          <?php
                              while($row = $res->fetchArray(SQLITE3_ASSOC)){
                                echo "<tr>
                                <th scope=\"row\">".$row['id']."</th>
                                <td>".$row['name']."</td>
                                <td>".$row['sex']."</td>
                                <td>".$row['settletime']."</td>
                                <td>".$row['appname']."</td>
                                <td>".$row['building']."</td>
                                <td>".$row['section']."</td>
                                <td>".$row['room']."</td>";
                                if(isset($_POST['key'])){
                                  
                                  $platenum = mb_convert_encoding(exec("..\\bin\\SM2.exe decrypt ".$row['platenum']." ".$_POST['key']), 'UTF-8', 'GBK');
                                  //echo $platenum;
                                  if(strlen($platenum)<10&&strlen($platenum)!=0){
                                    $tel = mb_convert_encoding(exec("..\\bin\\SM2.exe decrypt ".$row['tel']." ".$_POST['key']), 'UTF-8', 'GBK');
                                    $idcnum = mb_convert_encoding(exec("..\\bin\\SM2.exe decrypt ".$row['idcnum']." ".$_POST['key']), 'UTF-8', 'GBK');
                                    $apppw = mb_convert_encoding(exec("..\\bin\\SM2.exe decrypt ".$row['apppw']." ".$_POST['key']), 'UTF-8', 'GBK');
                                    echo "<td>".$platenum."</td>
                                    <td>".$tel."</td>
                                    <td>".$idcnum."</td>
                                    <td>".$apppw."</td></tr>";
                                  }else{
                                      echo "<td>解密失败</td>
                                    <td>解密失败</td>
                                    <td>解密失败</td>
                                    <td>解密失败</td></tr>";
                                  }
                                }else{
                                  echo "<td>未输入密钥</td>
                                  <td>未输入密钥</td>
                                  <td>未输入密钥</td>
                                  <td>未输入密钥</td></tr>";

                                }
                              }

                          ?>
							  
                            
                            
							  
							  
							  
                           
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
			
			
         
          
          <!-- Projects Section-->
          <section class="projects no-padding-top">
            <div class="container-fluid">
  
              
            </div>
          </section>

			
			
			
			
<!--			从这里结束-->
			
			
			
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>- 2021 - 王润东 - 基于国密的数据库敏感数据的加密 - 大学生创新训练项目 -</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p></p>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>