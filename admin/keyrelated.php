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
                    <li ><a href="privbrowse.php"> <i class="icon-grid"></i>用户隐私信息查看 </a></li>
<!--                    <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li>-->
                    
<!--                    <li><a href="login.html"> <i class="icon-interface-windows"></i>Login page </a></li>-->
          </ul>
		<span class="heading">Extras</span>
			
          <ul class="list-unstyled">
            <li><a href="index.php?tab=phpinfo"> <i class="icon-padnote"></i>服务器信息 </a></li>
                    <li class="active"><a href="#Dropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>密钥相关 </a>
                      <ul id="Dropdown" class="collapse list-unstyled ">
                        <li><a href="?tab=keygen">SM2密钥对生成</a></li>
                        <li><a href="?tab=keytest">SM2加解密测试</a></li>
                        <li><a href="?tab=keybrowse">查看当前使用的公钥</a></li>
                      </ul>
                    </li>
			  
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          
			
			
<!--			从这里开始-->

			  <?php

            if($_GET['tab']=="keygen"){
                exec("..\\bin\\SM2.exe keygen",$r);
                echo '<div style="margin: 50px;background-color: white;text-align: center;line-height: 60px;box-shadow: 1px 1px 1px 1px rgba(0,0,0,.1);padding: 10px;">
			
                <div style="font-weight: 600;">SM2密钥对生成</div>
                <div style="word-wrap: break-word;margin: 40px;text-align: left;">
                  '.$r[0].'<br>'.$r[1].'
                </div>
              </div>';
            }else if($_GET['tab']=="keytest"){
              if(@$_POST['action']=="加密"){
                    $str=exec("..\\bin\\SM2.exe encrypt ".$_POST['param1']." ".$_POST['param2']);
              }else if(@$_POST['action']=="解密"){
                    $str=mb_convert_encoding(exec("..\\bin\\SM2.exe decrypt ".$_POST['param1']." ".$_POST['param2']),'UTF8','GBK');
              }else{
                $str="";
              }
              echo '<div style="margin: 50px;background-color: white;text-align: center;line-height: 60px;box-shadow: 1px 1px 1px 1px rgba(0,0,0,.1);padding: 10px;">
              <div style="font-family: Baskerville, \'Palatino Linotype\', Palatino, \'Century Schoolbook L\', \'Times New Roman\', \'serif\';font-weight: 600;">SM2加解密测试</div>
              <div>
                tips: 明文使用公钥加密，密文使用私钥解密。
              </div>
              

              <form method="POST">
              <input name="param1" type="text" placeholder="明/密文" class="form-control" style="width: 80%;display: inline-block;"><br><input name="param2" type="text" placeholder="公/私钥" class="form-control" style="width: 80%;display: inline-block;"><br>
              
              <input name="action" type="submit" value="加密" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="action" type="submit" value="解密" class="btn btn-primary">
              </from>
              <br>
              
              <div style="font-weight: 600;">
                <hr>
                结果：
              </div>
              <div style="text-align: left;padding: 10px 100px;word-wrap:break-word;">
                  '.$str.'
              </div>
            </div>
        
            
            ';
            }else if($_GET['tab']=="keybrowse"){
              $handle = fopen('./data/PublicKey.txt', 'r');
              $content = '';
              while(!feof($handle)){
                  $content .= fread($handle, 1);
              }
              fclose($handle);
              echo '<div style="margin: 50px;background-color: white;text-align: center;line-height: 60px;box-shadow: 1px 1px 1px 1px rgba(0,0,0,.1);padding: 10px;">
			
              <div style="font-weight: 600;">系统当前使用的SM2加密公钥为</div>
              <div style="word-wrap: break-word;margin: 40px;text-align: left;">
                '.$content.'
              </div>
            </div>
            ';
            }
        ?>
			
			
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