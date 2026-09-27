<?php include('header.php') ?>

<h2 style="margin-top:80px;">Enter Your Name:</h2>
<input type="text" id="customerName" placeholder="Your name..." style="padding: 5px 10px; width: 200px; margin-bottom: 10px;">

    <div class="chooseOrder">
        <div class="image-container">
            <img src="images/jimmy.jpeg" alt="jimmy.jpeg">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Jimmy John’s</h1>
            <p>Jimmy John’s is a fast-food sandwich chain known for its fresh ingredients, speedy delivery, and signature "Freaky Fast" service.</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>200₹</s> <span style="color: green;">only RS 150₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="jimmy" autocomplete="off" data-original="200" data-discount="150">
                <label class="btn btn-outline-success" for="jimmy">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>

    <div class="chooseOrder">
        <div class="image-container">
            <img src="images/Chicken Sandwiches.jpeg" alt="Chicken Sandwiches">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Chicken Sandwiches</h1>
            <p>Chicken sandwiches are a crispy, juicy fast-food favorite, served with toppings like lettuce, mayo, and pickles. 🍗🥪</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>200₹</s> <span style="color: green;">only RS 150₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Chicken Sandwiches" autocomplete="off" data-original="200" data-discount="150">
                <label class="btn btn-outline-success" for="Chicken Sandwiches">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>


    <div class="chooseOrder">
        <div class="image-container">
            <img src="images/Hot dogs.jpeg" alt="Hot dogs">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Hot dogs</h1>
            <p>Hot dogs are a popular fast-food snack consisting of a grilled or steamed sausage served in a bun, often topped with condiments like mustard, ketchup, and relish. 🌭</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>200₹</s> <span style="color: green;">only RS 150₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Hot dogs" autocomplete="off" data-original="200" data-discount="150">
                <label class="btn btn-outline-success" for="Hot dogs">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>


    <div class="chooseOrder">
        <div class="image-container">
            <img src="images/Subs & Hoagies.jpeg" alt="Subs & Hoagies">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Subs & Hoagies</h1>
            <p>Subs & Hoagies are long sandwiches filled with meats, cheeses, veggies, and sauces, served on a soft or toasted roll. 🥖🥪</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>200₹</s> <span style="color: green;">only RS 150₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Subs & Hoagies" autocomplete="off" data-original="200" data-discount="150">
                <label class="btn btn-outline-success" for="Subs & Hoagies">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>


    <div class="chooseOrder">
        <div class="image-container">
            <img src="images/Chicken Nuggets.jpeg" alt="Chicken Nuggets">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Chicken Nuggets</h1>
            <p>Chicken nuggets are bite-sized, breaded, and deep-fried pieces of chicken, popular as a crispy fast-food snack. 🍗🔥</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>200₹</s> <span style="color: green;">only RS 150₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Chicken Nuggets" autocomplete="off" data-original="200" data-discount="150">
                <label class="btn btn-outline-success" for="Chicken Nuggets">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>


    <div class="chooseOrder">
        <div class="image-container">
            <img src="images/Chicken Wings.jpeg" alt="Chicken Wings">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Chicken Wings</h1>
            <p>Chicken wings are a popular fast-food snack, often deep-fried, crispy, and coated in flavorful sauces. 🍗🔥</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>200₹</s> <span style="color: green;">only RS 150₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Chicken Wings" autocomplete="off" data-original="200" data-discount="150">
                <label class="btn btn-outline-success" for="Chicken Wings">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>

    <div class="chooseOrder">
        <div class="image-container">
            <img src="images/cheese-burger.webp" alt="Cheeseburgers">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Cheeseburgers</h1>
            <p>A cheeseburger is a classic fast-food favorite, featuring a juicy beef patty topped with melted cheese in a soft bun. 🍔🧀</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>200₹</s> <span style="color: green;">only RS 150₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Cheeseburgers" autocomplete="off" data-original="200" data-discount="150">
                <label class="btn btn-outline-success" for="Cheeseburgers">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>

    <!-- <button onclick="submitOrder()" style="padding: 10px 20px; margin-top: 20px;">Submit</button> -->

<!-- Summary Section -->
<div id="summarySection" class="summarySection" style="display: none;">
    <h2>Order Summary</h2>
    <p id="orderDate"></p>
    <p id="orderName"></p>
    <ul id="selectedItemsList"></ul>
    <h3 id="totalAmount"></h3>
    <p>Thank you for your order! 😊</p>
    <button id="printBtn" onclick="window.print()">🖨️ Print Order</button>
</div>

<?php include('footer.php') ?>




