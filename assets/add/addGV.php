<?php 
	require_once('../php/header.php');
    require_once('../php/dbhelp.php');
    $id = '';
    $magv2 = $tengv2 = $khoaql2 = $bomonql2 = '';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $sql = 'SELECT * FROM GiaoVien WHERE id = '. $id;
        $teacherList = executeResult($sql);
        if ($teacherList != null && count($teacherList) > 0) {
            $teacher = $teacherList[0];
            $magv2 = $teacher['MaGV'];
            $tengv2 = $teacher['TenGV'];
            $khoaql2 = $teacher['KhoaQL'];
            $bomonql2 = $teacher['BoMonQL'];
        } else {

        }
    }
?>
	<div class="grid wide">
            <div class="row">
				<div class="c-3">
                </div>
            	<div class="c-9 home">
            		<h1 class="title">Cập nhập danh sách giáo viên </h1>
            		<form class="row" method="post" action="../php/DSGiaoVien.php">
                        <div class="col c-6">
                            <div class="form__input">
                                <label for="magv">Mã giáo viên</label>
                                <input type="number" name="id" value="<?=$id?>" hidden>
                                <input class="form-control2" type="text" name="magv" id="magv" value="<?=$magv2?>">
                            </div>
                            <div class="form__input">
                                <label for="tengv">Tên giáo viên</label>
                                <input class="form-control2" type="text" name="tengv" id="tengv" value="<?=$tengv2?>">
                            </div>
                            
                        </div>
                        <div class="col c-6">
                            <div class="form__input">
                                <label for="khoaql">Khoa quản lý</label>
                                <input class="form-control2" type="text" name="khoaql" id="khoaql" value="<?=$khoaql2?>">
                            </div>
                            <div class="form__input">
                                <label for="bomonql">Bộ môn quản lý</label>
                                <input class="form-control2" type="text" name="bomonql" id="bomonql" value="<?=$bomonql2?>">
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