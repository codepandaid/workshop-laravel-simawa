<div class="wrapper">
        <div class="sidebar">
                <h2>SIMAWA</h2>
            <ul >
                <li><a href="#"><i class="fas fa-columns"></i>  Dashboard</a></li>
                <li><a href="{{url('/table-mahasiswa')}}"><i class="fas fa-user-graduate"></i>  Data Mahasiswa</a></li>
                <li><a href="#"><i class="fas fa-handshake"></i>  Lembaga Mitra</a></li>
                <li><a href="#"><i class="fas fa-sign-out-alt"></i>  Keluar</a></li>
            </ul>
        </div>
    

    <!--Page Content-->
    <div class="main-content">
        <div class="content">
         @yield('content')
        </div>
        
    </div>

    

</div>    
    
    