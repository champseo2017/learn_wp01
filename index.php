<?php
/* 
WordPress มีแนวทางที่เข้มงวดในการตั้งชื่อไฟล์ โดยมาตรฐานคือการเขียนตัวอักษรแต่ละตัวเป็นตัวพิมพ์เล็ก และคั่นคำหลายๆ คำด้วยเครื่องหมายขีด เช่น ถ้าคุณมีกลุ่มฟังก์ชันที่เกี่ยวข้องกับผู้ใช้ในปลั๊กอินของคุณ คุณควรตั้งชื่อไฟล์นั้นเป็น functions-users.php นอกจากนี้ WordPress ยังใช้คำนำหน้า class- สำหรับชื่อไฟล์คลาส

อย่างไรก็ตาม นี่เป็นจุดที่ WordPress แตกต่างจากมาตรฐานในชุมชน PHP ในบางจุด คุณอาจต้องการใช้ autoloader เช่น autoloader ที่ให้มาโดย Composer (https://getcomposer.org) เมื่อคุณใช้ คุณจะรู้ได้อย่างรวดเร็วว่าวิธีที่ดีที่สุดในการตั้งชื่อไฟล์คลาสคือให้ชื่อไฟล์ตรงกับชื่อคลาสอย่างเท่าเทียมกัน เพราะมันช่วยให้โค้ด autoloader เรียบง่ายขึ้น และทำให้คุณไม่ต้องเขียน implementation ที่กำหนดเอง ในกรณีนี้ คุณควรตั้งชื่อไฟล์สำหรับคลาส PDEVSetup เป็น PDEVSetup.php
*/
// ไฟล์: functions-users.php

/**
 * ฟังก์ชันสำหรับดึงข้อมูลผู้ใช้
 *
 * @param int $user_id ID ของผู้ใช้
 * @return array ข้อมูลผู้ใช้
 */
function pdev_get_user_data( $user_id ) {
    // ดึงข้อมูลผู้ใช้จากฐานข้อมูล
    // ...

    return $user_data;
}

/**
 * ฟังก์ชันสำหรับอัปเดตข้อมูลผู้ใช้
 *
 * @param int   $user_id   ID ของผู้ใช้
 * @param array $user_data ข้อมูลผู้ใช้ที่ต้องการอัปเดต
 * @return bool ผลการอัปเดต (true หากสำเร็จ, false หากล้มเหลว)
 */
function pdev_update_user_data( $user_id, $user_data ) {
    // อัปเดตข้อมูลผู้ใช้ในฐานข้อมูล
    // ...

    return $update_success;
}

// ไฟล์: PDEVSetup.php

class PDEVSetup {
    /**
     * เมธอดสำหรับลงทะเบียนฮุคและตั้งค่าปลั๊กอิน
     */
    public function setup() {
        // ลงทะเบียนฮุค
        add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );
        add_action( 'init', array( $this, 'register_post_types' ) );

        // ตั้งค่าอื่นๆ
        // ...
    }

    /**
     * เมธอดสำหรับโหลด Text Domain ของปลั๊กอิน
     */
    public function load_textdomain() {
        load_plugin_textdomain( 'pdev', false, PDEV_PLUGIN_DIR . '/languages' );
    }

    /**
     * เมธอดสำหรับลงทะเบียน Post Type ต่างๆ
     */
    public function register_post_types() {
        // ลงทะเบียน Post Type
        // ...
    }
}

/* 
ในตัวอย่างโค้ดแรก แสดงให้เห็นการตั้งชื่อไฟล์ตามแนวทางของ WordPress โดยใช้ชื่อ functions-users.php สำหรับไฟล์ที่เก็บฟังก์ชันที่เกี่ยวข้องกับผู้ใช้ และใช้ Snake Case ในการตั้งชื่อฟังก์ชัน

ในตัวอย่างโค้ดที่สอง แสดงให้เห็นการตั้งชื่อไฟล์คลาสให้ตรงกับชื่อคลาสอย่างเท่าเทียมกัน โดยใช้ชื่อ PDEVSetup.php สำหรับไฟล์ที่เก็บคลาส PDEVSetup ซึ่งเป็นแนวทางที่เหมาะสมเมื่อใช้งานร่วมกับ autoloader เช่น Composer

การเลือกใช้แนวทางการตั้งชื่อไฟล์ขึ้นอยู่กับความต้องการและบริบทของโปรเจคของคุณ แต่สิ่งสำคัญคือต้องรักษาความสม่ำเสมอตลอดทั้งโค้ดเบส เพื่อให้โค้ดอ่านง่าย เข้าใจได้ และง่ายต่อการบำรุงรักษา

*/