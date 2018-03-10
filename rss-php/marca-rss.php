<?php
header('Content-Type: text/html; charset=utf-8');

if (!ini_get('date.timezone')) {
	date_default_timezone_set('Europe/Prague');
}

require_once 'src/Feed.php';

$rss = Feed::loadRss('http://estaticos.marca.com/rss/portada.xml');

?>

<h1><?php echo htmlSpecialChars($rss->title) ?></h1>

<p><i><?php echo htmlSpecialChars($rss->description) ?></i></p>

<?php foreach ($rss->item as $item): ?>
        <h2><a href="<?= htmlSpecialChars($item->link) ?>"><?= htmlSpecialChars($item->title) ?></a>
        <p><small><?= htmlSpecialChars($item->{'media:description'}) ?></small></p>
        <small><?= date("j.n.Y H:i", (int) $item->timestamp) ?></small></h2>
        <p><?= htmlSpecialChars($item->category) ?></p>
<?php endforeach ?>

