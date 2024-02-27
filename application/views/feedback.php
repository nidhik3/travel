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
</style>


<section>
    <div class="container ">
        <div class="row text-center p-2">
            <div class="col-md-12">
                <img src="assets/ncons/cons3.webp" alt="">
                --------------
                <img src="assets/ncons/cons2.webp" alt="">
                ---------------
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
        <div class="row d-flex justify-content-around ">
            <div class="col-md-3 border shadow p-3 ra">
                <div class="row">
                    <div class="col-md-2 ">
                        <img src="assets/nimages/f1.png" alt="" width="50px" ;>

                    </div>
                    <div class="col-md-7 px-4">
                        <p class="mb-0" style="font-size: 20px; font-weight: 300;">
                            Ziva
                        </p>
                        <p>
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
            <div class="col-md-3 border shadow p-3 ra">
                <div class="row">
                    <div class="col-md-2 ">
                        <img src="assets/nimages/f1.png" alt="" width="50px" ;>

                    </div>
                    <div class="col-md-7 px-4">
                        <p class="mb-0" style="font-size: 20px; font-weight: 300;">
                            Ziva
                        </p>
                        <p>
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
            <div class="col-md-3 border shadow p-3 ra">
                <div class="row">
                    <div class="col-md-2 ">
                        <img src="assets/nimages/f1.png" alt="" width="50px" ;>

                    </div>
                    <div class="col-md-7 px-4 ">
                        <p class="mb-0" style="font-size: 20px; font-weight: 300;">
                            Ziva
                        </p>
                        <p>
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

<section>
    <div class="container  text-center ">
        <form action="" method="post">
            <div class="row  d-flex justify-content-around align-item-center">
                <div class="col-md-10 mb-2" ;>
                    <textarea class="form-control  " placeholder="Your Feedback"></textarea>
                </div>
            </div>
   <div class="col-md-4 rating" onclick="handleRating(event) ">
                <span class="star" data-value="1">&#x2606;</span>
                <span class="star" data-value="2">&#x2606;</span>
                <span class="star" data-value="3">&#x2606;</span>
                <span class="star" data-value="4">&#x2606;</span>
                <span class="star" data-value="5">&#x2606;</span>
            </div>
            <input type="hidden" name="rating" id="selectedRating" value="0">
            <div class="mb-3">
                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
            </div>
         
        </form>
    </div>
</section>


<section>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-5">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Jj7LtCaZooY?si=06ptB6AKte4tI_u9"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-5">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/7APf6p0Dkd0?si=QYISj7phacOVXX5Y"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
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