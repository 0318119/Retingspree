<!DOCTYPE html>
<html lang="en">


<!-- These are dynamic variables -->

<?php  $page_title="Contact us Page";?>
<?php  $description = ""; ?> 

<!-- End -->


<?php include "./includes/headertwo.php" ?>


<section class="mt-5 pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="contactHead"  data-aos="fade-down" data-aos-delay="300">
                    <h4 data-aos="fade-left" data-aos-delay="300">Contact us</h4>
                    <p data-aos="fade-right" data-aos-delay="300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem enim debitis accusamus
                        dignissimos fugit quis, nesciunt sit natus expedita consequatur?
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-5" data-aos="fade-up" data-aos-delay="300">
    <div class="container">
        <div class="row" data-aos="zoom-in" data-aos-delay="400">
            <div class="col-12">
                <div class="contactBox">
                    <p>149 Lorem ipsum st, NYC USA</p>
                    <h5>
                        <a href="mailto:suarezjosep@gmail.com">suarezjosep@gmail.com</a>
                        <a href="tel:+248-217-6407">+248-217-6407</a>
                    </h5>
                </div>
            </div>
        </div>

        <div class="row mt-5" data-aos="zoom-in" data-aos-delay="400">
            <div class="col-12">
                <div class="contactTxt">
                    <h4>Contact us</h4>
                    <h5>How Can Help You</h5>
                </div>
            </div>
            <div class="col-12">
                <form>
                    <div class="form-group flexBox">
                        <input type="email" class="form-control" placeholder="Email" required>
                        <input type="text" class="form-control" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group flexBox">
                        <input type="text" class="form-control" placeholder="Company" required>
                        <input type="text" class="form-control" placeholder="Address" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Messenge" required></textarea>
                    </div>

                    <button class="LoginBtn">Contact Now</button>
                </form>
            </div>

            <div class="col-12">
                <div class="imgBox">
                </div>
            </div>
        </div>

    </div>
</section>

<?php include './includes/footertwo.php'?>
</body>

</html>