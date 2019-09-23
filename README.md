# dingtalk-exception
Laravel/Lumen exception notify through DingTalk

[![Latest Stable Version](https://poser.pugx.org/wujunze/dingtalk-exception/v/stable)](https://packagist.org/packages/wujunze/dingtalk-exception) [![Total Downloads](https://poser.pugx.org/wujunze/dingtalk-exception/downloads)](https://packagist.org/packages/wujunze/dingtalk-exception) [![License](https://poser.pugx.org/wujunze/dingtalk-exception/license)](https://packagist.org/packages/wujunze/dingtalk-exception)

## Inspire And Thanks
 
[cblink/bearychat-exception](https://github.com/cblink/bearychat-exception)   
[wowiwj/ding-notice ](https://github.com/wowiwj/ding-notice)


## Install

`composer require wujunze/dingtalk-exception`

Add the service provider to the `providers` array in `config/app.php`:

`DingNotice\DingNoticeServiceProvider"::class,`

publish the config file:

`php artisan vendor:publish --provider="DingNotice\DingNoticeServiceProvider"`

## Usage

fix file
 app/Exceptions/Handler.php

```

use Wujunze\DingTalkException\DingTalkExceptionHelper;

class Handler extends ExceptionHandler
{
  // ...
  
    public function report(Exception $exception)
    {
        DingTalkExceptionHelper::notify($exception);
        parent::report($exception);
    }

}

```


![file](https://lccdn.phphub.org/uploads/images/201807/26/4269/jOE1tqAqEn.png?imageView2/2/w/1240/h/0)


## Config 

simple type 

```

use Wujunze\DingTalkException\DingTalkExceptionHelper;

class Handler extends ExceptionHandler
{
  // ...
  
    public function report(Exception $exception)
    {
        DingTalkExceptionHelper::notify($exception, true);
        parent::report($exception);
    }

}

```