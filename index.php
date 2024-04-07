<?php
/* 
Namespace ใน PHP เป็นวิธีการจัดกลุ่มคลาสและฟังก์ชันที่เกี่ยวข้องกันไว้ด้วยกัน เพื่อหลีกเลี่ยงความขัดแย้งของชื่อและทำให้โค้ดมีความเป็นระเบียบมากขึ้น โดยมีหลักการใช้ดังนี้:

กำหนดชื่อ Namespace ที่สื่อความหมายและไม่ซ้ำกับชื่ออื่นๆ เช่น PDEV ย่อมาจาก "Plugin Development"
ใช้คีย์เวิร์ด namespace ตามด้วยชื่อ Namespace ที่ต้องการที่ด้านบนสุดของไฟล์ PHP
ภายใน Namespace สามารถประกาศคลาสและฟังก์ชันต่างๆ ได้
สามารถใช้ Namespace ย่อยได้โดยใช้ \ เป็นตัวคั่น เช่น PDEV\SubNamespace
เมื่อต้องการอ้างอิงคลาสหรือฟังก์ชันจาก Namespace อื่น ให้ใช้ use หรือเรียกแบบเต็มด้วย \ นำหน้า
ตัวอย่างโครงสร้างโฟลเดอร์และไฟล์ที่ใช้ Namespace:

plugin-name/
├── src/
│   ├── Admin/
│   │   ├── AdminPage.php
│   │   └── Settings.php
│   ├── Frontend/
│   │   ├── Shortcodes.php
│   │   └── Widget.php
│   ├── Activation.php
│   └── Deactivation.php
├── vendor/
│   └── autoload.php
└── plugin-name.php

ตัวอย่างการใช้ Namespace ในไฟล์ AdminPage.php:
<?php
namespace PDEV\Admin;

class AdminPage {
    // ...
}

ตัวอย่างการใช้ Namespace ในไฟล์ plugin-name.php:
<?php
use PDEV\Activation;
use PDEV\Deactivation;
use PDEV\Admin\AdminPage;
use PDEV\Frontend\Shortcodes;

// Plugin activation
register_activation_hook( __FILE__, [ Activation::class, 'activate' ] );

// Plugin deactivation
register_deactivation_hook( __FILE__, [ Deactivation::class, 'deactivate' ] );

// Admin page
$adminPage = new AdminPage();

// Shortcodes
$shortcodes = new Shortcodes();
ในตัวอย่างนี้ เราใช้ Namespace หลักเป็น PDEV และแบ่งเป็น Namespace ย่อยตามหน้าที่ เช่น PDEV\Admin และ PDEV\Frontend ทำให้โค้ดมีความเป็นระเบียบและง่ายต่อการจัดการมากขึ้น และเมื่อต้องการใช้คลาสหรือฟังก์ชันจาก Namespace อื่น เราสามารถใช้ use เพื่อ Import เข้ามาได้
*/