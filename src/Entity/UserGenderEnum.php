<?php
/**
 * Created by PhpStorm.
 * User: eschlegel
 * Date: 06/08/2018
 * Time: 17:37
 */
namespace Entity;

abstract class UserTitleEnum extends EnumType
{
    protected $name = 'usergenderenum';
    protected $values = array('female', 'male');
}