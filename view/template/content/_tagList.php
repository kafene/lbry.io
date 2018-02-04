<ul class="tag-list">
  <?php foreach ($tags as $tag): ?>
    <li><a class="tag" href="<?= ContentActions::URL_NEWS_TAG . '/' . urlencode($tag) ?>"><?= $tag ?></a></li>
  <?php endforeach ?>
</ul>
