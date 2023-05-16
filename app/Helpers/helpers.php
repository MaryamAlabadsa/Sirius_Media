<?php

use \Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Config;


/**
 * @return boolean
 *
 */

function is_rtl()
{
  if(Config::get('app.locale') == 'ar')
    return true;
  else
    return false;
}

function is_ltr()
{
  return !is_rtl();
}
