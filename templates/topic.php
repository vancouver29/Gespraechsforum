<?php include 'includes/header.php'?>
<ul id="topics">
    <li id="main-topic" class="topic topic">
        <div class="row">
            <div class="col-md-2">
                <div class="user-info">
                    <img class="avatar float-left" src="img/no_imag.png">
                    <ul>
                        <li><strong>Vancouver</strong></li>
                        <li>68 Posts</li>
                        <li><a href="profile.php">Profile</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-10">
                <div class="topic-content float-right">
                    <p>i just worked in split mode in dreamweaver and paid attention to what was
                        important.
                        How did you learn CSS and HTML? How long did it take you until you were
                        profil ?</p>
                </div>
            </div>
        </div>
    </li>
    <li class="topic topic">
        <div class="row">
            <div class="col-md-2">
                <div class="user-info">
                    <img class="avatar float-left" src="img/no_imag.png"/>
                    <ul>
                        <li><strong>Vancouver</strong></li>
                        <li>68 Posts</li>
                        <li><a href="profile.php">Profile</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div class="topic-content float-right">
                    <p>Congrats on how to make a href and inserting an image...
                        You can learn HTM/CSS pretty fast, though how to use it in different scenarios in a whole other deal.
                        I like to check out tutorials on how to implement the newest within htm/css (html5/css5).</p>
                </div>
            </div>
        </div>
    </li>
    <li class="topic topic">
        <div class="row">
            <div class="col-md-2">
                <div class="user-info">
                    <img class="avatar float-left" src="img/no_imag.png"/>
                    <ul>
                        <li><strong>Vancouver</strong></li>
                        <li>68 Posts</li>
                        <li><a href="profile.php">Profile</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div class="topic-content float-right">
                    <p>w3schools is very good. I can't code an entire site, but i can hande basis syntax.</p>
                </div>
            </div>
        </div>
    </li>
</ul>
<h3>Reply to Topic </h3>
<form role="form">
    <div class="form-group">
        <textarea id="reply" rows="10" cols="80" class="form-control" name="reply"></textarea>
        <script>CKEDITOR.replace('reply')</script>
    </div>
    <button type="submit" class="btn btn-secondary">Submit</button>
</form>
<?php include 'includes/footer.php'?>
