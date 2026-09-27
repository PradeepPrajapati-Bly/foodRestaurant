<?php include('header.php')  ?>

<h2 style="margin-top:80px;">Enter Your Name:</h2>
<input type="text" id="customerName" placeholder="Your name..." style="padding: 5px 10px; width: 200px; margin-bottom: 10px;">

<div class="chooseOrder">
        <div class="image-container">
            <img src="images/Naan.jpeg" alt="jimmy.jpeg">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Naan</h1>
            <p>Naan is a soft, fluffy Indian flatbread, traditionally baked in a tandoor and served with curries or kebabs. 🍞🔥</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>150₹</s> <span style="color: green;">only RS 100₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Naan" autocomplete="off" data-original="150" data-discount="100">
                <label class="btn btn-outline-success" for="Naan">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>


    <div class="chooseOrder">
        <div class="image-container">
            <img src="images/Paneer Butter Masala.jpeg" alt="Paneer Butter Masala">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Paneer Butter Masala</h1>
            <p>Paneer Butter Masala is a rich and creamy Indian curry made with soft paneer cubes in a buttery, spiced tomato-based gravy. 🧀🍛</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>150₹</s> <span style="color: green;">only RS 100₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Paneer Butter Masala" autocomplete="off" data-original="150" data-discount="100">
                <label class="btn btn-outline-success" for="Paneer Butter Masala">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>


    <div class="chooseOrder">
        <div class="image-container">
            <img src="images/Dal Makhani.jpg" alt="Dal Makhani">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Dal Makhani</h1>
            <p>Paneer Dal Makhani is a rich and creamy Indian dish made with black lentils, paneer, butter, and aromatic spices. 🍛🧀</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>150₹</s> <span style="color: green;">only RS 100₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Dal Makhani" autocomplete="off" data-original="150" data-discount="100">
                <label class="btn btn-outline-success" for="Dal Makhani">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>


    <div class="chooseOrder">
        <div class="image-container">
            <img src="images/Tandoori Chicken.jpeg" alt="Tandoori Chicken">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Tandoori Chicken</h1>
            <p>Tandoori Chicken is a smoky, spiced, and marinated chicken dish cooked in a tandoor, known for its vibrant red color and rich flavors. 🍗🔥</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>150₹</s> <span style="color: green;">only RS 100₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Tandoori Chicken" autocomplete="off" data-original="150" data-discount="100">
                <label class="btn btn-outline-success" for="Tandoori Chicken">Check For Order</label>
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
<?php  include('footer.php') ?>