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