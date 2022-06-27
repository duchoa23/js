
<head>
    <title>Free tool - Design by HoaBD</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
    <link href="https://toantinh.net/tools/fonts/font-awesome/css/all.css" rel="stylesheet">
    <link href="https://toantinh.net/tools/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://toantinh.net/tools/css/navigation.css" rel="stylesheet">
    <link href="https://toantinh.net/tools/css/style.css" rel="stylesheet">
    <link href="https://toantinh.net/tools/css/custom.css" rel="stylesheet">
    <link href="https://toantinh.net/tools/css/noscript.css" rel="stylesheet">
    <link href="https://toantinh.net/tools/css/favicon.ico" rel="icon" type="image/x-icon">
    <script src="https://toantinh.net/tools/js/jquery.js" type="3907449ff7f3acb745a6e70e-text/javascript"></script>
    <script src="https://toantinh.net/tools/js/bootstrap.min.js" defer type="3907449ff7f3acb745a6e70e-text/javascript"></script>
    <script src="https://toantinh.net/tools/js/xavier.js" defer type="3907449ff7f3acb745a6e70e-text/javascript"></script>
    <script src="https://toantinh.net/tools/js/jquery.metisMenu.js" defer type="3907449ff7f3acb745a6e70e-text/javascript"></script>
    <script src="https://toantinh.net/tools/js/plugins/datatables/jquery.dataTables.min.js" defer type="3907449ff7f3acb745a6e70e-text/javascript"></script>
    <script src="https://toantinh.net/tools/js/plugins/datatables/dataTables.bootstrap.min.js" defer type="3907449ff7f3acb745a6e70e-text/javascript"></script>
    <script src="https://toantinh.net/tools/js/custom.js" defer type="3907449ff7f3acb745a6e70e-text/javascript"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CWHT66PCN2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CWHT66PCN2');
</script>

</head>

