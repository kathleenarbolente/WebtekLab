
<html>
<head>
<title>Create a profile</title>

<link rel = "stylesheet" type = "text/css" href = "css/createacc.css" />
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<!-- Custom Fonts -->
<link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
<!-- Plugin CSS -->
<link rel="stylesheet" href="css/animate.min.css" type="text/css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="container">
	<div class="row">
	<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class ="topmain">iClick! Salon Services</legend>
<p class = "create"> Create A New Account! </p>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Name</label>  
  <div class="col-md-5">
  <input id="Name"  name="first_name" type="text" placeholder="First name" class="form-control input-md" required="">
  <input id="Name"  name="last_name" type="text" placeholder="Last name" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Username</label>  
  <div class="col-md-5">
  <input id="Name"  name="username" type="text" placeholder="Username" class="form-control input-md" required="">  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password</label>
  <div class="col-md-5">
    <input id="passwordinput" name="password" type="password" placeholder="" class="form-control input-md" required="">
    <span class="help-block">max 16 characters</span>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="confirm_password">Confirm Password</label>
  <div class="col-md-5">
    <input id="confirm_password" name="confirm_password" type="password" placeholder="Re-type password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Gender</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="gender-0">
      <input type="radio" name="gender" id="gender-0" value="Male" checked="checked">
      Male
    </label> 
    <label class="radio-inline" for="gender-1">
      <input type="radio" name="gender" id="gender-1" value="Female">
      Female
    </label>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="address" name="address"></textarea>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="country">Country</label>
  <div class="col-md-5">
    <select id="country" name="country" class="form-control">
      	<option value="AF">Afghanistan</option>
		<option value="AX">Aland Islands</option>
		<option value="AL">Albania</option>
		<option value="DZ">Algeria</option>
		<option value="AS">American Samoa</option>
		<option value="AD">Andorra</option>
		<option value="AO">Angola</option>
		<option value="AI">Anguilla</option>
		<option value="AQ">Antarctica</option>
		<option value="AG">Antigua and Barbuda</option>
		<option value="AR">Argentina</option>
		<option value="AM">Armenia</option>
		<option value="AW">Aruba</option>
		<option value="AU">Australia</option>
		<option value="AT">Austria</option>
		<option value="AZ">Azerbaijan</option>
		<option value="BS">Bahamas</option>
		<option value="BH">Bahrain</option>
		<option value="BD">Bangladesh</option>
		<option value="BB">Barbados</option>
		<option value="BY">Belarus</option>
		<option value="BE">Belgium</option>
		<option value="BZ">Belize</option>
		<option value="BJ">Benin</option>
		<option value="BM">Bermuda</option>
		<option value="BT">Bhutan</option>
		<option value="BO">Bolivia, Plurinational State of</option>
		<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
		<option value="BA">Bosnia and Herzegovina</option>
		<option value="BW">Botswana</option>
		<option value="BV">Bouvet Island</option>
		<option value="BR">Brazil</option>
		<option value="IO">British Indian Ocean Territory</option>
		<option value="BN">Brunei Darussalam</option>
		<option value="BG">Bulgaria</option>
		<option value="BF">Burkina Faso</option>
		<option value="BI">Burundi</option>
		<option value="KH">Cambodia</option>
		<option value="CM">Cameroon</option>
		<option value="CA">Canada</option>
		<option value="CV">Cape Verde</option>
		<option value="KY">Cayman Islands</option>
		<option value="CF">Central African Republic</option>
		<option value="TD">Chad</option>
		<option value="CL">Chile</option>
		<option value="CN">China</option>
		<option value="CX">Christmas Island</option>
		<option value="CC">Cocos (Keeling) Islands</option>
		<option value="CO">Colombia</option>
		<option value="KM">Comoros</option>
		<option value="CG">Congo</option>
		<option value="CD">Congo, the Democratic Republic of the</option>
		<option value="CK">Cook Islands</option>
		<option value="CR">Costa Rica</option>
		<option value="CI">Côte d'Ivoire</option>
		<option value="HR">Croatia</option>
		<option value="CU">Cuba</option>
		<option value="CW">Curaçao</option>
		<option value="CY">Cyprus</option>
		<option value="CZ">Czech Republic</option>
		<option value="DK">Denmark</option>
		<option value="DJ">Djibouti</option>
		<option value="DM">Dominica</option>
		<option value="DO">Dominican Republic</option>
		<option value="EC">Ecuador</option>
		<option value="EG">Egypt</option>
		<option value="SV">El Salvador</option>
		<option value="GQ">Equatorial Guinea</option>
		<option value="ER">Eritrea</option>
		<option value="EE">Estonia</option>
		<option value="ET">Ethiopia</option>
		<option value="FK">Falkland Islands (Malvinas)</option>
		<option value="FO">Faroe Islands</option>
		<option value="FJ">Fiji</option>
		<option value="FI">Finland</option>
		<option value="FR">France</option>
		<option value="GF">French Guiana</option>
		<option value="PF">French Polynesia</option>
		<option value="TF">French Southern Territories</option>
		<option value="GA">Gabon</option>
		<option value="GM">Gambia</option>
		<option value="GE">Georgia</option>
		<option value="DE">Germany</option>
		<option value="GH">Ghana</option>
		<option value="GI">Gibraltar</option>
		<option value="GR">Greece</option>
		<option value="GL">Greenland</option>
		<option value="GD">Grenada</option>
		<option value="GP">Guadeloupe</option>
		<option value="GU">Guam</option>
		<option value="GT">Guatemala</option>
		<option value="GG">Guernsey</option>
		<option value="GN">Guinea</option>
		<option value="GW">Guinea-Bissau</option>
		<option value="GY">Guyana</option>
		<option value="HT">Haiti</option>
		<option value="HM">Heard Island and McDonald Islands</option>
		<option value="VA">Holy See (Vatican City State)</option>
		<option value="HN">Honduras</option>
		<option value="HK">Hong Kong</option>
		<option value="HU">Hungary</option>
		<option value="IS">Iceland</option>
		<option value="IN">India</option>
		<option value="ID">Indonesia</option>
		<option value="IR">Iran, Islamic Republic of</option>
		<option value="IQ">Iraq</option>
		<option value="IE">Ireland</option>
		<option value="IM">Isle of Man</option>
		<option value="IL">Israel</option>
		<option value="IT">Italy</option>
		<option value="JM">Jamaica</option>
		<option value="JP">Japan</option>
		<option value="JE">Jersey</option>
		<option value="JO">Jordan</option>
		<option value="KZ">Kazakhstan</option>
		<option value="KE">Kenya</option>
		<option value="KI">Kiribati</option>
		<option value="KP">Korea, Democratic People's Republic of</option>
		<option value="KR">Korea, Republic of</option>
		<option value="KW">Kuwait</option>
		<option value="KG">Kyrgyzstan</option>
		<option value="LA">Lao People's Democratic Republic</option>
		<option value="LV">Latvia</option>
		<option value="LB">Lebanon</option>
		<option value="LS">Lesotho</option>
		<option value="LR">Liberia</option>
		<option value="LY">Libya</option>
		<option value="LI">Liechtenstein</option>
		<option value="LT">Lithuania</option>
		<option value="LU">Luxembourg</option>
		<option value="MO">Macao</option>
		<option value="MK">Macedonia, the former Yugoslav Republic of</option>
		<option value="MG">Madagascar</option>
		<option value="MW">Malawi</option>
		<option value="MY">Malaysia</option>
		<option value="MV">Maldives</option>
		<option value="ML">Mali</option>
		<option value="MT">Malta</option>
		<option value="MH">Marshall Islands</option>
		<option value="MQ">Martinique</option>
		<option value="MR">Mauritania</option>
		<option value="MU">Mauritius</option>
		<option value="YT">Mayotte</option>
		<option value="MX">Mexico</option>
		<option value="FM">Micronesia, Federated States of</option>
		<option value="MD">Moldova, Republic of</option>
		<option value="MC">Monaco</option>
		<option value="MN">Mongolia</option>
		<option value="ME">Montenegro</option>
		<option value="MS">Montserrat</option>
		<option value="MA">Morocco</option>
		<option value="MZ">Mozambique</option>
		<option value="MM">Myanmar</option>
		<option value="NA">Namibia</option>
		<option value="NR">Nauru</option>
		<option value="NP">Nepal</option>
		<option value="NL">Netherlands</option>
		<option value="NC">New Caledonia</option>
		<option value="NZ">New Zealand</option>
		<option value="NI">Nicaragua</option>
		<option value="NE">Niger</option>
		<option value="NG">Nigeria</option>
		<option value="NU">Niue</option>
		<option value="NF">Norfolk Island</option>
		<option value="MP">Northern Mariana Islands</option>
		<option value="NO">Norway</option>
		<option value="OM">Oman</option>
		<option value="PK">Pakistan</option>
		<option value="PW">Palau</option>
		<option value="PS">Palestinian Territory, Occupied</option>
		<option value="PA">Panama</option>
		<option value="PG">Papua New Guinea</option>
		<option value="PY">Paraguay</option>
		<option value="PE">Peru</option>
		<option value="PH">Philippines</option>
		<option value="PN">Pitcairn</option>
		<option value="PL">Poland</option>
		<option value="PT">Portugal</option>
		<option value="PR">Puerto Rico</option>
		<option value="QA">Qatar</option>
		<option value="RE">Réunion</option>
		<option value="RO">Romania</option>
		<option value="RU">Russian Federation</option>
		<option value="RW">Rwanda</option>
		<option value="BL">Saint Barthélemy</option>
		<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
		<option value="KN">Saint Kitts and Nevis</option>
		<option value="LC">Saint Lucia</option>
		<option value="MF">Saint Martin (French part)</option>
		<option value="PM">Saint Pierre and Miquelon</option>
		<option value="VC">Saint Vincent and the Grenadines</option>
		<option value="WS">Samoa</option>
		<option value="SM">San Marino</option>
		<option value="ST">Sao Tome and Principe</option>
		<option value="SA">Saudi Arabia</option>
		<option value="SN">Senegal</option>
		<option value="RS">Serbia</option>
		<option value="SC">Seychelles</option>
		<option value="SL">Sierra Leone</option>
		<option value="SG">Singapore</option>
		<option value="SX">Sint Maarten (Dutch part)</option>
		<option value="SK">Slovakia</option>
		<option value="SI">Slovenia</option>
		<option value="SB">Solomon Islands</option>
		<option value="SO">Somalia</option>
		<option value="ZA">South Africa</option>
		<option value="GS">South Georgia and the South Sandwich Islands</option>
		<option value="SS">South Sudan</option>
		<option value="ES">Spain</option>
		<option value="LK">Sri Lanka</option>
		<option value="SD">Sudan</option>
		<option value="SR">Suriname</option>
		<option value="SJ">Svalbard and Jan Mayen</option>
		<option value="SZ">Swaziland</option>
		<option value="SE">Sweden</option>
		<option value="CH">Switzerland</option>
		<option value="SY">Syrian Arab Republic</option>
		<option value="TW">Taiwan, Province of China</option>
		<option value="TJ">Tajikistan</option>
		<option value="TZ">Tanzania, United Republic of</option>
		<option value="TH">Thailand</option>
		<option value="TL">Timor-Leste</option>
		<option value="TG">Togo</option>
		<option value="TK">Tokelau</option>
		<option value="TO">Tonga</option>
		<option value="TT">Trinidad and Tobago</option>
		<option value="TN">Tunisia</option>
		<option value="TR">Turkey</option>
		<option value="TM">Turkmenistan</option>
		<option value="TC">Turks and Caicos Islands</option>
		<option value="TV">Tuvalu</option>
		<option value="UG">Uganda</option>
		<option value="UA">Ukraine</option>
		<option value="AE">United Arab Emirates</option>
		<option value="GB">United Kingdom</option>
		<option value="US">United States</option>
		<option value="UM">United States Minor Outlying Islands</option>
		<option value="UY">Uruguay</option>
		<option value="UZ">Uzbekistan</option>
		<option value="VU">Vanuatu</option>
		<option value="VE">Venezuela, Bolivarian Republic of</option>
		<option value="VN">Viet Nam</option>
		<option value="VG">Virgin Islands, British</option>
		<option value="VI">Virgin Islands, U.S.</option>
		<option value="WF">Wallis and Futuna</option>
		<option value="EH">Western Sahara</option>
		<option value="YE">Yemen</option>
		<option value="ZM">Zambia</option>
		<option value="ZW">Zimbabwe</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mobilenumber">Mobile Number</label>  
  <div class="col-md-5">
  <input id="mobilenumber" name="mobilenumber" type="text" placeholder="Mobile Number" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailId">Email</label>  
  <div class="col-md-6">
  <input id="emailId" name="email" type="text" placeholder="user@domain.com" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="bio">Bio</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="address" name="SPbio" placeholder="Description of yourself"></textarea>
  </div>
