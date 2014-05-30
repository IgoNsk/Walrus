<?php

class User extends Object
{  
  public function user()
  {
    return $this->hasOne('UserTable');
  }
}
