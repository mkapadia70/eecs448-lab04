<?php setlocale(LC_MONETARY, 'en_US'); ?>

<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="div-center text-center width-50vw bg-blue">
            <h1 class="bg-light-blue border-bottom">YOUR ORDER IS CONFIRMED!</h1>
        

                <?php
                    $RedBoxQty = $_POST['RedBoxQty'];
                    $RedBoxPrice = $RedBoxQty * 3;
                    $BlueBoxQty = $_POST['BlueBoxQty'];
                    $BlueBoxPrice = $BlueBoxQty * 1000000;
                    $GreenBoxQty = $_POST['GreenBoxQty'];
                    $GreenBoxPrice = $GreenBoxQty * 1;
                    $shipping = $_POST['shipping'];
                    if($shipping == 0)
                        $shippingD = "7 days";
                    elseif($shipping == 5)
                        $shippingD = "3 days";
                    elseif($shipping == 50)
                        $shippingD = "overnight";
                    $total = $RedBoxPrice + $BlueBoxPrice + $GreenBoxPrice + $shipping;
                ?>

                <table class="div-center">
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>Red Box</td>
                        <td class="text-center"><?php echo $RedBoxQty ?></td>
                        <td class="text-right"><?php echo money_format('%(#10n', $RedBoxPrice); ?></td>
                    </tr>
                    <tr>
                        <td>Blue Box</td>
                        <td class="text-center"><?php echo $BlueBoxQty; ?></td>
                        <td class="text-right"><?php echo money_format('%(#10n', $BlueBoxPrice); ?></td>
                    </tr>
                    <tr>
                        <td>Green Box</td>
                        <td class="text-center"><?php echo $GreenBoxQty ?></td>
                        <td class="text-right"><?php echo money_format('%(#10n', $GreenBoxPrice) ?></td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td class="text-center"><?php echo $shippingD; ?></td>
                        <td class="text-right"><?php echo money_format('%(#10n', $shipping) ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="text-right">Total: <?php echo money_format('%(#10n', $total); ?></td>
                    </tr>
                </table>

            </div>
        </div>
    </body>
</html>
