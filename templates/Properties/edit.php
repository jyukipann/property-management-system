<div class="properties form">
	<?= $this->Form->create($property) ?>
	<fieldset>
		<legend>
			<?= __('Edit Property') ?>
		</legend>
		<?= $this->Form->control('number') ?>
		<?= $this->Form->control('address') ?>
		<?= $this->Form->control('price') ?>
		<?= $this->Form->control('image_1') ?>
	</fieldset>
	<?= $this->Form->button(__('Submit')); ?>
	<?= $this->Form->end() ?>
</div>