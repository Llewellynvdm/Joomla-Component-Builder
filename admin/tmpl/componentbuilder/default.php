<?php
/**
 * @package    Joomla.Component.Builder
 *
 * @created    30th April, 2015
 * @author     Llewellyn van der Merwe <https://dev.vdm.io>
 * @git        Joomla Component Builder <https://git.vdm.dev/joomla/Component-Builder>
 * @copyright  Copyright (C) 2015 Vast Development Method. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\HTML\HTMLHelper as Html;
use VDM\Component\Componentbuilder\Administrator\Helper\ComponentbuilderHelper;

// No direct access to this file
defined('_JEXEC') or die;

?>
<div id="j-main-container" class="container-fluid">
	<div class="main-card jcb-dashboard">
		<div class="jcb-dashboard__content">
		<?php echo Html::_('uitab.startTabSet', 'cpanel_tab', array('active' => 'cpanel')); ?>

			<?php echo Html::_('uitab.addTab', 'cpanel_tab', 'cpanel', Text::_('cPanel', true)); ?>
			<div class="row g-4 align-items-start">
			<div class="col-12 col-xxl-9">
				<div class="jcb-dashboard__main d-flex flex-column gap-4">
					<?php echo $this->loadTemplate('main');?>
				</div>
			</div>
			<div class="col-12 col-xxl-3">
				<div class="jcb-dashboard__sidebar d-flex flex-column gap-4">
					<?php echo $this->loadTemplate('vdm');?>
				</div>
			</div>
			</div>
			<?php echo Html::_('uitab.endTab'); ?>

			<?php echo Html::_('uitab.addTab', 'cpanel_tab', 'doc', Text::_('Doc', true)); ?>
			<div class="row g-4 align-items-start">
			<div class="col-12">
				<div class="jcb-dashboard__tab d-flex flex-column gap-4">
					<?php echo $this->loadTemplate('doc_start_here');?>
				</div>
			</div>
			</div>
			<?php echo Html::_('uitab.endTab'); ?>

			<?php echo Html::_('uitab.addTab', 'cpanel_tab', 'notice_board', Text::_('Notice Board', true)); ?>
			<div class="row g-4 align-items-start">
			<div class="col-12">
				<div class="jcb-dashboard__tab d-flex flex-column gap-4">
					<?php echo $this->loadTemplate('notice_board_vast_development_method');?>
				</div>
			</div>
			</div>
			<?php echo Html::_('uitab.endTab'); ?>

			<?php echo Html::_('uitab.addTab', 'cpanel_tab', 'readme', Text::_('Readme', true)); ?>
			<div class="row g-4 align-items-start">
			<div class="col-12">
				<div class="jcb-dashboard__tab d-flex flex-column gap-4">
					<?php echo $this->loadTemplate('readme_information');?>
				</div>
			</div>
			</div>
			<?php echo Html::_('uitab.endTab'); ?>

		<?php echo Html::_('uitab.endTabSet'); ?>
		</div>
	</div>
</div>