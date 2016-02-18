<?php

/**
 * Copyright (C) 2015-2016 FeatherBB
 * based on code by (C) 2008-2015 FluxBB
 * and Rickard Andersson (C) 2002-2008 PunBB
 * License: http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
 */

namespace FeatherBB\Controller;

use FeatherBB\Core\Utils;

class Help
{
    public function __construct()
    {
        load_textdomain('featherbb', Config::get('forum_env')['FEATHER_ROOT'].'featherbb/lang/'.Container::get('user')->language.'/help.mo');
    }

    public function display()
    {
        Container::get('hooks')->fire('controller.help.start');

        View::setPageInfo(array(
            'title' => array(Utils::escape(Config::get('forum_settings')['o_board_title']), __('Help')),
            'active_page' => 'help',
        ))->addTemplate('help.php')->display();
    }
}
