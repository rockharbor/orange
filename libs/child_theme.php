<?php
/**
 * RH Orange theme
 * 
 * @package rockharbor
 * @subpackage orange
 */
class ChildTheme extends RockharborThemeBase {
		
/**
 * List of options for this theme
 * 
 * @var array
 */
	protected $themeOptions = array(
		'slug' => 'orange',
		'short_name' => 'Orange',
		'supports' => array(
			'message'
		)
	);
}