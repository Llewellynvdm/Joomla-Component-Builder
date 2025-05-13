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

$table_id = $displayData['id'] ?? 'power_selection_table';
$headers = $displayData['headers'] ?? ['error'];
$default_items_number = 10;
$unique_name = '';

?>
<?php echo LayoutHelper::render(
	'table',
	[
		'id' => $table_id,
		'table_class' => 'table table-striped',
		'table_container_class' => 'power-selection-table-container',
		'name' => Text::_('COM_COMPONENTBUILDER_MAKE_YOUR_SELECTION'),
		'headers' => $headers,
		'items' => 10,
		'default_items_number' => $default_items_number,
		'init' => false
	]
); ?>

<script type="text/javascript">

var selectedPowerItems = [];
var targetPowerRepoUrl = '';

document.addEventListener("DOMContentLoaded", function() {
	let <?php echo $table_id; ?> = new DataTable('#<?php echo $table_id; ?>', {
		responsive: true,
		paging: false,
		order: [[ 0, "asc" ]],
		scrollY: 450,
		select:  {
			style: 'multi+shift',
			selector: 'tr:not(.no-select)'
		},
		info: false,
		columnDefs: [
			{ 'targets': [ -1 ], 'visible': false, 'searchable': false },
			{ responsivePriority: 1, targets: 1 },
			{ responsivePriority: 2, targets: -3 }
		],
		columns: [<?php foreach($headers as $header): ?><?php if ($header === 'path'): ?>
			{
				data: 'path',
				render: function(data, type) {
					if (type === 'display') {
						return '<a href="' + targetPowerRepoUrl + data + '" target="_blank">' + data + '</a>'
					}
					return data;
				}
			},<?php else: ?>
			{
				data: '<?php echo $header; ?>'
			},<?php endif; ?><?php endforeach; ?>
		],
		createdRow: function(row, data, dataIndex) {
			if (data.local === true) {
				row.classList.add('no-select');
			}
		}
	});

	// start the initialization manager
	const initManager = new InitializationManager();

	// Add selected rows to global array
	<?php echo $table_id; ?>.on('select', function (e, dt, type, indexes) {
		if (type === 'row') {
			let data = <?php echo $table_id; ?>.rows(indexes).data();
			initManager.addSelectedItems(data);
		}
	});

	// Remove deselected rows from global array
	<?php echo $table_id; ?>.on('deselect', function (e, dt, type, indexes) {
		if (type === 'row') {
			let data = <?php echo $table_id; ?>.rows(indexes).data();
			initManager.removeSelectedItems(data);
		}
	});

	<?php echo $table_id; ?>.on('draw', function () {
		selectedPowerItems = [];
	});
});

function drawPowerSelectionTable<?php echo $unique_name; ?>() {
	let table = new jQuery.fn.dataTable.Api('#<?php echo $table_id; ?>');
	table.draw(true);
}

function clearPowerSelectionTable<?php echo $unique_name; ?>() {
	let table = new jQuery.fn.dataTable.Api('#<?php echo $table_id; ?>');
	// Clear the table
	table.clear();
	// Draw the table
	table.draw(true);
}

function buildPowerSelectionTable<?php echo $unique_name; ?>(items) {
	let table = new jQuery.fn.dataTable.Api('#<?php echo $table_id; ?>');
	// clear the table
	table.clear();
	// load the new items
	table.rows.add(getArrayFormat(items));
	// Draw the table
	table.draw(true);
}
</script>
