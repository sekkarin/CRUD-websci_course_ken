<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>regitor course</title>
        <link href="/dist/output.css" rel="stylesheet">
    </head>
    <body class="m-0 p-0">

        <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded-br-2xl
            rounded-bl-2xl
            dark:bg-gray-900">
            <div class="container flex flex-wrap items-center justify-between
                mx-auto">
                <a href="javascript:history.go(-1)" class="flex items-center">
                    <img src="../images/icons/arrow.png"
                        class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
                    <span class="text-white">ย้อนกลับ</span>
                </a>
            </div>
        </nav>
        <div class="w-full h-screen flex justify-center mt-2">
            <form action="../controller/con_registor_course.php" method="post">
                <div class="flex flex-col my-4 w-80">
                    <label for="email">อีเมล์</label>
                    <input required type="email" name="email" id="email" class="
                        border-4
                        rounded h-10">
                </div>
                <div class="flex flex-col my-4 w-80">
                    <label for="title_name">คำนำหน้า</label>
                    <input required type="text" name="title_name"
                        id="title_name" class="
                        border-4 rounded h-10">
                </div>
                <div class="flex flex-col my-4 w-80">
                    <label for="name">ชื่อ</label>
                    <input required type="text" name="name" id="name" class="
                        border-4
                        rounded h-10">
                </div>
                <div class="flex flex-col my-4 w-80">
                    <label for="phone">เบอร์ติดต่อ</label>
                    <input required maxlength="10" type="text" name="phone"
                        id="phone"
                        class="border-4
                        rounded h-10">
                </div>
                <div class="flex flex-col my-4 w-80">
                    <label for="id_number">เลขบัตรประจำตัว</label>
                    <input maxlength="13" required type="text" name="id_number"
                        id="id_number"
                        class="
                        border-4 rounded h-10">
                </div>
                <div class="flex flex-col my-4 w-80">
                    <label for="hq">การศึกษาสูงสุด</label>
                    <input required type="text" name="hq" id="hq" class="
                        border-4
                        rounded h-10">
                </div>
                <div class="flex flex-col my-4 w-80">
                    <label for="image">หลักฐานการโอน</label>
                    <input required type="url" name="image_url" id="image" class="
                        border-4
                        rounded h-10">
                </div>
                <div class="flex flex-col my-4 w-80">

                    <input type="submit" value="สมัคร"
                        class="bg-green-500 text-white h-10 text-lg rounded
                        ">
                </div>
            </form>
        </div>
    </body>
</html>