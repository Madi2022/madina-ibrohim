<?php

/*
Recipe for summer cup mocktail :
1 cm  cucumber (thick slice)
1 sprig mint
4 frozen red berries
120 ml clear, sparkling lemonade
50 gr of ice

*/

fucntion makeAjuice
(    float $cucumber,
     int $mint,  
     int $redberries, 
     float $lemonade, 
     float $ice;
     string $horoshieslova )
{
    echo 
    "1)
    Chop the $cucumber cucumber and $mint mint sprig into small pieces.<br>
    Bring 200ml water to the boil in a small pan and then add the $mint mint and $cucumber cucumber. <br>
    Turn off the heat and leave for 2 mins. <br>
    Add a small handful of frozen $redberries redberries, let them defrost for a minute, then crush them lightly with the back of a spoon.<br> 
    Strain the mixture. This will keep in the fridge for up to 24 hours and will be enough to make four drinks. <br>

     2)
     Pour 40ml of your strained mixture into a tall glass.<br>
     Add a handful of $ice ice and top up with 120ml $lemonade lemonade. <br>
     Garnish with whatever chopped fruit you like or some more frozen $redberries redberries and $mint mint leaves if you have them.<br>
     Stir gently to combine.<br>
     $horoshieslova";
 
/*
Notes: Chop the ingredients lightly so you will be able to add more lemonade/water to your mocktail. 
To garnish: More frozen berries , chopped fruits, cucumber slice, mint, citrus-all optional
*/

} 
makeAjuice(1, 1, 4, 120, 50, 'Bon appetit!');