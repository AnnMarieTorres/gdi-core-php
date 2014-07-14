<?php

// Include the famous women
include_once 'includes/women.php';

$results = array();

// If trying to search
if ( isset($_GET['q']) && ctype_alnum($_GET['q']) )
{
    $search_term = filter_input(INPUT_GET, 'q', FILTER_SANITIZE_SPECIAL_CHARS);

    if ( is_array($women) )
    {
      foreach ($women as $woman)
      {
          if ( stristr($woman['name'], $search_term) )
          {
            $results[] = $woman;
          }
      }
    }
}
?>
<?php
require_once 'includes/top.php';

include_once 'includes/header.php';
?>

    <div id="main">
        <section id="search">
            <h2>Search Women</h2>
            <a class="jump up" href="#">&igrave;</a>

            <form method="get" action="search.php">
                <label for="q">Search</label>
                <input type="input" name="q" id="q" value="" />
                <input type="submit" value="Search" />
            </form>
        </section>
        <?php if ( isset($search_term) ) { ?>
          <section class="results">
              <p>Results for: <?php echo $search_term; ?></p>

              <?php
              foreach ($results as $woman)
              {
                echo viewWoman($woman['name'], $woman['link'], $woman['years'], $woman['image'], $woman['biography']);
              }
              ?>
          </section>
        <?php } ?>
    </div>

<?php include_once 'includes/bottom.php'; ?>
