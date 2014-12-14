<div class="l-main">
  <div class="stage-bg__in stage-bg__in_0">
    <div class="l-main__in">
			<div class="col-md-4 col-md-offset-4">
				<?php if (isset($error)): ?>
				<p><?php echo $error; ?></p>
				<?php endif; ?>
				<?php
				echo $this->Form->create();
				echo $this->Form->input('login', array('class' => 'form-control', 'div' => array('class' => 'form-group')));
				echo $this->Form->input('password', array('class' => 'form-control', 'div' => array('class' => 'form-group')));
				echo $this->Form->end(array('label' => 'Войти', 'class' => 'btn btn-large btn-primary'));
				?>
			</div>
		</div>
	</div>
</div>