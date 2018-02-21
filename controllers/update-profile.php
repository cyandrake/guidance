<?php
include 'con.php';
if (isset($_POST)) 
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['phone'];
	$street = $_POST['street'];
	$baranggay = $_POST['baranggay'];
	$city = $_POST['city'];
	$province = $_POST['province'];
	$birthday = $_POST['birthday'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$user_id = $_POST['user_id'];

	$sql = "UPDATE profiles SET 
		firstname = :firstname,
		lastname = :lastname,
		phone = :phone,
		street = :street,
		baranggay = :baranggay,
		city = :city,
		province = :province,
		birthday = :birthday,
		gender = :gender
	WHERE user_id = $user_id";
	$stmt = $con->prepare($sql);	
	$stmt->bindParam('firstname', $firstname);
	$stmt->bindParam('lastname', $lastname);
	$stmt->bindParam('phone', $phone);
	$stmt->bindParam('street', $street);
	$stmt->bindParam('baranggay', $baranggay);
	$stmt->bindParam('city', $city);
	$stmt->bindParam('province', $province);
	$stmt->bindParam('birthday', $birthday);
	$stmt->bindParam('gender', $gender);
	$stmt->execute();
	
	header('location: ../update-record.php?id='.$user_id);
}