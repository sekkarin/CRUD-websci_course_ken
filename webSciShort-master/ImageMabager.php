<?php
class ImageManager
{
    public $images = [];
    public function AddImage(string $image): bool
    {
        array_push($this->images, $image);
        // $this->images[] = $image;
        return true;
    }
    public function RemoveImage(string $imageID): bool
    {
        unset($images[$imageID]);
        return true;
    }
    public function GetImage(int $imageID): string|null
    {
        return $this->images[$imageID];
    }
    public function UpdateImage(string $imageID): bool
    {
        return true;
    }
    public function GetImageAll(): array
    {
        return $this->images;
    }
    public function GetImagejson(): string|bool{
        return json_encode($this->images);
    }
}
?>