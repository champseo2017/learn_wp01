<?php
/* 
 ตัวอย่างการใช้ namespace กับฟังก์ชันในปลั๊กอิน

 Namespace ทุกอย่าง หากคุณมีฟังก์ชันที่ชื่อว่า get_post(), มันจะขัดแย้งกับฟังก์ชัน get_post() ของ WordPress เองและทำให้เกิดข้อผิดพลาดร้ายแรง นั่นไม่ใช่ประสบการณ์ที่ดีสำหรับผู้ใช้ การเขียนโค้ดที่ดีหมายถึงการทำให้แน่ใจว่าโค้ดของคุณไม่ขัดแย้งกับโค้ดของนักพัฒนาคนอื่น วิธีที่ดีที่สุดในการรับประกันสิ่งนี้คือการใช้คำนำหน้าหรือ namespace กับคลาส ฟังก์ชัน และสิ่งอื่นๆ ทั้งหมดภายใน global namespace

 function myplugin_get_post() {
    // โค้ดของคุณที่นี่
 }

// หรือการใช้ namespace กับคลาส
class MyPlugin_CustomClass {
    // โค้ดของคลาสที่นี่
}

การใช้คำนำหน้าหรือ namespace ช่วยป้องกันการขัดแย้งระหว่างโค้ดของคุณกับโค้ดจาก WordPress หรือปลั๊กอินอื่นๆ ทำให้ปลั๊กอินของคุณมีความเสถียรและปลอดภัยมากขึ้น

*/