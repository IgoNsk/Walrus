<?php

class Object extends Eloquent
{
  protected $table = 'object';
  
  protected $guarded = array('id');
  
  protected $hidden = array('class_id');
}
