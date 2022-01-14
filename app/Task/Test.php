<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Task;

use Hyperf\Crontab\Annotation\Crontab;

#[Crontab('TaskTest', rule: '*\/15 * * * * *', singleton: true, memo: '测试')]
class Test
{
    public function execute()
    {
        var_dump('执行了: ' . date('Y-m-d H:i:s'));
    }
}
