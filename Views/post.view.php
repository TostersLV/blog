<?php require "Views/Components/head.php"?>
<?php require "Views/Components/navbar.php"?>
<link rel="stylesheet" href="Public/CSS/post.css">
<h1>Create New Post</h1>
<div class="grid-container">

<div class="slot">
<form action="/post" method="post" enctype="multipart/form-data">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required><br><br>
    
    <!-- Author field is now populated with the current user's username -->
    <label for="author">Author: <?php echo htmlspecialchars($current_username); ?></label>
    <input type="hidden" name="author" value="<?php echo htmlspecialchars($current_username); ?>">
    <br>
    
    <label for="text">Content:</label>
    <textarea id="text" name="text" required></textarea><br><br>
    
    <label for="image">Image:</label>
    <input type="file" id="image" name="image" accept="image/*"><br><br>
    
    <input type="submit" value="Submit">
   
</form>
</div>

    <div class="slot">Slot 2</div>
    <div class="slot">Slot 3</div>
    <div class="slot">Slot 4</div>
    <div class="slot">Slot 5</div>
    <div class="slot">Slot 6</div>
    <div class="slot">Slot 7</div>
    <div class="slot">Slot 8</div>
</div>

<?php require "Views/Components/footer.php"?>
