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
                        <h1 class="h3 mb-0 text-gray-800">การตรวจคัดกรองโรคกระดูกพรุนด้วย Osteoporosis Self-Assessment Tool for Asians (OSTA Index)</h1>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="text-justify">&nbsp;&nbsp;&nbsp;โรคกระดูกพรุน (Osteoporosis) เป็นโรคกระดูกที่เกิดขึ้นทั่วร่างกาย (systemic skeletal diesease)ซึ่งมีมวลกระดูกตำ่ (bone mass)ร่วมกับการเสื่อมของโครงสร้างของกระดูก ส่งผลให้กระดูกมีความ
                                เปราะบางและหักง่าย นำมาซึ่งภาวะทุพพลภาพ ทำให้ไม่สามารถกลับมาใช้ชีวิตได้ปกติ</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                        <b><h5>ปัจจัยเสี่ยง (Risk factor)</h5></b> <br>
                            <div class="row">
                                <div class="col-md-6">1. อายุ > 65 ปี</div>
                                <div class="col-md-6">2. เพศหญิง</div>
                                <div class="col-md-6">3. หมดประจำเดือนก่อนอายุ 45 ปี รวมทั้งผู้ที่ถูกตัดรังไข่สองข้างก่อนหมดประจำเดือน</div>
                                <div class="col-md-6">4. โครงสร้างร่างกายเล็ก (small body build)</div>
                                <div class="col-md-6">5. บิดา มารดา พี่น้องเป็นโรคกระดูกพรุน</div>
                                <div class="col-md-6">6. บริโภคแคลเซียมไม่เพียงพอ </div>
                                <div class="col-md-6">7. สูบบรี่เป็นประจำ </div>
                                <div class="col-md-6">8. ดื่มสุรา/กาแฟเกินขนาดเป็นประจำ </div>
                                <div class="col-md-6">9. ดัชนีมวลกายตำ่กว่า 19 กก./ตร.ม </div>
                            </div>
                            
                        </div>
                    </div>
                    <hr>
                    <!-- Content Row ###############################################################-->
                    <!-- <form name="assessment" action="reportmna.php" method="post" enctype="multipart/form-data"> -->
                    <div class="row d-flex justify-content-center">
                        <div class="card">
                            <div class="card-header text-center bg-primary text-white">
                                <h4>คำนวณ OSTA</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="weight">น้ำหนัก (กิโลกรัม)</label>
                                            <input type="text" class="form-control" id="weight" aria-describedby="" placeholder="" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="age">อายุ (ปี)</label>
                                            <input type="text" class="form-control" id="age" aria-describedby="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-12">
                                        <button onclick="cal();" class="btn btn-primary btn-block" type="button" name="submit">คำนวณ</button>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <button onclick="cleardata();" class="btn btn-danger btn-block" type="button">ล้างข้อมูล</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    

                    <!-- </form> -->
                    <br>
                    <hr>
                    <div id="show-cal">
                        <div class="d-flex justify-content-center">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card text-center ">
                                        <div id="head-collour" class="card-header bg-primary text-white">
                                            <h5>ผลการคำนวณ</h5>
                                        </div>
                                        <div class="card-body">
                                            <h1 id="answer" class="card-title"></h1>
                                            <p id="cal"></p>
                                        </div>
                                    </div>
                                    <table class="table table-bordered table-sm table-striped text-center" style="font-size: 12px;">
                                        <thead>
                                            <tr>
                                                <th>ค่าดัชนี</th>
                                                <th>ความเสี่ยงของโรคกระดูกพรุน</th>
                                                <th>การพยาบาล</th>
                                            </tr>
                                        </thead>
                                        <tbody class="">
                                            <tr class="">
                                                <td>น้อยกว่า -4</td>
                                                <td>ความเสี่ยงสูง</td>
                                                <td>ส่งตรวจความหนาแน่นของมวลกระดูก</td>
                                            </tr>
                                            <tr class="">
                                                <td>อยู่ระหว่าง -4 ถึง -1</td>
                                                <td>ความเสี่ยงปานกลาง</td>
                                                <td>ส่งตรวจความหนาแน่นของมวลกระดูก</td>
                                            </tr>
                                            <tr class="">
                                                <td>มากกว่า -1 ขึ้นไป</td>
                                                <td>ความเสี่ยงต่ำ</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                    
                                </div>
                                <div class="col-md-6">
                                    <img src="./img/assessment/osta-index.jpg" alt="" class="w-100">
                                </div>
                                <div class="col-md-12">
                                    <b><p> &nbsp;&nbsp;&nbsp;การตรวจความหนาแน่นของมวลกระดูก (Bone mass density: BMD) โดยใช้เครื่องวัดมวลกระดูกโดยใช้รังสีเอกซเรย์ (Dual energy X-ray absorptiometry: DEXA) เป็นมาตรฐานในการวินิจฉัยโรคกระดูกพรุน </h5></b> <br>
                                    <div class="container d-flex justify-content-center mt-2">
                                        <table class="table table-bordered table-sm table-striped" style="font-size: 12px;">
                                                <thead>
                                                    <tr class="text-center bg-warning">
                                                        <th width="50%">ดัชนี</th>
                                                        <th width="50%">ความเสี่ยงโรคกระดูกพรุน</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>ปกติ (normal)</td>
                                                        <td class="text-center">T-score มากกว่าหรือเท่ากับ -1</td>
                                                    </tr>
                                                    <tr>
                                                        <td>กระดูกบาง (Osteopenia)</td>
                                                        <td class="text-center"> -2.5 < T-score <-1</td>
                                                    </tr>
                                                    <tr>
                                                        <td>กระดูกพรุน (Osteporosis)</td>
                                                        <td class="text-center">T-score น้อยกว่าหรือเท่ากับ -2.5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>กระดูกพรุนระดับรุนแรง (Severe established osteoporosis)</td>
                                                        <td class="text-center">T-score น้อยกว่าหรือเท่ากับ -2.5</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                           
                            <div class="col-md-12">
                                <h5><b>การพยาบาล</b></h5>
                                <div class="text-justify" style="font-size: 14px;">
                                    <b>1.</b> แนะนำการออกกำลังกายที่ช่วยลดการสูญเสียมวลกระดูก โดยเฉพาะการออกกำลังกายที่มีแรงกระแทกสูง หรือการออกกำลังกายที่มีการแบกรับนำ้หนักที่เหมาะสม
                                    และการออกกำลังกายที่มีแรงต้าน เช่น วิ่ง เดิน กระโดดเชือก วอลเลย์บอล โดยออกกำลังกายเป็นประจำ กลางแดดอ่อนๆ เพราะการได้รับแสงแดดจะเพิ่มการสังเคราะห์วิตามินดีทางผิวหนัง
                                    <br><b>2.</b> แนะนำการรับประทานอาหารให้ครบ 5 หมู่และรับประทานอาหารที่มีแคลเซียมสูง เช่น นม แนะนำการดื่มนมพร่องมันเนยวันละ 1-2 แก้ว/วัน โยเกิร์ต ปลาเล้กปลาน้อย
                                    กะปิ กุ้งแห้ง ซึ่งจำทำให้ได้รับแคลเซียมร้อยละ 50 ของปริมาณที่ต้องการ และควรรับประทานอาหารที่มีวิตามินดีสูง เช่น นม เนยแข็ง ไข่ เพื่อร่างกายสามารถดูดซึมแคลเซียมได้ดีขึ้น
                                    <br><b>3.</b> หลีกเลี่ยงผักที่มีออกซาเลทสูง ได้แก่ ปวยเล้ง ผักโขม ผักติ้ว ผักเม็ก ผักหวานป่า ซึ่งเป็นสารมีฤทธิ์ยับยั้งการดูดซึมของแคลเซียม
                                    <br><b>4.</b> หลีกเลี่ยงการรับประทานอาหารประเภทโปรตีนหรือเนื้อสัตว์มากเกินไป
                                    <br><b>5.</b> การรับประทานอาหารเค็มจัดหรืออาหารทที่มีโซเดียมสูง
                                    <br><b>6.</b> แนะนำให้งดสูบบุหรี่ ดื่มสุรา ชา กาแฟ นำ้อัดลม
                                    <br><b>7.</b> แนะนำให้หลีกเลี่ยงการใช้ยาลูกกลอน ยาชุดที่มีสารเสตียรอยด์
                                    <br><b>8.</b> แนะนำให้ควบคุมนำ้หนักให้อยู้ในเกณฑ์ปกติ การลดนำ้หนักอย่างรวดเร็ว
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <hr>
                    <p class="text-right"> ที่มา: ราชวิทยาลัยแพทย์ออร์โธปิดิกส์แห่งประเทศไทยและมูลนิธิโรคกระดูกพรุนแห่งประเทศไทย แนวปฏิบัติบริการสาธารณสุข โรคกระดูกพรุน พ.ศ.2553.</p>
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
    <script>
        function cal() {
            console.log('cal');
            var weight = parseFloat(document.getElementById('weight').value);
            var age = parseFloat(document.getElementById('age').value); // สมมุติว่าเพิ่มช่องกรอกส่วนสูง
            if (isNaN(weight) || isNaN(age) || age <= 0) {
                alert("กรุณากรอกข้อมูลที่ถูกต้อง");
                return;
            }

            var osta = 0.2 * (weight - age);
            document.getElementById("cal").textContent = "0.2 x (" + weight + "(น้ำหนัก กก.) - " + age + " (อายุ ปี))";
            document.getElementById("answer").textContent = osta.toFixed(1);
            checkClass();
            if (osta < -4) {
                //document.getElementById('head-collour').classList.add('bg-danger');
                document.getElementById('head-collour').textContent = 'ความเสี่ยงสูง';
            } else if (osta <= -1) {
                //document.getElementById('head-collour').classList.add('bg-warning');
                document.getElementById('head-collour').textContent = 'ความเสี่ยงปานกลาง';
            } else {
                //document.getElementById('head-collour').classList.add('bg-success');
                document.getElementById('head-collour').textContent = 'ความเสี่ยงต่ำ';
            }
            // document.getElementById('head-collour').classList.add('new-class');
            document.getElementById('show-cal').style.display = 'block';
            // alert("OSTA Index ของคุณคือ " + osta.toFixed(1)); // แสดงผลลัพธ์

        }
        $(document).ready(function() {
            // โค้ดที่จะทำงานเมื่อ DOM โหลดเสร็จแล้ว
            console.log("เอกสารโหลดเสร็จแล้ว");
            document.getElementById('show-cal').style.display = 'none';
        });
        function checkClass() {
            const element = document.getElementById("head-collour");
            
            if (element.classList.contains("bg-danger")) {
               // document.getElementById("head-collour").classList.remove("bg-danger");
            } 
            if (element.classList.contains("bg-warning")) {
               // document.getElementById("head-collour").classList.remove("bg-warning");
            } 
            if (element.classList.contains("bg-success")) {
               // document.getElementById("head-collour").classList.remove("bg-success");
            } 
        }
        function cleardata(){
            const weightElement = document.getElementById("weight");
            document.getElementById('show-cal').style.display = 'none';
            document.getElementById('weight').value = '';
            document.getElementById('age').value = '';
            weightElement.focus();
        }
    </script>

</body>

</html>