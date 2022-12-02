<?php

$input = file_get_contents("input.txt");

$rps_input = array_filter(explode("\n", $input));

$shape_points = [
    'X' => 1,
    'Y' => 2,
    'Z' => 3,
];

$round_points = [
    'lose' => 0,
    'draw' => 3,
    'win' => 6,
];

$map = [
    // Rock is played
    'A' => [
        // Rock is returned
        'X' => $shape_points['X'] + $round_points['draw'],
        // Paper is returned
        'Y' => $shape_points['Y'] + $round_points['win'],
        // Scissor is returned
        'Z' => $shape_points['Z'] + $round_points['lose'],
    ],
    // Paper is played
    'B' => [
        // Rock is returned
        'X' => $shape_points['X'] + $round_points['lose'],
        // Paper is returned
        'Y' => $shape_points['Y'] + $round_points['draw'],
        // Scissor is returned
        'Z' => $shape_points['Z'] + $round_points['win'],
    ],
    // Scissors is played
    'C' => [
        // Rock is returned
        'X' => $shape_points['X'] + $round_points['win'],
        // Paper is returned
        'Y' => $shape_points['Y'] + $round_points['lose'],
        // Scissor is returned
        'Z' => $shape_points['Z'] + $round_points['draw'],
    ],
];

$game_total = 0;

foreach ($rps_input as $line) {
    [ $opponent, $me ] = explode(" ", $line);

    $round = $map[$opponent][$me];

    print $round . "\n";
    $game_total += $round;
}

print $game_total . "\n";
