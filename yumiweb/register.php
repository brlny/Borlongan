<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup page</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="./build/css/demo.css" rel="stylesheet">
    <link href="./build/css/intlTelInput.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
	<style>
        body {
            background-color: #ECE3CE;
            font-family: 'Kanit', sans-serif;
        }

        .container {
            margin-top: 10px;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #023020;
            color: #fff;
            padding: 15px;
            border-bottom: none;
        }

        .card-title {
            color: #023020;
        }

		.sign {
			color: #ECE3CE;
		}

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
        }

        .form-btn {
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #023020;
            border: none;
        }

        .btn-primary:hover {
            background-color: #ECE3CE;
            color: #023020;
        }

        .text-muted {
            color: #023020;
        }

        .alert {
            margin-top: 20px;
        }

        .intl-tel-input {
            width: 100%;
        }
    </style>

</head>
<body>
	<div class="container">
	<br><br>
	<div class="row justify-content-center">
	<div class="col-md-6">
	<div class="card">
	<header class="card-header">
		<h4 class="card-title mt-2 sign">Sign up</h4>
	</header>
	<article class="card-body">
	<form action="register.php" method="post">
	<?php
        require_once "database.php";

        if (isset($_POST["submit"])) {
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $lot_blk = $_POST["lot_blk"];
            $street = $_POST["street"];
            $phase_subdivision = $_POST["phase_subdivision"];
            $barangay = $_POST["barangay"];
            $province = $_POST["province"];
            $city_municipality = $_POST["city_municipality"];
            $country = $_POST["country"];
            $phone = $_POST["phone"];
            $password = $_POST["password"];
            $repeatpassword = $_POST["repeatpassword"];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $errors = array();

            if (empty($firstname) || empty($lastname) || empty($email) || empty($lot_blk) || empty($street) || empty($phase_subdivision) || empty($barangay) || empty($province) || empty($city_municipality) || empty($country) || empty($phone) || empty($password) || empty($repeatpassword)) {
                array_push($errors, "All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid");
            }
            if (strlen($password) < 8 ) {
                array_push($errors, "Password must be at least 8 characters long");
            }
            if ($password !== $repeatpassword) {
                array_push($errors, "Password does not match");
            }

            $sqlCheckEmail = "SELECT * FROM account_details_tbl WHERE email = ?";
            $stmtCheckEmail = mysqli_stmt_init($conn);

            if (mysqli_stmt_prepare($stmtCheckEmail, $sqlCheckEmail)) {
                mysqli_stmt_bind_param($stmtCheckEmail, "s", $email);
                mysqli_stmt_execute($stmtCheckEmail);
                $resultCheckEmail = mysqli_stmt_get_result($stmtCheckEmail);

                if (mysqli_num_rows($resultCheckEmail) > 0) {
                    array_push($errors, "Email already exists!");
                }
            } else {
                die("Error in preparing SQL statement to check email");
            }

            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            } else {
                $sqlInsertInfo = "INSERT INTO account_details_tbl (firstname, lastname, blk_lot, street, phase_subdivision, barangay, city_municipality, province, country, contact_no, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmtInsertInfo = mysqli_stmt_init($conn);

                if (mysqli_stmt_prepare($stmtInsertInfo, $sqlInsertInfo)) {
                    mysqli_stmt_bind_param($stmtInsertInfo, "ssssssssssss", $firstname, $lastname, $lot_blk, $street, $phase_subdivision, $barangay, $city_municipality, $province, $country, $phone, $email, $passwordHash);
                    mysqli_stmt_execute($stmtInsertInfo);
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";

                    // Get the AccountID of the inserted user
                    $accountID = mysqli_insert_id($conn);
                } else {
                    die("Error in preparing SQL statement to insert user account");
                }
            }

        }
        ?>

		<div class="form-row">
			<div class="col form-group">
				<label>First name </label>   
				<input type="text" name="firstname" class="form-control" placeholder="" required>
			</div> <!-- form-group end.// -->
			<div class="col form-group">
				<label>Last name</label>
				<input type="text" name="lastname" class="form-control" placeholder=" " required>
			</div> <!-- form-group end.// -->
		</div> <!-- form-row end.// -->

		<div class="form-group">
			<label>Email address</label>
			<input type="email" name="email" class="form-control" placeholder="" required>
		</div> <!-- form-group end.// -->

		<div class="form-group">
			<label>Create password</label>
			<input class="form-control" name="password" type="password" required>
		</div> <!-- form-group end.// --> 

		<div class="form-group">
			<label>Repeat password</label>
			<input class="form-control" name="repeatpassword" type="password" required>
		</div> <!-- form-group end.// --> 

		<!--lot/blk and street-->
		<div class="form-row">
			<div class="col form-group">
				<label>Lot/Blk</label>   
				<input type="text" name="lot_blk" class="form-control" placeholder="" required>
			</div> <!-- form-group end.// -->
			<div class="col form-group">
				<label>Street</label>
				<input type="text" name="street" class="form-control" placeholder=" " required>
			</div> <!-- form-group end.// -->
		</div> <!-- form-row end.// -->

		<!--phase/subdivision and barangay-->
		<div class="form-row">
			<div class="col form-group">
				<label>Phase/Subdivision</label>   
				<input type="text" name="phase_subdivision" class="form-control" placeholder="" required>
			</div> <!-- form-group end.// -->
		</div> <!-- form-row end.// -->


		<!--provice and city-->
		<div class="form-row">
			<div class="col form-group">
				<label>Province</label>
				<select id="provinces" name="province" class="form-control" required>
					<option value="" disabled selected>Select Province</option>
				</select>
			</div> <!-- form-group end.// -->
			<div class="col form-group">
				<label>City/Municipality</label>
				<select id="cities" name="city_municipality" class="form-control" required>
					<option value="" disabled selected>Select City/Municipality</option>
				</select>
			</div> <!-- form-group end.// -->
			<div class="col form-group">
				<label>Barangay</label>
				<select id="barangay" name="barangay" class="form-control" required>
					<option value="" disabled selected>Select Barangay</option>
				</select>
			</div> <!-- form-group end.// -->
		</div>

		<div class="form-group">
			<label>Country</label>
			<select id="countries" name="country" class="form-control" name="countries" required>
			</select>
		</div> <!-- form-group end.// -->

		<div class="form-group">
			<input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required maxlength="20">
		</div>
		
		<div class="form-btn">
			<input type="submit" class="btn btn-primary btn-block" value="Register" name="submit">
		</div> <!-- form-group// -->
		
		<div class="already-signed-up">
            <p>Already signed up? <a href="login.php">Login Here</a></p>

        <div class="already-signed-up">
            <p>Go back? <a href="index.php">Click Here</a></p>
        </div>
	</form>
	</article> <!-- card-body end .// -->
	</div> <!-- card.// -->
	</div> <!-- col.//-->
	</div> <!-- row.//-->
	</div> 
<!--container end.//-->
	<br><br>
		<script src="./build/js/intlTelInput.js"></script>
		<script src="country.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<script src="province_barangay_city.js"></script>
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				var input = document.querySelector("#phone");
				var iti = window.intlTelInput(input, {
					utilsScript: "./build/js/utils.js", 
					separateDialCode: true,         
				});

				// Event listener for handling changes in the input
				input.addEventListener("change", function() {
					// Check if the input value already contains the dial code
					if (!input.value.startsWith('+')) {
						var selectedCountryData = iti.getSelectedCountryData();
						var countryCode = selectedCountryData.dialCode;

						// Remove leading zeros
						input.value = input.value.replace(/^0+/, '');

						// Add the dial code only if it's not already present
						input.value = '+' + countryCode + input.value;
					}
				});
			});
		</script>
</body>
</html>