</div>

<!-- Checkbox -->
<div class="form-group">
  <label class="col-md-4 control-label" for="serve">Services Offered</label>
  <div class="col-md-4">                     
	<div class="checkbox">
	  <label><input type="checkbox" name="serviceOffer" value="">Manicure and Pedicure</label>
	</div>
	<div class="checkbox">
	  <label><input type="checkbox" name="serviceOffer" value="">Facial</label>
	</div>
	<div class="checkbox">
	  <label><input type="checkbox" name="serviceOffer" value="">Hair</label>
	</div>
	<div class="checkbox">
	  <label><input type="checkbox" name="serviceOffer" value="">Makeup</label>
	</div>


  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="SPservices">Specific Services Offered</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="address" name="SPservices" placeholder="Specify services you can do"></textarea>
  </div>
</div>

<!-- Prepended checkbox -->
<div class="form-group">
  <label class="col-md-4 control-label" for="check_critiria"></label>
  <div class="col-md-6">
    <div class="input-group">
      <span class="input-group-addon">   
      	<label><input type="checkbox">I agree to the <a href=policy.html>Terms and Conditions</a></label>  
      </span>
    </div>
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="submit" ></input> 
  </div>
</div>
</fieldset>
</form>
	</div>
</div>

<!-- Section Footer
================================================== -->
<section class="bg-dark">
<div class="container">
<div class="row">
	<div class="col-md-12 text-center">
		<h1 class="bottombrand wow flipInX">iClick</h1>
		<p>
			&copy; 2017 
		</p>
	</div>
