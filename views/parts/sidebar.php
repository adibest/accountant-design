<?php
  $pagenow    = dirname($_SERVER['PHP_SELF']);
?>
<div class="sidebar-content">
    <div class="nav-container">
      <nav id="main-menu-navigation" class="navigation-main">
          <div class="nav-lavel">Navigation</div>
          <div class="nav-item <?php if($pagenow == "/ProjectAkuntan") {echo "active";} else {echo "";}?>">
              <a href="http://localhost/ProjectAkuntan/index.php"><i class="ik ik-home"></i><span>Dasbor</span></a>
          </div>
          <div class="nav-item <?php if($pagenow == "/ProjectAkuntan/views/pages/laporan") {echo "active";} else {echo "";}?>">
              <a href="http://localhost/ProjectAkuntan/views/pages/laporan"><i class="ik ik-trending-up"></i><span>Laporan</span></a>
          </div>
          <div class="nav-lavel">Master Data</div>
          <div class="nav-item <?php if($pagenow == "/ProjectAkuntan/views/pages/akun") {echo "active";} else {echo "";}?>">
              <a href="http://localhost/ProjectAkuntan/views/pages/akun"><i class="ik ik-menu"></i><span>Daftar Akun</span></a>
          </div>
          <div class="nav-item has-sub <?php if($pagenow === "/ProjectAkuntan/views/pages/customer" || $pagenow === "/ProjectAkuntan/views/pages/supplier") {echo "active open";} else {echo "";}?>">
              <a href="#"><i class="ik ik-phone"></i><span>Kontak</span></a>
              <div class="submenu-content">
                  <a href="http://localhost/ProjectAkuntan/views/pages/customer" class="menu-item <?php if($pagenow == "/ProjectAkuntan/views/pages/customer") {echo "active";} else {echo "";}?>">Customer</a>
                  <a href="http://localhost/ProjectAkuntan/views/pages/supplier" class="menu-item <?php if($pagenow == "/ProjectAkuntan/views/pages/supplier") {echo "active";} else {echo "";}?>">Supplier</a>
              </div>
          </div>
          <div class="nav-item <?php if($pagenow == "/ProjectAkuntan/views/pages/satuan") {echo "active";} else {echo "";}?>">
              <a href="http://localhost/ProjectAkuntan/views/pages/satuan"><i class="ik ik-compass"></i><span>Satuan</span></a>
          </div>
          <div class="nav-lavel">Transaksi</div>
          <div class="nav-item has-sub <?php if($pagenow === "/ProjectAkuntan/views/pages/crj" || $pagenow === "/ProjectAkuntan/views/pages/sales_journal") {echo "active open";} else {echo "";}?>">
              <a href="#"><i class="ik ik-package"></i><span>Penjualan</span></a>
              <div class="submenu-content">
                  <a href="http://localhost/ProjectAkuntan/views/pages/crj" class="menu-item <?php if($pagenow == "/ProjectAkuntan/views/pages/crj") {echo "active";} else {echo "";}?>">Cash Receipt Journal</a>
                  <a href="http://localhost/ProjectAkuntan/views/pages/sales_journal" class="menu-item <?php if($pagenow == "/ProjectAkuntan/views/pages/sales_journal") {echo "active";} else {echo "";}?>">Sales Journal</a>
              </div>
          </div>
          <div class="nav-item has-sub <?php if($pagenow === "/ProjectAkuntan/views/pages/cpj" || $pagenow === "/ProjectAkuntan/views/pages/payments_journal") {echo "active open";} else {echo "";}?>">
              <a href="#"><i class="ik ik-shopping-cart"></i><span>Pembelian</span></a>
              <div class="submenu-content">
                  <a href="http://localhost/ProjectAkuntan/views/pages/cpj" class="menu-item <?php if($pagenow == "/ProjectAkuntan/views/pages/cpj") {echo "active";} else {echo "";}?>">Cash Payment Journal</a>
                  <a href="http://localhost/ProjectAkuntan/views/pages/payments_journal" class="menu-item <?php if($pagenow == "/ProjectAkuntan/views/pages/payments_journal") {echo "active";} else {echo "";}?>">Payments Journal</a>
              </div>
          </div>
          <div class="nav-item <?php if($pagenow == "/ProjectAkuntan/views/pages/jurnal_umum") {echo "active";} else {echo "";}?>">
              <a href="http://localhost/ProjectAkuntan/views/pages/jurnal_umum"><i class="ik ik-book"></i><span>Jurnal Umum</span></a>
          </div>
          <div class="nav-item <?php if($pagenow == "/ProjectAkuntan/views/pages/kas_kecil") {echo "active";} else {echo "";}?>">
              <a href="http://localhost/ProjectAkuntan/views/pages/kas_kecil"><i class="ik ik-briefcase"></i><span>Kas Kecil</span></a>
          </div>
          <div class="nav-item <?php if($pagenow == "/ProjectAkuntan/views/pages/jurnal_penyesuaian") {echo "active";} else {echo "";}?>">
              <a href="http://localhost/ProjectAkuntan/views/pages/jurnal_penyesuaian"><i class="ik ik-activity"></i><span>Jurnal Penyesuaian</span></a>
          </div>
          <div class="nav-lavel">Inventory</div>
          <div class="nav-item <?php if($pagenow == "/ProjectAkuntan/views/pages/item") {echo "active";} else {echo "";}?>">
              <a href="http://localhost/ProjectAkuntan/views/pages/item"><i class="ik ik-box"></i><span>Item</span></a>
          </div>
          <div class="nav-item <?php if($pagenow == "/ProjectAkuntan/views/pages/penyesuaian_barang") {echo "active";} else {echo "";}?>">
              <a href="http://localhost/ProjectAkuntan/views/pages/penyesuaian_barang"><i class="ik ik-layout"></i><span>Penyesuaian Barang</span></a>
          </div>
          <div class="nav-item <?php if($pagenow == "/ProjectAkuntan/views/pages/stock_opname") {echo "active";} else {echo "";}?>">
              <a href="http://localhost/ProjectAkuntan/views/pages/stock_opname"><i class="ik ik-truck"></i><span>Stock Opname</span></a>
          </div>
      </nav>
    </div>
</div>
