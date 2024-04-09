<?php
/* 
PHP อนุญาตให้คุณใช้เครื่องหมายคำพูดเดี่ยวหรือคู่เมื่อกำหนดสตริง สำหรับ WordPress แนะนำให้ใช้เครื่องหมายคำพูดเดี่ยวเสมอเมื่อเป็นไปได้ เพราะจะทำให้ใช้เครื่องหมายคำพูดคู่ภายในสตริงได้อย่างง่ายดายโดยไม่ต้อง escape นอกจากนี้คุณยังสามารถใช้เครื่องหมายคำพูดคู่เมื่อคุณต้องการแทรกตัวแปรภายในสตริง
*/
// ตัวอย่างการใช้เครื่องหมายคำพูดเดี่ยว:
echo '<a href="https://example.com">Visit Example.com</a>';
/* 
ในตัวอย่างนี้ เราใช้เครื่องหมายคำพูดเดี่ยวเพื่อกำหนดสตริง HTML ที่มีแท็ก <a> ซึ่งมีแอตทริบิวต์ href ที่ใช้เครื่องหมายคำพูดคู่ การใช้เครื่องหมายคำพูดเดี่ยวช่วยให้เราสามารถใช้เครื่องหมายคำพูดคู่ภายในสตริงได้โดยไม่ต้อง escape

เมื่อ PHP ประมวลผลโค้ดนี้ มันจะส่งสตริง HTML ไปยังเบราว์เซอร์ ซึ่งจะแสดงผลเป็นลิงก์ที่สามารถคลิกได้ไปยัง "https://example.com" พร้อมข้อความ "Visit Example.com"

*/

// ตัวอย่างการใช้เครื่องหมายคำพูดคู่เพื่อแทรกตัวแปร:
$pdev_site_name = get_bloginfo( 'name', 'display' );
echo "You are viewing {$pdev_site_name}.";

/* 
ในตัวอย่างนี้ เราใช้ฟังก์ชัน get_bloginfo() เพื่อดึงชื่อไซต์ปัจจุบันและเก็บไว้ในตัวแปร $pdev_site_name

จากนั้นเราใช้เครื่องหมายคำพูดคู่เพื่อกำหนดสตริงที่มีการแทรกตัวแปร $pdev_site_name เข้าไปในสตริง โดยการใช้วงเล็บปีกกา {} เพื่อบอกให้ PHP แยกแยะตัวแปรออกจากส่วนที่เหลือของสตริง

เมื่อ PHP ประมวลผลโค้ดนี้ มันจะแทนที่ {$pdev_site_name} ด้วยค่าของตัวแปร $pdev_site_name และส่งสตริงที่ได้ไปยังเบราว์เซอร์ ซึ่งจะแสดงผลเป็นข้อความ "You are viewing [ชื่อไซต์]." โดย [ชื่อไซต์] จะถูกแทนที่ด้วยชื่อไซต์จริงๆ

การใช้เครื่องหมายคำพูดเดี่ยวเป็นค่าเริ่มต้นและใช้เครื่องหมายคำพูดคู่เมื่อจำเป็นต้องแทรกตัวแปรในสตริงช่วยให้โค้ดของคุณสะอาด อ่านง่าย และหลีกเลี่ยงข้อผิดพลาดที่อาจเกิดขึ้นจากการใช้เครื่องหมายคำพูดไม่ถูกต้อง
*/