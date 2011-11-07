<?php if ($page) { /* page display */ ?>

  <article id="node-<?php print $node->nid; ?>" class="node node-full node-<?php print $node->type; ?>">
    <?php if ($title) { ?>
      <div class="header">
        <?php print $title ?>
      </div>
    <?php } ?>
    <?php if ($content) { ?>
      <section class="node-content">
        <?php print render($content) ?>
      </section>
    <?php } ?>
  </article>

<?php } else { /* teaser display */ ?>

  <article id="node-<?php print $node->nid; ?>" class="node node-teaser node-<?php print $node->type; ?>">
    <?php if ($title) { ?>
      <div class="header">
        <a href="<?php print $node_url ?>"><?php print $title ?></a>
      </div>
    <?php } ?>
    <?php if ($content) { ?>
      <section class="node-content">
        <?php print render($content) ?>
      </section>
    <?php } ?>
  </article>

<?php } ?>