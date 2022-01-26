<?php

/*
  Recipe for Sangria Cocktail:
  60 g sugar
  1 cinnamon stick
  3 cloves
  2 oranges
  1 apple
  1 peach
  1 lemon
  100 ml water
  250 ml sparkling water
  12 ice cubes
*/

function cookSangria
(int $sugar,
 int $cinnamonStick,
 int $cloves,
 int $oranges,
 int $apple,
 int $peach,
 int $lemon,
 int $water,
 int $sparklingWater,
 int $iceCubes,
 string $wishes)
{
	echo 
	"1.In a small saucepan, mix $sugar sugar, $cinnamonStick cinnamon, $cloves cloves and $water water,
put on fire and bring to a boil, as soon as the sugar dissolves, remove the spicy syrup from the heat. <br>
	 2.Strain syrup through a sieve into a large mixing bowl, add $oranges orange juice. <br>
	 3.Cut $apple apple and $peach peach into small pieces. <br>
	 4.Cut $lemon lemon into thin rings. <br>
	 5.Add the chopped fruit to the juice, cover with cling film and refrigerate for at least 2 hours, so that the fruit releases its flavors. <br>
	 6.Before serving, add $sparklingWater sparkling water and $iceCubes ice cubes to the sangria. <br>
	 $wishes";
	 /*Pour all ingredients into an old fashioned glass
	  A classic cocktail garnish is a slice of lemon.*/
 }	 
cookSangria(60, 1, 3, 2, 1, 1, 1, 100, 250, 12, 'Please enjoy!');	

Recipe for summer cup mocktail :
1 cm  cucumber (thick slice)
1 sprig mint
4 frozen red berries
120 ml clear, sparkling lemonade
50 gr of ice

*/

function makeAjuice
(    float $cucumber,
     int $mint,  
     int $redberries, 
     float $lemonade, 
     float $ice,
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

