<?php

namespace app\models\score;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class bakInviteFriendLogs extends ActiveRecord
{
    public static function tableName(){
        return '{{%invite_friend_logs}}';
    }
}

