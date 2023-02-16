# เอกสาร
## สร้าง class จัดการเกี่ยวกับ Image และ การใช้งาน Json
### browser
image.png
#### code class ImageManager
class ImageManager
{
    <!-- สร้าง Properties เก็บข้อมูล url รูป -->
    public $images = [];
    <!-- สร้าง Method จัดการรูป-->

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
#### code view image
<?php
include_once('./ImageMagage.php');


$objImage = new ImageManager();
$objImage->AddImage('https://www.akc.org/wp-content/themes/akc/component-library/assets/img/welcome.jpg');
$objImage->AddImage('http://t3.gstatic.com/licensed-image?q=tbn:ANd9GcRCFzg30JogIj40hQFI4DrVBMpfe83eLstaRvslhmCDXlgwTOgeT9ZGeSt0aTQSqj_M');
$objImage->AddImage('https://www.akc.org/wp-content/themes/akc/component-library/assets/img/welcome.jpg');
// $objImage->GetImage('0');
$imageAll = $objImage->GetImagejson();
$myArray = json_decode($imageAll);

foreach ($myArray as $value) {
    ?>
    <img src="<?= $value ?>" height="150" width="150">
<?php } ?>

## ระบบลงทะเบียนคอร์ส
![image](https://user-images.githubusercontent.com/73205970/218973550-c206630b-99d2-427e-83f5-11e01933a3aa.png)
### code
![image](https://user-images.githubusercontent.com/73205970/218973692-ff67ce75-77ff-4164-b72a-fbae0e81dd4d.png)
### database
![image](https://user-images.githubusercontent.com/73205970/218973806-394012ff-9564-4731-9432-79e1915bc742.png)


## ระบบค้นหาโดย ชื่อ และ ปี
![image](https://user-images.githubusercontent.com/73205970/214227741-029cbf51-a241-4a16-ab5d-47ebf55dbb88.png)
![image](https://user-images.githubusercontent.com/73205970/214227823-2b5860de-6e05-43db-aa94-4b06823a7df0.png)
### code
![image](https://user-images.githubusercontent.com/73205970/214228592-d290d2da-f739-4abd-9ece-5349405dcf47.png)

## select ปี
![image](https://user-images.githubusercontent.com/73205970/214228475-c18e774c-a488-46d0-b260-1eac98b8efbd.png)
### code
![image](https://user-images.githubusercontent.com/73205970/214228729-c1067612-50b3-4f43-9467-fc3119acffed.png)
## database field
![image](https://user-images.githubusercontent.com/73205970/214228865-0ee31bd8-4975-485b-bbbb-5f628e4c0971.png)
