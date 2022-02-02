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

function validateInList(string $command, array $command_list)
{
    if(!in_array($command, $command_list)){
        return "There is no such command on the list! ";
    }
    return "There is such command on the list!";
}

function outputCommand(string $command, $min_value, $max_value)
{
    $command_list = [
        "anchors aweigh!",
        "set taut!",
        "toss oars!",
        "secure the anchor!",
        "fire!",
    ];

    $validate_type = validateType($command);
    $validate_min  = validateMin($command, $min_value);
    $validate_max = validateMax($command, $max_value);
    $validate_in_list   = validateInList($command, $command_list);
    return "$validate_type $validate_min $validate_max $validate_in_list";
} 
//Business Logic
    $command = readline("Give your command, captain!: "); 
	$min_value = 4;
	$max_value = 18;
    echo outputCommand($command, $min_value, $max_value );  
