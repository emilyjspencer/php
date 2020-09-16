<?php 
$description = [
  "title" => "Alice in Wonderland",
  "publication_year" => 1865,
  "author" => "Lewis Carroll"
];

$description2 = [
  "title" => "Fangirl",
  "publication_year" => 2013,
  "author" => "Rainbow Rowell"
];

function howOld ($book){
  $current_year = date("Y");
  $age_of_book = $current_year - $description["publication_year"];
  return $age_of_book;
}
?>
<h1 align="center">Books</h1>

<?php   
  echo "<h3>Have you read {$description["title"]}?</h3>";
  echo "<p> It was published in" . " " .  howOld($description). " - a long time ago </p>";
  echo "<div>The author was {$description["author"]}</div>";

  echo "<h3>Have you read {$description2["title"]}?
  </h3>";
  echo "<p> It was published in " . " " . howOld(description2). " - quite recently </p>";
  echo "div>The author is {$description2["author"]}</div>";
?>

