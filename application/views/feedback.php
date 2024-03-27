<style>
    .ra {
        border-radius: 23px;
    }

    .rating {
        font-size: 35px;
    }

    .star {
        cursor: pointer;

    }

    .selected {
        color: #f2b21b;
    }

    .textbox {
        width: 100%;
        height: 7vh;
        border-radius: 3px;
        border: 1px solid grey;
        padding: 4px 8px;
    }
</style>

<section class="bannersec" style="background-image: url('assets/nimages/consultants-banner.jpg');">
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
    <div class="container ">
        <div class="row text-center p-2">
            <div class="col-md-12">
                <img src="assets/ncons/cons3.webp" alt="">
                ----
                <img src="assets/ncons/cons2.webp" alt="">
                ----
                <img src="assets/ncons/cons1.webp" alt="">
                <!-- <img src="assets/ncons/cons4.png" alt=""> -->
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h4 class="text-center m-4" style="font-weight: 600; font-size:30px;">Unveiling the Pinnacle of Our
                    Hospital's Online Healthcare Excellence.
                </h4>
            </div>
        </div>
        <div class="row d-flex justify-content-around mx-md-0 mx-4">
            <div class="col-md-3 border shadow p-3 ra mt-md-0 mt-4  ">
                <div class="row">
                    <div class="col-md-2 ">
                        <img src="assets/nimages/f1.png" alt="" width="50px" ;>

                    </div>
                    <div class="col-md-7 px-4">
                        <p class="mb-0" style="font-size: 20px; font-weight: 500;color: #34b14e;">
                            Samy
                        </p>
                        <p style=" font-weight: 500;">
                            21 years, Student
                        </p>
                    </div>
                </div>
                <div class="row">
                    <p class="pl-3 pr-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, tenetur quo. Nam animi
                        cupiditate ea maxime veniam, unde iste exercitationem, quae labore ex quo consectetur amet optio
                        deleniti commodi necessitatibus!
                    </p>
                </div>
            </div>
            <div class="col-md-3 border shadow p-3 ra mt-md-0 mt-4">
                <div class="row">
                    <div class="col-md-2 ">
                        <img src="assets/nimages/f1.png" alt="" width="50px" ;>

                    </div>
                    <div class="col-md-7 px-4">
                        <p class="mb-0" style="font-size: 20px; font-weight: 500;color: #34b14e;">
                            Yuzi
                        </p>
                        <p style=" font-weight: 500;">
                            21 years, Student
                        </p>
                    </div>
                </div>
                <div class="row">
                    <p class="pl-3 pr-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, tenetur quo. Nam animi
                        cupiditate ea maxime veniam, unde iste exercitationem, quae labore ex quo consectetur amet optio
                        deleniti commodi necessitatibus!
                    </p>
                </div>
            </div>
            <div class="col-md-3 border shadow p-3 ra mt-md-0 mt-4">
                <div class="row">
                    <div class="col-md-2 ">
                        <img src="assets/nimages/f1.png" alt="" width="50px" ;>

                    </div>
                    <div class="col-md-7 px-4 ">
                        <p class="mb-0" style="font-size: 20px; font-weight: 500;color: #34b14e;">
                            Ziva
                        </p>
                        <p style=" font-weight: 500;">
                            21 years, Student
                        </p>
                    </div>
                </div>
                <div class="row">
                    <p class="pl-3 pr-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, tenetur quo. Nam animi
                        cupiditate ea maxime veniam, unde iste exercitationem, quae labore ex quo consectetur amet optio
                        deleniti commodi necessitatibus!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background-color: #f5f3ec;">
    <div class="container  text-center ">
        <form action="feedback/insert " method="post" class="p-5">
            <div class="row d-flex justify-content-between align-item-center">
                <div class="col-md-3 mb-4  text-center ">
                    <input type="text" class="textbox" name="Name" placeholder="Name" required>
                </div>
                <div class="col-md-3 mb-4  text-center ">
                    <input type="text" class="textbox" name="Profession" placeholder="Profession">
                </div>
                <div class="col-md-3 mb-4  text-center ">
                    <input type="text" class="textbox" name="City" placeholder="City">
                </div>
            </div>

            <div class="row  d-flex justify-content-around align-item-center">
                <div class="col-md-12 mb-2" ;>
                    <textarea class="form-control" name="Feedback" placeholder="Your Feedback" required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4  rating" style="text-align: left;" onclick="handleRating(event)" required>
                    <span class="star" data-value="1">&#x2606;</span>
                    <span class="star" data-value="2">&#x2606;</span>
                    <span class="star" data-value="3">&#x2606;</span>
                    <span class="star" data-value="4">&#x2606;</span>
                    <span class="star" data-value="5">&#x2606;</span>
                    <input type="hidden" name="rating" id="selectedRating" value="0">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-gradient " value="submit"
                    style=" width:10vw;height:7vh;border-radius:35px ;">SUBMIT</button>
            </div>

        </form>
    </div>
</section>
<section>
<div class="container">
    <div class="row justify-content-around">
        <div class="col-md-5 mt-md-0 mt-4">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Jj7LtCaZooY?si=06ptB6AKte4tI_u9"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen style="max-width:100%"></iframe>
        </div>
        <div class="col-md-5 mt-md-0 mt-4">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7APf6p0Dkd0?si=QYISj7phacOVXX5Y"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen style="max-width:100%"></iframe>
        </div>
    </div>

</div>
</section>

<script>
    function handleRating(event) {
        if (event.target.classList.contains('star')) {
            const ratingValue = event.target.getAttribute('data-value');
            document.getElementById('selectedRating').value = ratingValue;

            // Reset styles
            document.querySelectorAll('.star').forEach(star => star.classList.remove('selected'));

            // Highlight selected stars
            for (let i = 1; i <= ratingValue; i++) {
                document.querySelector(`.star[data-value="${i}"]`).classList.add('selected');
            }
        }
    }
</script>