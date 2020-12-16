<?php 
	require_once('header.php');
?>
	<div class="grid wide">
            <div class="row">
				<div class="c-3">
                </div>
            	<div class="c-9 home">
            		<div class="title">
            			<h1 class="title--text">Danh sách giáo viên</h1>
            			<div class="title__function">
            				<input type="checkbox" hidden id="search">
            				<input type="text" class="form-control1" name="timkiem">
            			    <label for="search" class="fas fa-search function--icon"></label>
            				<a href="../../assets/add/addGV.php" class="function--link"><i class="fas fa-plus"></i></a>
            			</div>
            		</div>
            		<table class="table table-bordered">
            			<thead>
            				<th>STT</th>
            				<th>Mã GV</th>
            				<th>Tên GV</th>
            				<th>Khoa quản lý</th>
            				<th>Bộ môn quản lý</th>
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