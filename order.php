<?php
function validateType($command)
{
    if((int) $command != 0){
        return "ERROR 422, type of command have to be string. ";
    }
    return "Type of command name is ok. ";
}

function validateMin(string $command)
{
    $min = 4;
    if (strlen($command) <= $min) {
        return "Very few characters in the command!";
    }
    return "Min number of characters are ok!";
}

function validateMax(string $command)
{
    $max = 18;
    if (strlen($command) > $max) {
        return "Too many characters in the command!"; 
    }
    return "Max number of characters are ok!"; 
}

function validateInList(string $command, array $command_list)
{
    if(!in_array($command, $command_list)){
        return "There is no such command on the list! ";
    }
    return "There is such command on the list!";
}

function outputCommand(string $command)
{
    $command_list = [
        "anchors aweigh!",
        "set taut!",
        "toss oars!",
        "secure the anchor!",
        "fire!",
    ];

    $validate_type = validateType($command);
    $validate_min  = validateMin($command);
    $validate_max = validateMax($command);
    $validate_in_list   = validateInList($command, $command_list);
    return "$validate_type $validate_min $validate_max $validate_in_list";
} 
//Business Logic
    $command = readline("Give your command, captain!: "); 
    echo  outputCommand($command);  
