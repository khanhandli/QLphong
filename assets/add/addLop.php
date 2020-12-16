<?php 
	require_once('../php/header.php');
    require_once('../php/dbhelp.php');
    $id = '';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $sql = 'SELECT * FROM LopHoc WHERE id = '. $id;
        $classList = executeResult($sql);
        if ($classList != null && count($classList) > 0) {
            $class = $classList[0];
            $tenlop2 = $class['TenLop'];
            $gvcn2 = $class['GVCN'];
            $ngaybd2 = $class['NgayBD'];
            $ngaykt2 = $class['NgayKT'];
            $lichhoc2= $class['LichHoc'];
            $dotuoitb2 = $class['DoTuoiTB'];
            $sobuoi2= $class['SoBuoi'];
            $siso2 = $class['SiSo'];
        } else {

        }
    }
?>
	<div class="grid wide">
            <div class="row">
				<div class="c-3">
                </div>
            	<div class="c-9 home">
            		<h1 class="title">Cập nhập danh sách các lớp</h1>
            		<form class="row" method="post" action="../php/DSLopHoc.php">
                        <div class="col c-6">
                            <div class="form__input">
                                <label for="tenlop">Tên lớp</label>
                                <input type="number" name="id" value="<?=$id?>" hidden>
                                <input class="form-control2" type="text" name="tenlop" id="tenlop" value="<?=$tenlop2?>">
                            </div>
                            <div class="form__input">
                                <label for="gvcn">Giáo viên chủ nghiệm</label>
                                <input class="form-control2" type="text" name="gvcn" id="gvcn" value="<?=$gvcn2?>">
                            </div>
                            <div class="form__input">
                                <label for="ngaybd">Ngày bắt đầu</label>
                                <input type="date"  class="input-css" id="ngaybd" name="ngaybd"
                                               min="2010-01-01" max="2030-12-31" value="<?=$ngaybd2?>">
                            </div>
                            <div class="form__input">
                                <label for="ngaykt">Ngày kết thúc</label>
                                <input type="date" class="input-css" id="ngaykt" name="ngaykt"
                                               min="2010-01-01" max="2030-12-31" value="<?=$ngaykt2?>">
                            </div>
                        </div>
                        <div class="col c-6">
                            <div class="form__input">
                                <label for="lichhoc">Lịch học</label>
                                <input class="form-control2" type="text" name="lichhoc" id="lichhoc" value="<?=$lichhoc2?>">
                            </div>
                            <div class="form__input">
                                <label for="dotuoitb">Độ tuổi trung bình</label>
                                <input class="form-control2" type="text" name="dotuoitb" id="dotuoitb" value="<?=$dotuoitb2?>">
                            </div>
                            <div class="form__input">
                                <label for="sobuoi">Số buổi</label>
                                <input class="form-control2" type="text" name="sobuoi" id="sobuoi" value="<?=$sobuoi2?>">
                            </div>
                            <div class="form__input">
                                <label for="siso">Sĩ số</label>
                                <input class="form-control2" type="text" name="siso" id="siso" value="<?=$siso2?>">
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