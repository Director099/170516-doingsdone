<table class="tasks">
    <?php /* ?>
                    <tr class="tasks__item task">
                        <td class="task__select">
                            <label class="checkbox task__checkbox">
                                <input class="checkbox__input visually-hidden task__checkbox" type="checkbox" value="1">
                                <span class="checkbox__text">Сделать главную страницу Дела в порядке</span>
                            </label>
                        </td>

                        <td class="task__file">
                            <a class="download-link" href="#">Home.psd</a>
                        </td>

                        <td class="task__date"></td>
                    </tr>
                    <?php */ ?>
    <?php foreach ($tasks as $value): ?>
        <? if (!$value['status'] || $show_complete_tasks === 1): ?>
            <tr class="tasks__item task <?= $value['status'] === true ? 'task--completed' : '' ?>">
                <td class="task__select">
                    <label class="checkbox task__checkbox">
                        <input class="checkbox__input visually-hidden" type="checkbox" <?= $value['status'] === true ? 'checked' : '' ?>>
                        <span class="checkbox__text"><?= $value['name'] ?></span>
                    </label>
                </td>
                <td class="task__date"><?= $value['data'] ?></td>

                <td class="task__controls">
                </td>
            </tr>
        <? endif; ?>
    <?php endforeach; ?>
</table>
