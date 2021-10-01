<?php

namespace Thecoachsmb\Mymodule\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{

	public function execute()
	{
		$textDisplay = new \Magento\Framework\DataObject(array('text' => 'Thecoachsmb'));
		$this->_eventManager->dispatch('thecoachsmb_mymodule_display_text', ['mp_text' => $textDisplay]);
		echo $textDisplay->getText();
		exit;
	}
}

