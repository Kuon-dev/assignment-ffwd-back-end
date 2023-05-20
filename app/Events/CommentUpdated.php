<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class CommentUpdated implements ShouldBroadcast {
  use Dispatchable, InteractsWithSockets, SerializesModels;

  /**
   * Create a new event instance.
   */
  public $postId;
  public $commentData;
  public $user;

  public function __construct($postId = null, $commentData, $user) {
    $this->postId = $postId;
    $this->commentData = $commentData;
    $this->user = $user;
  }
  /**
   * Get the channels the event should broadcast on.
   *
   * @return array<int, \Illuminate\Broadcasting\Channel>
   */
  public function broadcastOn() {
    Log::debug("post-comments-" . $this->postId);
    return ["post-comments-" . $this->postId];
  }

  public function broadcastAs() {
    return "new-comment";
  }
}
