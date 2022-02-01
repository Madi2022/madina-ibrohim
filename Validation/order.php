<?php
//Task 'Commander's order'
function validateType($order)
{
    if((int) $order != 0){
        return "ERROR 422, type of order have to be string. ";
    }
    return "Type of order name is ok. ";
}

function validateMin(string $order)
{
    $min = 4;
    if (strlen($order) <= $min) {
        return "Very few characters in the order!";
    }
    return "Min number of characters are ok!";
}

function validateMax(string $order)
{
    $max = 18;
    if (strlen($order) > $max) {
        return "Too many characters in the order!"; 
    }
    return "Max number of characters are ok!"; 
}

function validateInList(string $order, array $order_list)
{
    if(!in_array($order, $order_list)){
        return "There is no such order on the list! ";
    }
    return "There is such order on the list!";
}

function orderList(string $order)
{
    $order_list = [
        "anchors aweigh!",
        "set taut!",
        "toss oars!",
        "secure the anchor!",
        "fire!",
    ];
    
    $validate_type = validateType($order);
    $validate_min  = validateMin($order);
    $validate_max = validateMax($order);
    $validate_in_list   = validateInList($order, $order_list);
    return "$validate_type $validate_min $validate_max $validate_in_list";
} 
//Business Logic
    $order = readline("Give your order, captain!: "); 
    echo orderList($order);  
