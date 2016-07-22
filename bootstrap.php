<?php
use Flarum\Event\ConfigureFormatter;
use Illuminate\Events\Dispatcher;

function subscribe(Dispatcher $events)
{
	$events->listen(
		ConfigureFormatter::class,
		function (ConfigureFormatter $event)
		{
			$event->configurator->BBCodes->addCustom(
	            '[WEBM]{TEXT}[/WEBM]',
	            '<div class="webm">{TEXT}</div>'
        	);
        	$event->configurator->BBCodes->addCustom(
	            '[WEBM2]{TEXT}[/WEBM2]',
	            '<div class="webm">{TEXT}</div>'
        	);
		}
	);
};

return __NAMESPACE__ . '\\subscribe';