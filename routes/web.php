<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    EventController,
    AdsController,
    GuestController,
    GuestDetailController,
    PaymentMethodController,
    MerchController,
    CustomerController,
    TicketCategoryDetailController,
    TicketController,
    TicketOrderDetailController ,
    TicketTypeController,
    TicketCategoryController,
    TransactionHistoryController,
    EventOrganizerController,
    SeatController,
    PromotionController,
    PromotionDetailController,
    MerchOrderController,
    MerchOrderDetailController,
    AdsAcceptanceHistoryController,
    MasterEventController,
    AdsDetailController
};
use GuzzleHttp\Promise\Create;

Route::get('/', function () {
    return view('portal');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/comment', function () {
    return view('comment');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/eventlisting', function (){
    return view('eventlisting');
});
Route::get('/event-detail', function (){
    return view('event-detail');
});
Route::get('/checkout', function (){
    return view('checkout');
});
Route::get('/ticket', function (){
    return view('ticket_type.index');
});
Route::get('/notification', function (){
    return view('notification');
});
Route::get('/checkout', function (){
    return view('checkout');
});
Route::get('/merch', [MerchController::class, 'index'])->name('merch.index');
Route::get('/merch/{merch}', [MerchController::class,'show'])->name('merch.show');
Route::get('/transaction_history/{customer}', [TransactionHistoryController::class, 'index'])->name('transaction_history.index');
Route::get('/payment_method', [PaymentMethodController::class, 'index'])->name('payment_method.index');

Route::resource('event', EventController::class);
Route::resource('ads', AdsController::class);
Route::resource('guest', GuestController::class);
Route::resource('guest_detail', GuestDetailController::class);
Route::resource('payment_method', PaymentMethodController::class);
Route::resource('ads_acceptance_history', AdsAcceptanceHistoryController::class);
Route::resource('ticket', TicketController::class);
Route::resource('tikcet_order_detail', TicketOrderDetailController::class);
Route::resource('ticket_category', TicketCategoryController::class);
Route::resource('ticket_type', TicketTypeController::class);
Route::resource('ticket_category_detail', TicketCategoryDetailController::class);
Route::resource('merch', MerchController::class);
Route::resource('merch_order', MerchOrderController::class);
Route::resource('merch_order_detail', MerchOrderDetailController::class);
Route::resource('event_organizer', EventOrganizerController::class);
Route::resource('customer', CustomerController::class);
Route::resource('seat', SeatController::class);
Route::resource('promotion', PromotionController::class);
Route::resource('promotion_detail', PromotionDetailController::class);
Route::resource('master_event', MasterEventController::class);
Route::resource('ads_detail', AdsDetailController::class);





