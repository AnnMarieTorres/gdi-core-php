<?php
$search_term = '';
    if (isset($_GET['q']))
    {
        $search_term = filter_input(INPUT_GET, 'q', FILTER_SANITIZE_SPECIAL_CHARS);
    }
?>
<?php require_once 'includes/top.php'; ?>

<?php include_once 'includes/header.php'; ?>

    <div id="main">
        <section id="search">
            <h2>Search Women</h2>
            <a class="jump up" href="#">&igrave;</a>

            <form method="post" action="search.php">
                <label for="q">Search</label>
                <input type="input" name="q" id="q" value="" />
                <input type="submit" name="submit" value="Search" />
            </form>
        </section>
        <section class="results">
            <?php echo $search_term; ?>
        </section>
    </div>

<?php include_once 'includes/bottom.php'; ?>
