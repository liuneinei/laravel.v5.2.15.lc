<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SomeEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;
    public $user_id;
    public $name;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user_id)
    {
        $this->user_id = $user_id;
        $this->name = 'xu';
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['test-channel'];
    }

    /**
     * 获取广播数据。
     *
     * @return array
     */
    public function broadcastWith()
    {
        return [
            'user' => $this->user_id,
            'name' => 'aaaa',
        ];
    }
}
