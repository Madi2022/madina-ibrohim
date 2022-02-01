<?php

function validateString($cocktail_name)
{
    if (is_string($cocktail_name)) {
        return "200: Cockatil's name type is OK";
    }
    return "422: Cocktail's name type is NOT OK";
}

function validateInteger($cocktail_item)
{
    if (is_int($cocktail_item)) {
        return "200: Cockatil's item is OK";
    }
    return "422: Cocktail's item is NOT OK";
}

function validateMin($cocktail_name, $min_value)
{
    if (strlen($cocktail_name <= $min_value)) {
        return "Very few characters in the order!";
    }
    return "Min number of characters is OK!";
}

function validateMax($cocktail_name, $max_value)
{
    if (strlen($cocktail_name >= $max_value)) {
        return "Too many characters  in the order!";
    }
    return "Max number of characters is OK!";
}

function validateInArray($cocktail_name, $cocktails)
{
    $cocktails =    [
        "Mango_mule",
        "Citrus_Fizz",
        "Cucumber_Gimlet",
        "Magic_Apple",
        "Shirley_Ginger",
        "Apple_Cier",
        "Vantage_Point",
        "Berry_Burlesque",
        "Lavender_Lemonade",
        "iced_tea"
    ];

    if (in_array($cocktail_name, $cocktails)) {
        return "Cocktail is on the menu";
    }
    return "Cocktail is not on the menu!";
}

function orderToBarmen($cocktail_name, $cocktail_item,  $min_value, $max_value, $cocktails)
{
    $validate_string = validateString($cocktail_name) . "</br>";
    $validate_item = validateInteger($cocktail_item) . "</br>";
    $validate_min = validateMin($cocktail_name, $min_value) . "</br>";
    $validate_max = validateMax($cocktail_name, $max_value) . "</br>";
    $validate_in_array = validateInArray($cocktail_name, $cocktails) . "</br>";
    return $validate_string . $validate_item . $validate_min . $validate_max . $validate_in_array;
}

$cocktail_name = readline("Input the cocktail you want: ");
$cocktail_item = readline("Input the amount of cups you want: ");
$min_value = 2;
$max_value = 12;
echo orderToBarmen($cocktail_name, $cocktail_item, $min_value, $max_value, $cocktails);
