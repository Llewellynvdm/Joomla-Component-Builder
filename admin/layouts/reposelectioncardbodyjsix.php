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
use Joomla\CMS\Layout\LayoutHelper;
use VDM\Component\Componentbuilder\Administrator\Helper\ComponentbuilderHelper;

// No direct access to this file
defined('JPATH_BASE') or die;

$base = $displayData['repo']->base ?? null;
$path = $displayData['repo']->path ?? null;
$type = $displayData['repo']->type ?? 0;
$url = "#";
if (!empty($base) && !empty($path))
{
	// if the type is GitHub = 2
	if ($type == 2)
	{
		$base = 'https://github.com';
	}

	$url = "{$base}/{$path}";
}
$name = $displayData['name'] ?? 'error';
$area = $displayData['area'] ?? 'error';
$organisation = $displayData['repo']->organisation ?? 'error';
$repository = $displayData['repo']->repository ?? 'error';
$read_branch = $displayData['repo']->read_branch ?? 'error';
$guid = $displayData['repo']->guid ?? 'error';

?>
<div class="repo-selection-card-wrapper">
	<div class="card h-100 repo-selection-card shadow-sm">
		<div class="card-header">
			<div class="fw-semibold">
				<?php echo $this->escape($name); ?>:
				<a
					class="link-primary text-break"
					href="<?php echo $this->escape($url); ?>"
					target="_blank"
					rel="noopener noreferrer"
					title="<?php echo $this->escape(Text::sprintf('COM_COMPONENTBUILDER_OPEN_THIS_REMOTE_S_REPOSITORY', $name)); ?>"
				>
					<?php echo $this->escape($url); ?>
				</a>
			</div>
		</div>

		<div class="card-body">
			<ul class="list-unstyled mb-0">
				<li class="mb-2">
					<strong><?php echo Text::_('COM_COMPONENTBUILDER_ORGANISATION'); ?>:</strong>
					<code><?php echo $this->escape($organisation); ?></code>
				</li>
				<li class="mb-2">
					<strong><?php echo Text::_('COM_COMPONENTBUILDER_REPOSITORY'); ?>:</strong>
					<code><?php echo $this->escape($repository); ?></code>
				</li>
				<li class="mb-0">
					<strong><?php echo Text::_('COM_COMPONENTBUILDER_BRANCH'); ?>:</strong>
					<code><?php echo $this->escape($read_branch); ?></code>
				</li>
			</ul>
		</div>

		<div class="card-footer bg-transparent border-top-0">
			<div class="d-grid">
				<button
					type="button"
					class="btn btn-primary select-repo-to-load"
					data-repo="<?php echo $this->escape($guid); ?>"
					data-area="<?php echo $this->escape($area); ?>"
				>
					<?php echo Text::sprintf('COM_COMPONENTBUILDER_LOAD_ITEMS_FROM_THIS_S_REPOSITORY', $name); ?>
				</button>
			</div>
		</div>
	</div>
</div>
