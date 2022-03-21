<?php

use App\Http\Controllers\Admin\Admin_Auth\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RatingController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckOutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Frontend\FrontProductManageController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\SignUpController;
use App\Http\Controllers\Frontend\WishListController;
use Illuminate\Support\Facades\Route;

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

/*
|--------------------------------------------------------------------------
| Frontend Routs Here [START]
|--------------------------------------------------------------------------
*/
/* ---------------------------------- All Views --------------------------------- */

Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/faq', [FaqController::class, 'index']);
Route::get('/wishlist', [WishListController::class, 'index']);
Route::get('/checkout', [CheckOutController::class, 'index']);
Route::get('/sign-up', [SignUpController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);


// Product Detail Page
Route::get('/product-view/{id}', [FrontProductManageController::class, 'product_detail']);

// Get Product Attribute Price / Change Price When Change Size
Route::post('/get-product-price', [FrontProductManageController::class, 'getProductPrice'])->name('get-product-price');

// Add To Cart
Route::post('/add-to-cart', [CartController::class, 'addtocart']);

// Update Cart Quantity Usign Ajax
Route::post('/update-cart-item-qty', [CartController::class, 'updateCartItemQty']);

// Delete Cart Item Usign Ajax
Route::post('/delete-cart-item', [CartController::class, 'deleteCartItem']);


/*
|--------------------------------------------------------------------------
| Frontend Routs Here [END]
|--------------------------------------------------------------------------
*/



/*-------------------------------------------------------
 Admin Route Here --START
|-------------------------------------------------------*/
// Admin Login / Logout / Edit
Route::get('/admins', [AdminAuthController::class, 'index']);
Route::get('/admin_register', [AdminAuthController::class, 'admin_register']);
Route::post('/admin_store', [AdminAuthController::class, 'store']);
Route::post('/admin_dashboard', [AdminAuthController::class, 'show_dashboard']);
Route::get('/logout', [AdminAuthController::class, 'logout']);
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin_edit', [AdminController::class, 'edit']);
Route::put('admin_update/{admin_id}', [AdminController::class, 'update']);





// Section Route Here
Route::get('/sections', [SectionController::class, 'index']);
Route::get('/section_create', [SectionController::class, 'create']);
Route::post('/section_store', [SectionController::class, 'store']);
Route::get('/section_edit/{id}', [SectionController::class, 'edit']);
Route::put('section_update/{id}', [SectionController::class, 'update']);
Route::delete('section_delete/{id}', [SectionController::class, 'destroy']);
Route::get('/section-status', [SectionController::class, 'change_status'])->name('section-status');





// Slider Route Here
Route::get('/sliders', [SliderController::class, 'index']);
Route::get('/slider_create', [SliderController::class, 'create']);
Route::get('/slider_edit/{id}', [SliderController::class, 'edit']);
Route::put('/slider_update/{id}', [SliderController::class, 'update']);
Route::post('/slider_store', [SliderController::class, 'store']);
Route::delete('slider_delete/{id}', [SliderController::class, 'destroy']);
Route::get('/slider-status', [SliderController::class, 'change_status'])->name('slider-status');





// Category Route Here
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/category_create', [CategoryController::class, 'create']);
Route::post('/category_store', [CategoryController::class, 'store']);
Route::get('/category_edit/{id}', [CategoryController::class, 'edit']);
Route::put('/category_update/{id}', [CategoryController::class, 'update']);
Route::delete('category_delete/{id}', [CategoryController::class, 'destroy']);
Route::get('/category-status', [CategoryController::class, 'change_status'])->name('category-status');
//____ Automative Add Slug When Type Name Flied ___//
Route::get('posts/check_slug', [CategoryController::class, 'checkSlug'])->name('checkSlug');





// Sub Category Route Here
Route::get('/subcategories', [SubCategoryController::class, 'index']);
Route::get('/subcategory_create', [SubCategoryController::class, 'create']);
Route::post('/subcategory_store', [SubCategoryController::class, 'store']);
Route::get('/subcategory_edit/{id}', [SubCategoryController::class, 'edit']);
Route::put('/subcategory_update/{id}', [SubCategoryController::class, 'update']);
Route::delete('subcategory_delete/{id}', [SubCategoryController::class, 'destroy']);
Route::get('/subcategory-status', [SubCategoryController::class, 'change_status'])->name('subcategory-status');





// Brand Route Here
Route::get('/brands', [BrandController::class, 'index']);
Route::get('/brand_create', [BrandController::class, 'create']);
Route::post('/brand_store', [BrandController::class, 'store']);
Route::get('/brand_edit/{id}', [BrandController::class, 'edit']);
Route::put('/brand_update/{id}', [BrandController::class, 'update']);
Route::delete('brand_delete/{id}', [BrandController::class, 'destroy']);
Route::get('/brand-status', [BrandController::class, 'change_status'])->name('brand-status');




// Product Route Here
Route::get('/products', [ProductController::class, 'index']);
Route::get('/product_create', [ProductController::class, 'create']);
Route::post('/product_store', [ProductController::class, 'store']);
Route::get('/product_edit/{id}', [ProductController::class, 'edit']);
Route::put('/product_update/{id}', [ProductController::class, 'update']);
Route::delete('product_delete/{id}', [ProductController::class, 'destroy']);
Route::get('/product-status', [ProductController::class, 'change_status'])->name('product-status');
//____ Automative Add Slug When Type Name Flied ___//
Route::get('posts/check_slug', [ProductController::class, 'checkSlug'])->name('checkSlug');




// Product Attribute Route Here
Route::match(['get', 'post'], 'attribute_add/{id}', [ProductController::class, 'AddAttribute']);
Route::post('attribute_edit/{id}', [ProductController::class, 'editAttribute']);
Route::get('attribute_delete/{id}', [ProductController::class, 'deleteAttribute']);
Route::get('/attribute-status', [ProductController::class, 'attribute_change_status'])->name('attribute-status');




// Product Gallery Images Route Here
Route::match(['get', 'post'], '/gallery_image_add/{id}', [ProductController::class, 'AddGalleryImages']);
Route::get('/gallery-image-status', [ProductController::class, 'gallery_image_change_status'])->name('gallery_image-status');
Route::get('/gallery_image_delete/{id}', [ProductController::class, 'gallery_image_delete']);




// Rating Route Here
Route::get('/ratings', [RatingController::class, 'index']);
Route::get('/rating-status', [RatingController::class, 'rating_change_status'])->name('rating-status');




// Checkout Route Here
Route::match(['get', 'post'], '/checkout', [CheckOutController::class, 'checkout']);
Route::get('/thanks', [CheckoutController::class, 'thanks']);



// Orders Route Here
Route::get('/orders', [OrderController::class, 'index']);
Route::get('/view_orders/{id}', [OrderController::class, 'view_orders']);
Route::post('/update_order_status', [OrderController::class, 'order_status_update']);
