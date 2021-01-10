<?php
/**
 * Talents come from diligence, and knowledge is gained by accumulation.
 *
 * @author: 晋<657306123@qq.com>
 */

namespace Xin\Thinkphp\Saas;

use Xin\Support\Fluent;

trait InteractsAppDefaultMode{
	
	/**
	 * @param \Xin\Thinkphp\Http\RequestApp $request
	 */
	protected function saasAppDefaultInit($request){
		$request->setAppResolver(function(){
			return new Fluent([
				'id'    => 1,
				'title' => '默认应用',
			]);
		});
	}
}
