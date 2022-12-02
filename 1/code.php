<?php

$input = file_get_contents("input.txt");

$elf_input = explode("\n\n", $input);

assert(count($elf_input) === 243, "Found " . count($elf_input) . " entries");

$per_elf = [];

foreach ($elf_input as $elf) {
    $elf_entries = explode("\n", $elf);

    $per_elf[] = array_sum($elf_entries);
}

assert($per_elf[4] === 26247);

rsort($per_elf, SORT_NUMERIC);
print $per_elf[0];
