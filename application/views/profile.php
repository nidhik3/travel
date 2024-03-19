<!-- <section style="margin:10px">
    <div class="container">

        <div class="row mt-4 d-flex justify-content-between pb-9">
            <div class="col-md-4 " style="display:flex; align-items: center;">
                <img src="assets/nimages/doc.webp" alt="" style="max-width:100%">
            </div>
            <div class="col-md-7 size-md-50 size-40">
                <h5  value="Dname" style="font-weight:600 ;font-size:50px ;color: #34b14e; text-decoration: underline;"> Dr Nikhil Atolia</h5>
                <h7 style="font-weight:500;font-size:30px ;">Principal areas of expertise:</h7>
                <p value="Expertise">
                    In Gastroenterology and Endoscopy. Special interest in pancreatology and motility disorders of GI
                    tract.
                </p>

                <h7 style="font-weight:500;font-size:30px ;"> Work Experience & Present Appointments:</h7>
                <p value="Experience">
                    Professor and Head of gastromedicine Dept, SVP hospital, Smt NHL Municipal medical college,
                    Ahmedabad
                </p>

                <h7 style="font-weight:500;font-size:30px ;">Education & Training:</h7>
                <p class="pb-5" value="Education">M.B., B.S.: Guj. Univ., India, 1994 <br>
                M.D.: Guj. Univ., India, 1997<br>
                DM, gastro: LTMMC, Mumbai 2000
                </p>
                
            </div>
        </div>
    </div>
</section> -->

<!-- <section class= "bannersec" style="background-image: url('assets/nimages/bn2.jpg');">
    <div class="banner" style= "position:relative">
        <div class="container ">
             <div class="row text-center ">
                <div class="col-md-12 bannertxt">
                    <h4 style="font-size: 30px;">The Hospital That Cares </h4>
                    <h4 style="font-weight: 700;font-size: 50px;">SANTOKBA INSTITUTE OF GASTROENTEROLOGY </h4>
                </div>
            </div>
        </div>
    </div>

</section> -->

<section style="margin:45px">
    <div class="container">
        <div class="row mt-4 d-flex justify-content-between pb-9">
            <div class="col-md-4" style="display:flex; align-items: center;">
                <img src="assets/nimages/doc.webp" alt="" style="max-width:100%">
                  <!-- <img src="Upload" alt="" style="max-width:100%">  -->
            </div>
            <div class="col-md-7 size-md-50 size-40">
                <h5 style="font-weight:600; font-size:50px; color: #34b14e;"><?= $doctor1['Dname']; ?></h5>
                <h7 style="font-weight:400; font-size:30px;">Principal areas of expertise:</h7>
                <p style="font-weight:200; font-size:20px;"><?= $doctor1['Expertise']; ?></p>

                <h7 style="font-weight:400; font-size:30px;">Work Experience & Present Appointments:</h7>
                <p style="font-weight:200; font-size:20px;"><?= $doctor1['Experience']; ?></p>

                <h7 style="font-weight:400; font-size:30px;">Education & Training:</h7>
                <p style="font-weight:200; font-size:20px;" class="pb-5"><?= $doctor1['Education']; ?></p>
            </div>
        </div>
    </div>
</section>
