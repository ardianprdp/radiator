    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light">Radiator 304</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url() ;?>/_assets/images/login.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block" style="font-size: 15px;"><?= $_SESSION['nama']; ?></a>
            <i><a href="#" class="d-block" style="font-size: 12px;"><?= $_SESSION['seksi']; ?></a></i>

          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="<?= base_url('home.php') ?>" class="nav-link active">
                <i class="nav-icon fas fa-home active"></i>
                <p>
                  Beranda
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="<?= base_url('data/index.php') ?>" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Portal Data
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="<?= base_url('modul/aduan/aduan.php') ?>" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Aduan
                </p>
              </a>
            </li>
            <!-- <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Monitoring
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="?mon=pengunjung" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pengunjung</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>One Day One Information</p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Level 2
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Level 3</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Level 3</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Level 3</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li> -->
            <!-- <li class="nav-item has-treeview">
              <a href="<?= base_url('penagihan/index.php') ?>" class="nav-link">
                <i class="nav-icon fas fa-file-archive"></i>
                <p>
                  Arsip
                </p>
              </a>
            </li> -->

            <li class="nav-header">Other</li>
              <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p class="text">About</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="log.php" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Log Update</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>#</p>
                </a>
              </li> -->
            

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>