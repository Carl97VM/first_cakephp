<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Categoria> $categorias
 */
?>
<div class="categorias index content">
    <?= $this->Html->link(__('New Categoria'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categorias') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('categoria') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $index=1; foreach ($categorias as $categoria): ?>
                <tr>
                    <td><?= $index ?></td>
                    <td><?= h($categoria->categoria) ?></td>
                    <td><?= h($categoria->estado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $categoria->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoria->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id)]) ?>
                    </td>
                </tr>
                <?php $index++; endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
