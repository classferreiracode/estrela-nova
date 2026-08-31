<?php

use App\Http\Controllers\Api\BlogPostController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\CtaController;
use App\Http\Controllers\Api\DocumentController;
use App\Http\Controllers\Api\MemberController;
use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\NewsletterController;
use App\Http\Controllers\Api\PageController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\SiteSettingController;
use App\Http\Controllers\Api\SponsorController;
use App\Http\Controllers\Api\TestimonialController;
use App\Http\Controllers\Api\TimelineEventController;
use Illuminate\Support\Facades\Route;

Route::get('blog-posts', [BlogPostController::class, 'index']);
Route::get('blog-posts/{slug}', [BlogPostController::class, 'show']);
Route::get('members', [MemberController::class, 'index']);
Route::get('timeline-events', [TimelineEventController::class, 'index']);
Route::post('contacts', [ContactController::class, 'store']);
Route::get('projects', [ProjectController::class, 'index']);
Route::get('testimonials', [TestimonialController::class, 'index']);
Route::get('documents', [DocumentController::class, 'index']);
Route::get('sponsors', [SponsorController::class, 'index']);
Route::get('settings', [SiteSettingController::class, 'index']);
Route::get('pages', [PageController::class, 'index']);
Route::get('pages/{slug}', [PageController::class, 'show']);
Route::get('menus/{location}', [MenuController::class, 'show']);
Route::get('ctas', [CtaController::class, 'index']);
Route::post('newsletter', [NewsletterController::class, 'store'])->middleware('throttle:10,1');
