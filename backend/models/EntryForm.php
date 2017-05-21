<?php
/**
 * Created by PhpStorm.
 * User: rexxar
 * Date: 21.05.17
 * Time: 12:45
 */

namespace backend\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules(){
        return [
            [['name', 'email'], 'required'],
            ['email', 'email']
        ];
    }
}