<?php

namespace Aghanem\Jawaly\Models;

use Illuminate\Database\Eloquent\Model;

class SmsLogModel extends Model
{

    protected $table = 'jawaly_sms_log';
    protected $fillable = ['body', 'numbers', 'status', 'gate_message', 'response', 'sender'];

}
