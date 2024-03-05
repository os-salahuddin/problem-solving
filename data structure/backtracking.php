<?php
function permute($nums) {
    $result = [];
    backtrack($nums, [], $result);
    return $result;
}

function backtrack($nums, $currentPermutation, &$result) {
    if (count($currentPermutation) == count($nums)) {
        $result[] = $currentPermutation;
        return;
    }

    // Try adding each unused number to the current permutation and backtrack
    foreach ($nums as $num) {
        if (!in_array($num, $currentPermutation)) {
            // Add the current number to the current permutation
            $currentPermutation[] = $num;

            // Recursively backtrack with the updated permutation
            backtrack($nums, $currentPermutation, $result);

            // Backtrack: Remove the current number from the permutation to try other possibilities
            array_pop($currentPermutation);
        }
    }
}

// Example usage:
$nums = [1, 2, 3];
$permutations = permute($nums);
foreach ($permutations as $permutation) {
    echo "[" . implode(", ", $permutation) . "]\n";
}