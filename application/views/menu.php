<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Shop Registeration</title>

</head>

<body>
<div id="container">
	<h1 align="center">เพิ่มเมนู</h1>
<TABLE>
            <CAPTION> ชื่อตาราง </CAPTION>
            <TR>
                     <TH> menu_id </TH>
                     <TH> menu_name </TH>
                     <TH> mcategory_id </TH>
                     <TH> mshop_id </TH>
                     <TH> mprice </TH>
                     <TH> Edit </TH>
                     <TH> Delete </TH>
            </TR>
            <?php
            foreach($data->result() as $row){
            ?>
            
            <TR>
                     <TD> <?php echo $row->menu_id?> </TD>
                     <TD> <?php echo $row->menu_name?> </TD>
                     <TD> <?php echo $row->mcategory_id?> </TD>
                     <TD> <?php echo $row->mshop_id?> </TD>
                     <TD> <?php echo $row->mprice?> </TD>
                     <TD> <a href="http://localhost/lifecafe/index.php/manage_menu/edit_menu?m_id=<?php echo $row->menu_id?>">Edit </a> </TD>
                     <TD> <a href="http://localhost/lifecafe/index.php/manage_menu/delete_menu?m_id=<?php echo $row->menu_id?>" > Delete</a> </TD>
             </TR>

            
             
             <?php
             }
            ?>
</TABLE>  

</body>
</html>