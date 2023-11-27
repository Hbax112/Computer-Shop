<?php include 'cap.php'?>

    <!------cart--------->

    <div class="small-container cart-page">
        <table>

            <tr>
                <th>Produs</th>
                <th>Suma</th>
                <th>Subtotal</th>
            </tr>

            <tr>
                <td>
                    <div class="cart-info"></div>
                    <a href="Product_Details.html"><img src="photos/photo1.jpg"></a>
                    <div>
                        <p>Blush</p>
                        <small>Price: $10.00</small>
                        <br>
                        <a href="">Delete</a>
                    </div>
                </td>
                <td><input type="number" value="1" min="1"> </td>
                <td>$10.00</td>
            </tr>

        </table>

        <div class="total-price">
            <table>

                <tr>
                    <td>Subtotal</td>
                    <td>$10.00</td>
                </tr>

                <tr>
                    <td>Tax</td>
                    <td>$2.00</td>
                </tr>

                <tr>
                    <td>Total</td>
                    <td>$12.00</td>
                </tr>

            </table>
        </div>
        
    </div>
<?php include 'coada.php'?>