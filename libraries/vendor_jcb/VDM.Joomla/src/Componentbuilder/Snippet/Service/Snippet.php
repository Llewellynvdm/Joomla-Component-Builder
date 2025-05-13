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

namespace VDM\Joomla\Componentbuilder\Snippet\Service;


use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use VDM\Joomla\Componentbuilder\Snippet\Config;
use VDM\Joomla\Componentbuilder\Power\Table;
use VDM\Joomla\Componentbuilder\Package\MessageBus;
use VDM\Joomla\Componentbuilder\Snippet\Grep;
use VDM\Joomla\Componentbuilder\Snippet\Remote\Config as RemoteConfig;
use VDM\Joomla\Componentbuilder\Package\Dependency\Resolver;
use VDM\Joomla\Componentbuilder\Power\Remote\Get;
use VDM\Joomla\Componentbuilder\Snippet\Remote\Set;
use VDM\Joomla\Componentbuilder\Snippet\Readme\Item as ItemReadme;
use VDM\Joomla\Componentbuilder\Snippet\Readme\Main as MainReadme;


/**
 * Snippet Service Provider
 * 
 * @since  5.2.1
 */
class Snippet implements ServiceProviderInterface
{
	/**
	 * Registers the service provider with a DI container.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  void
	 * @since   5.2.1
	 */
	public function register(Container $container)
	{
		$container->alias(Config::class, 'Config')
			->share('Config', [$this, 'getConfig'], true);

		$container->alias(Table::class, 'Power.Table')->alias('Table', 'Power.Table')
			->share('Power.Table', [$this, 'getPowerTable'], true);

		$container->alias(MessageBus::class, 'Power.Message')
			->share('Power.Message', [$this, 'getMessageBus'], true);

		$container->alias(Grep::class, 'Snippet.Grep')
			->share('Snippet.Grep', [$this, 'getGrep'], true);

		$container->alias(RemoteConfig::class, 'Snippet.Remote.Config')
			->share('Snippet.Remote.Config', [$this, 'getRemoteConfig'], true);

		$container->alias(Resolver::class, 'Snippet.Resolver')
			->share('Snippet.Resolver', [$this, 'getResolver'], true);

		$container->alias(Get::class, 'Snippet.Remote.Get')
			->share('Snippet.Remote.Get', [$this, 'getRemoteGet'], true);

		$container->alias(Set::class, 'Snippet.Remote.Set')
			->share('Snippet.Remote.Set', [$this, 'getRemoteSet'], true);

		$container->alias(ItemReadme::class, 'Snippet.Readme.Item')
			->share('Snippet.Readme.Item', [$this, 'getItemReadme'], true);

		$container->alias(MainReadme::class, 'Snippet.Readme.Main')
			->share('Snippet.Readme.Main', [$this, 'getMainReadme'], true);
	}

	/**
	 * Get The Config Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Config
	 * @since   5.2.1
	 */
	public function getConfig(Container $container): Config
	{
		return new Config();
	}

	/**
	 * Get The Power Table Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Table
	 * @since   5.2.1
	 */
	public function getPowerTable(Container $container): Table
	{
		return new Table();
	}

	/**
	 * Get The Message Bus Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  MessageBus
	 * @since   5.2.1
	 */
	public function getMessageBus(Container $container): MessageBus
	{
		return new MessageBus();
	}

	/**
	 * Get The Grep Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Grep
	 * @since   5.2.1
	 */
	public function getGrep(Container $container): Grep
	{
		return new Grep(
			$container->get('Snippet.Remote.Config'),
			$container->get('Gitea.Repository.Contents'),
			$container->get('Network.Resolve'),
			$container->get('Config')->approved_joomla_paths
		);
	}

	/**
	 * Get The Remote Configure Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  RemoteConfig
	 * @since  5.2.1
	 */
	public function getRemoteConfig(Container $container): RemoteConfig
	{
		return new RemoteConfig(
			$container->get('Power.Table')
		);
	}

	/**
	 * Get The Resolver Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Resolver
	 * @since 5.2.1
	 */
	public function getResolver(Container $container): Resolver
	{
		return new Resolver(
			$container->get('Snippet.Remote.Config'),
			$container->get('Power.Tracker'),
			$container->get('Power.Table')
		);
	}

	/**
	 * Get The Remote Get Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Get
	 * @since   5.2.1
	 */
	public function getRemoteGet(Container $container): Get
	{
		return new Get(
			$container->get('Snippet.Remote.Config'),
			$container->get('Snippet.Grep'),
			$container->get('Data.Item')
		);
	}

	/**
	 * Get The Remote Set Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Set
	 * @since   5.2.1
	 */
	public function getRemoteSet(Container $container): Set
	{
		return new Set(
			$container->get('Snippet.Remote.Config'),
			$container->get('Snippet.Grep'),
			$container->get('Data.Items'),
			$container->get('Snippet.Readme.Item'),
			$container->get('Snippet.Readme.Main'),
			$container->get('Gitea.Repository.Contents'),
			$container->get('Power.Message'),
			$container->get('Config')->approved_joomla_paths
		);
	}

	/**
	 * Get The Item Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  ItemReadme
	 * @since   5.2.1
	 */
	public function getItemReadme(Container $container): ItemReadme
	{
		return new ItemReadme();
	}

	/**
	 * Get The Main Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  MainReadme
	 * @since   5.2.1
	 */
	public function getMainReadme(Container $container): MainReadme
	{
		return new MainReadme();
	}
}

