<?php 
	require_once('header.php');
?>
	<div class="grid wide">
            <div class="row">
				<div class="c-3">
                </div>
            	<div class="c-9 home">
            		<div class="title">
            			<h1 class="title--text">Danh sách các lớp</h1>
            			<div class="title__function">
            				<input type="checkbox" hidden id="search">
            				<input type="text" class="form-control1" name="timkiem">
            			    <label for="search" class="fas fa-search function--icon"></label>
            				<a href="../../assets/add/addLop.php" class="function--link"><i class="fas fa-plus"></i></a>
            			</div>
            		</div>
            		<table class="table table-bordered">
            			<thead>
            				<th>STT</th>
            				<th>Tên lớp</th>
            				<th>Giáo viên  chủ nghiệm</th>
            				<th>Ngày bắt đầu</th>
            				<th>Ngày kết thúc</th>
            				<th>Lịch học</th>
            				<th>Độ tuổi trung bình</th>
            				<th>Số buổi</th>
            				<th>Sĩ số</th>
            				<th></th>
            				<th></th>
            			</thead>
            		</table>	
            	</div>
   			</div>
    </div>
<?php
	require_once('nav.php');
 ?>

   <script type="text/javascript" src="./assets/js/test.js"></script>
</body>

</html>