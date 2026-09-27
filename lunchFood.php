<?php include('header.php');   ?>

<h2 style="margin-top:80px;">Enter Your Name:</h2>
<input type="text" id="customerName" placeholder="Your name..." style="padding: 5px 10px; width: 200px; margin-bottom: 10px;">

    <div class="chooseOrder">
        <div class="image-container">
            <img src="images/Fried Rice.jpeg" alt="Fried Rice">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Indian Fried Rice</h1>
            <p>Fried rice is a flavorful dish made with stir-fried rice, vegetables, eggs, and proteins, seasoned with soy sauce and spices. 🍚🔥</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>100₹</s> <span style="color: green;">only RS 80₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Fried Rice" autocomplete="off" data-original="100" data-discount="80">
                <label class="btn btn-outline-success" for="Fried Rice">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>

    <div class="chooseOrder">
        <div class="image-container">
            <img src="images/vageCarry.jpeg" alt="Indian Curry">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Indian vage Curry</h1>
            <p>Indian curry is a flavorful dish made with aromatic spices, herbs, and a rich sauce, often served with rice or bread. 🍛🔥</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>100₹</s> <span style="color: green;">only RS 80₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Indian Curry" autocomplete="off" data-original="100" data-discount="80">
                <label class="btn btn-outline-success" for="Indian Curry">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>


    <div class="chooseOrder">
        <div class="image-container">
            <img src="images/Stir-Fry Vegetables.jpeg" alt="Stir-Fry Vegetables">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Stir-Fry Vegetables</h1>
            <p>Stir-fry vegetables are a colorful, crunchy, and flavorful dish cooked quickly with sauces and seasonings. 🥦🥕🔥</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>100₹</s> <span style="color: green;">only RS 80₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Stir-Fry Vegetables" autocomplete="off" data-original="100" data-discount="80">
                <label class="btn btn-outline-success" for="Stir-Fry Vegetables">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>
    <div class="chooseOrder">
        <div class="image-container">
            <img src="images/Biryani.jpeg" alt="Biryani">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Biryani</h1>
            <p>Biryani is a fragrant and flavorful rice dish cooked with aromatic spices, tender meat, or vegetables, often served with raita. 🍛🔥</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>100₹</s> <span style="color: green;">only RS 80₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Biryani" autocomplete="off" data-original="100" data-discount="80">
                <label class="btn btn-outline-success" for="Biryani">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>

    <!-- Summary Section -->
<div id="summarySection" style="display: none;">
    <h2>Order Summary</h2>
    <p id="orderDate"></p>
    <p id="orderName"></p>
    <ul id="selectedItemsList"></ul>
    <h3 id="totalAmount"></h3>
    <p>Thank you for your order! 😊</p>
    <button id="printBtn" onclick="window.print()">🖨️ Print Order</button>
</div>

<?php include('footer.php'); ?>