<?php  include('header.php'); ?>

<h2 style="margin-top:80px;">Enter Your Name:</h2>
<input type="text" id="customerName" placeholder="Your name..." style="padding: 5px 10px; width: 200px; margin-bottom: 10px;">

<div class="chooseOrder">
        <div class="image-container">
            <img src="images/beer.jpeg" alt="beer">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Beer</h1>
            <p>Beer is a popular alcoholic beverage made from fermented grains, typically enjoyed chilled and available in various styles like lager, ale, and stout. 🍺</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>700₹</s> <span style="color: green;">only RS 500₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="beer" autocomplete="off" data-original="700" data-discount="500">
                <label class="btn btn-outline-success" for="beer">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>


<div class="chooseOrder">
        <div class="image-container">
            <img src="images/Wine.jpeg" alt="Wine">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Wine</h1>
            <p>Wine is an alcoholic beverage made from fermented grapes, known for its rich flavors and variety, including red, white, and rosé. 🍷</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>700₹</s> <span style="color: green;">only RS 500₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Wine" autocomplete="off" data-original="700" data-discount="500">
                <label class="btn btn-outline-success" for="Wine">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>


<div class="chooseOrder">
        <div class="image-container">
            <img src="images/Whiskey.jpeg" alt="Whiskey">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Whiskey</h1>
            <p>Whiskey is a distilled alcoholic beverage made from fermented grain mash, known for its rich, smoky, and complex flavors. 🥃🔥</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>2500₹</s> <span style="color: green;">only RS 2000₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Whiskey" autocomplete="off" data-original="2500" data-discount="2000">
                <label class="btn btn-outline-success" for="Whiskey">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>


<div class="chooseOrder">
        <div class="image-container">
            <img src="images/Vodka.jpeg" alt="Vodka">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Vodka</h1>
            <p>Vodka is a clear, distilled alcoholic beverage known for its smooth, neutral taste, making it a popular base for cocktails. 🍸🔥</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>2000₹</s> <span style="color: green;">only RS 1800₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Vodka" autocomplete="off" data-original="2000" data-discount="1800">
                <label class="btn btn-outline-success" for="Vodka">Check For Order</label>
                <button onclick="submitOrder(); orderConfirm()">ORDER NOW</button>
              </div>
        </div>
    </div>


<div class="chooseOrder">
        <div class="image-container">
            <img src="images/Cocktails.jpeg" alt="Cocktails (Mojito, Margarita, Pina Colada)">
        </div>
        <div class="content-container">
            <h1 class="typing" style="text-decoration: underline;">Cocktails (Mojito, Margarita, Pina Colada)</h1>
            <p>Cocktails like Mojito, Margarita, and Piña Colada are refreshing mixed drinks, blending spirits with fruity and citrusy flavors for a perfect balance. 🍹✨</p>
            <p><small style="font-weight: bolder; font-size: 20px;">RS  <s>2000₹</s> <span style="color: green;">only RS 1800₹</span></small></p>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="Cocktails (Mojito, Margarita, Pina Colada)" autocomplete="off" data-original="2000" data-discount="1800">
                <label class="btn btn-outline-success" for="Cocktails (Mojito, Margarita, Pina Colada)">Check For Order</label>
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

<?php  include('footer.php');   ?>