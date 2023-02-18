<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Unisharp\Laravelfilemanager\Events\ImageWasUploaded;
use UniSharp\LaravelFilemanager\Events\ImageIsDeleting;
use UniSharp\LaravelFilemanager\Events\ImageIsUploading;
use UniSharp\LaravelFilemanager\Events\FileWasUploaded;
use Intervention\Image\Facades\Image;

class ResizeUploadedImage
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(FileWasUploaded $event)
    {
        file_put_contents('./data.txt', 'xin chào các bạn nhỏ');
        $path = $event->path();
        $mime = mime_content_type($path);
        if (!str_contains($mime, 'image')) {
            return;
        }
        $image = Image::make($path);
        if($image->width() < 1200) {
            return;
        }
        // resize the image to a width of 1100 and constrain aspect ratio (auto height)
        $image->resize(1200, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($path);
    }
}
