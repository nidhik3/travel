

<style>
   /* .icon_a {
         width: 30px; 
        border: 2px solid white; 
    }*/

    .social {
        border: 2px solid white;
        /* height: 3vh; */
        border-radius: 8px;
        width: 2vw;
    }
    .icon{
        width: 15vw;
    }
</style>

<section style="margin:45px">
    <div class="container">
        <div class="row mt-4 d-flex justify-content-between pb-9">
            <div class="col-md-4" style="display:flex; align-items: center;">
                <img src="assets/nimages/doc.webp" alt="" style="max-width:100%">
                <!-- <img src="Upload" alt="" style="max-width:100%">  -->
            </div>
            <div class="col-md-7 size-md-50 size-40">
                <h5 style="font-weight:600; font-size:50px; color: #34b14e;">
                    <?= $doctor1['Dname']; ?>
                </h5>
                <h7 style="font-weight:400; font-size:30px;">Principal areas of expertise:</h7>
                <p style="font-weight:200; font-size:20px;">
                    <?= $doctor1['Expertise']; ?>
                </p>

                <h7 style="font-weight:400; font-size:30px;">Work Experience & Present Appointments:</h7>
                <p style="font-weight:200; font-size:20px;">
                    <?= $doctor1['Experience']; ?>
                </p>

                <h7 style="font-weight:400; font-size:30px;">Education & Training:</h7>
                <p style="font-weight:200; font-size:20px;" class="pb-5">
                    <?= $doctor1['Education']; ?>
                </p>
            </div>
        </div>
    </div>
</section>


