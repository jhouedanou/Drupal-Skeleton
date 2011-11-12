<?php if ($page) { /* page display */ ?>

  <article id="node-<?php print $node->nid; ?>" class="node node-full node-<?php print $node->type; ?>">
    <?php /*
      <?php if ($title) { ?>
        <header class="node-header">
          <?php print $title ?>
        </header>
    <?php } ?>
    */ ?>
    <?php if ($content) { ?>
      <section class="node-content">
        <?php print render($content) ?>
      </section>
    <?php } ?>
  </article>

<?php } else { /* teaser display */ ?>

  <article id="node-<?php print $node->nid; ?>" class="node node-teaser node-<?php print $node->type; ?>">
    <?php if ($title) { ?>
      <header class="node-header">
        <a href="<?php print $node_url ?>"><?php print $title ?></a>
      </header>
    <?php } ?>
    <?php if ($content) { ?>
      <section class="node-content">
        <?php print render($content) ?>
      </section>
    <?php } ?>
  </article>

<?php } ?>