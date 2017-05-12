<?php
use Flarum\Event\ConfigureFormatter;
use Illuminate\Events\Dispatcher;

function substeam(Dispatcher $events)
{
	$events->listen(
		ConfigureFormatter::class,
		function (ConfigureFormatter $event)
		{
			$event->configurator->BBCodes->addCustom(
	            '[SteamIDCard={URL1;useContent}]{NUMBER1}[/SteamIDCard]',
	            '<a href="{URL1}" target="_blank"><img src="http://steamsignature.com/card/0/{NUMBER1}.png"></a>'
        	);
		}
	);
};

return __NAMESPACE__ . '\\substeam';
