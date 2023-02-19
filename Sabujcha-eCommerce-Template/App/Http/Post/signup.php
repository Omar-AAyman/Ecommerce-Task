<?php

include_once "../../Middlewares/RequestPost.php";
include_once "../../../vendor/autoload.php";
session_start();
// use App\Http\Requests\GetErrors;
use App\Database\Models\User;
use App\Http\Requests\Validation;

print_r($_POST);

$validator = new Validation;
$validator->setValueName('first_name')->setValue($_POST['first_name'])->required()->max(32);
$validator->setValueName('last_name')->setValue($_POST['last_name'])->required()->max(32);
$validator->setValueName('email')->setValue($_POST['email'])->required()->max(32)->regex('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/');
$validator->setValueName('phone')->setValue($_POST['phone'])->required()->regex('/^01[0125][0-9]{8}$/');
$validator->setValueName('password')->setValue($_POST['password'])->required()->regex('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-_]).{8,}$/')->confirmed($_POST['password_confirmation']);
$validator->setValueName('password_confirmation')->setValue($_POST['password_confirmation'])->required();
$validator->setValueName('gender')->setValue($_POST['gender'])->required()->in(['f', 'm']);
print_r($validator->getErrors());

// 1- Validation
// [
//     'first_name' => ['required', 'string', 'max:32'],
//     'last_name' => ['required', 'string', 'max:32'],
//     'email' => ['required', 'regex', 'unique:users,email', 'max:64'],
//     'phone' => ['required', 'regex', 'unique:users,phone'],
//     'password' => ['required', 'regex', 'confirmed'],
//     'password_confirmation' => ['required'],
//     'gender' => ['required', 'in:m,f']

// ];

$_SESSION['errors'] = $validator->getErrors();
if (!empty($_SESSION['errors'])) {
    header('location:../../../signup.php');
}
// Validation has Errors => save error into session => return redirect back with error message
// Successfull Validation

// generate code( 5 digits)
$verificationCode = rand(10000, 99999);
// password hashing
$user = new User;
$user->setFirstName($_POST['first_name'])->setLastName($_POST['last_name'])
->setEmail($_POST['email'])->setPhone($_POST['phone'])->setGender($_POST['gender'])
->setPassword(password_hash($_POST['password'],PASSWORD_BCRYPT));
// user's model => insert into users => data
// send mail with VC
// header to VC page    
// header('location:../../../verification-code.php');
