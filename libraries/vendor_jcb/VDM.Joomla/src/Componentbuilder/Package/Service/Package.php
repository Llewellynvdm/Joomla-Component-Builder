<?php
/**
 * @package    Joomla.Component.Builder
 *
 * @created    4th September, 2022
 * @author     Llewellyn van der Merwe <https://dev.vdm.io>
 * @git        Joomla Component Builder <https://git.vdm.dev/joomla/Component-Builder>
 * @copyright  Copyright (C) 2015 Vast Development Method. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace VDM\Joomla\Componentbuilder\Package\Service;


use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use VDM\Joomla\Componentbuilder\Power\Table;
use VDM\Joomla\Componentbuilder\Package\Config;
use VDM\Joomla\Componentbuilder\Package\Dependency\Tracker;
use VDM\Joomla\Componentbuilder\Package\MessageBus;


/**
 * Package Service Provider
 * 
 * @since 5.2.1
 */
class Package implements ServiceProviderInterface
{
	/**
	 * Registers the service provider with a DI container.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  void
	 * @since 5.2.1
	 */
	public function register(Container $container)
	{
		$container->alias(Table::class, 'Power.Table')->alias('Table', 'Power.Table')
			->share('Power.Table', [$this, 'getPowerTable'], true);

		$container->alias(Config::class, 'Config')
			->share('Config', [$this, 'getConfig'], true);

		$container->alias(Tracker::class, 'Power.Tracker')
			->share('Power.Tracker', [$this, 'getPowerTracker'], true);

		$container->alias(MessageBus::class, 'Power.Message')
			->share('Power.Message', [$this, 'getMessageBus'], true);
	}

	/**
	 * Get The Power Table Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Table
	 * @since  5.2.1
	 */
	public function getPowerTable(Container $container): Table
	{
		return new Table();
	}

	/**
	 * Get The Config Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Config
	 * @since 5.2.1
	 */
	public function getConfig(Container $container): Config
	{
		return new Config();
	}

	/**
	 * Get The Tracker Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Tracker
	 * @since 5.2.1
	 */
	public function getPowerTracker(Container $container): Tracker
	{
		return new Tracker();
	}

	/**
	 * Get The Message Bus Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  MessageBus
	 * @since 5.2.1
	 */
	public function getMessageBus(Container $container): MessageBus
	{
		return new MessageBus();
	}
}

