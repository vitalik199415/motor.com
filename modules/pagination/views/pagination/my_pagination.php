<ul class="pagination">
<li>
	<?php if ($first_page !== FALSE): ?>
		<a title="<?=__('First');?>" href="<?php echo HTML::chars($page->url($first_page)) ?>" rel="first"><?php echo __('&laquo;&laquo;') ?></a>
	<?php else: ?>
		<a title="<?=__('First');?>" rel="first"><?php echo __('&laquo;&laquo;') ?></a>
	<?php endif ?>
</li>
<li>
	<?php if ($previous_page !== FALSE): ?>
		<a title="<?=__('Previous');?>" href="<?php echo HTML::chars($page->url($previous_page)) ?>" rel="prev"><?php echo __('&laquo;') ?></a>
	<?php else: ?>
		<a title="<?=__('Previous');?>" rel="prev"><?php echo __('&laquo;') ?></a>
	<?php endif ?>
</li>
	<?php for ($i = 1; $i <= $total_pages; $i++): ?>
		<?php if ($i == $current_page): ?>
			<li class="active"><a><?php echo $i ?></a></li>
		<?php else: ?>
			<li><a href="<?php echo HTML::chars($page->url($i)) ?>"><?php echo $i ?></a></li>
		<?php endif ?>
	<?php endfor ?>
<li>
	<?php if ($next_page !== FALSE): ?>
		<a href="<?php echo HTML::chars($page->url($next_page)) ?>" rel="next"><?php echo __('&raquo;') ?></a>
	<?php else: ?>
		<a rel="next"><?php echo __('&raquo;') ?></a>
	<?php endif ?>
</li>
<li>
	<?php if ($last_page !== FALSE): ?>
		<a href="<?php echo HTML::chars($page->url($last_page)) ?>" rel="last"><?php echo __('&raquo;&raquo;') ?></a>
	<?php else: ?>
		<?php echo __('&raquo;&raquo;') ?>
	<?php endif ?>
</li>
</ul><!-- .pagination -->