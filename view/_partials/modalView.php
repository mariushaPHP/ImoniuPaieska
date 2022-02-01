<div class="modal fade" id="viewModal<?= $task['id'] ;?>" tabindex="-1" aria-labelledby="ModalLabel<?= $task['id'] ;?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title" id="ModalLabel<?= $task['id'] ;?>">
                    <?php foreach ($task as $key=>$item):?>
                        <?php if($key == 'id') :?>
                            <h5>
                                <?= 'Imones kodas: ' . $item; ?>
                            </h5>
                        <?php else: ?>
                            <h5>
                                <?= ucfirst($key) . ': ' . $item; ?>
                            </h5>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Išjungti</button>

            </div>
        </div>
    </div>
</div>