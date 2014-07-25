<?php

include_once 'includes/db.php';

// Include the famous women
include_once 'includes/women.php';

class Dog {
  public $name;
  public $age;

  protected $db;

  public function __contstruct($db) {
    $this->db = $db
  }

  public function bark() {

    $stmt = $this->db->query('SELECT * FROM `links`');

    echo 'The dog ' . $this->name . ' says woof!<br />';
    echo 'And is ' . $this->age . ' years old<br />';

    if ( $this->sit() ) {
      echo 'I\'m sitting<br />';
    } else {
      echo 'I\'m standing<br />';
    }
  }

  public function sit() {
    return false;
  }
}


$puppy = new Dog($my_sql_db);





$results = array();

// If trying to search
if ( isset($_GET['q']) && ctype_alnum($_GET['q']) )
{
    $search_term = filter_input(INPUT_GET, 'q', FILTER_SANITIZE_SPECIAL_CHARS);

    $stmt = $db->prepare("SELECT * FROM `women` WHERE `name` LIKE :query");
    $stmt->execute(array(':query' => '%' . $search_term . '%'));
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<?php
require_once 'includes/top.php';
require_once 'includes/functions.php';

include_once 'includes/header.php';
?>

    <div id="main">
        <section id="search">
            <h2>Search Women</h2>
            <a class="jump up" href="#">&igrave;</a>

            <form method="get" action="search.php">
                <label for="q">Search</label>
                <input type="input" name="q" id="q" value="" />
                <input type="submit" name="submit" value="Search" />
            </form>
        </section>
        <?php if ( isset($search_term) ) { ?>
          <section class="results">
              <p>Results for: <?php echo $search_term; ?></p>

              <?php
              foreach($results as $woman){
                echo viewWoman($woman['name'], $woman['link'], $woman['years'], $woman['image'], $woman['biography']);
              }
              ?>
          </section>
        <?php } ?>
    </div>

<?php include_once 'includes/bottom.php'; ?>
