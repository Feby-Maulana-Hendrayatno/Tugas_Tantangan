<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelatihController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TampilanLoginController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DeskripsiRumahController;
use App\Http\Controllers\SyaratController;
use App\Http\Controllers\TerakhirLoginController;
use App\Http\Controllers\PerumahanController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\LandingPageWebController;
use App\Http\Controllers\FotoSyaratController;
use App\Http\Controllers\ValidasiTransaksiController;




use App\Models\Owner;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('Landing/index');
// });

// Route::get('/', [MidtransController::class, 'index']);
Route::get('/payment', [MidtransController::class, 'payment']);
Route::post('/payment', [MidtransController::class, 'payment_post']);


Route::group(["middleware" => ["admin"]], function() {

        Route::prefix("users")->group(function() {
            Route::get("/", [AkunController::class, "index"]);
            Route::post("/tambah/", [AkunController::class, "tambah"]);
            Route::post("/hapus", [AkunController::class, "hapus"]);
            Route::get("/edit/{id_role}", [AkunController::class, "edit"]);
            Route::post("/simpan", [AkunController::class, "simpan"]);
        });

});



    Route::get("/login", [TampilanLoginController::class, "TampilanLogin"]);
    Route::get("/register", [TampilanLoginController::class, "TampilanRegistrasi"]);
    Route::post("/register", [RegisterController::class, "tambah"]);
    Route::post("/login", [LoginController::class, "post_login"]);

        Route::prefix("users")->group(function() {
            Route::get("/", [AkunController::class, "index"]);
            Route::post("/tambah/", [AkunController::class, "tambah"]);
            Route::post("/hapus", [AkunController::class, "hapus"]);
            Route::get("/edit/{id_role}", [AkunController::class, "edit"]);
            Route::post("/simpan", [AkunController::class, "simpan"]);
        });



// Route::prefix("admin")->group(function() {

//     Route::get("/dashboard", [AdminController::class, "dashboard"]);

//     Route::prefix("pelatih")->group(function() {
//         Route::get("/", [PelatihController::class, "index"]);
//         Route::post("/store", [PelatihController::class, "store"]);
//         Route::get("/tambah_data", [PelatihController::class, "tambah_data"]);
//         Route::get("/edit/{id}", [PelatihController::class, "edit"]);
//         Route::get("/detail/{id}", [PelatihController::class, "detail"]);
//         Route::post("/hapus/", [PelatihController::class, "destroy"]);
//         Route::post("/update", [PelatihController::class, "update"]);
//     });

//     Route::prefix("users")->group(function() {

//         Route::get("/", [AkunController::class, "index"]);
//         Route::post("/tambah/", [AkunController::class, "tambah"]);
//         Route::post("/hapus", [AkunController::class, "hapus"]);
//         Route::get("/edit/{id_role}", [AkunController::class, "edit"]);
//         Route::post("/simpan", [AkunController::class, "simpan"]);
//     });
// });

Route::prefix("users")->group(function () {
    Route::get("/", [AkunController::class, "index"]);
    Route::post("/tambah/", [AkunController::class, "tambah"]);
    Route::delete("/hapus/{id}", [AkunController::class, "hapus"]);
    Route::get("/edit/{id_role}", [AkunController::class, "edit"]);
    Route::post("/simpan", [AkunController::class, "simpan"]);
});

Route::prefix("rumah")->group(function () {
    Route::get('/', [RumahController::class, 'index']);
    Route::get('/tambah', [RumahController::class, 'create']);
    Route::post('/', [RumahController::class, 'store']);
    Route::get('/edit/{id}', [RumahController::class, 'edit']);
    Route::put('/update/{id}', [RumahController::class, 'update']);
    Route::delete('/hapus/{id}', [RumahController::class, 'destroy']);
});

    Route::get("/logout", [LoginController::class, "logout"]);
    Route::get("/login", [LoginController::class, "login"]);
    Route::post("/post_login", [LoginController::class, "post_login"] );

    Route::group(["middleware" => ["admin"]], function() {

    Route::prefix("admin")->group(function() {

    Route::get("/dashboard", [AdminController::class, "dashboard"]);
    Route::get("/logout", [LoginController::class, "logout"]);

    Route::get("/terakhir_login", [TerakhirLoginController::class, "index"]);


        Route::prefix("users")->group(function() {
            Route::get("/", [AkunController::class, "index"]);
            Route::post("/tambah/", [AkunController::class, "tambah"]);
            Route::post("/hapus", [AkunController::class, "hapus"]);
            Route::get("/edit/{id_role}", [AkunController::class, "edit"]);
            Route::post("/simpan", [AkunController::class, "simpan"]);
        });

        Route::prefix("role")->group(function() {
            Route::get("/", [RoleController::class, "index"]);
            Route::post("/tambah/", [RoleController::class, "tambah"]);
            Route::delete("/hapus/{id}",[RoleController::class, "hapus"]);
            Route::get("/edit/{id_role}", [RoleController::class, "edit"]);
            Route::post("/simpan", [RoleController::class, "simpan"]);
        });

    });

    Route::prefix("users")->group(function() {
        Route::get("/", [AkunController::class, "index"]);
        Route::post("/tambah/", [AkunController::class, "tambah"]);
        Route::post("/hapus", [AkunController::class, "hapus"]);
        Route::get("/edit/{id_role}", [AkunController::class, "edit"]);
        Route::post("/simpan", [AkunController::class, "simpan"]);
    });

    Route::group(["middleware" => ["guest"]], function() {

        Route::prefix("admin")->group(function() {

            Route::get("/login", [LoginController::class, "login"]);

            Route::post("/post_login", [LoginController::class, "post_login"] );

        });

    });
});

