<?php

namespace App;

use App\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Subsection extends Model
{
    protected $fillable = ['section_id', 'title', 'description'];

    public function topics() {
        return $this->hasMany('App\Topic');
    }

    public function getMessagesAmountAttribute() {
        //return DB::raw('select count(*) from topics inner join messages on topics.id = messages.topic_id where subsection_id = ' . $this->id, [1]);
        /*
         * SELECT COUNT(*)
            FROM `topics`
            INNER JOIN `messages`
            ON `topics`.`id` = `messages`.`topic_id`
            WHERE `subsection_id` = '1'
         * */
        $result = DB::table('topics')
                        ->join('messages', 'topics.id', '=', 'messages.topic_id')
                        ->select(DB::raw('count(*) as msgcount'))
                        ->where('subsection_id', '=', $this->id)
                        ->first();
        return $result->msgcount;
    }

    public function getLatestMessageAttribute() {
        /*
         * SELECT *
            FROM `topics`
            INNER JOIN `messages`
            ON `topics`.`id` = `messages`.`topic_id`
            WHERE `subsection_id` = '3'
            ORDER BY `messages`.`updated_at` DESC
            LIMIT 1
         */
        $result = DB::table('topics')
                        ->join('messages', 'topics.id', '=', 'messages.topic_id')
                        ->select('*')
                        ->where('subsection_id', '=', $this->id)
                        ->orderBy('messages.updated_at', 'desc')
                        ->first();
//        return $result;
        if($result)
            return Message::where('id', '=', $result->id)->firstOrFail();
        else
            return null;
    }
}
