<?php
/* 
เมื่อสร้างปลั๊กอิน มักจะต้องรันโค้ดบางอย่างเมื่อผู้ใช้เปิดใช้งานปลั๊กอินเป็นครั้งแรก เช่น การเพิ่มความสามารถพิเศษให้กับบทบาทผู้ดูแลระบบสำหรับ Custom Post Type หรือตั้งค่าตัวเลือกสำหรับปลั๊กอิน WordPress มีฟังก์ชัน register_activation_hook() ที่ช่วยให้เราส่งค่า Callback สำหรับจัดการโค้ดที่ต้องการรันเมื่อเปิดใช้งานปลั๊กอิน ควรแยกโค้ดส่วนนี้ออกจากโค้ดหลักของปลั๊กอินเพื่อความเป็นระเบียบ
*/
namespace PDEV;

// ลงทะเบียน Activation Hook โดยเรียกใช้คลาส Activation และเมธอด activate()
register_activation_hook( __FILE__, function() {
    require_once plugin_dir_path( __FILE__ ) . 'src/Activation.php';
    Activation::activate();
} );

class Activation {
    public static function activate() {
        // ดึงข้อมูล Role ของ Administrator
        $role = get_role( 'administrator' );
        
        // ตรวจสอบว่า Role มีอยู่หรือไม่
        if ( ! empty( $role ) ) {
            // เพิ่มความสามารถพิเศษ 'pdev_manage' ให้กับ Administrator
            $role->add_cap( 'pdev_manage' );
        }
    }
}

/* 

คำอธิบาย:

เราใช้ Namespace PDEV เพื่อหลีกเลี่ยงความขัดแย้งของชื่อฟังก์ชันหรือคลาสกับโค้ดอื่นๆ
ใช้ฟังก์ชัน register_activation_hook() เพื่อลงทะเบียน Activation Hook โดยส่งพารามิเตอร์เป็นตำแหน่งไฟล์ปลั๊กอิน (__FILE__) และ Callback ที่ต้องการให้ทำงาน
ใน Callback เราเรียกใช้ไฟล์ Activation.php ที่อยู่ในโฟลเดอร์ src และเรียกใช้เมธอด activate() จากคลาส Activation
ในเมธอด activate():
ใช้ฟังก์ชัน get_role() เพื่อดึงข้อมูล Role ของ Administrator
ตรวจสอบว่า Role มีอยู่หรือไม่ด้วย !empty()
ถ้ามี ให้ใช้เมธอด add_cap() เพื่อเพิ่มความสามารถพิเศษ 'pdev_manage' ให้กับ Administrator
ด้วยวิธีนี้ เราสามารถเขียนโค้ดสำหรับการเปิดใช้งานปลั๊กอินได้อย่างเป็นระเบียบ และสามารถรันโค้ดที่ต้องการเพียงครั้งเดียวหรือสิ่งที่ไม่จำเป็นต้องรันในทุกๆ การโหลดหน้าเว็บ เช่น การสร้างตารางในฐานข้อมูลเฉพาะของปลั๊กอิน
*/