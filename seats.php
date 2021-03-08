<!--//https://codepen.io/siiron/pen/MYXZWg-->
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>time booking</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
		
<body>
<!-- display slot to which can book which cannot -->

<?php
	$query = "SELECT * FROM appointment WHERE ser_id='$ser_id' AND date='$date' ";
	$get_seat = mysqli_query($connection,$query);
	$seat_arr = array();
	while($row = mysqli_fetch_assoc($get_seat)) {
		$seat_arr[] = $row['time_list'];
	}
?>
<ol class="seats" >
        <li class="seat">
          <input type="checkbox" id="available" checked onclick="return false;">
		  <label for="available">N/A</label>
        </li>
        <li class="seat" >
          <input type="checkbox" id="booked" onclick="return false;">
          <label for="booked">A</label>
        </li>
</ol>
<div class="movie-seat" >
	<ol class="cabin fuselage" style="width:500px; margin:0px;">
		<li class="row row--1">
			<ol class="seats" style="padding-left:20px" type="10">
				<li class="seat">
					<input class="seat-check" name="seatlist[1]" type="checkbox" id="10.00am" value="10.00am" <?php if (in_array("10.00am", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="10.00am">10.00am</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[2]" type="checkbox" id="10.10am" value="10.10am"<?php if (in_array("10.10am", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="10.10am">10.10am</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[3]" type="checkbox" id="10.20am" value="10.20am" <?php if (in_array("10.20am", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="10.20am">10.20am</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[4]" type="checkbox" id="10.30am" value="10.30am" <?php if (in_array("10.30am", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="10.30am">10.30am</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[5]" type="checkbox" id="10.40am" value="10.40am" <?php if (in_array("10.40am", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="10.40am">10.40am</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[6]" type="checkbox" id="10.50am" value="10.50am" <?php if (in_array("10.50am", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="10.50am">10.50am</label>
				</li>
				</ol>
				</li>
				<li class="row row--2">
					<ol class="seats" style="padding-left:20px" type="11">
						<li class="seat">
					<input class="seat-check" name="seatlist[]" type="checkbox" id="11.00am" value="11.00am" <?php if (in_array("11.00am", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="11.00am">11.00am</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="11.10am" value="11.10am"<?php if (in_array("11.10am", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="11.10am">11.10am</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="11.20am" value="11.20am" <?php if (in_array("11.20am", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="11.20am">11.20am</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="11.30am" value="11.30am" <?php if (in_array("11.30am", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="11.30am">11.30am</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="11.40am" value="11.40am" <?php if (in_array("11.40am", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="11.40am">11.40am</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="11.50am" value="11.50am" <?php if (in_array("11.50am", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="11.50am">11.50am</label>
				</li>
					</ol>
				</li>
				<li class="row row--3">
					<ol class="seats" style="padding-left:20px" type="12">
						<li class="seat">
					<input class="seat-check" name="seatlist[]" type="checkbox" id="12.00pm" value="12.00pm" <?php if (in_array("12.00pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="12.00pm">12.00pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="12.10pm" value="12.10pm"<?php if (in_array("12.10pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="12.10pm">12.10pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="12.20pm" value="12.20pm" <?php if (in_array("12.20pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="12.20pm">12.20pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="12.30pm" value="12.30pm" <?php if (in_array("12.30pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="12.30pm">12.30pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="12.40pm" value="12.40pm" <?php if (in_array("12.40pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="12.40pm">12.40pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="12.50pm" value="12.50pm" <?php if (in_array("12.50pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="12.50pm">12.50pm</label>
				</li>
					</ol>
				</li>
				<li class="row row--4">
					<ol class="seats" style="padding-left:20px" type="1">
				<li class="seat">
					<input class="seat-check" name="seatlist[]" type="checkbox" id="1.00pm" value="1.00pm" <?php if (in_array("1.00pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="1.00pm">1.00pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="1.10pm" value="1.10pm"<?php if (in_array("1.10pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="1.10pm">1.10pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="1.20pm" value="1.20pm" <?php if (in_array("1.20pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="1.20pm">1.20pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="1.30pm" value="1.30pm" <?php if (in_array("1.30pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="1.30pm">1.30pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="1.40pm" value="1.40pm" <?php if (in_array("1.40pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="1.40pm">1.40pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="1.50pm" value="1.50pm" <?php if (in_array("1.50pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="1.50pm">1.50pm</label>
				</li>
					</ol>
				</li>
				<li class="row row--5">
					<ol class="seats" style="padding-left:20px" type="2">
						<li class="seat">
					<input class="seat-check" name="seatlist[]" type="checkbox" id="2.00pm" value="2.00pm" <?php if (in_array("2.00pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="2.00pm">2.00pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="2.10pm" value="2.10pm"<?php if (in_array("2.10pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="2.10pm">2.10pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="2.20pm" value="2.20pm" <?php if (in_array("2.20pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="2.20pm">2.20pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="2.30pm" value="2.30pm" <?php if (in_array("2.30pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="2.30pm">2.30pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="2.40pm" value="2.40pm" <?php if (in_array("2.40pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="2.40pm">2.40pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="2.50pm" value="2.50pm" <?php if (in_array("2.50pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="2.50pm">2.50pm</label>
				</li>
					</ol>
				</li>
				<li class="row row--6">
					<ol class="seats" style="padding-left:20px" type="3">
						<li class="seat">
					<input class="seat-check" name="seatlist[]" type="checkbox" id="3.00pm" value="3.00pm" <?php if (in_array("3.00pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="3.00pm">3.00pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="3.10pm" value="3.10pm"<?php if (in_array("3.10pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="3.10pm">3.10pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="3.20pm" value="3.20pm" <?php if (in_array("3.20pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="3.20pm">3.20pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="3.30pm" value="3.30pm" <?php if (in_array("3.30pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="3.30pm">3.30pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="3.40pm" value="3.40pm" <?php if (in_array("3.40pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="3.40pm">3.40pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="3.50pm" value="3.50pm" <?php if (in_array("3.50pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="3.50pm">3.50pm</label>
				</li>
				    </ol>
				</li>
				<li class="row row--7">
					<ol class="seats" style="padding-left:20px" type="4">
						<li class="seat">
					<input class="seat-check" name="seatlist[]" type="checkbox" id="4.00pm" value="4.00pm" <?php if (in_array("4.00pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="4.00pm">4.00pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="4.10pm" value="4.10pm"<?php if (in_array("4.10pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="4.10pm">4.10pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="4.20pm" value="4.20pm" <?php if (in_array("4.20pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="4.20pm">4.20pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="4.30pm" value="4.30pm" <?php if (in_array("4.30pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="4.30pm">4.30pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="4.40pm" value="4.40pm" <?php if (in_array("4.40pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="4.40pm">4.40pm</label>
				</li>
				<li class="seat">
					<input class="seats-check" name="seatlist[]" type="checkbox" id="4.50pm" value="4.50pm" <?php if (in_array("4.50pm", $seat_arr)) { echo "checked"; ?> onclick="<?php echo "return false;";}?>">
					<label for="4.50pm">4.50pm</label>
				</li>
				    </ol>
				</li>
				
			</ol>
	<?php  ?>

<script>
    
	var limit = <?php echo $count; ?>;
	var seat = <?php echo sizeof($seat_arr); ?>;
	var newlimit = seat+limit;

$(document).ready(function () {
    $("input[name='seatlist[]']").change(function () {
        var maxAllowed = newlimit;
        var cnt = $("input[name='seatlist[]']:checked").length;
        if (cnt > maxAllowed) {
            $(this).prop("checked", "");
            alert('You can just select ' + limit + ' time slot!!');
        }
    });
});
</script>
	
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
  
</body>
</html>

		 