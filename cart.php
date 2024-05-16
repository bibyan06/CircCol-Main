<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - BBBootstrap</title>
    <link rel="stylesheet" href="css/cart.css">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        body {
            background: #ffffff;
            min-height: 100vh;
            vertical-align: middle;
            display: flex;
            font-family: sans-serif;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .title {
            margin-bottom: 5vh;
        }

        .card {
            margin: auto;
            max-width: 950px;
            width: 90%;
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 1rem;
            border: transparent;
        }

        @media(max-width: 767px) {
            .card {
                margin: 3vh auto;
            }
        }

        .cart {
            background-color: #fff;
            padding: 4vh 5vh;
            border-bottom-left-radius: 1rem;
            border-top-left-radius: 1rem;
        }

        @media(max-width: 767px) {
            .cart {
                padding: 4vh;
                border-bottom-left-radius: unset;
                border-top-right-radius: 1rem;
            }
        }

        .summary {
            background-color: #FFE5BA;
            border-top-right-radius: 1rem;
            border-bottom-right-radius: 1rem;
            padding: 4vh;
            color: rgb(65, 65, 65);
        }

        @media(max-width: 767px) {
            .summary {
                border-top-right-radius: unset;
                border-bottom-left-radius: 1rem;
            }
        }

        .summary .col-2 {
            padding: 0;
        }

        .summary .col-10 {
            padding: 0;
        }

        .row {
            margin: 0;
        }

        .title b {
            font-size: 1.5rem;
        }

        .main {
            margin: 0;
            padding: 2vh 0;
            width: 100%;
        }

        .col-2,
        .col {
            padding: 0 1vh;
        }

        a {
            padding: 0 1vh;
        }

        .close {
            margin-left: auto;
            font-size: 0.7rem;
            cursor: pointer;
        }

        img {
            width: 3.5rem;
        }

        .back-to-shop {
            margin-top: 4.5rem;
        }

        h5 {
            margin-top: 4vh;
        }

        hr {
            margin-top: 1.25rem;
        }

        form {
            padding: 2vh 0;
        }

        select {
            border: 1px solid rgba(0, 0, 0, 0.137);
            padding: 1.5vh 1vh;
            margin-bottom: 4vh;
            outline: none;
            width: 100%;
            background-color: rgb(247, 247, 247);
        }

        input {
            border: 1px solid rgba(0, 0, 0, 0.137);
            padding: 1vh;
            margin-bottom: 4vh;
            outline: none;
            width: 100%;
            background-color: rgb(247, 247, 247);
        }

        input:focus::-webkit-input-placeholder {
            color: transparent;
        }

        .btn {
            background-color: #1F4690;
            border-color: #000;
            color: white;
            width: 100%;
            font-size: 0.7rem;
            margin-top: 4vh;
            padding: 1vh;
            border-radius: 0;
        }

        .btn:focus {
            box-shadow: none;
            outline: none;
            box-shadow: none;
            color: white;
            -webkit-box-shadow: none;
            -webkit-user-select: none;
            transition: none;
        }

        .btn:hover {
            color: white;
        }

        a {
            color: black;
        }

        a:hover {
            color: black;
            text-decoration: none;
        }

        #code {
            background-image: linear-gradient(to left, rgba(255, 255, 255, 0.253), rgba(255, 255, 255, 0.185)),
                url("https://img.icons8.com/small/16/000000/long-arrow-right.png");
            background-repeat: no-repeat;
            background-position-x: 95%;
            background-position-y: center;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
        }

        .quantity-controls button {
            background-color: transparent;
            border: 1px solid #ddd;
            padding: 0.2rem 0.5rem;
        }

        .quantity-controls span {
            margin: 0 0.5rem;
        }
    </style>
</head>