Route::group(["middleware" => ["owner"]], function() {
Route::prefix("owner")->group(function() {

    Route::get("/dashboard", [OwnerController::class, "dashboard"]);

    Route::prefix("deskripsi_rumah")->group(function() {
        Route::get("/deskripsi", [DeskripsiRumahController::class, "index"]);
        Route::get("/tambah", [DeskripsiRumahController::class, "tambah"]);
        Route::post("/tambah_data", [DeskripsiRumahController::class, "tambah_data"]);
        Route::post('/paymentHarga/{id}', [DeskripsiRumahController::class, 'payment_post']);
        Route::get("/paymentHarga/{id}", [DeskripsiRumahController::class, "payment"]);
        Route::get("/edit/{id}", [DeskripsiRumahController::class, "edit"]);
        Route::post("/simpan", [DeskripsiRumahController::class, "simpan"]);
        Route::delete("/hapus/{id}", [DeskripsiRumahController::class, "hapus"]);
        Route::get("/detail_deskripsi", [DeskripsiRumahController::class, "detail_deskripsi"]);
        // Route::get("/deskripsi", [DeskripsiRumahController::class, "operations"]);

    });


    Route::prefix("syarat")->group(function() {
        Route::get("/syarat", [SyaratController::class, "index"]);
        Route::post("/tambah_syarat", [SyaratController::class, "tambah"]);
        // Route::get("/edit/{id}", [SyaratController::class, "edit"]);
        Route::get("/edit", [SyaratController::class, "edit"]);
        Route::put("/simpan", [SyaratController::class, "simpan"]);
        Route::delete("/hapus/{id}", [SyaratController::class, "hapus"]);
    });

    Route::prefix("perumahan")->group(function() {
        Route::get("/perumahan", [PerumahanController::class, "index"]);
        Route::post("/tambah_perumahan", [PerumahanController::class, "tambah"]);
        // Route::get("/edit/{id}", [PerumahanController::class, "edit"]);
        Route::get("/edit", [PerumahanController::class, "edit"]);
        Route::put("/simpan", [PerumahanController::class, "simpan"]);
        Route::delete("/hapus/{id}", [PerumahanController::class, "hapus"]);
    });


    Route::prefix("transaksi")->group(function() {
        Route::get("/index", [ValidasiTransaksiController::class, "index"]);
        Route::delete("/hapus/{id}", [ValidasiTransaksiController::class, "hapus"]);
        Route::post("/tambah_foto_syarat", [ValidasiTransaksiController::class, "tambah"]);
        Route::get("/edit", [ValidasiTransaksiController::class, "edit"]);
        Route::put("/simpan", [ValidasiTransaksiController::class, "simpan"]);
    });


    Route::prefix("foto_syarat")->group(function() {
        Route::get("/index", [FotoSyaratController::class, "index"]);
        Route::get("/edit", [FotoSyaratController::class, "edit"]);
        Route::post("/tambah_foto_syarat", [FotoSyaratController::class, "tambah"]);
        Route::delete("/hapus/{id}", [FotoSyaratController::class, "hapus"]);
        Route::put("/simpan", [FotoSyaratController::class, "simpan"]);
    });

    Route::prefix("update_role")->group(function() {
        Route::get("/index", [AkunController::class, "index_owner"]);
        Route::post("/tambah/", [AkunController::class, "tambah"]);
        Route::post("/hapus", [AkunController::class, "hapus"]);
        Route::get("/edit", [AkunController::class, "edit_by_owner"]);
        Route::put("/simpan", [AkunController::class, "simpan_by_owner"]);
    });
});

});


Route::get("/", [LandingPageWebController::class, "index"]);
Route::get("/properties", [LandingPageWebController::class, "properties"]);
Route::get("/blog", [LandingPageWebController::class, "blog"]);
Route::get("/about", [LandingPageWebController::class, "about"]);
Route::get("/upload_syarat", [LandingPageWebController::class, "upload"]);



Route::prefix("bayar")->group(function() {
    Route::post('/paymentHarga/{id}', [DeskripsiRumahController::class, 'payment_post']);
    Route::get("/paymentHarga/{id}", [DeskripsiRumahController::class, "payment"]);
    Route::get("/", [LandingPageWebController::class, "bayar"]);
});


Route::prefix("about")->group(function() {
Route::get("/edit", [FotoSyaratController::class, "edit"]);
Route::post("/tambah_foto_syarat", [FotoSyaratController::class, "tambah"]);
Route::delete("/hapus/{id}", [FotoSyaratController::class, "hapus"]);
Route::put("/simpan", [FotoSyaratController::class, "simpan"]);
});





// Route::get("/property", [LandingPageWebController::class, "property"]);






