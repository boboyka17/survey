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
        <form action="">
            <div class="card my-3">
                <div class="card-body ">
                    <h2 class="text-center">การพัฒนาตนเองครั้งที่</h2>

                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">
                            <h4>ประเภทการพัฒนาตนเอง <span style="color:red;">*</span></h4>
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                อบรมเชิงปฏิบัติการ/ประชุมเชิงปฏิบัติการ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                อบรมออนไลน์
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                สัมมนา/ประชุม
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                อื่น ๆ
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="">
                                    <h4>วัน-เดือน-ปี ที่พัฒนาตนเอง <span style="color:red;">*</span></h4>
                                </label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="">
                                    <h4>ระยะเวลา (กรณีการพัฒนา/อบรมรายชั่วโมง)</h4>
                                </label>
                                <input type="text" class="form-control" placeholder="ป้อนคำตอบ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">
                            <h4>เรื่อง <span style="color:red;">*</span></h4>
                        </label>
                        <input type="text" class="form-control" placeholder="ป้อนคำตอบ">
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">
                            <h4>หน่วยงานที่จัด <span style="color:red;">*</span></h4>
                        </label>
                        <input type="text" class="form-control" placeholder="ป้อนคำตอบ">
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">
                            <h4>เนื้อหาโดยสังเขป/ผลที่ได้รับจากการพัฒนาตนเอง <span style="color:red;">*</span></h4>
                        </label>
                        <input type="text" class="form-control" placeholder="ป้อนคำตอบ">
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">
                            <h4>สถานที่จัด <span style="color:red;">*</span></h4>
                        </label>
                        <input type="text" class="form-control" placeholder="ป้อนคำตอบ">
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="">
                            <h4>ท่านได้พัฒนาตนเองในเรื่องอื่น ๆ อีกหรือไม่ <span style="color:red;">*</span></h4>
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ZflexRadioDefault" id="ZflexRadioDefault1">
                            <label class="form-check-label" for="ZflexRadioDefault1">
                                ใช่
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ZflexRadioDefault" id="ZflexRadioDefault2">
                            <label class="form-check-label" for="ZflexRadioDefault2">
                                ไม่ใช่
                            </label>
                        </div>
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

</html>