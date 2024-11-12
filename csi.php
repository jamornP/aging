<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Comprehensive Geriatric Assessment</title>
    <link rel="icon" href="./img/favicon.ico" type="">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="css/header-text.css" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Kanit");

        body {
            font-family: "Kanit";
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        require('menuleft.php');
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                require('naverbar.php');
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">แบบประเมินความเครียดในผู้ดูแล (Care giver Strain Index:CSI)</h1>

                    </div>
                    <div class="row">
                        <table class="table table-sm table-bordered" style="font-size: 12px;">
                            <thead>
                                <tr class="text-center">
                                    <th>การประเมิน</th>
                                    <th width="5%">ใช่</th>
                                    <th width="5%">ไม่ใช่</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>1. ถูกรบกวนการนอนหลับ (เช่น ผู้สูงอายุต้องการความช่วยเหลือในการลุกขึ้นลงเตียง หรือเดินไปมาไม่มีจุดหมายในเวลากลางคืน)</td>
                                    <td class="text-center"><input class="" type="radio" name="yes1" id="yes1" value="1" ></td>
                                    <td class="text-center"><input class="" type="radio" name="yes1" id="no1" value="0" ></td>
                                </tr>
                                <tr>
                                    <td>2. เป็นเรื่องความไม่สะดวกสบายเกี่ยวกับการดูแล (เช่น เพราะต้องใช้เวลานานมากในการช่วยเหลือ หรือใช้เวลานานในการเดินทางมาเพื่อให้การช่วยเหลือ)</td>
                                    <td class="text-center"><input class="" type="radio" name="yes2" id="yes2" value="1" ></td>
                                    <td class="text-center"><input class="" type="radio" name="yes2" id="no2" value="0" ></td>
                                </tr>
                                <tr>
                                    <td>3. เป็นเรื่องความตึงเครียดในร่างกาย (เช่น ต้องช่วยพยุงหรือยกขึ้นผู้สูงจากเก้าอี้ ต้องใช้ความพยายามหรือให้การเอาใจใส่อย่างมาก)</td>
                                    <td class="text-center"><input class="" type="radio" name="yes3" id="yes3" value="1" ></td>
                                    <td class="text-center"><input class="" type="radio" name="yes3" id="no3" value="0" ></td>
                                </tr>
                                <tr>
                                    <td>4. รู้สึกเหมือนถูกกักตัว (เช่น การดูแลทำให้ไม่มีเวลาว่างหรือไม่สามารถไปเที่ยว)</td>
                                    <td class="text-center"><input class="" type="radio" name="yes4" id="yes4" value="1" ></td>
                                    <td class="text-center"><input class="" type="radio" name="yes4" id="no4" value="0" ></td>
                                </tr>
                                <tr>
                                    <td>5. มีการปรับในครอบครัว (เช่น การช่วยเหลือมีผลกระทบต่อกิจวัตรประจำวัน ไมมีความเป็นส่วนตัว)</td>
                                    <td class="text-center"><input class="" type="radio" name="yes5" id="yes5" value="1" ></td>
                                    <td class="text-center"><input class="" type="radio" name="yes5" id="no5" value="0" ></td>
                                </tr>
                                <tr>
                                    <td>6. มีการเปลี่ยนแผนการของแต่ละคน (เช่น ปฏิเสธงาน ไม่มีเวลาพักร้อน)</td>
                                    <td class="text-center"><input class="" type="radio" name="yes6" id="yes6" value="1" ></td>
                                    <td class="text-center"><input class="" type="radio" name="yes6" id="no6" value="0" ></td>
                                </tr>
                                <tr>
                                    <td>7. เวลาส่วนตัวของฉันยังต้องใช้ในด้านอื่น ๆ อีก (เช่น จาดคนอื่นๆในครอบครัว)</td>
                                    <td class="text-center"><input class="" type="radio" name="yes7" id="yes7" value="1" ></td>
                                    <td class="text-center"><input class="" type="radio" name="yes7" id="no7" value="0" ></td>
                                </tr>
                                <tr>
                                    <td>8. มีการปรับระดับอารมณ์ (เช่น เพราะว่ามีการทะเลากันรุนแรง)</td>
                                    <td class="text-center"><input class="" type="radio" name="yes8" id="yes8" value="1" ></td>
                                    <td class="text-center"><input class="" type="radio" name="yes8" id="no8" value="0" ></td>
                                </tr>
                                <tr>
                                    <td>9. มีพฤติกรรมบางอย่างของผู้สูงอายุทำให้รู้สึกอารมณ์เสีย (เช่น มีปัสสาวะกลั้นไม่อยู่ มีปัญหาเรื่องความจำในสิ่งต่าง ๆ)</td>
                                    <td class="text-center"><input class="" type="radio" name="yes9" id="yes9" value="1" ></td>
                                    <td class="text-center"><input class="" type="radio" name="yes9" id="no9" value="0" ></td>
                                </tr>
                                <tr>
                                    <td>10. ดิฉันรู้สึกเสียใจที่พบว่าผู้สูงอายุเปลี่ยนไปมากจากเมื่อก่อน</td>
                                    <td class="text-center"><input class="" type="radio" name="yes10" id="yes10" value="1" ></td>
                                    <td class="text-center"><input class="" type="radio" name="yes10" id="no10" value="0" ></td>
                                </tr>
                                <tr>
                                    <td>11. มีการเปลี่ยนแปลงในเรื่องงาน (เช่น จะต้องหาเวลาหยุด)</td>
                                    <td class="text-center"><input class="" type="radio" name="yes11" id="yes11" value="1" ></td>
                                    <td class="text-center"><input class="" type="radio" name="yes11" id="no11" value="0" ></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <button type="button" onclick="cal();" class="btn btn-primary">ผลประเมิน</button>
                    </div>
                    
                    <hr>
                    <p class="text-right"> ที่มา: Sasat, S. (1998). Caring for Dementia in the Thai Buddhist Society.  Unpublished PhD.Thesis, University of Hull, Hull, United Kingdom.</p>
                    <!-- Content Row ###############################################################-->


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            require('footer.php');
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <!-- SweetAlert2 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script>
    <script>
        function cal() {
            console.log('cal');
            findCheckedRadios();
        }
        function findCheckedRadios() {
        // ค้นหา radio button ทั้งหมดในฟอร์ม
        var radios = document.querySelectorAll('input[type="radio"]');
        
        // วนลูปผ่านแต่ละ radio button
        var sum =0;
        var text ='';
        var i = 0;
        radios.forEach(function(radio) {
            i++;
            if (radio.checked) {
                sum += parseInt(radio.value) || 0; 

                // console.log("Radio button ที่ถูกเลือก: " + radio.id);
                // console.log("ค่าของ radio ที่ถูกเลือก: " + radio.value);
            }
        });
        console.log(sum);
        if(i == 10){
            if(sum >= 7){
                text ='มีความเครียดสูงกว่าปกติ';
            }else{
                text ='ปกติ';
            }
            Swal.fire({
                title: 'ผลประเมิน ได้ ' + sum + ' คะแนน',
                text: text,
                icon: 'success', // หรือ 'error', 'warning', 'info', 'question'
                confirmButtonText: 'OK'
            });
        }else{
            Swal.fire({
                title: 'กรอกข้อมูลไม่ครบ',
                text: 'กรุณาเลือกคำตอบให้ครบ',
                icon: 'error', // หรือ 'error', 'warning', 'info', 'question'
                confirmButtonText: 'OK'
            });
        }
        
    
    }
        
    </script>

</body>

</html>