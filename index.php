<?php require ('head.php'); ?>
<body class="font-mali">
    <nav class="navbar navbar-dark bg-info fixed-top">
    <div class="container-fluid">
        
            
                <a class="navbar-brand text-white" href="#">
                   <h4>Comprehensive Geriatric Assessment</h4> 
                </a>
            
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
           
            
        
        
        
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">มิติของการประเมินสุขภาพ</h5>
            <button type="button" class="btn-close text-reset text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-info">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 text-success">
                
                
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-fw fa-home"></i>
                        <span>หน้าหลัก (Home)</span>
                    </a>
                </li>
                <hr class="my-0 bg-light">
                <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Physical" aria-expanded="true"
                aria-controls="Physical">
                <i class="fas fa-fw fas fa-user-edit"></i>
                <span>ด้านร่างกาย<br>(Physical Assessment)</span></a>
            </a>
            <div id="Physical" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="tugt.php">Time Up and Go Test (TUGT)</a>
                    <!-- <a class="collapse-item" href="">Thai Fall risk Assessment</a> -->
                    <a class="collapse-item" href="oaknee.php">การคัดกรองโรคข้อเข่าเสื่อม</a>
                    <a class="collapse-item" href="oks.php">Oxford Knee Score</a>
                    <a class="collapse-item" href="eye.php">การคัดกรองสุขภาวะทางตา</a>
                    <a class="collapse-item" href="incon.php">การคัดกรองภาวะกลั้นปัสสาวะ</a>
                    <a class="collapse-item" href="sleep.php">การประเมินปัญหาการนอน</a>
                    <!-- <a class="collapse-item" href="">การประเมินสุขภาพช่องปาก</a> -->
                    <a class="collapse-item" href="mna.php">Mini Nutritional Assessment</a>
                    <!-- <a class="collapse-item" href="">IAD Severity Instrument</a> -->
                    <a class="collapse-item" href="frt.php">การประเมินการได้ยิน</a>

                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Function" aria-expanded="true"
                aria-controls="Function">
                <i class="fas fa-fw 	fas fa-utensils"></i>
                <span>ด้านการทำหน้าที่<br>(Function Assessment)</span></a>
            </a>
            <div id="Function" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">

                    <a class="collapse-item" href="adl.php">ADL</a>
                    <!-- <a class="collapse-item" href="">IDAL</a> -->
                    <a class="collapse-item" href="chula.php">CHULA ADL</a>

                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#mental" aria-expanded="true"
                aria-controls="mental">
                <i class="fas fa-fw 	fas fa-users"></i>
                <span>ด้านจิตสังคม<br>(Mental Assessment)</span></a>
            </a>
            <div id="mental" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="mmse.php">MMSE T-2002</a>
                    <!-- <a class="collapse-item" href="">Mini Clock</a> -->
                    <a class="collapse-item" href="moca.php">MOCA-T</a>
                    <a class="collapse-item" href="2q.php">2Q</a>
                    <a class="collapse-item" href="9q.php">9Q</a>
                    <a class="collapse-item" href="tgds.php">TGDS</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Social" aria-expanded="true"
                aria-controls="Social">
                <i class="fas fa-fw fas fa-hospital-alt"></i>
                <span>ประเมินปัจจัยเอื้อ<br>ต่อภาวะสุขภาพ<br></span></a>
            </a>
            <div id="Social" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="environment.php">Environment Assessment</a>
                    <a class="collapse-item" href="apgar.php">Social Assessment</a>

                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fas fa-procedures"></i>
                <span>การประเมินผู้ดูแล<br></span></a>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSfyc9L6gyMcOzY28H_oQTVqRJ4xTBOGRgLrzqz6F5MntdAeaw/viewform">
                <i class="fas fa-fw fas fa-edit"></i>
                <span>แบบประเมินความพึงพอใจ<br></span></a>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link" href="video.php">
                <i class="fas fa-fw fas fa-video"></i>
                <span>Video ประกอบการสอน<br></span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
           
        </div>
        </div>
    </div>
    </nav>
</body>
</html>