<body className='snippet-body'>
    <div class="card">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Shopping Cart</b></h4>
                        </div>
                        <div class="col align-self-center text-right text-muted">
                            <?php
                            $conn = new mysqli('localhost', 'root', '', 'CirCol');
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $total_items_sql = "SELECT COUNT(id) as total_items FROM cart";
                            $total_items_result = $conn->query($total_items_sql);
                            $total_items_row = $total_items_result->fetch_assoc();
                            $total_items = $total_items_row['total_items'];
                            echo $total_items . ' item(s)';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row main align-items-center">
                        <div class="col-2">Image</div>
                                <div class="col">
                                    <div class="row text-muted">Product Name</div>
                                </div>
                                <div class="quantity_name">
                                    <span class="px-1">Quantity</span>
                                </div>
                                <div class="col price">Price</div>
                                <div class="col total_amount_name">Total Amount</div>
                                <div class="col">
                                    <div class="close">Remove</div>
                                </div>
                        </div>
                <?php
                $sql = "SELECT * FROM cart";
                $result = $conn->query($sql);
                $totalAmount = 0;

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $totalAmount += $row['total_amount'];
                ?>
                
                        <div class="row border-top border-bottom" data-id="<?php echo $row['id']; ?>">
                            <div class="row main align-items-center">
                                <div class="col-2"><img class="img-fluid" src="<?php echo $row['image']; ?>"></div>
                                <div class="col">
                                    <div class="row text-muted"><?php echo $row['product_name']; ?></div>
                                </div>
                                <div class="col quantity-controls">
                                    <button class="btn btn-sm btn-outline-secondary" onclick="updateQuantity(<?php echo $row['id']; ?>, -1)">-</button>
                                    <span class="px-2"><?php echo $row['quantity']; ?></span>
                                    <button class="btn btn-sm btn-outline-secondary" onclick="updateQuantity(<?php echo $row['id']; ?>, 1)">+</button>
                                </div>
                                <div class="col price">&euro; <?php echo $row['price']; ?></div>
                                <div class="col total_amount">&euro; <?php echo $row['total_amount']; ?></div>
                                <div class="col">
                                    <div class="close" onclick="removeCartItem(<?php echo $row['id']; ?>)">&times;</div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "Your cart is empty.";
                }

                $conn->close();
                ?>
                <div class="back-to-shop"><a href="dashboard.php">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
            </div>
            <div class="col-md-4 summary">
                <div>
                    <h5><b>Summary</b></h5>
                </div>
                <hr>
                <div class="row">
                    <div class="col" style="padding-left: 0;">ITEMS <span id="total_items"><?php echo $total_items; ?></span></div>
                    <div class="col text-right" id="total_price">&euro; <?php echo number_format($totalAmount, 2); ?></div>
                </div>
                <div class="row" style="border-top: 1px solid rgba(0, 0, 0, .1); padding: 2vh 0;">
                    <div class="col">LOCATION</div>
                    <div class="col text-right">BU College of Science Bldg 2 CircUITS Office</div>
                </div>
                <form method="post">
                    <p>PICK-UP DATE</p>
                    <select>
                        <option class="text-muted">March, 2024 - 8:00 AM - 5:00 PM</option>
                    </select>
                    <p>DISCOUNT</p>
                    <select name="discount" id="discount" onchange="applyDiscount()">
                        <option class="text-muted" value="" disabled>Choose an Option</option>
                        <option class="text-muted" value="Member" <?php if (isset($_POST['discount']) && $_POST['discount'] === "Member") echo "selected"; ?>>Member</option>
                        <option class="text-muted" value="Not a Member" <?php if (isset($_POST['discount']) && $_POST['discount'] === "Not a Member") echo "selected"; ?>>Not a Member</option>
                    </select>
                    <p>GIVE CODE</p>
                    <input id="code" placeholder="Enter your code">
                </form>
                <div class="row" style="border-top: 1px solid rgba(0, 0, 0, .1); padding: 2vh 0;">
                    <div class="col">Discount</div>
                    <div class="col text-right" id="discount_amount">&euro; 0.00</div>
                </div>
                <div class="row" style="border-top: 1px solid rgba(0, 0, 0, .1); padding: 2vh 0;">
                    <div class="col">TOTAL PRICE</div>
                    <div class="col text-right" id="total_price_after_discount">&euro; <?php echo number_format($totalAmount, 2); ?></div>
                </div>
                <button class="btn" onclick="window.location.href = 'order_details.php';">CHECKOUT</button>
            </div>
        </div>
    </div>

    <script>
        function updateQuantity(itemId, delta) {
            var row = document.querySelector(`div[data-id='${itemId}']`);
            var quantityElement = row.querySelector('.quantity-controls span');
            var priceElement = row.querySelector('.price');
            var totalAmountElement = row.querySelector('.total_amount');
            var quantity = parseInt(quantityElement.innerText);
            var price = parseFloat(priceElement.innerText.replace('€', '').trim());

            var newQuantity = quantity + delta;
            if (newQuantity < 1) return;

            var newTotalAmount = price * newQuantity;
            quantityElement.innerText = newQuantity;
            totalAmountElement.innerText = '€ ' + newTotalAmount.toFixed(2);

            // Update the database
            $.ajax({
                url: 'update_cart.php',
                method: 'POST',
                data: {
                    itemId: itemId,
                    quantity: newQuantity
                },
                success: function (response) {
                    updateSummary();
                }
            });
        }

        function removeCartItem(itemId) {
            $.ajax({
                url: 'remove_cart_item.php',
                method: 'POST',
                data: {
                    itemId: itemId
                },
                success: function (response) {
                    document.querySelector(`div[data-id='${itemId}']`).remove();
                    updateSummary();
                }
            });
        }

        function updateSummary() {
            var totalItems = 0;
            var totalPrice = 0;

            document.querySelectorAll('.row.main').forEach(function (row) {
                var quantity = parseInt(row.querySelector('.quantity-controls span').innerText);
                var totalAmount = parseFloat(row.querySelector('.total_amount').innerText.replace('€', '').trim());
                totalItems += quantity;
                totalPrice += totalAmount;
            });

            document.getElementById('total_items').innerText = totalItems;
            document.getElementById('total_price').innerText = '€ ' + totalPrice.toFixed(2);
            document.getElementById('total_price_after_discount').innerText = '€ ' + totalPrice.toFixed(2);

            applyDiscount();
        }

        function applyDiscount() {
            var discountType = document.getElementById('discount').value;
            var totalPrice = parseFloat(document.getElementById('total_price').innerText.replace('€', '').trim());
            var discountAmount = 0;

            if (discountType === "Member") {
                discountAmount = totalPrice * 0.1; // Assuming 10% discount for members
            }

            var totalPriceAfterDiscount = totalPrice - discountAmount;

            document.getElementById('discount_amount').innerText = '€ ' + discountAmount.toFixed(2);
            document.getElementById('total_price_after_discount').innerText = '€ ' + totalPriceAfterDiscount.toFixed(2);
        }

        // Initial call to update summary
        updateSummary();
    </script>
</body>

</html>
