 <!-- Main Sidebar Container -->


 <!-- Sidebar -->
 <div class="sidebar">
   <!-- Sidebar user panel (optional) -->
   <div class="user-panel mt-3 pb-3 mb-3 d-flex">
     <div class="image">
       <img src="{{asset('Gambar/profil.jpg')}}" class="img-circle elevation-2" alt="User Image">
     </div>
     <div class="info">
       <a href="#" class="d-block">{{auth()->user()->name}}</a>
     </div>
   </div>
   <!-- Sidebar Menu -->
   <nav class="mt-4">
     <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
       <li class="nav-item has-treeview">
         <a href="beranda" class="nav-link">
           <i class="nav-icon fas fa-home"></i>
           <p>
             Dashboard
           </p>
         </a>
       </li>
       @if (auth()->user()->level=="admin")
       <li class="nav-item has-treeview">
         <a href="inventaris" class="nav-link">
           <i class="nav-icon fas fa-table"></i>
           <p>
             Barang Inventaris
           </p>
         </a>
       </li>

       <li class="nav-item has-treeview">
         <a href="ajuan" class="nav-link">
           <i class="nav-icon fas fa-table"></i>
           <p>
             Ajuan Barang
           </p>
         </a>
       </li>
       @endif
       @if(auth()->user()->level=="user")
       <li class="nav-item has-treeview">
         <a href="/barang" class="nav-link">
           <i class="nav-icon fas fa-table"></i>
           <p>
             Barang Inventaris
           </p>
         </a>
       </li>
       <li class="nav-item has-treeview">
         <a href="pengajuan" class="nav-link">
           <i class="nav-icon fas fa-th-list"></i>
           <p>
             Pengajuan Peminjaman
           </p>
         </a>
       </li>
       <li class="nav-item has-treeview">
         <a href="/pinjam" class="nav-link">
           <i class="nav-icon fas fa-table"></i>
           <p>
             Peminjaman
           </p>
         </a>
       </li>
       @endif
       <li class="nav-item has-treeview">
         <a href="{{route('logout')}}" class="nav-link">
           <i class="nav-icon fas fa-sign-out-alt"></i>
           <p>
             Logout
           </p>
         </a>
       </li>
 </div>