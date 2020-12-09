
   <body>
      <!-- topbar starts -->
      <div class="navbar navbar-default" role="navigation">
         <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="<?= base_url() ;?>/_assets/images/icons/djp.png" class="hidden-xs"/>
            <span> KPP 304</span></a>
            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
               <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
               <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
               <span class="caret"></span>
               </button>
               <ul class="dropdown-menu">
                  <li><a href="#">Profile</a></li>
                  <li class="divider"></li>
                  <li><a href="login.html">Logout</a></li>
               </ul>
            </div>
            <!-- user dropdown ends -->
            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
               <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                  <i class="glyphicon glyphicon-tint"></i><span
                     class="hidden-sm hidden-xs"> Change Theme / Skin</span>
                  <span class="caret"></span>
               </button>
               <ul class="dropdown-menu" id="themes">
                  <li><a data-value="classic" href="#"><i class="whitespace"></i> Classic</a></li>
                  <li><a data-value="cerulean" href="#"><i class="whitespace"></i> Cerulean</a></li>
                  <li><a data-value="cyborg" href="#"><i class="whitespace"></i> Cyborg</a></li>
                  <li><a data-value="simplex" href="#"><i class="whitespace"></i> Simplex</a></li>
                  <li><a data-value="darkly" href="#"><i class="whitespace"></i> Darkly</a></li>
                  <li><a data-value="lumen" href="#"><i class="whitespace"></i> Lumen</a></li>
                  <li><a data-value="slate" href="#"><i class="whitespace"></i> Slate</a></li>
                  <li><a data-value="spacelab" href="#"><i class="whitespace"></i> Spacelab</a></li>
                  <li><a data-value="united" href="#"><i class="whitespace"></i> United</a></li>
               </ul>
            </div>
            <!-- theme selector ends -->
            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
               <li><a href="<?= base_url() ;?>"><i class="glyphicon glyphicon-globe"></i> Kembali</a></li>

            </ul>
         </div>
      </div>
      <!-- topbar ends -->
      <div class="ch-container">
         <div class="row">
            <!-- left menu starts -->
            <div class="col-sm-2 col-lg-2">
               <div class="sidebar-nav">
                  <div class="nav-canvas">
                     <div class="nav-sm nav nav-stacked">
                     </div>
                     <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="index.php"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                    
                        <li class="nav-header hidden-md">Sample Section</li>
                        <li><a class="ajax-link" href="<?= base_url('data/insentifCovid.php') ?>"><i
                           class="glyphicon glyphicon-align-justify"></i><span> Insentif COVID</span></a></li>
                        <!-- <li><a class="ajax-link" href="#"><i
                           class="glyphicon glyphicon-align-justify"></i><span> Data Pihak Ketiga</span></a></li> -->
                     </ul>
                  </div>
               </div>
            </div>
            <!--/span-->
            <!-- left menu ends -->
