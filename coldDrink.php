<?php include('header.php');  ?>

<h2 style="margin-top:80px;">Enter Your Name:</h2>
<input type="text" id="customerName" placeholder="Your name..." style="padding: 5px 10px; width: 200px; margin-bottom: 10px;">

<div class="chooseOrder">
        <div class="image-container">
            <img src="images/Mango Juice.jpeg" alt="Mango Juice">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Mango Juice</h1>
            <p>Mango Juice: A sweet and tropical drink made from ripe mangoes, offering a rich and refreshing taste. 🥭🥤</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>150₹</s> <span style="color: green;">only RS 120₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Mango Juice" autocomplete="off" data-original="150" data-discount="120">
                <label class="btn btn-outline-success" for="Mango Juice">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>


<div class="chooseOrder">
        <div class="image-container">
            <img src="images/Apple Juice.jpeg" alt="Apple Juice">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Apple Juice</h1>
            <p>Apple Juice: A crisp and naturally sweet beverage made from fresh apples, perfect for a refreshing boost. 🍏🍹</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>200₹</s> <span style="color: green;">only RS 180₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Apple Juice" autocomplete="off" data-original="200" data-discount="180">
                <label class="btn btn-outline-success" for="Apple Juice">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>


<div class="chooseOrder">
        <div class="image-container">
            <img src="images/Banana Smoothie.jpeg" alt="Banana Smoothie">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Banana Smoothie</h1>
            <p>Banana Smoothie: A creamy and nutritious drink blended with ripe bananas, milk, and honey for a smooth texture. 🍌🥛</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>100₹</s> <span style="color: green;">only RS 60₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Banana Smoothie" autocomplete="off"data-original="100" data-discount="60">
                <label class="btn btn-outline-success" for="Banana Smoothie">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>


<div class="chooseOrder">
        <div class="image-container">
            <img src="images/coco cola.jpeg" alt="Coca-Cola">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Coca-Cola</h1>
            <p>Coca-Cola: A classic and fizzy cola-flavored soft drink with a bold, refreshing taste. 🥤✨</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>50₹</s> <span style="color: green;">only RS 30₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Coca-Cola" autocomplete="off" data-original="50" data-discount="30">
                <label class="btn btn-outline-success" for="Coca-Cola">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>


<div class="chooseOrder">
        <div class="image-container">
            <img src="images/Pepsi.jpeg" alt="Pepsi">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Pepsi</h1>
            <p>Pepsi: A sweet and crisp cola beverage with a smooth and slightly citrusy flavor. 🥤🔥</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>50₹</s> <span style="color: green;">only RS 30₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Pepsi" autocomplete="off" data-original="50" data-discount="30">
                <label class="btn btn-outline-success" for="Pepsi">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>


<div class="chooseOrder">
        <div class="image-container">
            <img src="images/sprite.jpeg" alt="Sprite">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Spritei</h1>
            <p>Sprite: A lemon-lime flavored soda, known for its crisp, refreshing, and caffeine-free taste. 🍋🥤</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>50₹</s> <span style="color: green;">only RS 30₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Sprite" autocomplete="off" data-original="50" data-discount="30">
                <label class="btn btn-outline-success" for="Sprite">Check For Order</label>
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

<?php include('footer.php');  ?>