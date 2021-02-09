<?php
/**
 * Talents come from diligence, and knowledge is gained by accumulation.
 *
 * @author: 晋<657306123@qq.com>
 */

namespace Xin\Thinkphp\Http;

use Xin\Thinkphp\Facade\Auth;

trait HasUser{
	
	/**
	 * @var \Closure
	 */
	protected $userResolverCallback;
	
	/**
	 * 设置用户完成器
	 *
	 * @param \Closure $resolverCallback
	 */
	public function setUserResolver(\Closure $resolverCallback){
		$this->userResolverCallback = $resolverCallback;
	}
	
	/**
	 * 获取用户信息
	 *
	 * @param string $field
	 * @param mixed  $default
	 * @param bool   $abort
	 * @return mixed
	 */
	public function user($field = null, $default = null, $verifyType = 1){
		if(is_null($this->userResolverCallback)){
			$this->userResolverCallback = function($field = null, $default = null, $verifyType = 1){
				return Auth::getUser($field, $default, $verifyType);
			};
		}
		
		return call_user_func($this->userResolverCallback, $field, $default, $verifyType);
	}
}
