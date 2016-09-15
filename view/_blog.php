<?php session_start();?>
<?php include 'view/_topbar.php' ?>

    <!-- Page Content -->
    <div class="container">

        <div class="blog">

            <div class="row">

                <!-- Blog Entries Column -->
                <div class="col-md-8">

                    <h1>
                        Blog SoundCloud

                    </h1>

                    <?php
                    require 'config/config.php';

                    $request = $db->prepare("SELECT post.id, title, content, post_date, member_id FROM post
                          JOIN users ON post.member_id = users");
                    $request->execute(array());

                    while ($data = $request->fetch()){
                        ?>

                        <h2>
                            <?php echo $data["title"]; ?>
                        </h2>
                        <p class="lead">
                            par <?php echo $data["username"]; ?>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span> Publié le <?php echo $data["post_date"]; ?></p>
                        <hr>
                        <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                        <hr>
                        <p><?php
                            $datalen = strlen($data["content"]);
                            if ($datalen>100){
                                echo substr($data["content"], 0, 100) . "...";
                            }
                            else {echo substr($data["content"], 0, 100);} ?></p>
                        <a class="btn btn-primary" href="post.php?id=<? echo $data["id"];?>">Lire plus <span class="glyphicon glyphicon-chevron-right"></span></a>

                        <hr>
                        <?php
                    }
                    ?>
                </div>

            </div>

        </div>
    </div>
    </div>

