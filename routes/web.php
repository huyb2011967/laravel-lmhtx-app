<?php

use App\Http\Controllers\admin\ArticleController;
use App\Http\Controllers\admin\MainController;
use App\Http\Controllers\admin\MemberController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\users\LoginController;
use App\Http\Controllers\admin\users\RegisterController;
use App\Http\Controllers\PageController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::post('/search', [PageController::class, 'search'])->name('search');
Route::get('/category/{id}', [PageController::class, 'showListArticlebyCategory'])->name('category.articles');
Route::get('/category/{idArticle}/show', [PageController::class, 'showDetailArticle'])->name('category.show');


Route::get('/lich-su-phat-trien', [PageController::class, 'DevelopmentHistory'])->name('lich-su-phat-trien');
Route::get('/chuc-nang-nhiem-vu', [PageController::class, 'Responsibilities'])->name('chuc-nang-nhiem-vu');
Route::get('/lanh-dao-vca', [PageController::class, 'LeaderVCA'])->name('lanh-dao-vca');
Route::get('/co-cau-to-chuc', [PageController::class, 'OrgStructure'])->name('co-cau-to-chuc');
Route::get('/mang-luoi', [PageController::class, 'CooperativeAllianceNetwork'])->name('mang-luoi');
Route::get('/bao-cao-thuong-nien', [PageController::class, 'AnnualReport'])->name('bao-cao-thuong-nien');
Route::get('/tin-vca', [PageController::class, 'news_vca'])->name('tin-vca');
Route::get('/hop-tac-xa', [PageController::class, 'Cooperative'])->name('hop-tac-xa');
Route::get('/lien-minh-htx-tinh-tp', [PageController::class, 'CityCooperativeAlliance'])->name('lien-minh-htx-tinh-tp');
Route::get('/kinh-te', [PageController::class, 'Economic'])->name('kinh-te');
Route::get('/van-hoa-xa-hoi', [PageController::class, 'social_cultural'])->name('van-hoa-xa-hoi');
Route::get('/tin-dia-phuong', [PageController::class, 'local_news'])->name('tin-dia-phuong');
Route::get('/khoi-nghiep-sang-tao', [PageController::class, 'innovative_startup'])->name('khoi-nghiep-sang-tao');
Route::get('/dai-dien-bao-ve-thanh-vien', [PageController::class, 'represent_and_protect_members'])->name('dai-dien-bao-ve-thanh-vien');

Route::get('/admin/users/login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::post('/admin/users/login/store', [LoginController::class, 'store']);

Route::get('/admin/users/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Route::post('/admin/users/register/store', [RegisterController::class, 'store']);

Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('main', [MainController::class, 'index'])->name('main');

        Route::prefix('profile')->group(function () {
            Route::get('viewProfile', [ProfileController::class, 'showProfile'])->name('profile');
            Route::post('viewProfile', [ProfileController::class, 'updateProfile'])->name('profile.update');
        });

        Route::prefix('members')->group(function () {
            Route::get('/viewMembers', [MemberController::class, 'index'])->name('members.index');

            Route::get('/viewMembers/add', [MemberController::class, 'add'])->name('members.add');
            Route::post('/viewMembers', [MemberController::class, 'store'])->name('members.store');
            Route::get('/viewMembers/import', [MemberController::class, 'importFromExcel'])->name('members.import');

            Route::get('/viewMembers/{id_user}', [MemberController::class, 'show'])->name('members.show');

            Route::get('/viewMembers/{id_user}/edit', [MemberController::class, 'edit'])->name('members.edit');
            Route::put('/viewMembers/{id_user}', [MemberController::class, 'update'])->name('members.update');

            Route::get('/viewMembers/{id_user}/remove', [MemberController::class, 'destroy'])->name('members.remove');
        });

        Route::prefix('articles')->group(function () {
            Route::get('/viewArticles', [ArticleController::class, 'index'])->name('articles.index');

            Route::get('/viewAdd', [ArticleController::class, 'viewAdd'])->name('articles.add');
            Route::post('/create', [ArticleController::class, 'store'])->name('articles.store');

            Route::get('/reviewArticle', [ArticleController::class, 'review'])->name('article.review');

            Route::get('/viewDetail/{id}', [ArticleController::class, 'viewDetail'])->name('article.viewDetail');

            Route::get('/article/{id}/approve', [ArticleController::class, 'approve'])->name('article.approve');
            Route::get('/article/{id}/rejecte', [ArticleController::class, 'rejecte'])->name('article.rejecte');
            Route::post('bulk-action', [ArticleController::class, 'bulkAction'])->name('article.bulkAction');

            Route::get('/managementArticle', [ArticleController::class, 'managementArticle'])->name('article.management');

            Route::get('/managementArticle/edit/{id}', [ArticleController::class, 'edit'])->name('articles.edit');
            Route::put('/managementArticle/{id}', [ArticleController::class, 'update'])->name('articles.update');

            Route::get('/managementArticle/{id}/remove', [ArticleController::class, 'destroy'])->name('articles.remove');

            Route::get('/articles/search', [ArticleController::class, 'search'])->name('articles.search');

        });
    });
});
