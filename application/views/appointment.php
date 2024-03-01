<style>
.textbox {
    width: 68%;
    height: 6vh;
    border-radius: 3px;
    border: 1px solid transparent;
    padding: 4px 8px;
}
.showImage{
    display: none;
}
</style>



<section>
    <div class="container " style=" border: 2px solid gray;
    background-color: rgb(193, 215, 222);">
        <form action="appointment/insert_data" method="post" style="padding:20px 20px;" enctype="multipart/form-data">
            <div class="row">

                <div class="col-md-12  ">
                    <h3 class="text-center " style="font-weight: 500;font-size:30px;">Book an Appointment</h3>
                </div>

                <div class="col-md-12   ">
                    <h5 class="text-center pb-3" style="font-weight: 400;">Please upload all relevant treatment and
                        investigation reports
                    </h5>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4  mb-4  text-center">

                    <!-- <input style="font-family: 'Font Awesome 5 Free'; font-weight:700" type="text" class="textbox" placeholder=" &#xf007; First Name"> -->
                    <input type="text" class="textbox" placeholder="First Name" name="fname" required>
                </div>
                <div class="col-md-4 mb-4  text-center ">
                    <input type="text" class="textbox" name="lname" placeholder="Last Name" required>
                </div>

                <div class="col-md-4 mb-4 text-center">
                    <label class="px-2">
                        <input type="radio" name="gender" value="male"> Male
                    </label>
                    <label class="px-2">
                        <input type="radio" name="gender" value="female"> Female
                    </label>
                    <label class="px-2">
                        <input type="radio" name="gender" value="other"> Other
                    </label>
                    <input type="hidden" name="genderValidation" required>
                </div>

            </div>


            <div class="row">
                <div class="col-md-4 mb-4  text-center ">
                    <input type="tel" class="textbox" name="phone" placeholder="Phone no" required>
                </div>
                <div class="col-md-4 mb-4  text-center ">
                    <input type="email" class="textbox" name="email" placeholder="Email id" required>
                </div>
                <div class="col-md-4 mb-4  text-center ">
                    <label for="appointmentDate">Appointment Date:</label><br>
                    <input type="date" id="appointmentDate" name="appointmentDate" required>
                </div>
            </div>
            <div class="row  d-flex justify-content-around align-item-center">
                <div class="col-md-11 mb-4" ;>
                    <textarea class="form-control  " name="msg" placeholder="Your Query" required></textarea>
                </div>
            </div>


            <div class="row  mb-3 ">
                <div class="col-md-4 text-center" style="margin:0px 24px">
                    <input type="file" class="btn btn-success" name="img" id="imageInput" required>
                    <div class="showImage">
                        <img id="selectedImage" src="#" alt="Selected Image" width="200">
                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                    <script>
                    $(document).ready(function() {
                        $('#imageInput').change(function() {
                            displayImage(this);
                        });

                        function displayImage(input) {
                            var file = input.files[0];

                            if (file) {

                                var reader = new FileReader();

                                reader.onload = function(e) {
                                    $('#selectedImage').attr('src', e.target.result);
                                    $('.showImage').css('display', 'block');
                                }

                                reader.readAsDataURL(file);
                            } else {
                                // No file selected, clear the image
                                $('#selectedImage').attr('src', '');
                            }
                        }
                    });
                    </script>
                </div>
            </div>
            <div class="row mb-3 text-center">
                <div class="col">
                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                </div>
            </div>


        </form>

    </div>
</section>