<body>
<?php require "../dichvu.php"; ?>
                <div class="panel">
                    <center>
                        <a href="../"><img src="https://i.imgur.com/by4FXde.png" class="duchoa2" /></a>
                    </center>
                    <h2>Vui lòng chọn tài khoản ngân hàng</h2>
                    <br>
                    <select id="gender" onchange="genderChanged(this)">
                        <option value=""> -- Chọn -- </option>
                        <option value="Vietcombank">Vietcombank</option>
                        <option value="Techcombank"> Techcombank </option>
                        <option value="ACB"> ACB </option>
                        <option value="Vietcombank-zozo"> Vietcombank - Zozo</option>
                        <option value="Techcombank-zozo"> Techcombank-zozo </option>
                        <option value="canhan"> Tài khoản cá nhân</option>
                        <option value="ctkm"> KM Zozo</option>
                    </select>
                    <br>
                    <br>
                    <p id="show_message"></p>

                    <!-- Trigger -->
                    <button class="btn" data-clipboard-target="#show_message">
                        <div class="copy-text"><img src="https://clipboardjs.com/assets/images/clippy.svg" alt="Copy to clipboard" class="clippy"> <b>Copy ngân hàng</b></div>
                    </button>
                    <style>
                        img.duchoa2 {
                            width: 10%;
                        }
                        
                        .panel {
                            text-align: center;
                            font-size: 20px;
                        }
                        
                        img.clippy {
                            width: 50px;
                        }
                        
                        button.btn {
                            background: #ffffff;
                            border: 1px solid #000000;
                            padding: 5px 10px 5px 10px;
                            border-radius: 10px;
                            background: #e8e8e8;
                        }
                    </style>
                    <script language="javascript">
                        // Hàm xử lý khi thẻ select thay đổi giá trị được chọn
                        // obj là tham <br>Số truyền vào và cũng chính là thẻ select
                        function genderChanged(obj) {
                            var message = document.getElementById('show_message');
                            var value = obj.value;
                            if (value === '') {
                                message.innerHTML = "Bạn chưa chọn tài khoản";
                            } else if (value === 'Vietcombank') {
                                message.innerHTML = "Vietcombank Chi nhánh Thăng Long - TP Hà Nội<br>Số tài khoản:  <b><font color='red'>0491001700825</font></b><br>Chủ tài khoản:  <b><font color='red'>Công ty TNHH phần mềm iNET</font></b>";
                            } else if (value === 'Techcombank') {
                                message.innerHTML = "Techcombank Phòng giao dịch Trần Đăng Ninh - chi nhánh hoàng Quốc Việt - TP Hà Nội<br>Số tài khoản:  <b><font color='red'>19130401201019</font></b><br>Chủ tài khoản:  <b><font color='red'>Công ty TNHH phần mềm iNET</font></b>";
                            } else if (value === 'Sacombank') {
                                message.innerHTML = "Sacombank Chi nhánh Đông Đô - TP Hà Nội<br>Số tài khoản:  <b><font color='red'>020042439399</font></b><br>Chủ tài khoản:  <b><font color='red'>Công ty TNHH phần mềm iNET</font></b>";
                            } else if (value === 'ACB') {
                                message.innerHTML = "ACB Chi nhánh: PGD Trần Quốc Hoàn - TP Hà Nội<br>Số tài khoản:  <b><font color='red'>85885588</font></b><br>Chủ tài khoản:  <b><font color='red'>Công ty TNHH phần mềm iNET</font></b>";
                            } else if (value === 'BIDV') {
                                message.innerHTML = "BIDV Chi nhánh Cầu Giấy - TP Hà Nội<br>Số tài khoản:  <b><font color='red'>21510001891178</font></b><br>Chủ tài khoản:  <b><font color='red'>Công ty TNHH phần mềm iNET</font></b>";
                            } else if (value === 'Vietinbank') {
                                message.innerHTML = "Vietinbank Chi nhánh Chương Dương - TP Hà Nội<br>Số tài khoản:  <b><font color='red'>119000179472</font></b><br>Chủ tài khoản:  <b><font color='red'>Công ty TNHH phần mềm iNET</font></b>";
                            } else if (value === 'Agribank') {
                                message.innerHTML = "Agribank Chi nhánh Cầu Giấy - TP Hà Nội<br>Số tài khoản:  <b><font color='red'>1507201065136</font></b><br>Chủ tài khoản:  <b><font color='red'>Công ty TNHH phần mềm iNET</font></b>";
                            } else if (value === 'Mbbank') {
                                message.innerHTML = "Mbbank Phòng giao dịch Xuân Thủy - CN Trần Duy Hưng - TP Hà Nội<br>Số tài khoản:  <b><font color='red'>0081101002004</font></b><br>Chủ tài khoản:  <b><font color='red'>Công ty TNHH phần mềm iNET</font></b>";
                            } else if (value === 'Vietcombank-zozo') {
                                message.innerHTML = "Vietcombank Chi nhánh Thăng Long - TP Hà Nội<br>Số tài khoản:  <b><font color='red'>0491000117462</font></b><br>Chủ tài khoản:  <b><font color='red'>Công ty TNHH phần mềm Zozo</font></b>";
                            } else if (value === 'Techcombank-zozo') {
                                message.innerHTML = "Techcombank Phòng giao dịch Trần Đăng Ninh - chi nhánh hoàng Quốc Việt - TP Hà Nội<br>Số tài khoản:  <b><font color='red'>19131502290019</font></b><br>Chủ tài khoản:  <b><font color='red'>Công ty TNHH phần mềm Zozo</font></b>";
                            } else if (value === 'ACB-zozo') {
                                message.innerHTML = "ACB PGD Trần Quốc Hoàn - TP Hà Nội<br>Số tài khoản:  <b><font color='red'>2020888888</font></b><br>Chủ tài khoản:  <b><font color='red'>Công ty TNHH phần mềm Zozo</font></b>";
                            } else if (value === 'canhan') {
                                message.innerHTML = "Vietcombank Chi nhánh Thăng Long - TP Hà Nội<br>Số tài khoản:  <b><font color='red'>0491 000 154 784</font></b><br>Chủ tài khoản:  <b><font color='red'>Nguyễn Thùy Linh</font></b>";
                            } else if (value === 'ctkm') {
                                message.innerHTML = "1.Khách hàng đăng ký <b><font color='red'>02 năm tặng thêm 01 năm sử dụng</font></b>, tổng thời gian <b><font color='red'>sử dụng 03 năm</font></b>.<br>2.Khách hàng đăng ký <b><font color='red'>03 năm tặng thêm 02 năm sử dụng</font></b>, tổng thời gian <b><font color='red'>sử dụng 05 năm</font></b>.";
                            }

                        }
                    </script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
                    <script>
                        var btns = document.querySelectorAll('button');
                        var clipboard = new ClipboardJS(btns);
                        clipboard.on('success', function(e) {
                            console.log(e);
                        });
                        clipboard.on('error', function(e) {
                            console.log(e);
                        });
                    </script>
                </div>

            </div>
        </div>
        <script src="https://toantinh.net/tools/js/rocket-loader.min.js" data-cf-settings="3907449ff7f3acb745a6e70e-|49" defer=""></script>
</body>

</html>
