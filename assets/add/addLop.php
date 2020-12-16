<?php 
	require_once('../php/header.php');
?>
	<div class="grid wide">
            <div class="row">
				<div class="c-3">
                </div>
            	<div class="c-9 home">
            		<h1 class="title">Cập nhập danh sách các lớp</h1>
            		<form class="row" method="post" action="">
                        <div class="col c-6">
                            <div class="form__input">
                                <label for="tenlop">Tên lớp</label>
                                <input class="form-control2" type="text" name="tenlop" id="tenlop">
                            </div>
                            <div class="form__input">
                                <label for="gvcn">Giáo viên chủ nghiệm</label>
                                <input class="form-control2" type="text" name="gvcn" id="gvcn">
                            </div>
                            <div class="form__input">
                                <label for="ngaybd">Ngày bắt đầu</label>
                                <input class="form-control2" type="text" name="ngaybd" id="ngaybd">
                            </div>
                            <div class="form__input">
                                <label for="ngaykt">Ngày kết thúc</label>
                                <input class="form-control2" type="text" name="ngaykt" id="ngaykt">
                            </div>
                        </div>
                        <div class="col c-6">
                            <div class="form__input">
                                <label for="lichhoc">Lịch học</label>
                                <input class="form-control2" type="text" name="lichhoc" id="lichhoc">
                            </div>
                            <div class="form__input">
                                <label for="dotuoitb">Độ tuổi trung bình</label>
                                <input class="form-control2" type="text" name="dotuoitb" id="dotuoitb">
                            </div>
                            <div class="form__input">
                                <label for="sobuoi">Số buổi</label>
                                <input class="form-control2" type="text" name="sobuoi" id="sobuoi">
                            </div>
                            <div class="form__input">
                                <label for="siso">Sĩ số</label>
                                <input class="form-control2" type="text" name="siso" id="siso">
                            </div>
                        </div>
                        <button class="btn btn-primary">Lưu</button>    
                        <div class="a"><a href="javascript:history.go(-1)" class="btn btn-primary">Trở lại</a></div>      
                          
                    </form>
   			</div>
    </div>
<?php
	require_once('../php/nav.php');
 ?>

   <script type="text/javascript" src="./assets/js/test.js"></script>
</body>

</html>