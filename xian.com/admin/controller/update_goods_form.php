<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link type="text/css" rel="stylesheet" href="css/css.css"/>
	
	
</head>
<body>

	<?php
		header("Content-Type:text/html;charset=utf8");
		$id = $_GET['id'];
		$conn = mysqli_connect('127.0.0.1','root','root','xian');
		$sql = "select * from goods where Goods_id=$id";
		$res = mysqli_query($conn,$sql);
		mysqli_close($conn);
		$row = mysqli_fetch_assoc($res);
	?>
	<div class="g_ins">
		<div class="container">
			<h3>商品修改</h3>
	<form action="./update_goods.php?id=<?php echo$id?>" method="post">
		 <tr>
               			 	<td>
                   			 商&nbsp;&nbsp;&nbsp;品&nbsp;&nbsp;&nbsp;名:&nbsp;&nbsp;<input type="text" name="Gname" id="username" value="<?php echo $row['Name']?>"/>
               			 	</td>
               			 	<td class="right">
                   		 		<span id="name_tip"><p></p></span>
                			</td>
            			</tr>
					       	<tr>
               			 	<td>
                   			 价&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;格:&nbsp;&nbsp;<input type="text" name="price" id="price" value="<?php echo $row['Price']?>"/>
               			 	</td>
               			 	<td class="right">
                   		 		<span id="O_price_tip"><p> </p></span>
                			</td>
            			</tr>
            			<tr>
               			 	<td>
                   			 原&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp价:&nbsp;&nbsp;<input type="text" name="O_price" id="O_price" value="<?php echo $row['Original_price']?>"/>
               			 	</td>
               			 	<td class="right">
                   		 		<span ><p id="un"> </p></span>
                			</td>
            			</tr>
						<tr>
               			 	<td>
                   			 已&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;售:&nbsp;&nbsp;<input type="text" name="Sales" id="Sales"  value="<?php echo $row['Sales']?>"/>
               			 	</td>
               			 	<td class="right">
                   		 		<span id="O_price_tip"><p id="un"> </p></span>
                			</td>
            			</tr>
            			<tr>
               			 	<td>
                   			 主&nbsp;&nbsp;&nbsp;花&nbsp;&nbsp;&nbsp;材:&nbsp;&nbsp;<input type="text" name="Major_flower" id="Major_flower" value="<?php echo $row['Major_flower']?>"/>
               			 	</td>
               			 	<td class="right">
                   		 		<span ><p id="un"> </p></span>
                			</td>
            			</tr>
            			<tr>
               			 	<td>
                   			 主&nbsp;要&nbsp;花&nbsp;材:&nbsp;&nbsp;<input type="text" name="Major_flower_plus" id="Major_flower_plus"  value="<?php echo $row['Major_flower_plus']?>"/>
               			 	</td>
               			 	<td class="right">
                   		 		<span ><p id="un"> </p></span>
                			</td>
            			</tr>
            			<tr>
               			 	<td>
                   			 副&nbsp;&nbsp;&nbsp;花&nbsp;&nbsp;&nbsp;材:&nbsp;&nbsp;<input type="text" name="Deputy_flower" id="Deputy_flower"  value="<?php echo $row['Deputy_flower']?>"/>
               			 	</td>
               			 	<td class="right">
                   		 		<span ><p id="un"> </p></span>
                			</td>
            			</tr>
						<tr>
               			 	<td>
                   			 花&nbsp;束&nbsp;类&nbsp;别:&nbsp;&nbsp;<input type="text" name="Classification_flower" id="Classification_flower"  value="<?php echo $row['Classification_flower']?>"/>
               			 	</td>
               			 	<td class="right">
                   		 		<span ><p id="un"> </p></span>
                			</td>
            			</tr>
            			<tr>
               			 	<td>
                   			 绿&nbsp;植&nbsp;工&nbsp;艺:&nbsp;&nbsp;<input type="text" name="Tech" id="Tech"  value="<?php echo $row['Technology']?>"/>
               			 	</td>
               			 	<td class="right">
                   		 		<span ><p id="un"> </p></span>
                			</td>
            			</tr>	
                  <tr>
                      <td>
                         花&nbsp;束&nbsp;包&nbsp;装:&nbsp;&nbsp;<input type="text" name="Decoration" id="Decoration"  value="<?php echo $row['Decoration']?>"/>
                      </td>
                      <td class="right">
                          <span ><p id="un"> </p></span>
                      </td>
                  </tr> 	
						      <tr>
               			 	<td>
                   			 适&nbsp;用&nbsp;对&nbsp;象:&nbsp;&nbsp;<input type="text" name="Object" id="Object"  value="<?php echo $row['Object']?>"/>
               			 	</td>
               			 	<td class="right">
                   		 		<span ><p id="un"> </p></span>
                			</td>
            			</tr>	
						      <tr>
               			 	<td>
                   			 适&nbsp;用&nbsp;节&nbsp;日:&nbsp;&nbsp;<input type="text" name="Holiday" id="Holiday"   value="<?php echo $row['Holiday']?>"/>
               			 	</td>
               			 	<td class="right">
                   		 		<span ><p id="un"> </p></span>
                			</td>
            			</tr>
            			<tr>
               			 	<td>
                   			 适&nbsp;用&nbsp;场&nbsp;景:&nbsp;&nbsp;<input type="text" name="Scene" id="Scene"  value="<?php echo $row['Scene']?>"/>
               			 	</td>
               			 	<td class="right">
                   		 		<span ><p id="un"> </p></span>
                			</td>
            			</tr>	
            			<tr>
               			 	<td>
                   			 颜&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;色:&nbsp;&nbsp;<input type="text" name="color" id="color" value="<?php echo $row['Color']?>"/>
               			 	</td>
               			 	<td class="right">
                   		 		<span ><p id="un"> </p></span>
                			</td>
            			</tr>	
            			<tr>
               			 	<td>
                   			 图&nbsp;片&nbsp;地&nbsp;址:&nbsp;&nbsp;<input type="text" name="Photo_addr" id="Photo_addr" value="<?php echo $row['Photo_address']?>"/>
               			 	</td>
               			 	<td class="right">
                   		 		<span ><p id="un"> </p></span>
                			</td>
            			</tr>		
						 <tr>
               				 <td>
                   				 <input id="submit" type="submit" value="提交"/>&nbsp;&nbsp;&nbsp;&nbsp;<input id="reset" type="reset" value="重置">
                			</td>
                			<td class="right">
           
               				 </td>
          			  </tr>
					
					</table>

	</form>
	</div>
	</div>
</body>
</html>



