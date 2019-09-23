<?php

namespace Wujunze\DingTalkException;


class DingTalkExceptionHelper
{

    /**
     * @param \Exception $exception
     *
     * @param bool $simple
     */
    public static function notify($exception, bool $simple = false)
    {
        dispatch(new DingTalkJob(
            app('request')->fullUrl(),
            get_class($exception),
            $exception->getMessage(),
            $exception->getCode(),
            $exception->getFile(),
            $exception->getLine(),
            $exception->getTraceAsString(),
            $simple
        ));
    }

}