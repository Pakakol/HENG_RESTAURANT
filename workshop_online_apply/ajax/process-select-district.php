<?php

	require '../connect.php';	
	$value = $_POST['value'];
?>

		<select class="form-control select-other" id="district_school" name="district_school">
			
			<?php
				$strSql ="SELECT * FROM district WHERE province_id='$value' ";
				$strQuery= mysqli_query($objConnect,$strSql);

				while ($rows = mysqli_fetch_array($strQuery)) {
					
					$district = $rows['district_id'];
					$district_name = $rows['district_name'];
			?>

				<option value="<?=$district_id?>"><?=$district_name?></option>
			

			<?php
				}

		?>
					
		</select>