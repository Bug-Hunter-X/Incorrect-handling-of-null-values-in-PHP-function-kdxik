function foo(array $arr): bool {
  foreach ($arr as $value) {
    if ($value === null) {
      return true; // Correct handling of null
    }
  }
  return empty($arr); // Explicitly check for empty array
}

$arr = [1, 2, 3];
echo foo($arr); // Outputs false (correct)

$arr = [1, 2, null, 4];
echo foo($arr); // Outputs true (correct)

$arr = [];
echo foo($arr); // Outputs true (correct)