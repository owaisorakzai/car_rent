<?php /*
This page is used to display the static frontpage.
*/
  
// Fetch theme header template
get_header(); ?>
    <div id="primary">
  
    <div class="custom-homepage-container"> 
    <section class="hero-section">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="<?php echo get_template_directory_uri().'/assets/car1.jpg';?>" class="d-block w-100" alt="Car 1">
                    <div class="carousel-caption ">
                                                <h2>Welcome to CarRental</h2>
                                                <p>Your reliable car rental service</p>
                                                </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo get_template_directory_uri().'/assets/car2.jpg';?>" class="d-block w-100" alt="Car 2">
                                                    <div class="carousel-caption">
                                                        <h2>Explore Our Fleet</h2>
                                                        <p>Choose from a wide selection of cars</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo get_template_directory_uri().'/assets/car3.jpg';?>" class="d-block w-100" alt="Car 3">
                                                    <div class="carousel-caption">
                                                        <h2>Flexible Rental Options</h2>
                                                        <p>Customize your rental period</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo get_template_directory_uri().'/assets/car4.jpg';?>" class="d-block w-100" alt="Car 4">
                                                    <div class="carousel-caption">
                                                        <h2>24/7 Customer Support</h2>
                                                        <p>We're here to assist you anytime</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo get_template_directory_uri().'/assets/car5.jpg';?>" class="d-block w-100" alt="Car 5">
                                                    <div class="carousel-caption">
                                                        <h2>Book Your Car Today</h2>
                                                        <p>Experience the convenience of CarRental</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="<?php echo get_template_directory_uri().'/assets/car6.jpg';?>" class="d-block w-100" alt="Car 6">
                                                    <div class="carousel-caption">
                                                        <h2>Get Ready for Your Adventure</h2>
                                                        <p>Start your journey with CarRental</p>
                                                    </div>
                                                </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                                </div>
                                                </section>
                                                
                                                <!-- About Section -->
                                                <section id="about" class="about-section">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h2>About CarRental</h2>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices lacus vel metus porta, ut
                                                                    iaculis nibh consequat. Suspendisse potenti. Mauris efficitur tristique tortor, id placerat
                                                                    lorem. Sed auctor nisl id urna pulvinar, ut facilisis elit vulputate.</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <img src="<?php echo get_template_directory_uri().'/assets/about.jpg';?>" alt="About CarRental" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                
                                                <!-- Services Section -->
                                                <section id="services" class="services-section">
                                                    <div class="container">
                                                        <h2>Our Services</h2>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <img height="290px" src="<?php echo get_template_directory_uri().'/assets/service1.png';?>" class="card-img-top" alt="Service 1">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Car Rental</h5>
                                                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <img height="316px" src="<?php echo get_template_directory_uri().'/assets/service2.png';?>" class="card-img-top" alt="Service 2">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Airport Transfer</h5>
                                                                        <p class="card-text">Sed commodo nunc a placerat aliquam.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <div>
                                                                        <img height="290px" src="<?php echo get_template_directory_uri().'/assets/service3_459x718.jpeg';?>" class="card-img-top" alt="Service 3">
                                                                    
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">Chauffeur Service</h5>
                                                                        <p class="card-text">Aenean scelerisque urna id sapien maximus fermentum.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </section>
                                                
                                                <!-- Contact Section -->
                                                <section id="contact" class="contact-section">
                                                    <div class="container">
                                                        <h2 class="text-center">Contact Us</h2>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <label for="name">Name</label>
                                                                        <input type="text" class="form-control" id="name" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="email">Email</label>
                                                                        <input type="email" class="form-control" id="email" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message">Message</label>
                                                                        <textarea class="form-control" id="message" rows="5" required></textarea>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                                                </form>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5>Contact Information</h5>
                                                                <p><strong>Address:</strong> 123 Main St, City, Country</p>
                                                                <p><strong>Email:</strong> info@carrental.com</p>
                                                                <p><strong>Phone:</strong> +123 456 7890</p>
                                                            </div>
                                                        </div>
                                                    </div>  
    </div> 
  
    </div><!-- #primary -->
<?php get_footer(); ?>