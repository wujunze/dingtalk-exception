<?php

namespace Wujunze\DingTalkException;


class DingTalkExceptionHelper
{

    /**
     * @param \Exception $exception
     */
    public static function notify($exception)
    {
        DingTalkJob::dispatch(
            \request()->fullUrl(),
            get_class($exception),
            $exception->getMessage(),
            $exception->getCode(),
            $exception->getFile(),
            $exception->getLine(),
            $exception->getTraceAsString()
        );
    }

}