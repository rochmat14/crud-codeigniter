<?php echo validation_errors() ?>

<main>
    <div id="content">
        <section>
            <article>
                <header>
                    <h2>Enter a Post</h2>
                </header>
                
                <div>
                    <?php echo form_open('blogs/edit/'.$blogs_item['id']); ?>
                        <div>
                            <label for="">TITLE :</label>
                            <input type="text" name="title" placeholder="please enter a title" value="<?php echo $blogs_item['title'] ?>">
                        </div>

                        <div>
                            <label for="">TEXT :</label>
                            <textarea name="text" cols="30" rows="10" placeholder="pleases enter a text"><?php echo $blogs_item['text'] ?></textarea>
                        </div>

                        <button type="submit">SAVE</button>
                    <?php form_close(); ?>
                </div>
            </article>
        </section>
    </div>