<main>
    <div id="content">
        <section>
            <article>
                <a href="<?php echo site_url('blogs/create'); ?>">ADD POST</a>
            </article>

            <?php foreach($blogs as $blogs_item) {?>
                <article>
                    <header>
                        <h2><?php echo $blogs_item['title'];?></h2>
                    </header>

                    <p><?php echo $blogs_item['text'] ?></p>

                    <a href="<?php echo site_url('blogs/edit') ?>">EDIT</a>
                    <a href="">DELETE</a>
                </article>
            <?php }?>
        </section>
    </div>