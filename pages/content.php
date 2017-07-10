<?php foreach ($isi_buku as $bk): ?>
  <div id="bg_top">
    <div id="middle_wrap">
      <div id="content">
        <h2>An image in a post</a></h2>
        <div class="post_details">
          <p>Posted on November 18, 2007, under Uncategorized</a>.</p>
          <div class="comments">0</a></div>
        </div>
        <h1><?php echo $bk['judul'] ?></h1>
        <p><?php echo $bk['penulis']; ?></p>
        <div class="more_entries">
          <h2>&nbsp; </h2>
        </div>
      </div>
    <?php endforeach ?>