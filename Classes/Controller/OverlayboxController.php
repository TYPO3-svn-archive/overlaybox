<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Florian Mast <fm@cabag.ch>, CAB AG
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package overlaybox
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_Overlaybox_Controller_OverlayboxController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * overlayboxRepository
	 *
	 * @var Tx_Overlaybox_Domain_Repository_OverlayboxRepository
	 */
	protected $overlayboxRepository;

	/**
	 * injectOverlayboxRepository
	 *
	 * @param Tx_Overlaybox_Domain_Repository_OverlayboxRepository $overlayboxRepository
	 * @return void
	 */
	 public function injectOverlayboxRepository(Tx_Overlaybox_Domain_Repository_OverlayboxRepository $overlayboxRepository) {
		$this->overlayboxRepository = $overlayboxRepository;
	}

	/**
	 * action show
	 *
	 * @return void
	 */
	public function showAction() {
	}
	
	/**
	 * initializeAction adds javascript to header for loading necessary jquery and cookie library and overlay.js
	 *
	 * 
	 * @return void
	 */
	protected function initializeAction() {
		
		$GLOBALS['TSFE']->additionalHeaderData['tx_overlaybox'] ='<script type="text/javascript" src=" ' . t3lib_extMgm::siteRelPath($this->request->getControllerExtensionKey()) . 'Resources/Public/Js/jquery-1.7.1.min.js"></script>  
		 <script type="text/javascript" src="' . t3lib_extMgm::siteRelPath($this->request->getControllerExtensionKey()) . 'Resources/Public/Js/jquery.cookies.2.2.0.min.js"></script>  
		 <script type="text/javascript" src="' . t3lib_extMgm::siteRelPath($this->request->getControllerExtensionKey()) . 'Resources/Public/Js/overlaybox.js"></script>';

  	}

}
?>