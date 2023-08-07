<?php
class Conversation{}

$obj = new Conversation();

/*switch ($obj::class){
    case 'Conversation':
        $type = 'started_conversation';
        break;
    case 'Reply':
        $type = 'replied_to_conversation';
        break;
    case 'Comment':
        $type = 'commented_on_lesson';
        break;
}*/

match ($obj::class){
    'Conversation' => $type = 'started_conversation',
    'Reply' => $type = 'replied_to_conversation',
    'Comment' => $type = 'commented_on_lesson',
    default => $type = 'unknown'
};

echo $type;




