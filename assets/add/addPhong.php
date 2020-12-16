<?php 
    require_once('../php/header.php');
    require_once('../php/dbhelp.php');
    $id = '';
     if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $sql = 'SELECT * FROM PhongHoc WHERE id = '. $id;
        $classList = executeResult($sql);
        if ($classList != null && count($classList) > 0) {
            $class = $classList[0];
            $maphong2 = $class['MaPhong'];
            $tenphong2 = $class['TenPhong'];
            $soluong2 = $class['SoLuong'];
            $loaiphong2 = $class['LoaiPhong'];
        } else {

        }
    }
?>
    <div class="grid wide">
            <div class="row">
                <div class="c-3">
                </div>
                <div class="c-9 home">
                    <h1 class="title">Cập nhập danh sách phòng học</h1>
                    <form class="row" method="post" action="../php/DSPhongHoc.php">
                        <div class="col c-6">
                            <div class="form__input">
                                <label for="maphong">Mã phòng</label>
                                <input type="number" name="id" value="<?=$id?>" hidden>
                                <input class="form-control2" type="text" name="maphong" id="maphong" value="<?=$maphong2?>">
                            </div>
                            <div class="form__input">
                                <label for="tenphong">Tên phòng</label>
                                <input class="form-control2" type="text" name="tenphong" id="tenphong" value="<?=$tenphong2?>">
                            </div>
                        </div>
                        <div class="col c-6">
                            <div class="form__input">
                                <label for="soluong">Số lượng chỗ ngồi</label>
                                <input class="form-control2" type="text" name="soluong" id="soluong" value="<?=$soluong2?>">
                            </div>
                            <div class="form__input">
                                <label for="loaiphong">Loại phòng</label>
                                <!-- <input class="form-control2" type="text" name="loaiphong" id="loaiphong"> -->
                                <select class="form-control2" name="loaiphong" id="loaiphong">
                                    <option value="<?=$loaiphong2?>"><?=$loaiphong2?></option>
                                    <option value="Phòng học thường">Phòng học thường</option>
                                    <option value="Phòng máy chiếu">Phòng máy chiếu</option>
                                    <option value="Phòng thực hành">Phòng thực hành</option>
                                    <option value="Phòng máy tính">Phòng máy tính</option>
                                </select>
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

</body>

</html>