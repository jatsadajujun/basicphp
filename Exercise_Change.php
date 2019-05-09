<?php
//เช็คการ submit
$change = 0;
if (!empty($_POST["submit"]))
{
//รับค่าจากฟอร์มด้วย php
    $price = $_POST["price"];
    $money = $_POST["money"];

//คำนวน

    $change = $money - $price;

    // echo $change;
}
?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>โปรเเกรมคิดเงินทอน</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
     <!----สีใน bootstrap
      bg-primary  น้ำเงิน
        -success เขียว
        -info ฟ้า
        -warning เหลือง
        -denger เเดง
        -secondary เทา
        -derk ดำ
        -light ขาว--->
    <div class="jumbotron bg-danger text-light">
        <h1 class="display-5 text-center">โปรเเกรมคิดเงินทอน</h1>

    </div>

        <div class="container">
            <form class="col-md-6 offset-md-3" method="POST" action="Exercise_Change.php">
                <div class="form-group row">
                    <label for="price" class="col-sm-3 col-form-label">ราคาสินค้า</label>
                    <div class="col-sm-9">
                        <input type="number"step="0.1" class="form-control" name="price" id="price" placeholder=""require>
                    </div>
                </div>
                <div class="form-group row">
                        <label for="money" class="col-sm-3 col-form-label">จ่ายเงินมา</label>
                        <div class="col-sm-9">
                            <input type="number"step="0.1" class="form-control" name="money" id="money" placeholder=""require>
                        </div>
                    </div>

                <div class="form-group row">
                   <label for="inputName" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <input type="submit" name="submit"value="คำนวน" class="btn-primary">
                        <hr>
                      เงินเเทน <?=$change;?> บาท
                    </div>
                </div>
            </form>

        </div>


    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/css/bootstrap.min.css"></script>

</body>
</html>
