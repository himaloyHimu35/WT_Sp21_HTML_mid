<?php
	$nname="";
	$err_nname="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$conpass="";
	$err_conpass="";
	$email="";
	$err_email="";
	$number ="";
	$err_number="";
	$stad="";
	$code="";
	$err_code="";
	$err_stad="";
	$cityad="";
	$err_cityad="";
	$statead="";
	$err_statead="";
	$pocode="";
	$err_pocode="";
	$dob="";
	$err_dob="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$gender="";
	$err_gender="";
	$hear="";
	$err_hear="";
	$bio="";
	$err_bio="";
	
	
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
			If (empty($_POST["nname"])){
				$err_nname="*Name is Required";
			}
			else{
				$nname=htmlspecialchars($_POST["nname"]);
			}
			If (empty($_POST["uname"])){
				$err_uname="*Username is Required";
			}
			elseif (strlen($_POST["uname"])<6){
				$err_uname="*Username must contain at least 6 characters ";
			}
			elseif (strpos($_POST["uname"],"  ")) {
				$err_uname="*space is not allowed";
			}
			else{
				$uname=htmlspecialchars($_POST["uname"]);
			}
			if(empty($_POST["pass"]))
			 {
				 $err_pass="*Password is Required";
			 }
			 elseif (strlen($_POST["pass"])<8) 
			 {
				$err_pass=["*Password should be more than 8 character"];
			 }
			 elseif(!strpos($_POST["pass"],"#"))
			 {
				 $err_pass="*Password must contain at least one special character";
			 }
			 elseif(!!strpos($_POST["pass"],"[0-9]"))
			 {
				 $err_pass="*Password must contain Numeric values";
			 }
			 elseif(!!ctype_upper($_POST["pass"]))
			 {
				 $err_pass="*Password must contain UpperCase values";
			 }
			 elseif(!!ctype_lower($_POST["pass"]))
			 {
				 $err_pass="*Password must contain LowerCase values";
			 }

			 elseif(strpos($_POST["pass"]," "))
			 {
				 $err_pass="*Password must not contain spaces";
			 }
			 else
			 {
				 $pass=$_POST["pass"];
			 
			 }
			if(empty($_POST["conpass"]))
			 {
				 $err_conpass="*Confarm Password Required";
			 }
			 elseif (strlen($_POST["conpass"])<8) 
			 {
				$err_conpass="*Password must be 8 charachters long";
			 }
			 elseif(!strpos($_POST["conpass"],"#"))
			 {
				 $err_conpass="*Password must contain special character";
			 }
			 elseif(!!strpos($_POST["pass"],"[0-9]"))
			 {
				 $err_conpass="*Password must contain Numeric values";
			 }
			 elseif(!!ctype_upper($_POST["conpass"]))
			 {
				 $err_conpass="*Password must contain UpperCase values";
			 }
			 elseif(!!ctype_lower($_POST["conpass"]))
			 {
				 $err_conpass="*Password must contain LowerCase values";
			 }

			 elseif(strpos($_POST["conpass"]," "))
			 {
				 $err_conpass="*Password must not contain spaces";
			 }
			 else
			 {
				 $conpass=htmlspecialchars($_POST["conpass"]);
			 
		     }
			If (empty($_POST["email"])){
				$err_email="*Email Required";
			 }
				elseif(!strpos($_POST["email"],'@'))
			 {
				 $err_email="@ neededc for email";
			 }
			elseif(!strpos($_POST["email"],'.'))
			 {
				 $err_email="*dot(.) required";
			 }
			else{
				$email=htmlspecialchars($_POST["email"]);
			 }
			If (empty($_POST["number"])){
				$err_number="*Phone Number Required";
			 }
			else{
				$number=htmlspecialchars($_POST["number"]);
			 }
			If (empty($_POST["stad"])){
				$err_stad="*Street Address Required";
			 }
			else{
				$stad=htmlspecialchars($_POST["stad"]);
			 }
			If (empty($_POST["code"])){
				$err_code="*Region Code Required||";
			 }
			else{
				$code=htmlspecialchars($_POST["code"]);
			 }
			if(empty($_POST["city"]))
			 {
				$err_cityad="*City Name Required||";
			 }
			else
			{
				$cityad=htmlspecialchars($_POST["city"]);
			}
			 if(empty($_POST["state"]))
			{
				$err_statead="*State Name Required";
			}
			else
			{
				$statead=htmlspecialchars($_POST["state"]);
			}
			if(empty($_POST["pocode"]))
			 {
				$err_pocode="*Postal/Zip Code Required";
			 }
			 else
			 {
				$pocode=htmlspecialchars($_POST["pocode"]);
			 }
			 If (empty($_POST["dob"])){
				$err_dob="*Date of Birth Required";
			}
			else{
				$dob=htmlspecialchars($_POST["dob"]);
			}
			If (empty($_POST["day"])){
				$err_day="*Name Required";
			}
			else{
				$day=htmlspecialchars($_POST["day"]);
			}
			If (empty($_POST["day"])){
				$err_day="*Day Required";
			}
			else{
				$day=htmlspecialchars($_POST["day"]);
			}
			If (empty($_POST["month"])){
				$err_month="*Month Required";
			}
			else{
				$month=htmlspecialchars($_POST["day"]);
			}
			If (empty($_POST["year"])){
				$err_year="*Year Required";
			}
			else{
				$year=htmlspecialchars($_POST["year"]);
			}
			if(!isset($_POST["gender"])){
				$err_gender="*[Gender Required]";
			 }
			else{
				$gender=htmlspecialchars($_POST["gender"]);
			 }
			 
			if(!isset($_POST["hear"])){
				
				$err_hear="*At least one option must be selected";
			 }
			else
			{
			 $hear=htmlspecialchars($_POST["hear"]);
			}
			
			if(empty($_POST["bio"]))
			{
			 $err_bio="[Bio Required]";
			}
			else
			{
			$bio=htmlspecialchars($_POST["bio"]);
			}
		
		}
		
