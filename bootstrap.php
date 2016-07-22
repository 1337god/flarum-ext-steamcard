<?php
use Flarum\Event\ConfigureFormatter;
use Illuminate\Events\Dispatcher;

function subwebm(Dispatcher $events)
{
	$events->listen(
		ConfigureFormatter::class,
		function (ConfigureFormatter $event)
		{
			$event->configurator->BBCodes->addCustom(
	            '[WEBM]{URL;useContent}[/WEBM]',
	            '<video controls autoplay loop muted poster="placeholder.jpg" id="backgroundgif"><source src="{URL}" type="video/webm"><source src="{URL}" type="video/mp4"></video>'
        	);
		}
	);
};

return __NAMESPACE__ . '\\subwebm';