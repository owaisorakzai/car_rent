<?php
/*
Template Name: Services Page
Description: Services Page.
*/
get_header(); ?>

<section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Our Services</h2>
                    <p>At CarRental, we offer a range of services to cater to your car rental needs. We strive to make
                        the
                        process simple, convenient, and tailored to your requirements.</p>
                    <p>Our services include:</p>
                    <ul>
                        <li><strong>Wide selection of vehicles for various needs:</strong> Whether you need a compact
                            car
                            for city driving, a spacious SUV for a family trip, or a luxury vehicle for a special
                            occasion,
                            we have a diverse fleet of cars to choose from.</li>
                        <li><strong>Flexible rental durations:</strong> We understand that your plans may change, which
                            is
                            why we offer flexible rental durations. Rent a car for a few hours, a day, a week, or even
                            longer, depending on your needs.</li>
                        <li><strong>Easy online booking:</strong> Our user-friendly online reservation system allows you
                            to
                            browse available cars, select your desired dates and times, and book your vehicle with ease.
                            Say
                            goodbye to long queues and paperwork.</li>
                        <li><strong>24/7 customer support:</strong> Our dedicated customer support team is available
                            round
                            the clock to assist you with any queries, changes to your reservation, or emergencies during
                            your rental period.</li>
                        <li><strong>Competitive pricing and discounts:</strong> We offer competitive prices to ensure
                            that
                            you get the best value for your money. Keep an eye out for our special discounts and
                            promotional
                            offers.</li>
                        <li><strong>Convenient pickup and drop-off locations:</strong> We have multiple locations
                            throughout
                            the city where you can pick up and drop off your rental car, making it convenient for you to
                            access our services.</li>
                        <li><strong>Add-on features and extras:</strong> Enhance your driving experience with our
                            optional
                            add-on features, such as GPS navigation systems, child seats, additional driver options, and
                            more.</li>
                        <li><strong>Insurance options:</strong> We offer various insurance options to provide you with
                            peace
                            of mind during your rental period. Choose the coverage that suits your needs and
                            preferences.
                        </li>
                    </ul>
                    <p>Whether you're a local resident needing a temporary car or a traveler exploring our city, our
                        services are designed to accommodate your transportation requirements. Rent with us and enjoy a
                        hassle-free and enjoyable journey.</p>
                    <p>Contact us today to learn more about our services, check availability, or make a reservation.
                        We're
                        here to help!</p>
                </div>
                <div class="col-lg-6">
                    <div id="slideshow" class="slideshow-container">
                        <div class="slide active">
                            <img src="<?php echo get_template_directory_uri().'/assets/service1.png';?>" alt="Slide 1">
                        </div>
                        <div class="slide">
                            <img src="<?php echo get_template_directory_uri().'/assets/service2.png';?>" alt="Slide 2">
                        </div>
                        <div class="slide">
                            <img src="<?php echo get_template_directory_uri().'/assets/service3_459x718.jpeg';?>" alt="Slide 3">
                        </div>
                        <div style="text-align: center;">
                            <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
                        </div>
                        <div style="height: 400px">
                            <a class="next" onclick="changeSlide(1)">&#10095;</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