?>

<html>
	<head> </head>
	<body>
		<fieldset>
	<tr><legend><h1>Club Member Registration</h1></legend></tr>
	<form action="" method="post">
			<table> 
			<tr>
					<td><span>Name </span></td>
					<td>:<input type="text" name="nname" value="<?php echo $nname ; ?> " placeholder="nname">
						<span><?php echo $err_nname;?></span></td>
				</tr>
				<tr>
					<td><span>Username </span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname ; ?> " placeholder="Username">
						<span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span>Password</span></td>
					<td>:<input type="password" value=""<?php echo $pass;?>"placeholder="Password" name="pass">
						<span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span>Confirmed Password</span></td>
					<td>:<input type="password" value=""<?php echo $conpass;?>"placeholder="Password" name="conpass">
						<span><?php echo $err_conpass;?></span></td>
				</tr>
					<tr>
					<td><span>Email</span></td>
					<td>:<input type="text" value="<?php echo $email;?>" name="email">
						<span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span>Phone</span></td>
					<td>:<input type="text" name="code" size="4.5" placeholder = "Code" value="<?php echo $code;?>"> - <input type="text" name="number" placeholder = "number" size="8" value="<?php echo $number;?>">
					<span><?php echo $err_code;?></span><span><?php echo $err_number;?></span></td>
				</tr>
				<tr>
					<td><span>Address</span></td>
					<td>:<input type="text" name="stad" placeholder = "Street Address" size="19" value="<?php echo $stad;?>"placeholder="Street Address">
					<span><?php echo $err_stad;?></span></td>
				</tr>
				<tr>
					<td></td>
					<td>:<input type="text" name="city" placeholder = "City" value="<?php echo $cityad;?>" placeholder = "City" size="5"> - <input type="text" name="state" placeholder = "State" value="<?php echo $statead;?>" placeholder ="State" size="6">
					<span><?php echo $err_cityad;?></span><span><?php echo $err_statead;?></span></td>
				</tr>
				<tr>
					<td> <span></span></td>
					<td>:<input type="text" name="pocode" value="<?php echo $pocode;?>" placeholder = "Postal/Zip Code">
					<span><?php echo $err_pocode;?></span></td>
				</tr>

				<tr>
				<td><span>Birth Date</span></td>
				
				<td>: <select name="day">
				<option disabled selected>Day</option>
					<?php
					for($i=1;$i<=31;$i++){
						echo "<option value = ",$i,">",$i,"</option>";
						
					}
					?>
					</select>
					
					<select name="month">
					<option disabled selected>Month </option>
					<?php
					$mont= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($month=0;$month<count($mont);$month++)
						{
							echo "<option>$mont[$month]</option>";
						}
					?>
				</select>
					
					<select name="year">
					<option disabled selected>Year </option>
					<?php
					for($z=1950;$z<=2050;$z++){
						echo "<option value = '",$z,"'>",$z,"</option>";
					}
					?>
					
					</select>
						<span><?php echo $err_day;?></span>
						<span><?php echo $err_month;?></span>
						<span><?php echo $err_year;?></span>
				</td>
				
				</tr>
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" name="gender" value=""><?php echo $gender;?><span>Male</span>
					    <input type="radio" name="gender" value=""><?php echo $gender;?><span>Female</span>
						<span><?php echo $err_gender;?></span></td>
				</tr>
				<tr>
				<td><span>Where did you hear about us? :</span></td>
				<td>
					<input type="checkbox" name="hear" value=""><?php echo $hear;?><span>A Friend</span><br>
					<input type="checkbox" name="hear" value=""><?php echo $hear;?><span>Blog Post </span><br>
					<input type="checkbox" name="hear" value=""><?php echo $hear;?><span>News Article </span><br>
					<span><?php echo $err_hear;?></span></td>
				</tr>
				<tr>
					<td><span>Bio</span></td>
					<td>:<textarea name="bio"><?php echo $bio;?></textarea>
					<span><?php echo $err_bio ?></span></td>
				</tr>
				<tr>
					<td><input type="submit" name="register "value="Register"></td>
				</tr>
			</table>
			
		</form>	
		
	</body>
 </html>