<?php
/*
Template Name: Booking Page
Description: Booking Page.
*/

 get_header();?>
     <!-- Booking Section -->
     <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
     <section id="book" class="book-section">
    <div class="container">
        <h2>Book a Car</h2>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label style="color:white" for="carSelection">Car Selection</label>
                    <select class="form-control" id="carSelection" name="carSelection" required>
                        <option value="">-- Select Car --</option>
                        <option value="Ford falcon">Ford falcon</option>
                        <option value="Range Rover">Range Rover</option>
                        <option value="Land Cruiser">Land Cruiser</option>
                        <option value="Toyota Camry">Toyota Camry</option>
                        <option value="Tuscon">Tuscon</option>
                        <!-- Add more car options here -->
                    </select>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label style="color:white" for="rentalDays">Rental Days</label>
                    <input type="number" class="form-control" id="rentalDays" name="rentalDays" min="1" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
            <input type="hidden" name="action" value="store_booking_data">

                <div class="form-group">
                    <label style="color:white" for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label style="color:white" for="time">Time</label>
                    <input type="time" class="form-control" id="time" name="time" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <input type="submit" class="btn btn-primary" value="Book Car" onclick="showBookingConfirmation()">
            </div>
        </div>
    </div>
</section>
</form>



<?php get_footer(); ?>