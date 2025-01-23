function foo(array $arr) {
  foreach ($arr as $value) {
    if ($value === null) {
      return true; // Incorrect early exit
    }
  }
  return false;
}

$arr = [1, 2, 3];
echo foo($arr); // Outputs false (correct)

$arr = [1, 2, null, 4];
echo foo($arr); // Outputs true (correct)

$arr = [];
echo foo($arr); // Outputs false (incorrect, should be true)