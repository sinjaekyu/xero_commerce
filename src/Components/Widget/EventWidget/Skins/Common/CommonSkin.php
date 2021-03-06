<?php

namespace Xpressengine\Plugins\XeroCommerce\Components\Widget\EventWidget\Skins\Common;

use Xpressengine\Skin\GenericSkin;
use View;

class CommonSkin extends GenericSkin
{
    protected static $path = 'xero_commerce/src/Components/Widget/EventWidget/Skins/Common';

    public function renderSetting(array $config = [])
    {
        return View::make(sprintf('%s/views/setting', static::$path), []);
    }
}
