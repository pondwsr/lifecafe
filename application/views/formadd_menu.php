<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Taviraj&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<title>Shop Registeration</title>

</head>
<style>
body{
	background-repeat:no-repeat;
	background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
	font-family: 'Taviraj', serif;
	}

</style>
<body>

<div id="container">
	<h1 align="center">เพิ่มเมนู</h1>

	<div id="body" align="center">
	<form action="http://localhost/lifecafe/index.php/Manage_menu/insert_menu" method="post">
	<table style="width:50%" border="0">
	
	<tr>
		<td>รหัสเมนู </td>
		<td>
			<input type="text" name="menu_id" placeholder="รหัสเมนู ">
		</td>
	</tr>
	<tr>
		<td>ชื่อเมนู</td>
		<td>
			<input type="text" name="menu_name" placeholder="ชื่อเมนู">
		</td>
	</tr>
	
	<tr>
		<td>ประเภทเมนู</td>
		<td>
		<select name="mcategory_id">
			<option value="1">เครื่องดื่ม</option>
			<option value="2">อาหาร</option>
			<option value="3">ของหวาน</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>เลือกร้านค้า</td>
		<td>
		<select name="mshop_id">
			<option value="m&m">m&m</option>
			<option value="starbug">starbug</option>
			<option value="amazon">amazon</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>ราคา</td>
		<td>
			<input type="text" name="price" placeholder="ราคา">
		</td>
	</tr>
	
	</table><br/>
	<center><input type="submit" value="เพิ่ม"><input type="reset" name="เคลียร์ข้อมูล"></center>
	</form>
</div>
<br/><br/><br/><br/>
<a href="http://localhost/lifecafe/index.php/manage_menu/showmenu" >แสดงรายการ</a>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>