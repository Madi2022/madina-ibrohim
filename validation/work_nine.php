<?php

function validateString($order_name, $min_value, $max_value, $cup_quantity, $cocktails)
{
    if (!is_string($order_name)) {
        return "ERROR 404: Incorrect type of order. Reorder, please ";
    }
    return "Correct type of order. Recieved ";
}
function validateInt($order_name, $min_value, $max_value, $cup_quantity, $cocktails)
{
    if (!is_int($cup_quantity)) {
        return "ERROR 404: Incorrect type of order. Reorder, please. ";
    }
    return "Correct type of order. Received ";
}
function validateMin($order_name, $min_value, $max_value, $cup_quantity, $cocktails)
{
    if (strlen($order_name) <= $min_value) {
        return "Not enough characters in the order. Reorder, please ";
    }
    return "The amount of characters in the order is alright ";
}
function validateMax($order_name, $min_value, $max_value, $cup_quantity, $cocktails)
{
    if (strlen($order_name) >= $max_value) {
        return "Too many characters in your order. Reorder, please  ";
    }
    return " The amount of characters is alright ";
}
function validateInArray($order_name, $min_value, $max_value, $fish_number, $cocktails)
{
    if (!in_array($order_name, $cocktails)) {
        return "Your order doesn't exist in our menu. Reorder, please ";
    }
    return "Order received. ";
}
function validateOrders($order_name, $rules, $cup_quantity, $cocktails, $rules_values)
{
    $messages = [];
    $rules_in_array = explode('|', $rules);
    $rules_values_in_array = explode('|', $rules_values);

    foreach ($rules_in_array as $rule) {
        array_push($messages, call_user_func_array("validate" . ucfirst($rule), [
            $order_name, $rules_values_in_array[0],
            $rules_values_in_array[1],
            $order_name, $cocktails
        ]));
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
    $rules = 'string|min: 10|max: 100|in:$array';
    $rules_values = '2|15';
    $messages = validateOrders($order_name, $rules, $cup_quantity, $cocktails, $rules_values);

    return count($messages)
        ? implode(',/n', $messages)
        : 'No validation messages';
}
$order_name = readline("Input your order, please: ");
$cup_quantity = readline("Input the amount of cups you want, please: ");
echo index($order_name, $cup_quantity);
