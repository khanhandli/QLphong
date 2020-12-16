<?php 
	require_once('../php/header.php');
?>
	<div class="grid wide">
            <div class="row">
				<div class="c-3">
                </div>
            	<div class="c-9 home">
            		<h1 class="title">Cập nhập danh sách giáo viên </h1>
            		<form class="row" method="post" action="">
                        <div class="col c-6">
                            <div class="form__input">
                                <label for="tenlop">Mã giáo viên</label>
                                <input class="form-control2" type="text" name="tenlop" id="tenlop">
                            </div>
                            <div class="form__input">
                                <label for="gvcn">Tên giáo viên</label>
                                <input class="form-control2" type="text" name="gvcn" id="gvcn">
                            </div>
                            
                        </div>
                        <div class="col c-6">
                            <div class="form__input">
                                <label for="lichhoc">Khoa quản lý</label>
                                <input class="form-control2" type="text" name="lichhoc" id="lichhoc">
                            </div>
                            <div class="form__input">
                                <label for="dotuoitb">Bộ môn quản lý</label>
                                <input class="form-control2" type="text" name="dotuoitb" id="dotuoitb">
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