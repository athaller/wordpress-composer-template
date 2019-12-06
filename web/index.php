<?php

$WP_PATH='wp';
$WP_BLOG_HEADER = implode("/", [$WP_PATH, 'wp-blog-header.php']);

// WordPress view bootstrapper
define('WP_USE_THEMES', true);

if ( ! file_exists($WP_BLOG_HEADER) ) {

  $markDown = file_get_contents(__DIR__ . '/../README.md');
  echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/1.9.1/showdown.min.js"></script>';
echo '
  <textarea id="markdown" style="display: none;">'. $markDown . '</textarea>
  <h1 style="text-align: center;"> Setup Error! </h1>
  <hr/>
  <div id="targetDiv" style="max-width: 720px; margin: auto;"></div>
  <hr/>';

echo '  <button id="runBtn" onClick="run()">Convert</button>';
echo "<script>

  function run() {
  var text = document.getElementById('markdown').value,
      target = document.getElementById('targetDiv'),
      converter = new showdown.Converter(),
      html = converter.makeHtml(text);

    target.innerHTML = html;
}
</script>";

  echo "<script>
    setTimeout(function() {
        var text = document.getElementById('markdown').value,
            target = document.getElementById('targetDiv'),
            converter = new showdown.Converter(),
            html = converter.makeHtml(text);

        target.innerHtml = html;
    }, 2000);
</script>";


} else {
  require($WP_BLOG_HEADER);
}
