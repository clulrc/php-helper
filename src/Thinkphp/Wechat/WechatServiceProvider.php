<?php
/**
 * Talents come from diligence, and knowledge is gained by accumulation.
 *
 * @author: 晋<657306123@qq.com>
 */

namespace Xin\Thinkphp\Wechat;

use Xin\Contracts\Foundation\Wechat as WechatContract;
use Xin\Foundation\Wechat\Wechat;
use Xin\Thinkphp\Foundation\ServiceProvider;

class WechatServiceProvider extends ServiceProvider{
	
	/**
	 * 启动器
	 */
	public function register(){
		$this->app->bind('wechat', WechatContract::class);
		$this->app->bind(WechatContract::class, function(){
			return new Wechat(
				$this->app->config->get('wechat')
			);
		});
	}
}
