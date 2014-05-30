<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @package 		PyroCMS
 * @subpackage 		Upcoming events widget
 * @author			Ankit Vishwakarma <ankitvishwakarma@sify.com>
 *
 * Show the upcoming events with a widget that can be integrated everywhere.
 *
 */

class Widget_Event_Streams extends Widgets
{
	public $title		= array(
		'en' => 'Event Streams',
	);
	public $description	= array(
		'en' => 'Streaming of trending events',
	);
	public $author		= 'Ankit Vishwakarma <ankitvishwakarma@sify.com>';
	public $website		= 'http://www.avsoftechnologies.in';
	public $version		= '1.1';

	// build form fields for the backend
	// MUST match the field name declared in the form.php file
	public $fields = array(
		array(
			'field' => 'limit',
			'label' => 'Number of events',
		)
	);

	public function form($options)
	{
		!empty($options['limit']) OR $options['limit'] = 5;
		
		return array(
			'options' => $options
		);
	}

	public function run($options)
	{
		// Load the language file
		$this->load->language('eventsmanager/widget_event_streams');
		
		// sets default number of events to be shown
		empty($options['limit']) AND $options['limit'] = 5;

		$this->load->library('trends/trends');
                $trending = $this->trend->get_trending('', 'event','', $options['limit']);
		
		// returns the variables to be used within the widget's view
		return array('events' => $trending);
	}
}