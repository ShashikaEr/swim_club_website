<?php $page_title = 'Home'; ?>
<?php include('shared/header.php'); ?>
<?php include('shared/navbarView.php'); ?>
<div class="container">

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" style="height: 500px;">
            <div class="carousel-item" data-bs-interval="10000">
                <img src="<?=ROOT?>/private/images/carouselimg1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="<?=ROOT?>/private/images/carouselimg3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="<?=ROOT?>/private/images/carouselimg2.png" class="d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<div class="container pt-4">
    <div class="row">
        <div class="col-md col-lg-8">
            <div class="row">
                <div class="col-lg">
                    <h3 class="mb-4">Top Swimmers</h3>
                    <img src="<?=ROOT?>/private/images/carouselimg1.jpg" class="img-fluid mb-4 rounded">
                    <p>Top Swimmers</p>
                </div>
                <div class="col-lg">
                    <h3 class="mb-4">Ready for Next Event</h3>
                    <img src="<?=ROOT?>/private/images/carouselimg2.png" class="img-fluid mb-4 rounded">
                    <p>View upcoming Events</p>
                </div>
                <div class="col-lg">
                    <h3 class="mb-4">Our members</h3>
                    <img src="<?=ROOT?>/private/images/carouselimg3.jpg" class="img-fluid mb-4 rounded">
                    <p>See what they are saying</p>
                </div>
            </div>

            <h3 class="display-3 text-center text-muted my-4">Want to Know More?</h3>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3">
                        <img src="<?=ROOT?>/private/images/carouselimg1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Coaches</h5>
                            <p class="card-text">Check Our Training Staff</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3">
                        <img src="<?=ROOT?>/private/images/carouselimg2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">FAQ</h5>
                            <p class="card-text">Get to know more about us</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card mb-3">
                        <img src="<?=ROOT?>/private/images/carouselimg3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Join with US</h5>
                            <p class="card-text"><a class="nav-link" href="signup">Become a member</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-md col-lg">
            <img src="<?=ROOT?>/private/images/carouselimg3.jpg" class="card-img-top" style="width: auto">
            <div class="card-body">
                <h5 class="card-title">Past Achievements</h5>
                <p class="card-text">2023</p>
            </hr>
                <p class="card-text">2022</p>
                <p class="card-text">2021</p>
                <p class="card-text">2020</p>
                <p class="card-text">2019</p>
                <p class="card-text">2018</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row py-1 bg-dark">
        <div class="col-md-4 col-lg-4">

        </div>
        <div class="col-md-4 col-lg-4">
            <div class="col" style="color: white">
                <p>Find Us At:
                <a href="#"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="#"><i class="fab fa-twitter fa-lg"></i></a>
                <a href="#"><i class="fab fa-linkedin fa-lg"></i></a>
                <a href="#"><i class="fab fa-instagram fa-lg"></i></a></p>
            </div>
            <div class="row"  style="color: white">
                <p>
                    Our Location : No.2, ABC Road, Stoke, ST4
                </p>
                <p>
                    Tel : 0124566464646
                </p>
                <p>
                    Email : swimmers@gmail.com
                </p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="col-md" style="color: white">
                <p>
                    <strong>Weekly Updates</strong>
                </p>
                <p>Subscribe to our weekly updates and ready for our next events</p>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter your email" aria-label="Recipient's Email" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="button" id="button-addon2">Subscribe</button>
            </div>
        </div>
    </div>

</div>

<?php include 'shared/footer.php' ?>