<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body style="background-color:rgb(248,249,250);">
    <div class="container">

        <div class="card my-3">
            <div class="card-body ">
                <div class="row justify-content-between">
                    <div class="col-4">
                        <a href="tutorial.php" class="btn btn-primary">วิธีการใช้งานระบบ</a>
                    </div>
                    <div class="col-4">
                        <div class="float-end"><a href="login.php" class="btn btn-secondary">เข้าสู่ระบบ</a></div><br>
                    </div>
                </div>

            </div>
        </div>


        <form action="save.php" class="needs-validation" method="post" novalidate>
            <div class="card my-3">
                <div class="card-body ">
                    <h2 class="text-left">แบบสำรวจข้อมูลการพัฒนาตนเองของอาจารย์รายบุคคลด้านการจัดการเรียนการสอน ประจำปีงบประมาณ พ.ศ. 2564 (ไตรมาส)</h2>
                    <p>จัดเก็บข้อมูลเพื่อรายงานผลการปฏิบัติราชการตามแผนปฎิบัติรายการประจำปี พ.ศ. 2564</p>
                    <p>ตัวชี้วัด 3.10 ร้อยละของอาจารย์ที่ได้รับการพัฒนาศักยภาพและทักษาในการจัดการเรียนรู้ที่สอดคล้องกับเทคโนโลยีและความสนใจของผู้เรียน (มรส.)</p>
                    <p>ผู้รับผิดชอบประสานงาน ปทิตตา เมฆาสวัสดิ์ หมายเลขภายใน 3901 หมายเลขโทรศัพท์ 077913357</p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <h5>ขอข้อมูลการพัฒนาตนเองของอาจารย์ตั้งแต่วันที่ 1 มกราคม - 31 มีนาคม 2564 (ไตรมาส 2)</h5>
                    <p>เปิดให้บันทึกข้อมูลระหว่างวันที่ 25 มกราคม - 31 มีนาคม 2564</p>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">
                            <h4>คณะ/วิทยาลัย <span style="color:red;">*</span></h4>
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="user_faculty" value="1" id="flexRadioDefault1" required>
                            <label class="form-check-label" for="flexRadioDefault1">
                                ครุศาสตร์
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="user_faculty" value="2" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                มนุษย์ศาสตร์และสังคมศาสตร์
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="user_faculty" value="3" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                วิทยาศาสตร์และเทคโนโลยี
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="user_faculty" value="4" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                วิทยาลัยนานาชาติการท่องเที่ยว
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="user_faculty" value="5" id="flexRadioDefault5">
                            <label class="form-check-label" for="flexRadioDefault5">
                                พยาบาลศาสตร์
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="user_faculty" value="6" id="flexRadioDefault6">
                            <label class="form-check-label" for="flexRadioDefault6">
                                นิติศาสตร์
                            </label>
                            <div class="invalid-feedback">กรุณากรอกข้อมูลให้ถูกต้อง</div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="">
                                <h4>สาขาวิชา/วิชาเอก/กลุ่มวิชา <span style="color:red;">*</span></h4>
                            </label>
                            <input type="text" name="user_branch" class="form-control" placeholder="ป้อนคำตอบ" required>
                            <div class="invalid-feedback">กรุณากรอกข้อมูลให้ถูกต้อง</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">
                            <h4>ตำแหน่งทางวิชาการ <span style="color:red;">*</span></h4>
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="user_position" id="zflexRadioDefault1" value="1" required>
                            <label class="form-check-label" for="zflexRadioDefault1">
                                ศาสตราจารย์
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="user_position" id="zflexRadioDefault2" value="2">
                            <label class="form-check-label" for="zflexRadioDefault2">
                                รองศาสตราจารย์
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="user_position" id="zflexRadioDefault3" value="3">
                            <label class="form-check-label" for="zflexRadioDefault3">
                                ผู้ช่วยศาสตราจารย์
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="user_position" id="zflexRadioDefault4" value="4">
                            <label class="form-check-label" for="zflexRadioDefault4">
                                อาจารย์
                            </label>
                            <div class="invalid-feedback">กรุณากรอกข้อมูลให้ถูกต้อง</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">
                            <h4>ตำแหน่งอื่นๆ <span style="color:red;">*</span></h4>
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="user_site_position" value="1" id="zzflexRadioDefault1" required>
                            <label class="form-check-label" for="zzflexRadioDefault1">
                                ดร.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="user_site_position" value="2" id="zzflexRadioDefault2">
                            <label class="form-check-label" for="zzflexRadioDefault2">
                                อื่นๆ
                            </label>
                            <div class="invalid-feedback">กรุณากรอกข้อมูลให้ถูกต้อง</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">
                            <h4>ชื่อ-สกุล <span style="color:red;">*</span></h4>
                        </label>
                        <input type="text" class="form-control" name="user_fullname" placeholder="ป้อนคำตอบ" required>
                        <div class="invalid-feedback">กรุณากรอกข้อมูลให้ถูกต้อง</div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">
                            <h4>เลขบัตรประจำตัวประชาชน <span style="color:red;">* </span></h4>
                        </label>
                        <p><span style="color:red;">ใช้สำหรับเข้าสู่ระบบในครั้งถัดไป </span></p>
                        <input type="text" name="user_id_card" class="form-control" placeholder="ป้อนคำตอบ" required>
                        <div class="invalid-feedback">กรุณากรอกข้อมูลให้ถูกต้อง</div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary">บันทึก</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="validation.js"></script>

</html>