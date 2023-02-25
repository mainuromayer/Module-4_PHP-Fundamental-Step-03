<?php

# \n -> <br />     [for browser]

$string = "Lorem ipsum dolor sit amet\n consectetur adipisicing elit.\n Quaerat iure sequi \nest ducimus quasi \nex quidem accusantium earum! Quo, vel.";
// echo $string;
echo nl2br($string);