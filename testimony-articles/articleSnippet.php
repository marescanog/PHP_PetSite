<?php 

require_once './php/limit_text.php';

$arrSnippet=array (
  array('articleNumber' => 1 , 'name' => 'Melinda', 'petname' => 'Sparky',  'snippet' => limit_text('After a miscarriage, we felt empty. It seemed that there was nothing to look forward to after the work day since we were going back to an empty house. The days go by as though in a blur and an endless marathon of emptiness. A friend of mine suggested to get a dog and said that Cebu Pet Match has a variety of dogs that we can choose from and get the right dog for us.', 50)),
  array('articleNumber' => 2, 'name' => 'Nathan', 'petname' =>'Butter',  'snippet' => limit_text('I am Nathan and I am an only child. I always wanted a baby brother but never got one. Every day I would ask my parents to give me a baby brother or sister. I even told them that if I would get a baby brother or sister it would be ok if they will never give me any more gifts for my birthday or gifts for Christmas. But no baby brother or baby sister ever appeared and I got to be so sad and lonely.', 50)),
  array('articleNumber' => 3, 'name' => 'Sarah and Connor', 'petname' =>'Wolf',  'snippet' => limit_text('We have been together for so many years, and it is the same old routine. It is like a whole new meaning to being an old married couple.  Same routine, day in and day out, wake up, breakfast then go to work, then after work go home, dinner then sleep the repeat. We felt something was missing and a friend suggested getting a pet.', 50))
) 

?>