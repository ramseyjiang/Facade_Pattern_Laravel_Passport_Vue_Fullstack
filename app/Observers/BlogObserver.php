<?php

namespace Fspafs\Observers;

use Fspafs\Models\Blog;
use Illuminate\Support\Facades\Auth;
use LogRepository;

class BlogObserver
{
    public function __construct() 
    {
        $this->user = Auth::user();
    }

    /**
     * Handle the blog "created" event.
     *
     * @param  \Fspa\Models\Blog  $blog
     * @return void
     */
    public function created(Blog $blog)
    {
        $this->user = empty($this->user) ? ($blog->user) : $this->user;
        $desc = 'blog ' . $blog->id . ' is created by user '. $this->user->id;
        LogRepository::createBlogOperateLog($this->user, $desc);
    }

    /**
     * Handle the blog "updated" event.
     * The updated events include updated blogs.
     *
     * @param  \Fspa\Models\Blog  $blog
     * @return void
     */
    public function updated(Blog $blog)
    {
        $this->user = empty($this->user) ? ($blog->user) : $this->user;
        $desc = 'blog ' . $blog->id . ' is updated by user '. $this->user->id;
        LogRepository::createBlogOperateLog($this->user, $desc);
    }

    /**
     * Handle the blog "deleted" event.
     *
     * @param  \Fspa\Models\Blog  $blog
     * @return void
     */
    public function deleted(Blog $blog)
    {
        $desc = 'blog ' . $blog->id . ' is deleted by user '. $this->user->id;
        LogRepository::createBlogOperateLog($this->user, $desc);
    }

    /**
     * Handle the blog "restored" event.
     *
     * @param  \Fspa\Models\Blog  $blog
     * @return void
     */
    public function restored(Blog $blog)
    {
        //
    }

    /**
     * Handle the blog "force deleted" event.
     *
     * @param  \Fspa\Models\Blog  $blog
     * @return void
     */
    public function forceDeleted(Blog $blog)
    {
        //
    }
}
