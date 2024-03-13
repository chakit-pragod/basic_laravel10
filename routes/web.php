<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Welcome');
});

Route::get("about", function () {
    // send data string
    $name="FahRaksiam";
    $date= "13 มีนาคม 2567";
    return view('about', compact('name','date'));
})->name('about');

Route::get("blog", function () {
    // send data array
    $blog = [
        [
            "title" => "บทความที่ 1",
            "content" => "เนื้อหาบทความที่ 1",
            "status" => true
        ],
        [
            "title" => "บทความที่ 2",
            "content" => "เนื้อหาบทความที่ 2",
            "status" => false
        ],
        [
            "title" => "บทความที่ 3",
            "content" => "เนื้อหาบทความที่ 3",
            "status" => true
        ],
    ];
    return view('blog');
})->name('blog');









// Route::get("blog/{name}", function ($name) {
//     return "<h1>บทความ ${name}</h1>";
// });

// Route::get("admin/user/kong/ruksiam", function () {
//     return "<h1>ยินดีต้อนรับ Admin</h1>";
// })->name("admin"); // การกำหนดชื่อของ Route เพื่อเวลานำไปใช้จะใช้ได้ง่าย


// Route fllback เวลาถ้าไม่พบหน้าเว็บ
// Route::fallback(function () {
//     return "<h1>ไม่พบหน้าเว็บ</h1>";
// });