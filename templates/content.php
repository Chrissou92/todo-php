<main>

    <ul class="tasks">

        <?php foreach ($tasks as $task): ?>

        <li class="task-<?=$task['category']?> <?=($task['done'] ? 'done' : '')?>">
            <span class="item-label"><?=$task['title']?></span>
            <form class="item-form-edit" action="" method="">
                <input  class="item-form-text" type="text" name="" value="">
                <input type="submit" name="" value="Ok">
                <input type="button" name="" value="Annuler">
            </form>
            <div class="item-actions filters">
                <a class="item fas fa-check-square" href="#"></a>
                <a class="item fas fa-tags" href="#"></a>
                <a class="item fas fa-edit item-edit" href="#"></a>
                <a class="item fas fa-trash-alt" href="#"></a>
            </div>
        </li>
    <?php endforeach; ?>
    </ul>
</main>
