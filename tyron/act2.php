<?php
$quantity = 10;
$price = 20;
$percentage = 0.1;
$pay = 300;
$total = $quantity * $price;
$discount = $percentage * $total;
$total_after_discount = $total - $discount;
$change = $pay - $total_after_discount;

echo "Pusrchase Summary<br>";
echo "-------------------------<br>";
echo "Item: Ballpen<br>";
echo "Quantity: $quantity <br>";
echo "Price per Item:  ₱ $price <br>";
echo "Total Before Discount:  ₱ $total <br>";
echo "Discount (10%):  ₱ $discount <br>";
echo "Total After Discount:  ₱ $total_after_discount <br>";
echo "Amount Of Paid:  ₱ $pay <br>";
echo "Change:  ₱ $change";
?>