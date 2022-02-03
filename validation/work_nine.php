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

    function validateInArray($order_name, $cocktails)
    {
        if (in_array($order_name, $cocktails)) {
            return "Order is on the menu";
        }
        return "Order is not on the menu!";
    }

    function validate($order_name, $rules, $cup_quantity, $cocktails, $rules_values){
        $arr_rules = explode ("|", $rules);
        $mesages = [];
        foreach ($arr_rules as $rule){
            array_push($messages, call_user_func_array("validate" . $rule, [$order_name, 2, 20, 
            $cocktails, $cup_quantity]));
        }
        return $messages;
    }
    

    function index($order_name, $cup_quantity)
    {
        $cocktails = [
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
        $rules = 'string|int|min|max|inArray';
        $rules_values = '2|15';
        $messages = validate($order_name, $rules, $cup_quantity, $cocktails, $rules_values);
        
        return count($messages)
            ? implode(',\n', $messages)
            : 'No validation messages';
    }

    $order_name = readline ("Input your order, please: ");
    $cup_quantity = readline ("Input the amount of cups you want, please");

    echo index ($order_name, $cup_quantity);


