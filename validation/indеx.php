<?php

    function validateString($order_name)
    {
        if (is_string($order_name)) {
            return "200: Order's name type is correct. Your order is received.";
        }
        return "422: Order's name type is incorrect. Enter letters";
    }

    function validateInteger($cup_quantity)
    {
        if (is_int($cup_quantity)) {
            return "200: Cup quantity is correct. Your order is received.";
        }
        return "422: Quantity is incorrect. Enter a numeric value";
    }

    function validateMin($cup_quantity, $min_value)
    {
        if (strlen($cup_quantity) <= $min_value) {
            return "Very few characters in the order!";
        }
        return "Min number of characters is OK!";
    }

    function validateMax($cup_quantity, $max_value)
    {
        if (strlen($cup_quantity) >= $max_value) {
            return "Too many characters  in the order!";
        }
        return "Max number of characters is OK!";
    }

    $cocktails =    [
        "Mango Mule",
        "Citrus Fizz",
        "Cucumber Gimlet",
        "Magic Apple",
        "Shirley Ginger",
        "Apple Cier",
        "Vantage Point",
        "Berry Burlesque",
        "Lavender Lemonade",
        "Iced Tea"
    ];

    function validateInArray($order_name, $cocktails)
    {
        if (in_array($order_name, $cocktails)) {
            return "Order is on the menu";
        }
        return "Order is not on the menu!";
    }

    function orderToBarmen($order_name, $cup_quantity,  $min_value, $max_value, $cocktails)
    {
        $validate_string = validateString($order_name) . "</br>";
        $validate_item = validateInteger($cup_quantity) . "</br>";
        $validate_min = validateMin($cup_quantity, $min_value) . "</br>";
        $validate_max = validateMax($cup_quantity, $max_value) . "</br>";
        $validate_in_array = validateInArray($order_name, $cocktails) . "</br>";
        return $validate_string . $validate_item . $validate_min . $validate_max . $validate_in_array;
    }

    $order_name = readline("Input your order (cocktail): ");
    $cup_quantity = readline("Input the amount of cups you want: ");
    $min_value = 2;
    $max_value = 12;
    echo orderToBarmen($order_name, $cup_quantity, $min_value, $max_value, $cocktails);


