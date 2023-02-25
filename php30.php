<?php

# WordWrap -
# কত character পরে পরে wrap(ভেঙ্গে) দিতে হবে, বলে দিতে চাইলে -

$string = "Lorem ipsum dolor sit amet consectetur, adipisicingrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr elit. Esse vitae magni corporis maiores cupiditate reiciendis, commodi adipisci ex explicabo molestias.";

echo wordwrap($string, 26);
# এখানে সে ২৬ character পরে যদি দেখে, কোন word এর মাঝামাঝি এসে পড়েছে, তাহলে সে ওই word এর আগে wrap নিয়ে নিবে



#.......................................
# এভাবে করে দিলে সে ২৬ টা character পর পরই wrap নিয়ে নিবে
$string = "Lorem ipsum dolor sit amet consectetur, adipisicingrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr elit. Esse vitae magni corporis maiores cupiditate reiciendis, commodi adipisci ex explicabo molestias.";

echo wordwrap($string, 26, "\n", true);