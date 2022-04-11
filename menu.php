<nav class="navbar navbar-dark bg-info ">
    <div class="container-fluid"> 
        <a class="navbar-brand text-white" href="#">
            <h4>Comprehensive Geriatric Assessment</h4> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header bg-info">
            <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel"><b>มิติของการประเมินสุขภาพ</b></h5>
            <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-primary">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 text-success">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?main=Home">
                        <i class="fas fa-fw fa-home"></i>
                        <span>หน้าหลัก (Home)</span>
                    </a>
                </li>
                <hr class="bg-light">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-fw fas fa-user-edit"></i>
                        <span>ด้านร่างกาย<br>(Physical Assessment)</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                        <li><a class="dropdown-item" href="index.php?main=ด้านร่างกาย (Physical Assessment)&sub=Time Up and Go Test (TUGT)">Time Up and Go Test (TUGT)</a></li>
                        <li><a class="dropdown-item" href="oaknee.php?main=ด้านร่างกาย (Physical Assessment)&sub=การคัดกรองโรคข้อเข่าเสื่อม">การคัดกรองโรคข้อเข่าเสื่อม</a></li>
                        <li><a class="dropdown-item" href="oks.php?main=ด้านร่างกาย (Physical Assessment)&sub=Oxford Knee Score">Oxford Knee Score</a></li>
                        <li><a class="dropdown-item" href="eye.php?main=ด้านร่างกาย (Physical Assessment)&sub=การคัดกรองสุขภาวะทางตา">การคัดกรองสุขภาวะทางตา</a></li>
                        <li><a class="dropdown-item" href="incon.php?main=ด้านร่างกาย (Physical Assessment)&sub=การคัดกรองภาวะกลั้นปัสสาวะ">การคัดกรองภาวะกลั้นปัสสาวะ</a></li>
                        <li><a class="dropdown-item" href="sleep.php?main=ด้านร่างกาย (Physical Assessment)&sub=การประเมินปัญหาการนอน">การประเมินปัญหาการนอน</a></li>
                        <li><a class="dropdown-item" href="mna.php?main=ด้านร่างกาย (Physical Assessment)&sub=Mini Nutritional Assessment">Mini Nutritional Assessment</a></li>
                        <li><a class="dropdown-item" href="frt.php?main=ด้านร่างกาย (Physical Assessment)&sub=การประเมินการได้ยิน">การประเมินการได้ยิน</a></li>
                    </ul>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-fw 	fas fa-utensils"></i>
                        <span>ด้านการทำหน้าที่<br>(Function Assessment)</span></a>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                        <li><a class="dropdown-item" href="adl.php?main=ด้านการทำหน้าที่ (Function Assessment)&sub=ADL">ADL</a></li>
                        <li><a class="dropdown-item" href="chula.php?main=ด้านการทำหน้าที่ (Function Assessment)&sub=CHULA ADL">CHULA ADL</a></li>
                        
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-fw 	fas fa-users"></i>
                        <span>ด้านจิตสังคม<br>(Mental Assessment)</span></a>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                        <li><a class="dropdown-item" href="mmse.php?main=ด้านจิตสังคม(Mental Assessment)&sub=MMSE T-2002">MMSE T-2002</a></li>
                        <li><a class="dropdown-item" href="moca.php?main=ด้านจิตสังคม(Mental Assessment)&sub=MOCA-T">MOCA-T</a></li>
                        <li><a class="dropdown-item" href="2q.php?main=ด้านจิตสังคม(Mental Assessment)&sub=2Q">2Q</a></li>
                        <li><a class="dropdown-item" href="9q.php?main=ด้านจิตสังคม(Mental Assessment)&sub=9Q">9Q</a></li>
                        <li><a class="dropdown-item" href="tgds.php?main=ด้านจิตสังคม(Mental Assessment)&sub=TGDS">TGDS</a></li>
                        
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-fw fas fa-hospital-alt"></i>
                        <span>ประเมินปัจจัยเอื้อ<br>ต่อภาวะสุขภาพ</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                        <li><a class="dropdown-item" href="environment.php?main=ประเมินปัจจัยเอื้อ ต่อภาวะสุขภาพ&sub=Environment Assessment">Environment Assessment</a></li>
                        <li><a class="dropdown-item" href="apgar.php?main=ประเมินปัจจัยเอื้อ ต่อภาวะสุขภาพ&sub=Social Assessment">Social Assessment</a></li>
                    </ul>
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
                    <a class="nav-link" href="video.php?main=Video ประกอบการสอน">
                        <i class="fas fa-fw fas fa-video"></i>
                        <span>Video ประกอบการสอน<br></span></a>
                </li>
                <hr class="sidebar-divider d-none d-md-block">
            </ul>
        </div>
    </div>
    
</nav>
<div class="pt-2"></div>

<div class="container-fluid ">
    <div class="mt-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <?php
                    if(isset($_REQUEST['main'])){
                        $main=$_REQUEST['main'];
                        echo "
                            <li class='breadcrumb-item'><a href='#'>{$main}</a></li>
                        ";
                    }else{
                        $main="";
                    }
                    if(isset($_REQUEST['sub'])){
                        $sub=$_REQUEST['sub'];
                        echo "
                            <li class='breadcrumb-item active' aria-current='page'>{$sub}</li>
                        ";
                    }else{
                        $sub="";
                    }
                ?>
                
                
            </ol>
        </nav>
    </div>
</div>