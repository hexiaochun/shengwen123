<?php
// +----------------------------------------------------------------------
// | 浩森PHP框架 [ IeasynetPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2017~2018 北京浩森宇特互联科技有限公司 [ http://www.ieasynet.com ]
// +----------------------------------------------------------------------
// | 官方网站：http://ieasynet.com
// +----------------------------------------------------------------------
// | 开源协议 ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | 作者: 拼搏 <378184@qq.com>
// +----------------------------------------------------------------------

namespace app\cms\validate;

use think\Validate;

/**
 * 客服验证器
 * @package app\cms\validate
 * @author 拼搏 <378184@qq.com>
 */
class Support extends Validate
{
    // 定义验证规则
    protected $rule = [
        'name|客服名称' => 'require',
        'qq|QQ号码'    => 'number',
        'msn|MSN'     => 'email',
    ];

    // 定义验证场景
    protected $scene = [
        'name' => ['name']
    ];
}