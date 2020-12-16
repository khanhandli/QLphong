<?php 
    require_once('../php/header.php');
?>
    <div class="grid wide">
            <div class="row">
                <div class="c-3">
                </div>
                <div class="c-9 home">
                    <h1 class="title">Đăng kí lịch sử dụng phòng học </h1>
                    <form class="row" method="post" action="">
                        <div class="col c-6">
                            <div class="form__input">
                                <label for="ngay">Ngày(thứ)</label>
                                <input class="form-control2" type="text" name="ngay" id="ngay">
                            </div>
                            <div class="form__input">
                                <label for="thoigianbatdau">Thời gian bắt đầu</label>
                                <input class="form-control2" type="text" name="thoigianbatdau" id="thoigianbatdau">
                            </div>
                            <div class="form__input">
                                <label for="thoigianketthuc">Loại phòng</label>
                                <input class="form-control2" type="text" name="thoigianketthuc" id="thoigianketthuc">
                            </div>
                            <div class="form__input">
                                <label for="tenmh">Tên môn học</label>
                                <input class="form-control2" type="text" name="tenmh" id="tenmh">
                            </div>
                            
                        </div>
                        <div class="col c-6">
                            <div class="form__input">
                                <label for="tenlop">Tên lớp</label>
                                <input class="form-control2" type="text" name="tenlop" id="tenlop">
                            </div>
                            <div class="form__input">
                                <label for="giaovien">Tên giáo viên</label>
                                <input class="form-control2" type="text" name="giaovien" id="giaovien">
                            </div>
                            <div class="form__input">
                                <label for="diadiem">Địa điểm</label>
                                <input class="form-control2" type="text" name="diadiem" id="diadiem">
                            </div>
                            <div class="form__input">
                                <label for="hocky">Học kỳ</label>
                                <input class="form-control2" type="text" name="hocky" id="hocky">
                            </div>
                        </div>
                        <button class="btn btn-primary">Lưu</button>      
                        <div class="a"><a href="LichSuDungPhong.php" class="btn btn-primary">Xem lịch đã đăng kí</a></div>      
                        
                    </form>
            </div>
    </div>
<?php
    require_once('../php/nav.php');
 ?>

   <script type="text/javascript" src="./assets/js/test.js"></script>
</body>

</html>