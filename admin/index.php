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


    //$db->close();

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
          <!-- <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="请输入要查找的姓名——" class="form-control">
            </form>
          </div> -->
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="#" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>住户信息登记系统 </span><strong>&nbsp; 后台管理</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>RIS</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                
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
                    <li class=<?php
              
              if(@$_GET['tab']!='phpinfo'){
                echo '"active"';
              }
              
              ?>><a href="index.php"> <i class="icon-home"></i>概览 </a></li>
                    <li ><a href="privbrowse.php"> <i class="icon-grid"></i>用户隐私信息查看 </a></li>
                    <li ><a href="../client/main/?tab=1"> <i class="icon-home"></i>转到前台 </a></li>

          </ul>
		<span class="heading">Extras</span>
			
          <ul class="list-unstyled">
            <li class=<?php
              
              if(@$_GET['tab']=='phpinfo'){
                echo '"active"';
              }
              
              ?>><a href="?tab=phpinfo"> <i class="icon-padnote"></i>服务器信息 </a></li>
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
              <h2 class="no-margin-bottom"><?php
              
              if(@$_GET['tab']=="phpinfo"){
                echo "服务器信息";
              }else{
                echo "概览";
              }
              
              ?></h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->

         

          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>社区总<br>住户</span>

                    </div>
                    <div class="number"><strong><?php
                    
                      $ii=0;
                      $t = $res;
                      while($row = $t->fetchArray(SQLITE3_ASSOC))
                        $ii++;

                      echo $ii;

                    
                    ?></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>今日新<br>登记</span>

                    </div>
                    <div class="number"><strong>

                        <?php
                          $i=0;
                          $t = $res;
                          while($row=$t->fetchArray(SQLITE3_ASSOC))
                            if($row['settletime']==date("Ymd"))
                              $i++;

                            echo $i;
                        ?>
                    </strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>剩余容<br>量</span>
                      
                    </div>
                    <div class="number"><strong>



                    <?php
                          echo 5000-$ii;

                    ?>
                    </strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>社区总<br>容量</span>
                      
                    </div>
                    <div class="number"><strong>5000</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </section>

        

          <section style="text-align:center;" >
          <?php
              
              if(@$_GET['tab']=="phpinfo"){
                echo '<iframe src="src/phpinfo.php" frameborder="0" scrolling="no" width="80%" height="23000px"></iframe>';
              }
              
              ?>
          </section>

          
<!--			从这里结束-->
			
			
			
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>- 2021 - Paimon - 基于国密的数据库敏感数据的加密 - 大学生创新训练项目 -</p>
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