<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Hello Medicine</h3>
    </div>
 
    <ul class="nav flex-column">
        <p style="font-size: 14px">Welcome, admin <?php echo e(auth()->user()->username); ?></p>
        <li class="nav-item">
        <a class="nav-link <?php echo e(Request::is('dashboard') ? 'active' : ''); ?>" style="color: aliceblue" href="/dashboard"> <span><i class="fa-solid fa-house-chimney"></i></span> Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('dashboard/rumahsakit') ? 'active' : ''); ?>" style="color: aliceblue" href="/dashboard/rumahsakit"> <span><i class="fa-solid fa-newspaper"></i></span> Data Rumah Sakit</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('/dashboard/users') ? 'active' : ''); ?>" style="color: aliceblue" href="/dashboard/users"> <span><i class="fa-solid fa-users"></i></span> User</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('/dashboard/apotek') ? 'active' : ''); ?>" style="color: aliceblue" href="/dashboard/apotek"> <span><i class="fa-solid fa-capsules"></i></span> Apotek</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('/dashboard/dokter') ? 'active' : ''); ?>" style="color: aliceblue" href="/dashboard/dokter"> <span><i class="fa-solid fa-user-doctor"></i></span> Dokter</a>
        </li>
    </ul>
</nav><?php /**PATH D:\TELU\Semester 6\RPL\web-hellmed\resources\views/dashboardAdmin/layouts/sidebar.blade.php ENDPATH**/ ?>