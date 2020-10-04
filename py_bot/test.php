<?
function csv_content_parser($content) {
    foreach (explode("\n", $content) as $line) {
      // Generator saves state and can be resumed when the next value is required.
      yield str_getcsv($line);
    }
  }
  // Get content from csv file.
  $content = file_get_contents('items.csv');
  // Create one array from csv file's lines.
  $data = array();
  foreach (csv_content_parser($content) as $fields) {
    array_push($data, $fields);
  }
  
?>