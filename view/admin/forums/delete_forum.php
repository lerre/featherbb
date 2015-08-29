<?php

/**
 * Copyright (C) 2015 FeatherBB
 * based on code by (C) 2008-2012 FluxBB
 * and Rickard Andersson (C) 2002-2008 PunBB
 * License: http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
 */
 
// Make sure no one attempts to run this script "directly"
if (!defined('FEATHER')) {
    exit;
}
?>

	<div class="blockform">
		<h2><span><?php _e('Confirm delete head') ?></span></h2>
		<div class="box">
			<form method="post" action="<?php echo $feather->url->get('admin/forums/delete/'.$cur_forum['id'].'/') ?>">
				<input type="hidden" name="<?php echo $csrf_key; ?>" value="<?php echo $csrf_token; ?>">
				<div class="inform">
					<fieldset>
						<legend><?php _e('Confirm delete subhead') ?></legend>
						<div class="infldset">
							<p><?php printf(__('Confirm delete info'), $cur_forum['forum_name']) ?></p>
							<p class="warntext"><?php _e('Confirm delete warn') ?></p>
						</div>
					</fieldset>
				</div>
				<p class="buttons"><input type="submit" name="del_forum_comply" value="<?php _e('Delete') ?>" /><a href="javascript:history.go(-1)"><?php _e('Go back') ?></a></p>
			</form>
		</div>
	</div>
	<div class="clearer"></div>
</div>