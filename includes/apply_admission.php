<?php
if (isset($_GET['submit'])) {
	$name=$_GET['name'];
	$father=$_GET['father'];
	$dayboy=$_GET['dayboy'];
	$class=$_GET['class'];
	$birth=$_GET['birth'];
	$place=$_GET['place'];
	$nationality=$_GET['nationality'];
	$formB=$_GET['formB'];
	$school=$_GET['school'];
	$weight=$_GET['weight'];
	$siblings=$_GET['siblings'];
	$height=$_GET['height'];
	$position=$_GET['position'];
	$occupation=$_GET['occupation'];
	$mobile=$_GET['mobile'];
	$occupationMother=$_GET['occupationMother'];
	$mobileMother=$_GET['mobileMother'];
	$email=$_GET['email'];
	$home=$_GET['home'];


	$body="Applicant's Name: ".$name."\n\r";
	$body.="Father's Name: ".$father."\n\r";
	$body.="Day Boy: ".$dayboy."\n\r";
	$body.="Apply for class: ".$class."\n\r";
	$body.="Date of birth:  ".$birth."\n\r";
	$body.="Birth of place: ".$place."\n\r";
	$body.="Nationality: ".$nationality."\n\r";
	$body.="Form-B: ".$formB."\n\r";
	$body.="Present School of the applicant: ".$school."\n\r";
	$body.="Height (Without shoes): ".$height."\n\r";
	$body.="Weight (Without Jacket): ".$weight."\n\r";
	$body.="Siblings (No. of brothers & sisters): ".$siblings."\n\r";
	$body.="Position among siblings:: ".$position."\n\r";
	$body.="Father occupation: ".$occupation."\n\r";
	$body.="Father Mobile No: ".$mobile."\n\r";
	$body.="Mother occupation: ".$occupationMother."\n\r";
	$body.="Mother Mobile No: ".$mobileMother."\n\r";
	$body.="Email Address: ".$email."\n\r";
	$body.="Home address ".$home."\n\r";
	
	

	if(mail("admission@cadetcollegegujrat.com","$name Applied for $class",$body)){
		
		echo "<script>alert('Form is submitted successfully. You will get response soon. Thanks');</script>";
		echo "<script>window.location = 'http://cadetcollegegujrat.com';</script>";
	}
	else {
		echo "<script>alert('Form is not submitted due to some error. Kindly contact us. if the problem persist.');</script>";
		echo "<script>window.location = 'http://cadetcollegegujrat.com/admission.php';</script>";
	}
	
}
?>