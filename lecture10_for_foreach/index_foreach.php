<?php

/**
 * foreach (as [$key => ] $value)
 */


 $response = [
    'name' => 'PHP',
    'categoryId' => 0,
    // 'messages' => [
    //     'Hello, world',
    //     'Who are you?',
    //     'Bye',
    // ]
 ];

 foreach ($response as $key => $value) {
    echo $value . PHP_EOL;   
}

//  foreach ($response as $key => $value) {
//     foreach ($value as $msg) {
//         echo $msg;
//     }   
//  }