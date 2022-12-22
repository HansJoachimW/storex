<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Brand::all() as $brand) {
            switch ($brand->id) {
                case 1:
                    Product::factory()->create([
                        'name' => 'BARDI Smart Indoor PTZ IP Camera CCTV 360 Wifi IoT Home Automation 1080p Full HD Surabaya',
                        'category' => 'Elektronik',
                        'price' => 419000,
                        'stock' => 233,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => '[READY TANPA PO] Bardi PTZ CCTV Indoor IP Camera Wifi 360 Motion Tracking GARANSI',
                        'category' => 'Elektronik',
                        'price' => 425000,
                        'stock' => 48,
                        'image' => 'BardiPTZ.png',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => '[READY TANPA PO] Bardi CCTV Outdoor Static Wifi Smart IP Camera anti air STC Smarthome',
                        'category' => 'Elektronik',
                        'price' => 440000,
                        'stock' => 82,
                        'image' => 'BardiCCTVOutdoor.png',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => '[READY] BARDI Smart CCTV PTZ STC Indoor Outdoor GARANSI 1 TAHUN',
                        'category' => 'Elektronik',
                        'price' => 448000,
                        'stock' => 191,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Smart Outdoor STC IP Camera CCTV Wifi IoT Home Automation Smart home Surabaya',
                        'category' => 'Elektronik',
                        'price' => 440000,
                        'stock' => 17,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'Bardi Smart IP Camera CCTV PTZ 360° Motion Tracking READY STOCK',
                        'category' => 'Elektronik',
                        'price' => 419000,
                        'stock' => 17,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Smart LIGHT BULB RGBWW 12 W watt Wifi Wireless IoT - Home Automation Surabaya',
                        'category' => 'Elektronik',
                        'price' => 75000,
                        'stock' => 30,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Smart LED BLUETOOTH 9W RGBWW Bulb - lampu pintar koneksi Bluetooth 9watt',
                        'category' => 'Elektronik',
                        'price' => 75000,
                        'stock' => 9,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Lampu LED Strip RGBWW Wifi 2 Meter Smar home Surabaya',
                        'category' => 'Elektronik',
                        'price' => 89000,
                        'stock' => 10,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Smart Extension Power Strips 2,1 meter (Smart Stop Kontak, WIFI) Surabaya',
                        'category' => 'Elektronik',
                        'price' => 645000,
                        'stock' => 10,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Smart PIR Motion Sensor Gerak Infrared Manusia WiFi IoT Smart Home Automation Surabaya',
                        'category' => 'Elektronik',
                        'price' => 165000,
                        'stock' => 2,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Smart LED Home Automation Light Bulb WW 9W Wifi - Dim CCT Smart home Surabaya',
                        'category' => 'Elektronik',
                        'price' => 99000,
                        'stock' => 999,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI LED strip adaptor 4 meter Smart Home Surabaya (Adaptor for 4M only)',
                        'category' => 'Elektronik',
                        'price' => 140000,
                        'stock' => 998,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Smart Home WIFI Window & Door Sensor - Tidak perlu Hub',
                        'category' => 'Elektronik',
                        'price' => 97000,
                        'stock' => 1,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Smart Siren Loud Security Alarm Keras Maling Keamanan IoT Home Automation Smart Home Surabaya',
                        'category' => 'Elektronik',
                        'price' => 320000,
                        'stock' => 10,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Smart UNIVERSAL IR REMOTE Wifi Wireless IoT For Home Automation Smart Home Surabaya',
                        'category' => 'Elektronik',
                        'price' => 125000,
                        'stock' => 96,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Smart Parallelogram LED Panel Starter & Expansion Kit RGBWW Lampu Dinding Pintar WiFi Wireless IoT Home Automation Smart Home Surabaya',
                        'category' => 'Elektronik',
                        'price' => 950000,
                        'stock' => 99,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Smart BREAKER ON OFF Switch Wireless IoT Home Automation Surabaya',
                        'category' => 'Elektronik',
                        'price' => 70000,
                        'stock' => 499,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Smart Adaptor untuk LED strip - 10 Meter Smart home Surabaya',
                        'category' => 'Elektronik',
                        'price' => 230000,
                        'stock' => 9999,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Smart Wake Up Light Clock (FM Radio Compability) WiFi IoT Home Automation Smart Home Surabaya',
                        'category' => 'Elektronik',
                        'price' => 493000,
                        'stock' => 999,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Smart Aroma Diffuser dengan lampu tidur rgbww Smart home Surabaya',
                        'category' => 'Perlengkapan Rumah',
                        'price' => 470000,
                        'stock' => 10,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Smart Home Door Lock Handle RFID-Fingerprint Waterproof Smart Home Surabaya',
                        'category' => 'Perlengkapan Rumah',
                        'price' => 2499000,
                        'stock' => 999,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Smart Home Door Lock Handle RFID-Fingerprint Waterproof Surabaya',
                        'category' => 'Perlengkapan Rumah',
                        'price' => 2299000,
                        'stock' => 5,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI WiFi Smart Fish Feeder - Black IoT Home Automation (Wifi) Surabaya',
                        'category' => 'Hobi & Koleksi',
                        'price' => 250000,
                        'stock' => 999,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Smart WIFI Water Fountain (Dispenser Minuman hewan Anjing/kucing ) Surabaya',
                        'category' => 'Hobi & Koleksi',
                        'price' => 899000,
                        'stock' => 500,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'BARDI Smart WIFI Pet Feeder (Dispenser Makanan Otomatis Anjing/Kucing) dengan kamera, Surabaya',
                        'category' => 'Hobi & Koleksi',
                        'price' => 2450000,
                        'stock' => 500,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    break;
                case 2:
                    Product::factory()->create([
                        'name' => 'Logitech G300s Mouse Gaming Wired Optical RGB with Macro 9 tombol ORIGINAL',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 499000,
                        'stock' => 5,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'Logitech K380 Multi Device Bluetooth Keyboard Original 100% SEGEL',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 390000,
                        'stock' => 394,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'Logitech M221 / M 221 Silent Wireless 2,4 receiver Mouse Surabaya',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 245000,
                        'stock' => 246,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'Logitech Pebble Wireless Bluetooth Mouse M350 Surabaya',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 280000,
                        'stock' => 495,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    break;
                case 3:
                    Product::factory()->create([
                        'name' => 'Mousepad Gaming Fantech SVEN MP25 Original 100% Surabaya',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 15000,
                        'stock' => 996,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'Headset Gaming FANTECH HQ50 Mars Original 100% Surabaya',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 87000,
                        'stock' => 998,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'Fantech Keyboard gaming K613 TKL II Fighter',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 190000,
                        'stock' => 21,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'Fan Casing Gaming Fantech Typhoon FB 302 with remote control',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 279000,
                        'stock' => 99,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'Keyboard + Mouse + Mousepad Fantech P31 GAMING COMBO Surabaya',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 220000,
                        'stock' => 33,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'Fantech Gaming keyboard HUNTER PRO K511 Surabaya',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 140000,
                        'stock' => 99,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'Fantech RHASTA G10 Mouse Gaming lampu RGB Original 100% Surabaya',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 59000,
                        'stock' => 999,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'Mousepad Gaming Fantech MP64 XL BASIC Original 100% Desk mat pad Surabaya',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 25000,
                        'stock' => 93,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'FANTECH Smart Life Lampu 12W LED Light Bulb RGBWW Bohlam Wifi IoT Smart',
                        'category' => 'Elektronik',
                        'price' => 89000,
                        'stock' => 10,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    break;
                case 4:
                    Product::factory()->create([
                        'name' => 'Smart Wireless Infrared remote control TV AC DVD AUX 3.5mm headphone jack IOS ANDROID BISA',
                        'category' => 'Elektronik',
                        'price' => 35000,
                        'stock' => 4,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'Lampu hias LED BITCOIN Crypto setup desktop night lamp',
                        'category' => 'Elektronik',
                        'price' => 90000,
                        'stock' => 50,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => '32 LED RGB Spectrum USB Energy Saving Lamp Voice-activated Pickup Rhythm Light Car Ambient Lamp Music Atmosphere Light Game Music Level ORIGINAL',
                        'category' => 'Elektronik',
                        'price' => 250000,
                        'stock' => 3,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'StoreX Pencil 2nd Gen Alternatif for IP@d(Palm rejection,tilt bold function) stylus',
                        'category' => 'Handphone & Aksesoris',
                        'price' => 100000,
                        'stock' => 1,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'Glass Pro Tempered glass for iPhone 11 Pro , iPhone 11pro ORIGINAL 100%',
                        'category' => 'Handphone & Aksesoris',
                        'price' => 120000,
                        'stock' => 1,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'Glass Pro Tempered glass for iPhone Xs , iPhone 10s ORIGINAL 100%',
                        'category' => 'Handphone & Aksesoris',
                        'price' => 120000,
                        'stock' => 1,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'Glass Pro Tempered glass for iPhone X , iPhone 10 ORIGINAL 100%',
                        'category' => 'Handphone & Aksesoris',
                        'price' => 120000,
                        'stock' => 1,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    break;
                case 5:
                    Product::factory()->create([
                        'name' => 'Rexus Keyboard Gaming Mechanical Legionare MX9 Pudding / MX9P TKL RGB [JAMINAN TERMURAH]',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 799000,
                        'stock' => 5,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'Rexus MX9 TKL Keyboard Gaming Mechanical Legionare | MX9 TKL RGB Surabaya',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 419000,
                        'stock' => 20,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'Rexus Daxa M64 Ultimate Keyboard Wireless Bluetooth Gaming Mechanical RESMI',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 900000,
                        'stock' => 5,
                        'image' => 'DaxaM64.png',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'Rexus Headset Gaming Vonix F30 Original 100% Surabaya',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 170000,
                        'stock' => 132,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    Product::factory()->create([
                        'name' => 'REXUS Gaming mouse Xierra X16 RGB 7200 DPI Original 100% Surabaya Macro programmable',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 499000,
                        'stock' => 5,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    break;
                case 6:
                    Product::factory()->create([
                        'name' => 'Thronmax Microphone Mdrill Dome Plus M3 USB M3P Mic Condenser',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 930000,
                        'stock' => 5,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    break;
                case 7:
                    Product::factory()->create([
                        'name' => 'AFTO Smart Plug WiFi / Steker / Colokan - WiFi Smart Home Automation',
                        'category' => 'Elektronik',
                        'price' => 120000,
                        'stock' => 1,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    break;
                case 8:
                    break;
                case 9:
                    break;
                case 10:
                    Product::factory()->create([
                        'name' => 'BASEUS ACTR02 - Universal Wireless Smart IR Remote Control TV AC STB DVD Proyektor (Type-C) Surabaya',
                        'category' => 'Elektronik',
                        'price' => 990000,
                        'stock' => 1,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    break;
                case 11:
                    Product::factory()->create([
                        'name' => 'AVARO Smart CCTV WIFI IP Camera CCTV Indoor 1080p PTZ MOTION TRACKING GARANSI RESMI',
                        'category' => 'Elektronik',
                        'price' => 280000,
                        'stock' => 1,
                        'image' => 'AvaroPtz.png',
                        'brand_id' => $brand->id
                    ]);
                    break;
                    Product::factory()->create([
                        'name' => 'AVARO Wifi Smart LED Bulb 12 Watt RGBWW + Wifi Bohlam Lampu Pintar',
                        'category' => 'Elektronik',
                        'price' => 69000,
                        'stock' => 27,
                        'image' => 'Avaro12watt.png',
                        'brand_id' => $brand->id
                    ]);
                    break;
                case 12:
                    Product::factory()->create([
                        'name' => 'SanDisk Ultra MicroSD 64GB 100MB/s - No Adapter - BERGARANSI',
                        'category' => 'Handphone & Aksesoris',
                        'price' => 110000,
                        'stock' => 129,
                        'image' => 'Sandisk64gb.png',
                        'brand_id' => $brand->id
                    ]);
                    break;
                case 13:
                    Product::factory()->create([
                        'name' => 'Fimi Palm 2 Pro Gimbal Camera 4K Xiaomi second seken 2nd MULUS NO MINUS',
                        'category' => 'Fotografi',
                        'price' => 2950000,
                        'stock' => 1,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    break;
                case 14:
                    Product::factory()->create([
                        'name' => 'Yesoul V206 Smart Heart Rate Armband Wristband 100% Original Resmi Yesoul',
                        'category' => 'Handphone & Aksesoris',
                        'price' => 450000,
                        'stock' => 100,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    break;
                case 15:
                    Product::factory()->create([
                        'name' => 'Redragon Mechanical Gaming Keyboard RGB DRAGONBORN WHITE - K630W-RGB Surabaya',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 499000,
                        'stock' => 10,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    break;
                case 16:
                    break;
                case 17:
                    break;
                case 18:
                    break;
                case 19:
                    break;
                case 20:
                    break;
                case 21:
                    break;
                case 22:
                    break;
                case 23:
                    break;
                case 24:
                    Product::factory()->create([
                        'name' => 'Wireless Router TP-Link TL-WR840N 300Mbps Surabaya',
                        'category' => 'Komputer & Aksesoris',
                        'price' => 160000,
                        'stock' => 98,
                        'image' => 'defaultproduct.jpg',
                        'brand_id' => $brand->id
                    ]);
                    break;
            }
        }
    }
}
