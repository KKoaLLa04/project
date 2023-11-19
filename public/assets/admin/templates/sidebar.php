 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/images/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">SONLINE</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/images/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">Duy Kiên (SUPER ADMIN)</a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                 <!-- 
                Tổng quan - begin
                 -->
                 <li class="nav-item">
                     <a href="<?php echo _WEB_HOST_ROOT_ADMIN ?>" class="nav-link <?php echo (activeMenuSidebar('')) || empty($_GET['module']) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-tachometer-alt"></i>
                         <p>
                             Tổng quan
                         </p>
                     </a>
                 </li>

                 <!-- 
                    Tổng quan - end
                 -->

                 <!-- 
                    Course - begin 
                -->
                 <li class="nav-item has-treeview <?php echo (activeMenuSidebar('course')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('course')) ? 'active' : false ?>">
                         <i class="nav-icon fab fa-servicestack"></i>
                         <p>
                             Quản lý khóa học
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=course&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="?module=course&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <!-- 
                    Course -end 
                -->

                <!-- 
                    Course_category - begin 
                -->
                <li class="nav-item has-treeview <?php echo (activeMenuSidebar('course_category')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('course_category')) ? 'active' : false ?>">
                         <i class="nav-icon fab fa-servicestack"></i>
                         <p>
                             Danh mục khóa học
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=course_category&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="?module=course_category&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <!-- 
                    Course_category -end 
                -->

                <!-- 
                    module - begin 
                -->
                <li class="nav-item has-treeview <?php echo (activeMenuSidebar('module')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('module')) ? 'active' : false ?>">
                         <i class="nav-icon fab fa-servicestack"></i>
                         <p>
                             Danh mục chương học
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=module&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="?module=module&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <!-- 
                    module -end 
                -->

                <!-- 
                    book_category - begin 
                -->
                <li class="nav-item has-treeview <?php echo (activeMenuSidebar('book_category')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('book_category')) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-book"></i>
                         <p>
                             Danh mục sách
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=book_category&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="?module=book_category&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <!-- 
                    book_category -end 
                -->

                <!-- 
                    book - begin 
                -->
                <li class="nav-item has-treeview <?php echo (activeMenuSidebar('book')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('book')) ? 'active' : false ?>">
                         <i class="nav-icon fab fa-servicestack"></i>
                         <p>
                             Quản lý sách
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=book&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="?module=book&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <!-- 
                    book -end 
                -->
                 <!-- 
                    contact - begin 
                -->
                <li class="nav-item has-treeview <?php echo (activeMenuSidebar('contact')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('contact')) ? 'active' : false ?>">
                         <i class="nav-icon fab fa-servicestack"></i>
                         <p>
                             Liên hệ
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=contact&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <!-- 
                    contact -end 
                -->
                               <!-- 
                    New_category - begin 
                -->
                <li class="nav-item has-treeview <?php echo (activeMenuSidebar('news_category')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('news_category')) ? 'active' : false ?>">
                         <i class="nav-icon fab fa-servicestack"></i>
                         <p>
                             Danh mục tin tức
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=news_category&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="?module=news_category&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <!-- 
                    News -end 
                -->
                <li class="nav-item has-treeview <?php echo (activeMenuSidebar('news')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('news')) ? 'active' : false ?>">
                         <i class="nav-icon fab fa-servicestack"></i>
                         <p>
                             Quản lý tin tức
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=news&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="?module=news&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <!-- 
                    News -end 
                -->

                 <!-- 
                    Teacher -end 
                -->
                <li class="nav-item has-treeview <?php echo (activeMenuSidebar('teacher')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('teacher')) ? 'active' : false ?>">
                         <i class="nav-icon fab fa-servicestack"></i>
                         <p>
                             Quản lý giảng viên
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=teacher&action=lists" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="?module=teacher&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <!-- 
                    Teacher -end 
                -->
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>

 <div class="content-wrapper">