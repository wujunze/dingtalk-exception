<?php

namespace Wujunze\DingTalkException\Tests;

use Wujunze\DingTalkException\DingTalkExceptionHelper;
use Wujunze\DingTalkException\DingTalkJob;

class DingTalkExceptionTest extends TestCase
{
    public function testNotify()
    {
        $res = $this->ding->text('test dingtalk');
        $this->assertEquals('{"errmsg":"ok","errcode":0}', $res);
    }

}