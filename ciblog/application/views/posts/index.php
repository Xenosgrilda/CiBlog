<!-- <style>
h1,h2,h3,h4,h5,h6
{
    margin-top : 100px;
} -->
</style>

<h2 class = "margin_top"><?=$title;?></h2>
<?php foreach($posts as $post): ?>
    <h3 class = "margin_top"><?php echo $post['title']; ?></h3>
    <small class ="post-date"><?php echo $post['created_at'];?></small>
    <h4><?php echo $post['body']; ?></h4>
    <a type="button" class="btn btn-default" href ="<?php echo site_url('/posts/'.$post['slug']);?>">Read More</a>
<?php endforeach; ?>
    