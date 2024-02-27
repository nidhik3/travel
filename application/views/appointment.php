<style>
.textbox{
    width: 68%;
    height: 6vh;
    border-radius: 3px;
    border: 1px solid transparent;
    padding:4px 8px;
}
</style>



<section>
    <div class="container " style=" border: 2px solid gray;
    background-color: rgb(193, 215, 222);">
        <form action="" method="post" style="padding:20px 20px;">
            <div class="row">

                <div class="col-md-12  ">
                    <h3 class="text-center " style="font-weight: 500;font-size:30px;">Book an Appointment</h3>
                </div>

                <div class="col-md-12   ">
                    <h5 class="text-center pb-3" style="font-weight: 400;">Please upload all relevant treatment and investigation reports
                    </h5>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4  mb-4  text-center">

                    <!-- <input style="font-family: 'Font Awesome 5 Free'; font-weight:700" type="text" class="textbox" placeholder=" &#xf007; First Name"> -->
                    <input type="text"  class="textbox" placeholder="First Name">
                </div>
                <div class="col-md-4 mb-4  text-center ">
                    <input type="text" class="textbox" placeholder="Last Name">
                </div>
                <div class="col-md-4 mb-4 text-center  ">
                    <label class="px-2">
                        <input type="radio" name="gender" value="male"> Male
                    </label>
                    <label class="px-2">
                        <input type="radio" name="gender" value="female"> Female
                    </label>
                    <label class="px-2">
                        <input type="radio" name="gender" value="other"> Other
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4  text-center ">
                    <input type="text" class="textbox" placeholder="Phone no">
                </div>
                <div class="col-md-4 mb-4  text-center ">
                    <input type="text" class="textbox" placeholder="Email id">
                </div>
                <div class="col-md-4 mb-4  text-center ">
                    <label for="appointmentDate">Appointment Date:</label><br>
                    <input type="date" id="appointmentDate" name="appointmentDate">
                </div>
            </div>
            <div class="row  d-flex justify-content-around align-item-center">
                <div class="col-md-11 mb-4";>
                    <textarea class="form-control  " placeholder="Your Query"></textarea>
                </div>
            </div>

            <div class="row  mb-3 ">
                <div class=" col-md-4 text-center" style="margin:0px 24px ">
                    <input type="file" value="Upload" class="btn btn-success">
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