<?php include 'includes/header.php' ?>

    <ul id="topics">
<?php if ($topics): ?>
    <?php foreach ($topics as $topic): ?>
        <li class="topic">
            <div class="row">
                <div class="col-md-2">
                    <img class="avatar float-left" src="img/<?php echo $topic->avatar;?>">
                </div>
                <div class="col-md-10">
                    <div class="topic-content float-right">
                        <h3><a href="topic.php"><?php echo $topic->title; ?></a></h3>
                        <div class="topic-info">
                            <a href="topics.php?category=<?php echo urlFormat($topic->category_id); ?>"><?php echo $topic->name; ?></a> >>
                            <a href="topics.php?user=<?php echo urlFormat($topic->user_id); ?>"><?php echo $topic->username; ?></a> >>
                            <?php echo formateDate($topic->create_date); ?>
                            <span class="badge float-right">7</span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No Topics To Display</p>
<?php endif; ?>
    <h3>Forum statistics</h3>
    <ul>
        <li>Total Number of Users: <strong>52</strong></li>
        <li>Total Number of Topics: <strong>10</strong></li>
        <li>Total Number of Categories: <strong>5</strong></li>
    </ul>

<?php include 'includes/footer.php' ?>