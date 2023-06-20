<?php

class ImageCompressor
{
    private $image;
    private $compressedImage;
    public $imageData;

    public function compressImage($file)
    {
        $this->image = imagecreatefromstring(file_get_contents($file));

        // Set the maximum dimensions for the compressed image
        $maxWidth = 800;
        $maxHeight = 600;

        // Get the original image dimensions
        $originalWidth = imagesx($this->image);
        $originalHeight = imagesy($this->image);

        // Calculate the new dimensions while maintaining the aspect ratio
        $ratio = min($maxWidth / $originalWidth, $maxHeight / $originalHeight);
        $newWidth = intval($originalWidth * $ratio);
        $newHeight = intval($originalHeight * $ratio);

        // Create the compressed image
        $this->compressedImage = imagecreatetruecolor($newWidth, $newHeight);
        imagecopyresampled($this->compressedImage, $this->image, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);

        // Convert the compressed image to JPEG format
        ob_start();
        imagejpeg($this->compressedImage);
        $this->imageData = ob_get_clean();

        // Clean up
        imagedestroy($this->image);
        imagedestroy($this->compressedImage);
    }
}
?>


