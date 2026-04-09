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

use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Layout\LayoutHelper;
use Joomla\CMS\HTML\HTMLHelper as Html;
use VDM\Joomla\Utilities\StringHelper;
use Joomla\CMS\Uri\Uri;
use Joomla\CMS\Session\Session;

// No direct access to this file
defined('_JEXEC') or die;

$area = $this->item['area_class'] ?? 'error';
$area_name = $this->item['area_name'] ?? 'error';
$headers = $this->item['headers'] ?? [];
$table_id = StringHelper::random(10);
$repo_items = $this->item['repos'] ?? [];
$repos = [];

foreach ($repo_items as $repo)
{
	if (!empty($repo->base) && !empty($repo->path))
	{
		$repos[] = LayoutHelper::render('reposelectioncardbodyjsix', ['repo' => $repo, 'area' => $area, 'name' => $area_name]);
	}
}

// Split repositories into rows of four so each row can size itself correctly.
$repo_rows = array_chunk($repos, 4);

// set the base URL
$url_base = Uri::base() . 'index.php?option=com_componentbuilder';

?>
<?php if ($area !== null && !empty($repos) && !empty($headers)): ?>
<script type="text/javascript">

	// get page body
	var outerBodyDiv = document.querySelector('body');

	// start loading spinner
	var loadingDiv = document.createElement('div');
	loadingDiv.id = 'loading';

	// Set CSS properties individually
	loadingDiv.style.background = "rgba(255, 255, 255, .8) url('components/com_componentbuilder/assets/images/ajax.gif') 50% 35% no-repeat";
	loadingDiv.style.top = (outerBodyDiv.getBoundingClientRect().top + window.pageYOffset) + "px";
	loadingDiv.style.left = (outerBodyDiv.getBoundingClientRect().left + window.pageXOffset) + "px";
	loadingDiv.style.width = outerBodyDiv.offsetWidth + "px";
	loadingDiv.style.height = outerBodyDiv.offsetHeight + "px";
	loadingDiv.style.position = 'fixed';
	loadingDiv.style.opacity = '0.80';
	loadingDiv.style.msFilter = "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
	loadingDiv.style.filter = "alpha(opacity=80)";
	loadingDiv.style.display = 'none';

	// add to page body
	outerBodyDiv.appendChild(loadingDiv);
	jQuery.extend(true, jQuery.fn.dataTable.defaults, {
		"searching": false
	});
</script>
<div id="select-repo-area" class="mb-4">
	<p class="mb-3"><?php echo Text::_('COM_COMPONENTBUILDER_SELECT_A_REPOSITORY_TO_PULL_ITEMS_FROM'); ?>...</p>
	<div class="container-fluid px-0">
		<?php foreach ($repo_rows as $repo_row): ?>
			<?php
			$repo_count = count($repo_row);

			if ($repo_count === 1)
			{
				$repo_column_class = 'col-12';
			}
			elseif ($repo_count === 2)
			{
				$repo_column_class = 'col-12 col-md-6';
			}
			elseif ($repo_count === 3)
			{
				$repo_column_class = 'col-12 col-md-4';
			}
			else
			{
				$repo_column_class = 'col-12 col-md-3';
			}
			?>
			<div class="row g-3 mb-3">
				<?php foreach ($repo_row as $repo): ?>
					<div class="<?php echo $repo_column_class; ?>">
						<?php echo $repo; ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<div id="select-powers-area" style="display: none">
	<p class="mb-3"><?php echo Text::sprintf('COM_COMPONENTBUILDER_SELECT_THE_S_ITEMS_TO_PULL', $area_name); ?>...</p>
	<?php echo LayoutHelper::render('powerpullselectiontable', ['area' => $area, 'headers' => $headers, 'id' => $table_id]); ?>
	<div class="subhead mt-3 mb-3">
		<div class="btn-toolbar d-flex gap-2 flex-wrap">
			<button type="button" id="pull-selected-powers" class="btn btn-primary" disabled><?php echo Text::sprintf('COM_COMPONENTBUILDER_PULL_SELECTED_S_ITEMS', $area_name); ?></button>
			<button type="button" id="back-to-select-repo" class="btn btn-outline-secondary"><?php echo Text::_('COM_COMPONENTBUILDER_BACK_TO_REPOSITORY_SELECTION'); ?></button>
		</div>
	</div>
</div>
<script type="text/javascript">
// the search Ajax URLs
const UrlAjax = '<?php echo $url_base; ?>&format=json&raw=true&<?php echo Session::getFormToken(); ?>=1&task=ajax.';
</script>
<?php else: ?>
	<div class="alert alert-primary" role="alert">
		<?php echo Text::_('COM_COMPONENTBUILDER_NO_ACTIVE_REPOSITORIES_FOUND_FOR_THIS_AREA_YOU_CAN_ADD_REPOSITORIES_IN_THE_REPOSITORIES_SECTION_OF_JCB'); ?>
	</div>
<?php endif; ?>