</div>
</div>
</section>

</body>
</html>

<?php  
  
include("database/db_conection.php");//make connection here  specify the path of the database
if(isset($_POST['submit']))  
{  
	
    
	$first_name=$_POST['first_name'];//here getting result from the post array after submitting the form.
	$last_name=$_POST['last_name'];
	$username=trim($_POST['username']);
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$country=$_POST['country'];
	$mobilenumber=trim($_POST['mobilenumber']);
	$email=$_POST['email'];
	$SPbio=$_POST['SPbio'];
	$serviceOffer=$_POST['serviceOffer'];
	$SPservices=$_POST['SPservices'];
	
	
    if($last_name=='' || $first_name=='' || $username=='' || $password=='' || $gender=='' || $country=='' || $mobilenumber=='')  
    {  
        //javascript use for input checking
		echo"<script>alert('Make sure to fill all input')</script>";		 
    }
	
   
	//here query check weather if user already registered so can't register again.  
    $check_username_query="select * from service_providers WHERE username='$username'";  
    $run_query=mysqli_query($dbcon,$check_username_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
	echo "<script>alert('Username $username is already exist in the database,Please try another one!')</script>";  
	exit();  
    }
	
	//insert the user into the database.  
    $sql="insert into service_providers (first_name,last_name,username,password,gender,address,country,mobilenumber,email,SPbio,serviceOffer,SPservices) VALUE ('$first_name','$last_name','$username','$password','$gender','$address','$country','$mobilenumber','$email','$SPbio','$serviceOffer','s$SPservices')";
    
        	//check if records added in table
	if(mysqli_query($dbcon, $sql)){
    echo"<script>alert('Registration Successful')</script>";
	} else{
		echo ("ERROR: Could not able to execute" . mysqli_error($dbcon));
	}
      
   
}  
  
?>  