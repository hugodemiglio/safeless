<h2><?php echo __('Settings'); ?></h2>

<form method="post" action="#">
	<fieldset>
		<label for="f_language">System language</label>
		<div class="radio">
			<select id="f_language" name="language" size="5">
			<?php
				foreach(__('', true, true) as $languages):
					GetGets::write('lang', $languages['key']);
			?>
				<option value="<?php echo $languages['key']; ?>"><?php __('Define', true, false, $languages['key']); ?> <?php echo $languages['name']; ?> (<?php echo $languages['country']; ?>)  <?php __('as the primary language.', true, false, $languages['key']); ?></option>
			<?php
				endforeach;
			?>
			</select>
		</div>
		
		<div class="ClearFix"></div>
		<div class="button">
			<button type="submit"><?php echo __('Save.'); ?></button>
		</div>
	</fieldset>
</form>