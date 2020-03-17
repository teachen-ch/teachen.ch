<?

function getDotEnv() {
  $env_lines = file('.env');
  $env = [];
  foreach ($env_lines as $line) {
    $line = chop(preg_replace("/^\#.*/", "", $line));
    if ($line == "") {
      continue;
    }
    list($key, $value) = preg_split("/\s*=\s*/", $line);
    $value = preg_replace("/^\s*['\"](.*)['\"]\s*$/", "$1", $value);
    $env[$key] = $value;
  }
  return $env;
}

$env = getDotEnv();
$link = mysqli_init();
mysqli_real_connect($link, $env["DB_HOST"], $env["DB_USER"], $env["DB_PASSWORD"], null);
print($link);
?>