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
    <title>Contact Form</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link rel="stylesheet" href="style_contact1.css">
</head>

<body>
    <!--Section: Contact v.2-->
    <section class="mb-4">
        <!-- Back Button -->
        <div class="container">
            <a href="indexIn.php" class="btn btn-secondary mt-3" style="background-color: #023020;"><i class="fas fa-arrow-left"></i> Back</a>
        </div>

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>
            <?php
                require_once "database.php";

                if (isset($_POST["submit"])) {
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $subject = $_POST["subject"];
                    $message = $_POST["message"];

                    $errors = array();

                    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
                        array_push($errors, "All fields are required");
                    }
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        array_push($errors, "Email is not valid");
                    }

                    if (count($errors) > 0) {
                        foreach ($errors as $error) {
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                    } else {
                        $sqlInsertInfo = "INSERT INTO contact_details_tbl (name, email, subject, message) VALUES (?, ?, ?, ?)";
                        $stmtInsertInfo = mysqli_stmt_init($conn);

                        if (mysqli_stmt_prepare($stmtInsertInfo, $sqlInsertInfo)) {
                            mysqli_stmt_bind_param($stmtInsertInfo, "ssss", $name, $email, $subject, $message);
                            mysqli_stmt_execute($stmtInsertInfo);
                            echo "<div class='alert alert-success success-alert w-50 mx-auto text-center'>Your message has been submitted successfully.</div>";

                            // Get the AccountID of the inserted user
                            $accountID = mysqli_insert_id($conn);
                        } else {
                            die("Error in preparing SQL statement to insert user account");
                        }
                    }
                }
            ?>
        <div class="row justify-content-center">
            <!--Grid column-->
            <div class="col-md-6 mb-md-0 mb-5">
                <form action="contactmeIn.php" method="post">
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control" required>
                                <label for="name" class="">Your name</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="email" id="email" name="email" class="form-control" required>
                                <label for="email" class="">Your email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control" required>
                                <label for="subject" class="">Subject</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                                <label for="message">Your message</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                    <div class="text-center text-md-left form-btn">
                        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                    </div>
                    <div class="status"></div>
                </form>
            </div>
        </div>
    </section>
    <!--Section: Contact v.2-->
</body>

</html>
