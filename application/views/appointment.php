<style>
.head3 {
    padding: 2px;
}

/* h3 {
        text-decoration: underline color(red green rgb(208, 255, 0)) !important;
    } */


.c1 {
    border: 2px solid gray;
    background-color: rgb(193, 215, 222);
}

.textbox {
    width: 19rem;
    height: 3rem;
    padding: 1rem;
}
</style>
<section>
    <div class="container c1">
        <form action="" method="post">
            <div class="row">

                <div class="col-md-12 mb-2 mt-2 " style="font-weight: 600;">
                    <h3 class="text-center ">Book an Appointment</h3>
                </div>

                <div class="col-md-12 mb-4  " style="font-weight: 600;">
                    <h5 class="text-center mt-3">Please upload all relevant treatment and investigation reports
                    </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4  mb-4  text-center">

                    <!-- <input style="font-family: 'Font Awesome 5 Free'; font-weight:700" type="text" class="textbox" placeholder=" &#xf007; First Name"> -->
                    <input type="text" class="textbox" placeholder="First Name">
                </div>
                <div class="col-md-4 mb-4  text-center ">
                    <input type="text" class="textbox" placeholder="Last Name">
                </div>
                <div class="col-md-4 mb-4 text-center  ">
                    <label>
                        <input type="radio" name="gender" value="male"> Male
                    </label>
                    <label>
                        <input type="radio" name="gender" value="female"> Female
                    </label>
                    <label>
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
                    <label for="appointmentDate">Appointment Date:</label>
                    <input type="date" id="appointmentDate" name="appointmentDate">
                </div>
            </div>
            <div class="row">

                <div class="col " ;>
                    <textarea class="form-control mb-4 " placeholder="Your Query" style="    width: 72vw;
                margin-left: 2vw;"></textarea>
                </div>
            </div>
            <div class="row mb-4 " style="margin-left: 2vw;">
                <input type="file" value="Upload" class="btn btn-warning">
            </div>
            <div class="row mb-4 " style="justify-content: center; ">
                            <button type="submit" class="btn btn-primary" value="submit">Submit</button>
            </div>
        </form>

    </div>
</section>