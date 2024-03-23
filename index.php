<?php
/* 
// กำหนดค่าคงที่ PLUGIN_DIR ให้เป็นเส้นทางไดเรกทอรีของไฟล์ปลั๊กอินนี้
define('PLUGIN_DIR', plugin_dir_path(__FILE__));

// กำหนดค่าคงที่ PLUGIN_URL ให้เป็น URL ของไดเรกทอรีที่มีไฟล์ปลั๊กอินนี้
define('PLUGIN_URL', plugin_dir_url(__FILE__));

// plugin_dir_path(__FILE__) จะคืนค่าเส้นทางไดเรกทอรีบนเซิร์ฟเวอร์ไฟล์ที่เรียกใช้ฟังก์ชันนี้
// ตัวอย่างเช่น ถ้าไฟล์ปลั๊กอินของคุณอยู่ที่ /wp-content/plugins/my-plugin/my-plugin.php
// plugin_dir_path(__FILE__) จะคืนค่า /wp-content/plugins/my-plugin/

// plugin_dir_url(__FILE__) จะคืนค่า URL ของไดเรกทอรีที่มีไฟล์ปลั๊กอินนี้
// ตัวอย่างเช่น ถ้าไฟล์ปลั๊กอินของคุณอยู่ที่ /wp-content/plugins/my-plugin/my-plugin.php
// plugin_dir_url(__FILE__) จะคืนค่า URL ที่คล้ายกับ http://example.com/wp-content/plugins/my-plugin/

// การกำหนดค่าเหล่านี้เป็นค่าคงที่ช่วยให้สามารถอ้างอิงเส้นทางไดเรกทอรีและ URL ของปลั๊กอินได้อย่างง่ายดาย
// ในทุกส่วนของโค้ดปลั๊กอิน โดยไม่ต้องคำนวณเส้นทางหรือ URL ใหม่ทุกครั้ง

*/