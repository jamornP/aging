<?php require('head.php');?>

<body class="font-mali">

<?php require('menu.php'); ?>
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header bg-primary">
                        <h1 class="h3 mb-0 text-white">แบบประเมินโรคซึมเศร้า 9 คำถาม</h1>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <form name="assessment" action="report9q.php" method="post" enctype="multipart/form-data">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="alert-primary">
                                            <tr class="text-center" style="vertical-align: middle;">
                                                <th>คำถาม</th>
                                                <th>ไม่มีเลย</th>
                                                <th>เป็นบางวัน<br>1-7 วัน</th>
                                                <th>เป็นบ่อย<br>> 7 วัน</th>
                                                <th>เป็นทุกวัน<br></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1. เบื่อ ไม่สนใจอยากทำ อะไร</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="one" id="one1"
                                                            value="0" checked>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="one" id="one2"
                                                            value="1">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="one" id="one3"
                                                            value="2">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="one" id="one4"
                                                            value="3">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2. ไม่สบายใจ ซึมเศร้า ท้อแท้</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="two" id="two1"
                                                            value="0" checked>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="two" id="two2"
                                                            value="1">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="two" id="two3"
                                                            value="2">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="two" id="two4"
                                                            value="3">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3. หลับยาก หรือหลับๆ ตื่นๆ หรือหลับมากไป</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tree" id="tree1"
                                                            value="0" checked>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tree" id="tree2"
                                                            value="1">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tree" id="tree3"
                                                            value="2">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="tree" id="tree4"
                                                            value="3">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4. เหนื่อยง่าย หรือไม่ค่อย มีแรง</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="four" id="four1"
                                                            value="0" checked>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="four" id="four2"
                                                            value="1">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="four" id="four3"
                                                            value="2">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="four" id="four4"
                                                            value="3">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5. เบื่ออาหาร หรือกินมาก เกินไป</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="five" id="five1"
                                                            value="0" checked>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="five" id="five2"
                                                            value="1">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="five" id="five3"
                                                            value="2">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="five" id="five4"
                                                            value="3">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6. รู้สึกไม่ดีกับตัวเอง คิด ว่าตัวเองล้มเหลว หรือทำ ให้ตนเองหรือ ครอบครัวผิดหวัง</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="six" id="six1"
                                                            value="0" checked>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="six" id="six2"
                                                            value="1">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="six" id="six3"
                                                            value="2">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="six" id="six4"
                                                            value="3">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7. สมาธิไม่ดีเวลาทำอะไร เช่น ดูโทรทัศน์ฟังวิทยุ หรือทำ งานที่ต้องใช้ ความตั้งใจ</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="seven" id="seven1"
                                                            value="0" checked>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="seven" id="seven2"
                                                            value="1">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="seven" id="seven3"
                                                            value="2">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="seven" id="seven4"
                                                            value="3">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8. พูดช้า ทำอะไรช้าลง จนคนอื่นสังเกตเห็น ได้หรือกระสับกระส่าย ไม่สามารถอยู่นิ่งได้ เหมือนที่เคยเป็น</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="eight" id="eight1"
                                                            value="0" checked>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="eight" id="eight2"
                                                            value="1">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="eight" id="eight3"
                                                            value="2">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="eight" id="eight4"
                                                            value="3">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9. คิดทำ ร้ายตนเอง หรือ คิดว่าถ้าตายไปคงจะดี</td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="nine" id="nine1"
                                                            value="0" checked>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="nine" id="nine2"
                                                            value="1">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="nine" id="nine3"
                                                            value="2">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="nine" id="nine4"
                                                            value="3">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <p class="text-right">ที่มา : สมุดบันทึกสุขภาพผู้สูงอายุ กรมอนามัย กระทรวงสาธารณสุข,2557</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
        <!-- Content Row ###############################################################-->
        <hr>
        

        <!-- Content Row ###############################################################-->


    
                <!-- /.container-fluid -->

           
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

</body>

</html>