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
	            '[SteamIDCard={URL}]{NUMBER}[/SteamIDCard]',
	            '<a href="{URL}" target="_blank"><img src="http://steamsignature.com/card/0/{NUMBER}.png"></a>'
        	);
		}
	);
};

return __NAMESPACE__ . '\\substeam';
