<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>RSSI NGO - Donation Form</title>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!------ Include the above in your HEAD tag ---------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS -->
    <style>
        .prebanner {
            display: none;
        }

        .required-asterisk {
            color: red;
        }
    </style>
    <!-- Template Main CSS File -->
    <link href="/css/main.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $("#header").load("/header.html");
            $("#footer").load("/footer.html");
        });
    </script>
</head>

<body>
    <!-- ======= Header ======= -->
    <div id="header"></div>
    <!-- End Header -->
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Donation Information</h2>
                    <ol>
                        <li><a href="index">Home</a></li>
                        <li>Donate Now</li>
                    </ol>
                </div>

            </div>
        </div>

        <!-- End Breadcrumbs -->
        <section class="sample-page">
            <div class="container">
                <!-- Part 1: Donation Information -->
                <form action="donation_form.php" method="POST" id="donationInfoForm">
                    <input type="hidden" name="form-type" value="donation_form">
                    <div class="mb-3">
                        <label for="donationType" class="form-label">Have you donated earlier?</label>
                        <select class="form-select" id="donationType" name="donationType" onchange="toggleDonorSections()" required>
                            <option value="">Select</option>
                            <option value="new">No, I am a first-time donor</option>
                            <option value="existing">Yes, I have donated earlier</option>
                        </select>
                    </div>

                    <div id="existingDonorInfo" style="display: none;">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="contactnumber_verify" name="contactnumber_verify" placeholder="Enter your contact number">
                            <button type="submit" class="btn btn-primary" id="verifybutton">Find your details</button>
                        </div>
                    </div>

                    <!-- Get user data -->
                    <div id="verificationResult" style="display: none;">
                        <input type="hidden" id="donorId" name="donorId" class="form-control" readonly>
                        <div class="mb-3">
                            <label for="donorName" class="form-label">Donor Name</label>
                            <input type="text" id="donorName" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="donorEmail" class="form-label">Email Address</label>
                            <input type="email" id="donorEmail" class="form-control" readonly>
                        </div>
                    </div>

                    <!-- New Donor Information -->
                    <div id="newDonorInfo" style="display: none;">
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" name="fullName" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="contactNumberNew" class="form-label">Contact Number</label>
                            <input type="tel" class="form-control" id="contactNumberNew" name="contactNumberNew" required>
                        </div>
                        <div class="mb-3">
                            <label for="documentType" class="form-label">National Identifier Type</label>
                            <select class="form-select" id="documentType" name="documentType" required>
                                <option value="" disabled selected>Select</option>
                                <option value="pan">Permanent Account Number (PAN)</option>
                                <option value="aadhaar">Aadhaar Number</option>
                                <option value="taxIdentification">Tax Identification Number</option>
                                <option value="passport">Passport number</option>
                                <option value="voterId">Elector's photo identity number</option>
                                <option value="drivingLicense">Driving License number</option>
                                <option value="rationCard">Ration card number</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nationalId" class="form-label">National Identifier Number</label>
                            <input type="text" class="form-control" id="nationalId" name="nationalId" required>
                        </div>

                        <div class="mb-3">
                            <label for="postalAddress" class="form-label">Postal Address</label>
                            <textarea class="form-control" id="postalAddress" name="postalAddress" rows="4" required></textarea>
                        </div>
                    </div>

                    <!-- Donation Amount -->
                    <div id="donationamount" style="display: none;">
                        <div class="mb-3">
                            <label for="donationAmount" class="form-label">Donation Amount</label>
                            <div class="input-group">
                                <select class="form-select" id="currency" name="currency" required>
                                    <option value="" disabled selected>Select Currency</option>
                                    <option value="USD">USD</option>
                                    <option value="EUR">EUR</option>
                                    <option value="INR">INR</option>
                                </select>
                                <input type="number" class="form-control" id="donationAmount" name="donationAmount" min="500" step="any" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="transactionid" class="form-label">Transaction Id</label>
                            <input type="text" class="form-control" id="transactionid" name="transactionid" required>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message (Optional)</label>
                            <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" id="donateButton" disabled>Submit</button>
                    </div>
                </form>

                <form name="get_details_form" id="get_details_form" action="#" method="POST">
                    <input type="hidden" name="form-type" value="get_details">
                    <input type="hidden" name="contactnumber_verify_input">
                </form>

                <script>
                    var contactNumberInput = document.getElementById("contactnumber_verify");
                    var contactNumberVerifyInput = document.getElementsByName("contactnumber_verify_input")[0];
                    var donorNameInput = document.getElementById("donorName");
                    var donorEmailInput = document.getElementById("donorEmail");
                    var donorIdInput = document.getElementById("donorId");
                    var verificationResultDiv = document.getElementById("verificationResult");
                    var donateButton = document.getElementById('donateButton');
                    var newDonorInfo = document.getElementById('newDonorInfo');

                    contactNumberInput.addEventListener("input", function(event) {
                        contactNumberVerifyInput.value = this.value;
                    });

                    const scriptURL = 'https://login.rssi.in/rssi-member/payment-api.php';

                    // Function to update the 'required' attribute of fields based on visibility
                    function updateRequiredFields() {
                        const requiredFields = document.querySelectorAll('[required]');

                        requiredFields.forEach(field => {
                            const label = document.querySelector(`label[for="${field.id}"]`);
                            if (label) {
                                const hasAsterisk = label.querySelector('.required-asterisk');

                                if (field.required && !hasAsterisk) {
                                    const asterisk = document.createElement('span');
                                    asterisk.className = 'required-asterisk';
                                    asterisk.textContent = ' *';
                                    label.appendChild(asterisk);
                                } else if ((!field.offsetParent || !field.required) && hasAsterisk) {
                                    label.removeChild(hasAsterisk);
                                    field.required = false;
                                }
                            }
                        });
                    }

                    // Call the function initially to set up the required fields
                    updateRequiredFields();

                    // Function to handle the "verifybutton" click event
                    function handleVerifyButtonClick(event) {
                        event.preventDefault(); // prevent default form submission

                        fetch(scriptURL, {
                                method: 'POST',
                                body: new FormData(document.forms['get_details_form'])
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.status === 'success') {
                                    donorNameInput.value = data.data.fullname;
                                    donorEmailInput.value = data.data.email;
                                    donorIdInput.value = data.data.donorid;
                                    verificationResultDiv.style.display = "block"; // Show the result div
                                    donationamount.style.display = 'block';
                                    donateButton.disabled = false;
                                    alert("User data fetched successfully!");
                                } else if (data.status === 'no_records') {
                                    verificationResultDiv.style.display = "none"; // Hide the result div
                                    donationamount.style.display = 'none';
                                    donateButton.disabled = true;
                                    donorNameInput.value = "";
                                    donorEmailInput.value = "";
                                    donorIdInput.value = "";
                                    alert("No records found in the database. Donate as a new user.");
                                } else {
                                    console.log('Error:', data.message);
                                    alert("Error retrieving user data. Please try again later or contact support.");
                                }

                                // Call the updateRequiredFields() function after handling the verify button click
                                updateRequiredFields();
                            })
                            .catch(error => {
                                console.log('Error:', error);
                                alert("Error fetching user data. Please try again later or contact support.");

                                // Call the updateRequiredFields() function after handling the verify button click
                                updateRequiredFields();
                            });
                    }

                    // Add event listener to the "verifybutton" element
                    document.getElementById("verifybutton").addEventListener("click", handleVerifyButtonClick);


                    // JavaScript function to toggle donor sections based on donation type
                    function toggleDonorSections() {
                        const donationType = document.getElementById('donationType').value;
                        const existingDonorInfo = document.getElementById('existingDonorInfo');
                        const newDonorInfo = document.getElementById('newDonorInfo');
                        const verificationResult = document.getElementById('verificationResult');
                        const donationAmountSection = document.getElementById('donationamount');

                        if (donationType === 'existing') {
                            existingDonorInfo.style.display = 'block';
                            newDonorInfo.style.display = 'none';
                            verificationResult.style.display = 'none';
                            donationAmountSection.style.display = 'none';
                            donateButton.disabled = true;
                        } else if (donationType === 'new') {
                            existingDonorInfo.style.display = 'none';
                            newDonorInfo.style.display = 'block';
                            verificationResult.style.display = 'none';
                            donationAmountSection.style.display = 'block';
                            donateButton.disabled = false;
                        } else {
                            existingDonorInfo.style.display = 'none';
                            newDonorInfo.style.display = 'none';
                            verificationResult.style.display = 'none';
                            donationAmountSection.style.display = 'none';
                            donateButton.disabled = true;
                        }
                    }
                    // Function to handle the donation type change event
                    function handleDonationTypeChange() {
                        const donationType = document.getElementById("donationType").value;
                        const fullNameInput = document.getElementById("fullName");
                        const emailInput = document.getElementById("email");
                        const contactNumberNewInput = document.getElementById("contactNumberNew");
                        const documentTypeInput = document.getElementById("documentType");
                        const nationalIdInput = document.getElementById("nationalId");
                        const postalAddressInput = document.getElementById("postalAddress");

                        // Set required attribute based on the donation type
                        if (donationType === "existing") {
                            fullNameInput.removeAttribute("required");
                            emailInput.removeAttribute("required");
                            contactNumberNewInput.removeAttribute("required");
                            documentTypeInput.removeAttribute("required");
                            nationalIdInput.removeAttribute("required");
                            postalAddressInput.removeAttribute("required");
                        } else if (donationType === "new") {
                            fullNameInput.setAttribute("required", true);
                            emailInput.setAttribute("required", true);
                            contactNumberNewInput.setAttribute("required", true);
                            documentTypeInput.setAttribute("required", true);
                            nationalIdInput.setAttribute("required", true);
                            postalAddressInput.setAttribute("required", true);
                        }
                    }

                    // Add event listener to the "donationType" element
                    document.getElementById("donationType").addEventListener("change", handleDonationTypeChange);
                </script>
            </div>
        </section>
    </main>
    <!-- ======= Footer ======= -->
    <div id="footer"></div>
    <!-- End Footer -->
</body>

</html>