

<main>

    <div class="row-disks">
        <?php foreach ($database as $disk) { ?>
            <div class="disk" >
                <div class="cover">
                    <img src="<?php echo $disk['poster'] ?>" alt="cover">
                </div>
                <h2 class="title"><?php echo $disk['title'] ?></h2>
                <h3 class="autore"><?php echo $disk['author'] ?></h3>
                <h3 class="genere"><?php echo $disk['genre'] ?></h3>
                <h3 class="anno"><?php echo $disk['year'] ?></h3>
            </div> 
        <?php } ?>

    </div>
</main>