<?php
/* 
การพัฒนาปลั๊กอินอย่างมืออาชีพ จำเป็นต้องมีมาตรฐานในการเขียนโค้ด เพื่อให้ง่ายต่อการดูแลรักษาในระยะยาว และทำให้นักพัฒนาคนอื่นๆ สามารถเรียนรู้หรือมีส่วนร่วมในการพัฒนาปลั๊กอินได้อย่างรวดเร็ว WordPress มีมาตรฐานการเขียนโค้ดสำหรับโค้ดหลัก ซึ่งเป็นจุดเริ่มต้นที่ดีในการสร้างปลั๊กอิน สามารถดูมาตรฐานการเขียนโค้ดของ WordPress ได้ที่ https://make.wordpress.org/core/handbook/best-practices/coding-standards

อย่างไรก็ตาม WordPress มีโค้ดเก่าที่สืบทอดมานานกว่า 15 ปี และบางครั้งมาตรฐานของ WordPress อาจไม่สอดคล้องกับมาตรฐานของชุมชน PHP ที่ใหญ่กว่า ซึ่งอาจทำให้นักพัฒนา PHP ที่เพิ่งเข้ามาในชุมชน WordPress รู้สึกไม่พอใจ นอกจากนี้ยังสามารถปฏิบัติตามมาตรฐานที่แนะนำของ PHP (PSRs) ที่สร้างและดูแลโดย PHP Framework Interrop Group (PHP-FIG) สำหรับชุมชน PHP ที่ใหญ่กว่า สามารถดูมาตรฐานเหล่านี้ได้ที่ https://www.php-fig.org/psr

สิ่งที่สำคัญที่สุดคือการรักษาความสม่ำเสมอในโค้ดเบสของคุณ โดยไม่คำนึงถึงมาตรฐานการเขียนโค้ดที่คุณปฏิบัติตาม

*/
/**
 * Plugin Name: My Plugin
 * Plugin URI: https://example.com/my-plugin
 * Description: A sample plugin demonstrating coding standards.
 * Version: 1.0.0
 * Author: John Doe
 * Author URI: https://example.com
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is accessed directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * Custom function to demonstrate coding standards.
 *
 * @param string $param1 The first parameter.
 * @param int    $param2 The second parameter.
 * @return string The result of the function.
 */
function my_plugin_custom_function( $param1, $param2 ) {
    // Check if the first parameter is a string.
    if ( ! is_string( $param1 ) ) {
        return '';
    }

    // Check if the second parameter is an integer.
    if ( ! is_int( $param2 ) ) {
        return '';
    }

    // Perform some operation and return the result.
    return $param1 . ' ' . $param2;
}

/* 
ในตัวอย่างโค้ดด้านบน มีการใช้มาตรฐานการเขียนโค้ดของ WordPress ดังนี้:

1. มีการใช้ PHP DocBlock เพื่ออธิบายข้อมูลปลั๊กอินและฟังก์ชันอย่างละเอียด
2. มีการตรวจสอบว่าไฟล์ถูกเรียกใช้โดยตรงหรือไม่ ด้วย `if ( ! defined( 'WPINC' ) )`
3. มีการตรวจสอบประเภทของพารามิเตอร์ที่ส่งเข้ามาในฟังก์ชัน ด้วย `is_string()` และ `is_int()`
4. มีการใช้การเว้นวรรคและเว้นบรรทัดอย่างเหมาะสมเพื่อให้โค้ดอ่านง่าย
5. มีการใช้ชื่อฟังก์ชันและตัวแปรที่สื่อความหมาย และเป็นไปตามรูปแบบ Snake Case

การปฏิบัติตามมาตรฐานการเขียนโค้ดเหล่านี้จะช่วยให้โค้ดของปลั๊กอินมีความสะอาด เป็นระเบียบ และง่ายต่อการดูแลรักษาในระยะยาว
*/