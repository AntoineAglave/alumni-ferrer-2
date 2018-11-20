<?php
if (in_category('actualite')) {include (TEMPLATEPATH . '/single-news.php');
}
else if (in_category('galerie')) { include (TEMPLATEPATH . '/single-galeries.php');
}
else if (in_category('evenement')) { include (TEMPLATEPATH . '/single-event.php');
}
?>
