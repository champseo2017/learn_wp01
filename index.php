<?php
/* 
เช่นเดียวกับฟังก์ชันการเปิดใช้งาน WordPress ยังอนุญาตให้เราสามารถรันโค้ดจาก Deactivation Callback ที่ลงทะเบียนไว้ผ่านฟังก์ชัน register_deactivation_hook() ได้ โดยตัวอย่างจะเรียกใช้คลาส src/Deactivation.php และเมธอด deactivate() เมื่อลงทะเบียน Deactivation Callback แล้ว เราสามารถเขียนโค้ดที่ต้องการรันเมื่อปิดใช้งานปลั๊กอินได้อย่างอิสระ

อธิบาย code:

ไฟล์ plugin.php:
<?php
namespace PDEV;

// ลงทะเบียน Deactivation Hook โดยเรียกใช้คลาส Deactivation และเมธอด deactivate()

register_deactivation_hook( __FILE__, function() {
    require_once plugin_dir_path( __FILE__ ) . 'src/Deactivation.php';
    Deactivation::deactivate();
} );

ไฟล์ src/Deactivation.php:
<?php
namespace PDEV;

class Deactivation {
    public static function deactivate() {
        // เขียนโค้ดที่ต้องการรันเมื่อปิดใช้งานปลั๊กอินที่นี่
    }
}

คำอธิบาย:
- ในไฟล์ `plugin.php`:
  - เราใช้ Namespace `PDEV` เพื่อหลีกเลี่ยงความขัดแย้งของชื่อฟังก์ชันหรือคลาส
  - ใช้ฟังก์ชัน `register_deactivation_hook()` เพื่อลงทะเบียน Deactivation Hook โดยส่งพารามิเตอร์เป็นตำแหน่งไฟล์ปลั๊กอิน (`__FILE__`) และ Callback ที่ต้องการให้ทำงาน
  - ใน Callback เราเรียกใช้ไฟล์ `Deactivation.php` ที่อยู่ในโฟลเดอร์ `src` และเรียกใช้เมธอด `deactivate()` จากคลาส `Deactivation`

- ในไฟล์ `src/Deactivation.php`:
  - เราประกาศคลาส `Deactivation` ภายใต้ Namespace `PDEV`
  - สร้างเมธอด `deactivate()` แบบ Static เพื่อเขียนโค้ดที่ต้องการรันเมื่อปิดใช้งานปลั๊กอิน
  - ภายในเมธอด `deactivate()` เราสามารถเขียนโค้ดอะไรก็ได้ที่ต้องการให้ทำงานเมื่อปิดใช้งานปลั๊กอิน เช่น ลบข้อมูลชั่วคราว, ล้างค่าออปชันต่างๆ เป็นต้น

ด้วยวิธีนี้ เราสามารถแยกโค้ดสำหรับการปิดใช้งานปลั๊กอินออกจากส่วนอื่นๆ ได้อย่างเป็นระเบียบ และสามารถเขียนโค้ดที่ต้องการรันเมื่อผู้ใช้ปิดใช้งานปลั๊กอินได้อย่างอิสระ
*/
