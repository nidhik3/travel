<style>
    .textbox {
        width: 95%;
        height: 9vh;
        border-radius: 6px;
        border: 1px solid transparent;
        padding: 4px 8px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .dd {
        width: 95%;
        height: 9vh;
        border-radius: 3px;
        border: 1px solid transparent;
        padding: 4px 8px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .date {
        width: 95%;
        height: 9vh;
        border-radius: 3px;
        border: 1px solid transparent;
        padding: 4px 8px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .textbox::placeholder {
        color: black;
    }

    .showImage {
        display: none;
    }

    .bannertxt {
        color: white;
    }

    .fields {
        margin-top: 20px;
    }

    .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.9);
        width: 800px;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
    }

    .popup-content {
        color: white;
        font-size: 25px;
        font-weight: 400;
    }

    .headings {
        font-size: 38px;
        color: #1ba738;
        font-weight: 700;
    }
</style>


<!-- <section>
    <div class="text-center">
        <h2>Data</h2>
        <?php if (!empty($main)): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Query</th>
                    <th>File</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($main as $row): ?>
                <tr>
                    <td><?= $row->FirstName; ?></td>
                    <td><?= $row->LastName; ?></td>
                    <td><?= $row->Gender; ?></td>
                    <td><?= $row->PhoneNo; ?></td>
                    <td><?= $row->Email; ?></td>
                    <td><?= $row->Date; ?></td>
                    <td><?= $row->Query; ?></td>
                    <td>
                        <?php if (!empty($row->File)): ?>
                        <img src="<?= base_url('Upload/' . $row->File); ?>" height="100px" width="100px">
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
        <p>No appointment data available.</p>
        <?php endif; ?>
    </div>

</section> -->



<section class="bannersec" style="background-image: url('assets/nimages/appointment-banner.jpg');">
    <div class="banner" style="position:relative">
        <div class="container ">
            <div class="row text-center ">
                <div class="col-md-12 bannertxt">
                    <h4 style="font-size: 25px;font-weight: 300;">The Hospital That Cares </h4>
                    <h4 style="font-weight: 700;font-size: 50px;">SANTOKBA INSTITUTE OF GASTROENTEROLOGY </h4>
                </div>
            </div>
        </div>
    </div>

</section>


<section>

    <form action="appointment/insert_data" id="appointmentform" method="post" enctype="multipart/form-data">

        <!-- <section>
            <div class="container">

                <div>
                    <h4 class="headings px-3">Find Your Doctor</h4>
                </div>

                <div class="row d-flex justify-content-evenly ">
                    <div class="col-md-4  fields  mb-4  text-center">
                        <select id="specializationDropdown" name="specialization" class="textbox shadow" required>
                            <option value="gastroenterologist">Gastroenterologist</option>
                        </select>
                    </div>


                    <div class="col-md-4 fields mb-4 text-center">
                        <select id="doctors" name="doctors"  class="textbox shadow">
                            <option value="">Select Doctor</option>
                            <option value="dr1">Dr. Anurag Govil</option>
                            <option value="dr2">Dr. Dinesh Agrawal</option>
                            <option value="dr3">Dr.Nikhil Atolia</option>
                            <option value="dr4">Dr.Sandeep Vaishnav</option>
                         </select>
                    </div>

                    <div class="col-md-4 fields mb-4  text-center ">
                        <input type="text" class="textbox shadow" placeholder="OPD" name="OPD"
                            required autocomplete="off">

                    </div>


                </div>

            </div>

        </section> -->

        <section>
            <div class="container">

                <div>
                    <h4 class="headings px-3">Preferred Date of Appointment</h4>
                </div>

                <div class="row d-flex justify-content-evenly ">
                    <div class="col-md-4  fields  mb-4  text-center">
                        <input type="date" class="date " id="appointmentDate1" name="AppointmentDate1" required
                            placeholder="Select appointment date">

                    </div>


                    <div class="col-md-4 fields mb-4 text-center">
                        <input type="date" class="date " id="appointmentDate2" name="AppointmentDate2"
                            placeholder="Select appointment date">

                    </div>

                    <div class="col-md-4 fields mb-4  text-center ">
                        <input type="date" class="date " id="appointmentDate3" name="AppointmentDate3"
                            placeholder="Select appointment date">

                    </div>



                </div>

            </div>

        </section>


        <section>
            <div class="container">
                <div>
                    <h4 class="headings px-3">Patient Details</h4>
                </div>

                <div class="row d-flex justify-content-evenly ">

                    <div class="col-md-4  fields  mb-4  text-center">
                        <input type="text" class="textbox " placeholder="Name of Patient" name="patient_name"
                            required autocomplete="off">
                    </div>


                    <div class="col-md-4 fields mb-4 text-center">
                        <input type="tel" class="textbox " name="patient_mob" placeholder="Patient Mobile No."
                            required autocomplete="off" pattern="[6-9][0-9]{9}"
                            title="Please enter a valid 10-digit mobile number"/>
                    </div>

                    <div class="col-md-4 fields mb-4  text-center ">
                        <input type="email" class="textbox " name="patient_email" placeholder="Patient Email id"
                            required autocomplete="off"/>
                    </div>


                    <!-- <div class="col-md-3 mb-4 text-center ">
                    <label for="appointmentDate" style="font-weight: 400;">Appointment Date:</label><br>
                    <input type="date" id="appointmentDate" name="AppointmentDate" style="width:16vw" required
                        placeholder="Select appointment date">

                </div> -->

                </div>

                <div class="row d-flex justify-content-evenly ">

                    <div class="col-md-4 fields  mb-4  text-center">
                        <input type="text" class="textbox " placeholder="Appointment Person Name"
                            name="appointment_person_name" required autocomplete="off">
                    </div>


                    <div class="col-md-4 fields mb-4 text-center">
                        <input type="tel" class="textbox " name="person_mob" placeholder="Person Mobile No."
                            required autocomplete="off" pattern="[6-9][0-9]{9}"
                            title="Please enter a valid 10-digit mobile number">
                    </div>

                    <div class="col-md-4 fields  mb-4  text-center">
                        <input type="text" class="textbox " name="relation_with_patient"
                            placeholder="Relationship with Patient" autocomplete=" off">
                    </div>

                </div>

                <div class="row d-flex justify-content-evenly ">

                    <div class="col-md-4 fields  mb-4  text-center">
                        <input type="text" class="textbox " placeholder="Name of Father/Husband"
                            name="name_of_father/husband" required autocomplete="off">
                    </div>

                    <div class="col-md-4 fields  mb-4  text-center">
                        <input type="text" class="textbox " placeholder="UHID or IPD Number, if known" name="UHID"
                           autocomplete="off">
                    </div>



                    <div class="col-md-4 fields mb-4 text-center d-flex align-items-center justify-content-start">
                        <span class="col-md-3">
                            <label class="px-2">
                                Gender
                            </label>
                        </span>
                        <span class="col-md-6">
                            <label class="px-2">
                                <input type="radio" name="Gender" value="Male" style="font-weight: 400;" required> Male
                            </label>
                            <label class="px-2">
                                <input type="radio" name="Gender" value="Female" style="font-weight: 400;" required>
                                Female
                            </label>

                        </span>
                        <span class="col-md-3"></span>
                        <!-- <input type="hidden" name="genderValidation" required> -->
                    </div>

                </div>


                <div class="row d-flex justify-content-evenly ">

                    <div class="col-md-8  fields  mb-4  text-center">
                        <input type="text" class="textbox " placeholder="Address" name="Address" required
                            autocomplete="off" style="width: 98%;">
                    </div>


                    <div
                        class="col-md-4 fields  mb-4  text-center d-flex justify-content-center align-items-center">
                        <select id="dropdown" name="city" class="dd  ">
                            <option value="" selected>Select City</option>
                            <!-- <option class="placeholder" value="">Select a city...</option> -->
                        </select>
                    </div>
                </div>


                <script>
                    // Cities and towns data
                    var cities_and_towns = [
                        "Agra",
                        "Ahmedabad",
                        "Ajmer",
                        "Aligarh",
                        "Allahabad",
                        "Amritsar",
                        "Asansol",
                        "Aurangabad",
                        "Bangalore",
                        "Bareilly",
                        "Belgaum",
                        "Bhavnagar",
                        "Bhilai",
                        "Bhopal",
                        "Bhubaneswar",
                        "Bikaner",
                        "Chandigarh",
                        "Chennai",
                        "Coimbatore",
                        "Cuttack",
                        "Dehradun",
                        "Delhi",
                        "Dhanbad",
                        "Durgapur",
                        "Faridabad",
                        "Ghaziabad",
                        "Gorakhpur",
                        "Gulbarga",
                        "Guntur",
                        "Gurgaon",
                        "Guwahati",
                        "Gwalior",
                        "Howrah",
                        "Hubli-Dharwad",
                        "Hyderabad",
                        "Indore",
                        "Jabalpur",
                        "Jaipur",
                        "Jalandhar",
                        "Jammu",
                        "Jamnagar",
                        "Jamshedpur",
                        "Jhansi",
                        "Jodhpur",
                        "Kakinada",
                        "Kanpur",
                        "Kochi",
                        "Kolhapur",
                        "Kolkata",
                        "Kollam",
                        "Kota",
                        "Kozhikode",
                        "Kurnool",
                        "Lucknow",
                        "Ludhiana",
                        "Madurai",
                        "Mangalore",
                        "Meerut",
                        "Moradabad",
                        "Mumbai",
                        "Muzaffarnagar",
                        "Mysore",
                        "Nagpur",
                        "Nanded",
                        "Nashik",
                        "Nellore",
                        "Noida",
                        "Patna",
                        "Pondicherry",
                        "Pune",
                        "Raipur",
                        "Rajkot",
                        "Ranchi",
                        "Rourkela",
                        "Salem",
                        "Sangli",
                        "Siliguri",
                        "Solapur",
                        "Srinagar",
                        "Surat",
                        "Thane",
                        "Thiruvananthapuram",
                        "Thrissur",
                        "Tiruchirappalli",
                        "Tirunelveli",
                        "Tirupati",
                        "Ujjain",
                        "Vadodara",
                        "Varanasi",
                        "Vasai-Virar",
                        "Vijayawada",
                        "Visakhapatnam",
                        "Warangal"
                    ];

                    // Get the dropdown element by its ID
                    var dropdown = document.getElementById("dropdown");

                    // Create and append option elements
                    cities_and_towns.forEach(function (city) {
                        var option = document.createElement("option");
                        option.text = city;
                        dropdown.add(option);
                    });
                </script>

                <div class="row d-flex justify-content-evenly ">

                    <div class="col-md-12  fields  mb-4  text-center">
                        <input type="text" class="textbox " placeholder="Message" name="Message" required
                            autocomplete="off" style="width: 99%;">
                    </div>

                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="consentCheckbox" required>
                    <label class="form-check-label" for="consentCheckbox">
                        Declaration by patient / attendant: I hereby provide my general consent to get registered with
                        SDM Hospital, and accept to be examined, investigated and treated under the doctors of this
                        hospital as per my / patient's disease condition. All claims and legal action pertaining to
                        treatment in this hospital will be subject to Jaipur Jurisdiction only.
                    </label>
                </div>
        </section>

        <section>
            <div class="notice text-center mt-5" style="font-size: 22px;font-weight: 400;">
                <p class="mb-0">Please consider the appointment confirmed when you receive a confirmation,</p>
                <p> for same day or next day appointments. </p>
            </div>

            <div class="text-center" id="preloader1" style="display: none;justify-content: center;">
                <div class="spinner-border text-primary " role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>

            <div class="row mb-3 mt-5 text-center">
                <div class="col">
                    <button type="submit" class="btn btn-gradient " value="submit"
                        style="width:15vw;height:7vh;border-radius:35px ;">BOOK APPOINTMENT</button>
                </div>
            </div>

            </div>

        </section>
    </form>




</section>



<div id="popup" class="popup">
    <div class="popup-content">
        <p>Thank you for your submission!</p>
        <p>We have received your appointment request</p>
        <button id="okButton" class="btn btn-primary">OK</button>
    </div>
</div>




<!-- JavaScript code moved to the end of the HTML document -->

<script>
    $(document).ready(function () {
        $('#appointmentform').submit(function (e) {
            e.preventDefault(); // Prevent form submission

            // Show preloader
            $('#preloader1').show();

            // Perform AJAX form submission
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function (response) {
                    // Hide preloader
                    $('#preloader1').hide();

                    // Show popup
                    $('#popup').show();
                },
                error: function (xhr, status, error) {
                    // Hide preloader
                    $('#preloader').hide();

                    // Handle errors if needed
                    console.error(xhr.responseText);
                }
            });
        });

        // Close popup when OK button is clicked and redirect to home page
        $('#okButton').click(function () {
            $('#popup').hide();
            window.location.href = '<?php echo base_url(); ?>'; // Redirect to home page
        });
    });
</script>