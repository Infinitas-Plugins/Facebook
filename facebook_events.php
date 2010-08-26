<?php
	/* 
	 * Short Description / title.
	 * 
	 * Overview of what the file does. About a paragraph or two
	 * 
	 * Copyright (c) 2010 Carl Sutton ( dogmatic69 )
	 * 
	 * @filesource
	 * @copyright Copyright (c) 2010 Carl Sutton ( dogmatic69 )
	 * @link http://www.infinitas-cms.org
	 * @package {see_below}
	 * @subpackage {see_below}
	 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
	 * @since {check_current_milestone_in_lighthouse}
	 * 
	 * @author {your_name}
	 * 
	 * Licensed under The MIT License
	 * Redistributions of files must retain the above copyright notice.
	 */

	 class FacebookEvents{
		 public function onCmsBeforeContentRender(&$event, $data){
			$link = $data['_this']->Event->trigger('cms.slugUrl', array('type' => 'contents', 'data' => $data['content']));
			return $data['_this']->Facebook->like(
				array(
					'href' => Router::url(current($link['slugUrl']), true),
					'layout' => 'button_count',
					'title' => 'recommend'
				)
			);
		 }

		 public function onCmsAfterContentRender(&$event, $data){
			$link = $data['_this']->Event->trigger('cms.slugUrl', array('type' => 'contents', 'data' => $data['content']));
			return $data['_this']->Facebook->like(
				array(
					'href' => Router::url(current($link['slugUrl']), true),
					'layout' => 'button_count',
					'title' => 'recommend'
				)
			);
		 }
	 }