<?php require "Views/Components/head.php"?>
<?php require "Views/Components/navbar.php"?>
<link rel="stylesheet" href="Public/CSS/index.css">
<div class="content-container">
    <div class="post-container">
        <?php foreach ($posts as $post): ?>
            <div class="post">
                <h2><?php echo htmlspecialchars($post['title']); ?></h2>
                <p>By: <?php echo htmlspecialchars($post['author']); ?></p>
                <p><?php echo nl2br(htmlspecialchars($post['text'])); ?></p>
                <?php if ($post['image']): ?>
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($post['image']); ?>" alt="Post Image"/>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require "Views/Components/footer.php"?>
