<aside class="sidebar-wrapper" data-simplebar="true">
   <div class="sidebar-header">
     <div >
       <img src="{{ url('public') }}\app\images\sidebar.png" class="logo-icon " alt="logo icon">
     </div>
     <div>
       <p class="logo-text" style="font-size: 15px">SIAKAD</p>
     </div>
     <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
     </div>
   </div>

 
   <ul class="metismenu" id="menu">
     <li class="{{checkRouteActive('admin/beranda')}}">
       <a href="{{ url('admin/beranda') }}">
         <div class="parent-icon"><i class="fadeIn animated bx bx-unite"></i>
         </div>
         <div class="menu-title">Beranda</div>
       </a>
     </li>
     <li class="{{checkRouteActive('admin/mahasiswa')}}{{checkRouteActive('admin/mahasiswa/create')}}">
       <a href="{{ url('admin/mahasiswa') }}">
         <div class="parent-icon"><i class="fadeIn animated bx bx-unite"></i>
         </div>
         <div class="menu-title">Mahasiswa</div>
       </a>
     </li>

   </ul>
  



   </ul>
  
 </aside>