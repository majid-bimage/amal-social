<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/logout', 'AuthController::Logout');
$routes->get('/profile', 'AccountController::Profile');
$routes->get('/profile-edit', 'AccountController::Profile_edit');
$routes->post('/Profile_update', 'AccountController::Profile_update');
$routes->get('/recoverpw', 'Home::recoverpw');
$routes->post('User/sentresetmail', 'UserController::sentresetmail');
$routes->get('/reset_password/(:any)', 'Home::reset_password/$1');
$routes->get('/sign_up', 'Home::SignUp');
$routes->post('/register_user', 'AuthController::RegisterUser');
$routes->post('/login_user', 'AuthController::login_user');
$routes->get('/user_dashboard', 'UserController::user_dashboard');
$routes->get('/users/active_users', 'UserController::active_users');
$routes->post('/auth/reset_password', 'AuthController::reset_password');
$routes->post('post/create_post', 'PostController::create_post');
$routes->get('posts', 'PostController::view_posts');
// follow users 
// $routes->post('follow/(:num)/(:num)', 'UserController::follow/$1/$2');
$routes->delete('unfollow/(:num)/(:num)', 'UserController::unfollow/$1/$2');
$routes->get('followers/(:num)', 'UserController::getFollowers/$1');
$routes->get('following/(:num)', 'UserController::getFollowing/$1');

$routes->get('followers-list', 'UserController::view_followers');


$routes->post('/update_profile_pic', 'AccountController::update_profile_pic');
$routes->post('/update_cover_pic', 'AccountController::update_cover_pic');


$routes->post('/like', 'PostController::like');
$routes->post('/comment', 'PostController::comment');


$routes->group('follow', ['namespace' => 'App\Controllers'], function ($routes) {
    // Route for sending a follow request
    $routes->post('request/(:num)/(:num)', 'UserController::requestToFollow/$1/$2');

    // Route for approving a follow request
    $routes->post('approve/(:num)', 'UserController::approveFollowRequest/$1');

    // Route for rejecting a follow request
    $routes->post('reject/(:num)', 'UserController::rejectFollowRequest/$1');
});
$routes->post('cancel-follow-request/(:num)/(:num)', 'UserController::cancelFollowRequest/$1/$2');
$routes->delete('comments/delete/(:num)', 'PostController::deleteComment/$1');
