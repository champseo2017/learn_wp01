<?php
/* 
WordPress มีฟังก์ชันมาตรฐานสำหรับการเปิดใช้งาน (Activation) และปิดใช้งาน (Deactivation) ปลั๊กอิน ซึ่งช่วยให้ปลั๊กอินสามารถรันโค้ดเมื่อมีการเปิดหรือปิดใช้งานปลั๊กอินนั้นๆ ได้
*/
/*
Plugin Name: ตัวอย่างปลั๊กอิน
Plugin URI: http://example.com/
Description: ปลั๊กอินตัวอย่างสำหรับการเปิดและปิดใช้งาน
Version: 1.0
Author: ชื่อผู้พัฒนา
Author URI: http://example.com/
*/

// ฟังก์ชันที่ทำงานเมื่อเปิดใช้งานปลั๊กอิน
function activate_example_plugin() {
    // โค้ดที่ต้องการให้ทำงานเมื่อเปิดใช้งานปลั๊กอิน
    // เช่น สร้างตาราง, เพิ่มข้อมูลเริ่มต้น, ตั้งค่าต่างๆ
}
register_activation_hook( __FILE__, 'activate_example_plugin' );

// ฟังก์ชันที่ทำงานเมื่อปิดใช้งานปลั๊กอิน
function deactivate_example_plugin() {
    // โค้ดที่ต้องการให้ทำงานเมื่อปิดใช้งานปลั๊กอิน 
    // เช่น ลบตาราง, ลบข้อมูล, ล้างค่าต่างๆ
}
register_deactivation_hook( __FILE__, 'deactivate_example_plugin' );