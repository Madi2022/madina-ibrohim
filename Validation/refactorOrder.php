<?php
function validateType($command)
{
    if((int) $command != 0){
         return "ERROR 422, type of command have to be string. ";
    }
    return "Type of command name is ok. ";
}

function validateMin($command, $min_value)
{
    if (strlen($command) <= $min_value) {
         return "Very few characters in the command!";
    }
    return "Min numbers of characters are ok!";
}

function validateMax($command, $max_value)
{
    if (strlen($command) > $max_value) {
         return "Too many characters in the command!";
    }
    return "Max numbers of characters are ok!";
}

function validateInList($command, $min_value, $max_value, $available_orders)
{
    if(!in_array($command, $available_orders)) {
        return "There is no such command on the list! ";
    }
    return "There is such command on the list!";
}

function validate($command, $rules, $available_orders)
{
    $messages = [];
    $arr_rules = preg_split("/[|:]/", $rules);
    $arr1 = [$arr_rules[0], $arr_rules[1], $arr_rules[3], $arr_rules[5]];
    $arr2 = [$arr_rules[2], $arr_rules[4], $arr_rules[6]];
    foreach ($arr1 as $rule) {
        $rule = "validate" . ucfirst($rule);
        array_push($messages, call_user_func_array($rule, [$command, $arr2[0], $arr2[1], $available_orders]));
    }
    return $messages;
}

function index($command)
{
    $available_orders = [
        "anchors aweigh!",
        "set taut!",
        "toss oars!",
        "secure the anchor!",
        "fire!",
    ];

    $rules = 'type|min:5|max:20|inList:$available_orders';
    $messages = validate($command, $rules, $available_orders);

    return count($messages)
         ? implode("\n", $messages)
         : 'No validation messages';

}
//Business Logic
$command = readline("Give your command, captain!: ");
echo index($command);
