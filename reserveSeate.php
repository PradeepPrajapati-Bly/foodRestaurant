<?php   include('header.php');  ?>


<div class="reserveform">
        <h1><u>Restaurant Reservation Form</u></h1>
        <form action="#submit_reservation.php" method="post">
            <!-- <label for="first_name">First Name:</label> -->
            <input type="text" id="first_name" name="first_name" required placeholder="Enter Your First name">
            
            <!-- <label for="last_name">Last Name:</label> -->
            <input type="text" id="last_name" name="last_name" required placeholder="Enter Your Second name">
            
            <!-- <label for="email">Email Address:</label> -->
            <input type="email" id="email" name="email" required placeholder="Enter Your Email Address">
            
            <!-- <label for="contact">Contact Number:</label> -->
            <input type="number" id="contact" name="contact" required placeholder="Enter Your Mobile/Phone Number">
            
            <!-- <label for="date">Reservation Date:</label> -->
            <input type="date" id="date" name="date" required>
            
            <!-- <label for="time">Reservation Time:</label> -->
            <input type="time" id="time" name="time" required>

            <!-- <label for="address">Address:</label> -->
            <input type="text" id="address" name="address" required placeholder="Enter Your Address/Home Town">
            
            <!-- <label for="guardian_number">Number of Guardians:</label> -->
            <input type="number" id="guardian_number" name="guardian_number" min="1" required placeholder="Enter Number of Members">
            
            <!-- <label for="event_name">Name of the Event:</label> -->
            <input type="text" id="event_name" name="event_name" min="1" required placeholder="Enter Name of the Event">

            <!-- <label for="discription">Add Any Discription:</label> -->
            <input type="text" id="discription" name="discription" min="1" required placeholder="Add Any Discription">

            <!-- <label for="seating">Seating Preferences:</label> -->
            <select id="seating" name="seating" style="color:black">
                <option value="">-select Seat Location-</option>
                <option value="indoor">Indoor Seat</option>
                <option value="outdoor">Outdoor Seat</option>
                <option value="window">Window Seat</option>
            </select>
            
            <!-- <label for="level">Level of Seat:</label> -->
            <select id="level" name="level" style="color:black">
                <option value="">-select Level of Seat-</option>
                <option value="indoor">Standard Seat</option>
                <option value="outdoor">Medium Seat</option>
                <option value="window">Average Seat</option>
            </select>

            <input type="Reset" value="Reset Values">
            <button class="submit">Submit</button>

        </form>
    </div>



<?php include('footer.php');