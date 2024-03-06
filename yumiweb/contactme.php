<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link rel="stylesheet" href="style_contact1.css">
</head>
<body>
    <!--Section: Contact v.2-->
    <section class="mb-4">
        <div class="container">
            <a href="index.php" class="btn btn-secondary mt-3" style="background-color: #023020;"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>

        <div class="row justify-content-center">
            <!--Grid column-->
            <div class="col-md-6 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="contactme.php" method="POST">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Your name</label>
                            </div>
                        </div>
                        <!--Grid column-->
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
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
                                <input type="text" id="subject" name="subject" class="form-control">
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
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Your message</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
                </form>

                <div class="text-center text-md-left form-btn">
                    <form id="submitForm">
                        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                    </form>
                </div>

                <div id="loginModal" class="modal">
                    <p>Please log in first to submit the form.</p>
                    <button onclick="closeModal()">OK</button>
                </div>

                <div class="status"></div>
            </div>
        </div>

        <script>
            document.getElementById('submitForm').addEventListener('submit', function(event) {
                // Prevent the default form submission
                event.preventDefault();

                // Show the login modal when the user clicks the submit button
                openModal();
            });

            function openModal() {
                document.getElementById('loginModal').style.display = 'block';
            }

            function closeModal() {
                document.getElementById('loginModal').style.display = 'none';
            }
        </script>
    </section>
    <!--Section: Contact v.2-->
</body>
</html>
