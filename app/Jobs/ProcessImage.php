<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Tinify; // Import TinyPNG library
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\Encoders\WebpEncoder; // Import the WebpEncoder

class ProcessImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $imagePath;
    protected $imageName ;

    /**
     * Create a new job instance.
     */
    public function __construct($imagePath,$imageName)
    {
        $this->imagePath = $imagePath;
        $this->imageName = $imageName;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Create an instance of the image
        $img = Image::read($this->imagePath);

        // Optionally resize or compress the image
        //$img->scaleDown(800, null);

        // Convertion WebP image
        // $webpPath = public_path('images/compressed_'  . $this->imageName . '.webp');
        // Save as WebP format with specified quality
        // $img->encode(new WebpEncoder(quality: 100))->save($webpPath);

        // Save the compressed image
        $img->save(public_path('images/' . $this->imageName));

    }
}
