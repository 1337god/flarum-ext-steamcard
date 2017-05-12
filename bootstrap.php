<?php

namespace wrongthink\steamcard;

use Flarum\Event\ConfigureFormatter;
use Illuminate\Events\Dispatcher;

return function (Dispatcher $events) {
	$events->listen(
		ConfigureFormatter::class,
		function (ConfigureFormatter $event)
		{
			$event->configurator->BBCodes->addCustom(
	            '[SteamIDCard]{URL;useContent},{NUMBER1}[/SteamIDCard]',
	            '<a href="{URL}" target="_blank"><img src="http://steamsignature.com/card/0/{NUMBER1}.png"></a>'
        	);
		}
	);
};
