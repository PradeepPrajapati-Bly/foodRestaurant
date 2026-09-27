 <!-- Footer -->
             <footer>
                
             <p>P.K.P 2025 Delicious Diceses/Foof. All Rights Reserved.</p>

                <script src="bootstrap.bundle.js"></script>
                <script>
                    function min() {
                        document.getElementById('max').classList.add('col-sm-10');
                        document.getElementById('max').classList.remove('col-sm-12');
                    }
                    function max() {
                        document.getElementById('max').classList.add('col-sm-12');
                        document.getElementById('max').classList.remove('col-sm-10');
                    }

                    // alert function for order confermation 

                    function orderConfirm(){
                        window.alert('Your order list shown in Bottom, You can print this list easily. Thank You! 🖨🖨')
                    }
                </script>



                    <!-- order selection and printing methods are involbes in this section -->
    <script>
        function submitOrder() {
            const customer = document.getElementById("customerName").value.trim();
            const now = new Date();
            const dateStr = now.toLocaleString();

            const selectedItems = [];
            let total = 0;

            const list = document.getElementById("selectedItemsList");
            const summary = document.getElementById("summarySection");
            const totalDisplay = document.getElementById("totalAmount");

            list.innerHTML = ""; // Clear old
            summary.style.display = "block";

            document.getElementById("orderDate").innerHTML = "<strong>Date:</strong> " + dateStr;
            document.getElementById("orderName").innerHTML = customer ? "<strong>Name:</strong> " + customer : "";

            document.querySelectorAll('.btn-check').forEach(checkbox => {
                if (checkbox.checked) {
                    const name = checkbox.id;
                    const original = parseInt(checkbox.getAttribute("data-original"));
                    const discount = parseInt(checkbox.getAttribute("data-discount"));

                    selectedItems.push({ name, original, discount });
                    total += discount;

                    const li = document.createElement("li");
                    li.innerHTML = `<strong>${name}</strong> - Original: ₹${original}, Discount: ₹${discount}`;
                    list.appendChild(li);
                }
            });

            if (selectedItems.length > 0) {
                totalDisplay.innerHTML = `Total Payable: <strong>₹${total}</strong>`;
            } else {
                totalDisplay.innerHTML = "No items selected.";
                summary.style.display = "none";
            }
        }
    </script>
            </footer>
    </div>
</body>

</html>