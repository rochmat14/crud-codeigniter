<main>
    <div id="content">
        <section>
            <article>
                <a href="<?php echo site_url('blogs/create'); ?>">ADD POST</a>
            </article>

            <?php foreach($blogs as $blogs_item) {?>
                <article>
                    <header>
                        <a href="<?php echo site_url('blogs/show/'.$blogs_item['slug']); ?>"><h2><?php echo $blogs_item['title'];?></h2></a>
                    </header>

                    <p><?php echo $blogs_item['text'] ?></p>

                    <a href="<?php echo site_url('blogs/edit/'.$blogs_item['id']); ?>">EDIT</a>
                    <a href="<?php echo site_url('blogs/delete/'.$blogs_item['id']); ?>">DELETE</a>
                </article>
            <?php }?>
        </section>
    </div>