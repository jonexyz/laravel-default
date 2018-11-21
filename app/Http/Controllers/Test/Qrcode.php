<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode as Code;  // 引入 qrcode 组件

/****
 * 生成二维码 示例
 *
 * 官方文档 https://www.simplesoftware.io/docs/simple-qrcode/zh#docs-usage
 */

class Qrcode extends Controller
{
    // 创建普通二维码
    public function Qrcode()
    {

    }

    // 创建带有头像的二维码
    public function avatarQrcode()
    {

    }


    // Email
    public function email()
    {

    }


    // 经纬度
    public function geo()
    {

    }

    //  手机号码
    public function phoneNumber()
    {

    }

    // 短信
    public function SMS()
    {

    }


    // WIFI
    public function wifi()
    {

    }

    // MeCard 名片
    public function MeCard()
    {

    }

    // VCard 名片
    public function VCard()
    {

    }

}
