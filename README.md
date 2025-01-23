# PHP Bug: Incorrect Null Value Handling

This repository demonstrates a common error in PHP when checking for null values within an array.  The function `foo()` is intended to determine if an array contains any null values. It has a logic flaw that causes it to return an incorrect value for empty arrays.

## Bug Description

The function prematurely exits if any element is null.  This is correct for when null values are present in non-empty arrays but not for empty arrays. The function should return `true` for both empty arrays and arrays containing null values, and it fails to do this for the former.

## Solution

A solution is provided to correct the function's behavior.  The solution ensures that the function accurately determines if the array is empty or contains null values and returns the appropriate boolean result accordingly.

## How to reproduce

1. Clone this repo
2. Run `bug.php` (incorrect implementation)
3. Compare the output with the expected output described in the comments of `bug.php`
4. Run `bugSolution.php` (corrected implementation)
5. Compare the output with the expected output described in the comments of `bugSolution.php`