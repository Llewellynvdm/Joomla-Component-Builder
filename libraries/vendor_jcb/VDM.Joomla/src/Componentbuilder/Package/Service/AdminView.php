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
use VDM\Joomla\Componentbuilder\Package\Grep;
use VDM\Joomla\Componentbuilder\Package\AdminView\Remote\Config;
use VDM\Joomla\Componentbuilder\Package\Dependency\Resolver;
use VDM\Joomla\Componentbuilder\Package\Remote\Set;
use VDM\Joomla\Componentbuilder\Package\AdminView\Readme\Item as ItemReadme;
use VDM\Joomla\Componentbuilder\Package\AdminView\Readme\Main as MainReadme;


/**
 * Admin View Service Provider
 * 
 * @since 5.2.1
 */
class AdminView implements ServiceProviderInterface
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
		$container->alias(Grep::class, 'AdminView.Grep')
			->share('AdminView.Grep', [$this, 'getGrep'], true);

		$container->alias(Config::class, 'AdminView.Remote.Config')
			->share('AdminView.Remote.Config', [$this, 'getRemoteConfig'], true);

		$container->alias(Resolver::class, 'AdminView.Resolver')
			->share('AdminView.Resolver', [$this, 'getResolver'], true);

		$container->alias(Get::class, 'AdminView.Remote.Get')
			->share('AdminView.Remote.Get', [$this, 'getRemoteGet'], true);

		$container->alias(Set::class, 'AdminView.Remote.Set')
			->share('AdminView.Remote.Set', [$this, 'getRemoteSet'], true);

		$container->alias(ItemReadme::class, 'AdminView.Readme.Item')
			->share('AdminView.Readme.Item', [$this, 'getItemReadme'], true);

		$container->alias(MainReadme::class, 'AdminView.Readme.Main')
			->share('AdminView.Readme.Main', [$this, 'getMainReadme'], true);
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
			$container->get('AdminView.Remote.Config'),
			$container->get('Gitea.Repository.Contents'),
			$container->get('Network.Resolve'),
			$container->get('Config')->approved_package_paths
		);
	}

	/**
	 * Get The Remote Config Class.
	 *
	 * @param   Container  $container  The DI container.
	 *
	 * @return  Config
	 * @since   5.2.1
	 */
	public function getRemoteConfig(Container $container): Config
	{
		return new Config(
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
			$container->get('AdminView.Remote.Config'),
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
			$container->get('AdminView.Remote.Config'),
			$container->get('AdminView.Grep'),
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
			$container->get('AdminView.Remote.Config'),
			$container->get('AdminView.Grep'),
			$container->get('Data.Items'),
			$container->get('AdminView.Readme.Item'),
			$container->get('AdminView.Readme.Main'),
			$container->get('Gitea.Repository.Contents'),
			$container->get('Power.Message'),
			$container->get('Config')->approved_package_paths
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

