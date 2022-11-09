<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/chart/price_chart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'charts.price_chart',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/chart/nemodar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'charts.nemodar',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/wallets/charge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ke3P2K94LA0sUVz4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wNDK1fSaNLYMSl6b',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NKoqiXuU7QDQELjq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::scFFo6G1yQBZeihi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/like' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FcD1QpL6MGO4jjBn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/stocks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.stock',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lldIku8hw2n62rx1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/complaints' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z0v70dRFYwRYZ4DF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/art/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'art.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/new/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'new.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/request/jobs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'jobs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkdonator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::skveZ7DS4YNmttC9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/showdonator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1acuoeYgIqLbai3b',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkrahgiri' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qidVuCP1cVBqV2Cl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5eArErTcO6XYRbly',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lgrg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forgetpass',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/otp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'otp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faqs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BhdmrUbASwrKHUfs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-sellers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jz2VexkAzZBrEYkr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'account',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/update-user-pwd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/check-user-pwd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S379NfrcZFnPIPXS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d09UeJy3Pw8nACKR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shippings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shippings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/check/sellers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'checkSeller',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payments',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/factor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'factor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pay/online' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pay.online',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/referral' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.referral',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/showReferral' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.indexReferral',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/ُstatus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'status.Index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/ُstatus/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'statusStore',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bank/cards' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.card',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'order.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'address.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/addresses/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.address.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-comment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KidkHKsOAnmOuwkq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reply-add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h6Wggk6CIFSw3twy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pay/not-success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GtYyKF7i0wo8MI9E',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pay/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RCzi9rSXr8mLQnmf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::efECMosksIec3QZk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sheKIT3zYcbJd7W2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C3HeXLtxNjPRHz7K',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ad.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ad.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/users/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ad.changepass',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/users/check-pwd-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MKrmRVBvJK2ZoMEm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/sellers/get-cat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CDA0hXvBhst4DPB7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/categories/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/seller' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/seller/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RAHIpSKzUzZ5bTkO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
            'GET' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/users/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J4RWNwpyDGNwmpAZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.all',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
            'GET' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/roles/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.roles.add',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
            'GET' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.permissions.all',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
            'GET' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/permissions/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.permissions.add',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
            'GET' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k21YxEscYP2Pbq1Q',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
            'GET' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/customers/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wSJWGsU8Ae9kPpXA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/pages/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/pages/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/pages/view-complaints' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Complaints',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/pages/support/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'support.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/menus/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menu.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/menus/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menus.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/products/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/products/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/products/add-countdowns' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'countdown.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/products/countdowns' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'countdown.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/products/add-worked' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'worked.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/products/workeds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'worked.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/products/change-price' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.change.price',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/sliders/add-slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sliders.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/sliders/view-sliders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sliders.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/brands/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/brands/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/news/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/news/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/articles/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'articles.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/articles/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'articles.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/gallerysites/add-gallerysites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gallery.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/gallerysites/view-gallerysites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gallery.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/honors/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'honors.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/honors/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'honors.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/promotes/add-promote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'promote.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/promotes/view-promotes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'promote.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/reqforms/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reqforms.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/reqforms/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reqforms.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/texts/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'texts.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/texts/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'texts.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/wallets/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wallets.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/wallets/user/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wallets.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/wallets/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wallets.list.success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/wallets/pay-out' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wallets.list.payout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/wallets/suspended' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wallets.list.suspended',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/wallets/withdrew' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wallets.list.withdrew',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/orders/show-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'orders.status.all',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/orders/add-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'orders.status.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/orders/show-cod' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'orders.users.cod',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/settings/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/socials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ad.socials',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/cart/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/order/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'order.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/payments/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ad.payments',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/addresses/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'address.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/req/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'req.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/icons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ad.icons',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/banks/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/ref' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'referral',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/faqs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faq.cats.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/faqs/cats/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faq.cats.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/report/sell' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.sell',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ad/report/bastankar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.bastankar',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/upload-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::frgxjGnUE14z9LT8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N8eIZ9N9H8m8PZ5b',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qWy0veMYyQzb9X5Y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/lagout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.out',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.dashborad',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/update-user-pwd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/check-user-pwd' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3Y3IlXZJxwpgamCT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/category/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.cat.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/orders/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.orders.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/orders/user/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.orders.user.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/orders/checks/status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J5uNoWY8klvJjL5C',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/genology/show' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.genology.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/referal/prodect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.referal.prodect',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/users/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/banks/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.bank.update',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/wallets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.wallets',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.address',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/add-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Nhd56WJOfhTFzyEN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.cart',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/shippings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.shippings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/check/sellers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.checkSeller',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/pay/cod' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.payments.cod',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/pay/codadmin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.payments.codadmin',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/factor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.factor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/pay/online' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.pay.online',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/page/access' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n14TVSsxEYJxqegQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sellers/pay/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZifefXBLSZsFvGjS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/req/([^/]++)(*:94)|/p(?|roduct(?|/([^/]++)/([^/]++)(*:133)|s/(?|category/([^/]++)(*:163)|reports/price/([^/]++)(*:193)|price/([^/]++)(*:215)))|a(?|ges/([^/]++)(*:241)|y/success/([^/]++)(*:267)))|/a(?|rticles/([^/]++)(*:298)|wards/([^/]++)(*:320)|d/(?|c(?|ategories/(?|del/([^/]++)(*:362)|edit/([^/]++)(*:383))|ustomers/(?|edit/([^/]++)(*:417)|updatepass/([^/]++)(*:444)|delete/([^/]++)(*:467)))|s(?|eller/(?|edit/([^/]++)(*:503)|updatepass/([^/]++)(*:530)|delete/([^/]++)(*:553)|marke(?|r/([^/]++)(*:579)|ter/([^/]++)(*:599))|c(?|ategory/(?|([^/]++)(*:631)|del/([^/]++)(*:651))|omplate/([^/]++)(*:676))|state/([^/]++)(*:699)|reports/([^/]++)(*:723))|liders/(?|edit\\-slider/([^/]++)(*:763)|delete\\-slider/([^/]++)(*:794)))|m(?|arketing/category/(?|([^/]++)(*:837)|del/([^/]++)(*:857))|enus/(?|edit/([^/]++)(*:887)|delete/([^/]++)(*:910)))|users/(?|edit/([^/]++)(*:942)|updatepass/([^/]++)(*:969)|delete/([^/]++)(*:992)|roles/([^/]++)(*:1014))|r(?|ole(?|s/del/([^/]++)(*:1048)|/permissions/([^/]++)(*:1078))|e(?|qforms/(?|edit/([^/]++)(*:1115)|delete/([^/]++)(*:1139))|f/change/([^/]++)(*:1166)))|p(?|ermissions/del/([^/]++)(*:1204)|ages/(?|edit/([^/]++)(*:1234)|delete/([^/]++)(*:1258))|ro(?|ducts/(?|edit(?|/([^/]++)(*:1298)|\\-(?|countdown/([^/]++)(*:1330)|worked/([^/]++)(*:1354)))|d(?|elete(?|/([^/]++)(*:1386)|\\-(?|alt\\-image/([^/]++)(*:1419)|countdown/([^/]++)(*:1446)|worked/([^/]++)(*:1470)))|ownloads/(?|([^/]++)(*:1501)|del/([^/]++)(*:1522)))|add\\-imgs/([^/]++)(*:1551)|stock/([^/]++)(*:1574)|re(?|lated/([^/]++)(*:1602)|portprice/([^/]++)(*:1629))|linked/(?|del/([^/]++)(*:1661)|add/([^/]++)(*:1682))|fani/([^/]++)(*:1705)|barsi/([^/]++)(*:1728)|points/([^/]++)(*:1752)|comments/(?|([^/]++)(*:1781)|change/([^/]++)(*:1805)))|motes/(?|edit\\-promote/([^/]++)(*:1847)|delete\\-promote/([^/]++)(*:1880))))|brands/(?|edit/([^/]++)(*:1915)|delete/([^/]++)(*:1939))|news/(?|edit/([^/]++)(*:1970)|delete/([^/]++)(*:1994))|articles/(?|edit/([^/]++)(*:2029)|delete/([^/]++)(*:2053))|gallerysites/(?|edit\\-gallerysites/([^/]++)(*:2106)|delete\\-gallerysites/([^/]++)(*:2144))|honors/(?|edit/([^/]++)(*:2177)|delete/([^/]++)(*:2201))|texts/(?|edit/([^/]++)(*:2233)|delete/([^/]++)(*:2257))|wallets/request/([^/]++)(*:2291)|orders/(?|edit\\-status/([^/]++)(*:2331)|delete\\-status/([^/]++)(*:2363)|change(?|\\-cod/([^/]++)(*:2395)|/([^/]++)(*:2413)))|faqs/(?|cats/(?|edit/([^/]++)(*:2453)|del/([^/]++)(*:2474))|([^/]++)(*:2492)|add/([^/]++)(*:2513)|edit/([^/]++)(*:2535)|del/([^/]++)(*:2556))))|/news/([^/]++)(*:2582)|/brands/([^/]++)(*:2607)|/faqs/(?|cat/([^/]++)(*:2637)|([^/]++)(*:2654))|/s(?|ocial\\-share/([^/]++)(*:2690)|ellers/(?|ca(?|tegory/nemodar/([^/]++)(*:2737)|rt/(?|update\\-quantity/([^/]++)/([^/]++)(*:2786)|del(?|\\-quantity/([^/]++)(*:2820)|ete\\-product/([^/]++)(*:2850))))|orders/(?|([^/]++)(*:2880)|users/factor/([^/]++)/([^/]++)(*:2919)|genology/([^/]++)(*:2945))|addresses/(?|update/([^/]++)(*:2983)|del/([^/]++)(*:3004))|pay(?|ments/([^/]++)(*:3034)|/success/([^/]++)(*:3060))))|/cart/(?|update\\-quantity/([^/]++)/([^/]++)(*:3115)|del(?|\\-quantity/([^/]++)(*:3149)|ete\\-product/([^/]++)(*:3179)))|/user/(?|orders/([^/]++)(*:3214)|addresses/(?|edit/([^/]++)(*:3249)|del/([^/]++)(*:3270))))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      94 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::llW2hqvq4Tn4Uave',
          ),
          1 => 
          array (
            0 => 'url',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tZgFh1xZ9fPpM55v',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'link',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      163 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jzFcJLT8IZVpdUuf',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7kyV0vZWss0GaDW4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'charts.PriceChart',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      241 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8b0h8vdP1lzet9pS',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      267 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VeRmelTgYTT2hygl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      298 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a0QAROGhBqvDvcVU',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CbODWQNg4ceT0u6U',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      362 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CzCeGykiV1BopYsP',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BiQN01NL9hfWBsm1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      417 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1PYf4XFvfXRaaA2N',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      444 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GComJvdbCCcPKNqZ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xJnIgKjCd1xyypXz',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XBeohQvwPyqJYFFE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      530 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sv7cHdGl26Xiscgd',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      553 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WUvkbGPMfhQNEnbf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      579 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rZbDWkMHV6JPAq2Z',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      599 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oJypNWPejI4I2f1J',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      631 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nO0SaflGbD7Ycfst',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      651 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s0ibLqYsJoIT5suX',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      676 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fFN0rUFUTmCVtsa2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      699 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S97eWA2FQjorSxJv',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.report',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      763 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tD4c1v8Qx0O9SkYz',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      794 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xOhJWkGwbqcrbC10',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      837 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dhQMhUOeyQThRzG8',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      857 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qppWD9iDCVCrz3Av',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      887 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oNepv1E8XnUmSVs5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      910 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wEpDKYm3UTzuPfdJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      942 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QRxWj4us47jRER1y',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      969 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MD3sYtXixiFG8bjN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      992 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7fg20Rl43zzWFMGt',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1014 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nGnL9OCcEPLSYbWv',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1048 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zgWOCqYNXuoXjrLi',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1078 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cQfy0IkczGWlQG6Y',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5O4KVmWhUUYePEFo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1139 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F8YDkdYsB6HTa6i9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jsz7CmE7YJEirkZl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1204 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GoqWI3p0UuuX4kJc',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1234 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UvZexzYiWoOOLgk7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1258 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XgrYEZIE2CGhxIzL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1298 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XRMmK3gXfQ3HG7OR',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zlOow90pAJrqIDpD',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1354 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WamjzsEW2k36HhlC',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1386 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EIFHIlKQ8u4xlL6Z',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1419 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0h62IuTML23flQuw',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1446 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Puk3hSRhNe2LCXwu',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1470 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wBb9MfwjhoJTIq9x',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1501 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ASdEqYFqYPyfx41q',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Bg0NaulKKBizXKmb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1551 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X6EyDzA3oaFR3s5n',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1574 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8gwS9SH86OxbAHCh',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1602 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fu5KG6rRgOHxHEbE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1629 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9QdlcoqEAJz4risz',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1661 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CfZIQQthJcifAxOD',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1682 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::13k3DqRyAlpaRbHl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1705 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oUMt8AixJJSEnszc',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1728 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5oaDbkTeH1FCfvDL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1752 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n2vDYV7z37mU9eyw',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1781 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tC1dYGcsYatJyrCj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1805 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MpW9jw7BFuzd7RRe',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1847 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mzg20lIlySBJcHNz',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1880 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Nr4fgm6Zg36Ia6a2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1915 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zEQ0f56b3l93u0ul',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1939 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2KlQLA6dgiLqJTcQ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1970 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8UvldaFkCS6SAwgl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1994 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FhBSxWzNadZfMTYO',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2029 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ACtIXl1ZOcpKiaiQ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2053 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9xL2ipPk3Qdnpqk9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2106 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H524aAR1FOOEXlp2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2144 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jnImlv8QlCWDjNjJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2177 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WDGWtjy7npBely1E',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2201 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DgPDxwnI6BTMP3zX',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KQA8BrhyIzPlSkwo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kb2tNTNB23yemjTl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2291 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CVRDMZOFfXJUQmRB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2331 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xdodIsZBbVD3fK0I',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2363 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ubxtItvAiY8yyGVC',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2395 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'orders.users.change.cod',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2413 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iuOei1E6IzgmngMp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2453 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8kbCbFtXQ23EAYA4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2474 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FwAzBN1S62VGdaF3',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::imfpiAe65tKuN0oJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2513 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HoeJeZsVv7FTlgrb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2535 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::icMTYrtm4CBCrS78',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2556 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u4h0QWqvEZlgL3nP',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2582 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tIghZ20LH1JpTNkl',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uFCIrkXUnzRGcIXn',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2637 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CpL2gjw7jzSoss67',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2654 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::POFZcW3JJxYY6LCf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2690 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qj7WrGvRaggCnp0r',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2737 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::94y5fAleQ6g7cf6G',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2786 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::trhvLhVzCTawcRad',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'quantity',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2820 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mlPcIPg6Rqj4lI5n',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2850 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ohST5mVxfp6da8mA',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2880 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fRQcUcPxKfsOOHu0',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2919 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sM7ze79SHksYeUKZ',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'user_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2945 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JYmZ80JAuRyUt68V',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2983 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vLtqwvykFdQvHkx0',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3004 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YwknLsvRiu6ovVkj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3034 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sellers.payments',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3060 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lKsZG7NP3RYS96jb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eGlEkythv2oJBp2l',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'quantity',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ehjjplnVo92AuY4j',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3179 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::67zOMQccKEwQcbfj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3214 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bMQEmGELkmzPyhVb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3249 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZABuFSRRIZAqmJBw',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1NG6EOConDqZp4No',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'charts.price_chart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/chart/price_chart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'charts.price_chart',
        'uses' => 'ConsoleTVs\\Charts\\ChartsController@__invoke',
        'controller' => 'ConsoleTVs\\Charts\\ChartsController',
        'prefix' => 'api/chart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'chart' => 
        App\Charts\PriceChart::__set_state(array(
        )),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'charts.nemodar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/chart/nemodar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'charts.nemodar',
        'uses' => 'ConsoleTVs\\Charts\\ChartsController@__invoke',
        'controller' => 'ConsoleTVs\\Charts\\ChartsController',
        'prefix' => 'api/chart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'chart' => 
        App\Charts\Nemodar::__set_state(array(
        )),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ke3P2K94LA0sUVz4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wallets/charge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\IndexController@checkWallets',
        'controller' => 'App\\Http\\Controllers\\Web\\IndexController@checkWallets',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::ke3P2K94LA0sUVz4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wNDK1fSaNLYMSl6b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\IndexController@index',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\IndexController@index',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::wNDK1fSaNLYMSl6b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NKoqiXuU7QDQELjq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\IndexController@search',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\IndexController@search',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::NKoqiXuU7QDQELjq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::llW2hqvq4Tn4Uave' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'req/{url}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\IndexController@req',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\IndexController@req',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::llW2hqvq4Tn4Uave',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::scFFo6G1yQBZeihi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\ProductController@products',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\ProductController@products',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::scFFo6G1yQBZeihi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tZgFh1xZ9fPpM55v' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'product/{id}/{link}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\ProductController@product',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\ProductController@product',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::tZgFh1xZ9fPpM55v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jzFcJLT8IZVpdUuf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'products/category/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\ProductController@productsall',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\ProductController@productsall',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::jzFcJLT8IZVpdUuf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FcD1QpL6MGO4jjBn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'product/like',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\ProductController@like',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\ProductController@like',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::FcD1QpL6MGO4jjBn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'product.stock' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'product/stocks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\ProductController@stocks',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\ProductController@stocks',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'product.stock',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8b0h8vdP1lzet9pS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'pages/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\IndexController@pages',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\IndexController@pages',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::8b0h8vdP1lzet9pS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lldIku8hw2n62rx1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\IndexController@support',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\IndexController@support',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::lldIku8hw2n62rx1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Z0v70dRFYwRYZ4DF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'complaints',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\IndexController@complaints',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\IndexController@complaints',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::Z0v70dRFYwRYZ4DF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::a0QAROGhBqvDvcVU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'articles/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\ArticleController@index',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\ArticleController@index',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::a0QAROGhBqvDvcVU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tIghZ20LH1JpTNkl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'news/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\ArticleController@news',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\ArticleController@news',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::tIghZ20LH1JpTNkl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'art.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'art/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\ArticleController@allarticle',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\ArticleController@allarticle',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'art.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'new.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'new/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\ArticleController@allnews',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\ArticleController@allnews',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'new.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uFCIrkXUnzRGcIXn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'brands/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\ArticleController@brands',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\ArticleController@brands',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::uFCIrkXUnzRGcIXn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'jobs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'request/jobs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\IndexController@jobs',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\IndexController@jobs',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'jobs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CbODWQNg4ceT0u6U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'awards/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\ArticleController@awards',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\ArticleController@awards',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::CbODWQNg4ceT0u6U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::skveZ7DS4YNmttC9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'checkdonator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\UsersController@checkdonator',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\UsersController@checkdonator',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::skveZ7DS4YNmttC9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1acuoeYgIqLbai3b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'showdonator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\UsersController@showdonator',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\UsersController@showdonator',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::1acuoeYgIqLbai3b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qidVuCP1cVBqV2Cl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'checkrahgiri',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\IndexController@checkrahgiri',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\IndexController@checkrahgiri',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::qidVuCP1cVBqV2Cl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5eArErTcO6XYRbly' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'get-city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\UsersController@getcity',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\UsersController@getcity',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::5eArErTcO6XYRbly',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user-logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\UsersController@logout',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\UsersController@logout',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'user-logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\UsersController@register',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\UsersController@register',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'lgrg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\UsersController@login',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\UsersController@login',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'lgrg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'forgetpass' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\UsersController@forgetpass',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\UsersController@forgetpass',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'forgetpass',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'otp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/otp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\UsersController@Otp',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\UsersController@Otp',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'otp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BhdmrUbASwrKHUfs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\FaqController@index',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\FaqController@index',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => '/faqs',
        'where' => 
        array (
        ),
        'as' => 'generated::BhdmrUbASwrKHUfs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CpL2gjw7jzSoss67' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'faqs/cat/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\FaqController@catindex',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\FaqController@catindex',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => '/faqs',
        'where' => 
        array (
        ),
        'as' => 'generated::CpL2gjw7jzSoss67',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::POFZcW3JJxYY6LCf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faqs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\FaqController@singles',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\FaqController@singles',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => '/faqs',
        'where' => 
        array (
        ),
        'as' => 'generated::POFZcW3JJxYY6LCf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7kyV0vZWss0GaDW4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'products/reports/price/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\ProductController@reportprice',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\ProductController@reportprice',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::7kyV0vZWss0GaDW4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'charts.PriceChart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'products/price/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\ProductController@proudctprice',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\ProductController@proudctprice',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'charts.PriceChart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qj7WrGvRaggCnp0r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'social-share/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Front\\IndexController@ShareWidget',
        'controller' => 'App\\Http\\Controllers\\Web\\Front\\IndexController@ShareWidget',
        'namespace' => 'App\\Http\\Controllers\\Web\\Front',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::qj7WrGvRaggCnp0r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Jz2VexkAzZBrEYkr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'get-sellers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@getsellers',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@getsellers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::Jz2VexkAzZBrEYkr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'account' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\AccountController@account',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\AccountController@account',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'account',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/update-user-pwd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\AccountController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\AccountController@updatePassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'user.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::S379NfrcZFnPIPXS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'check-user-pwd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\AccountController@chkUserPassword',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\AccountController@chkUserPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::S379NfrcZFnPIPXS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@cart',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@cart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::d09UeJy3Pw8nACKR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'add-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@addtocart',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@addtocart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::d09UeJy3Pw8nACKR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eGlEkythv2oJBp2l' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart/update-quantity/{id}/{quantity}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@updateCartQuantity',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@updateCartQuantity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::eGlEkythv2oJBp2l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ehjjplnVo92AuY4j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart/del-quantity/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@delCartQuantity',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@delCartQuantity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::ehjjplnVo92AuY4j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::67zOMQccKEwQcbfj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart/delete-product/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@deleteCartProduct',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@deleteCartProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::67zOMQccKEwQcbfj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'shippings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'shippings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@shippings',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@shippings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'shippings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'checkSeller' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'check/sellers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@checkSeller',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@checkSeller',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'checkSeller',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'payments' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@payments',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@payments',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'payments',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'factor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'factor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@factor',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@factor',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'factor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pay.online' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'pay/online',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\PayController@payonline',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\PayController@payonline',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'pay.online',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'product.referral' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'products/referral',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@referral',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@referral',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'product.referral',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'product.indexReferral' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'products/showReferral',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@indexReferral',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@indexReferral',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'product.indexReferral',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'status.Index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'products/ُstatus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@Status',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@Status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'status.Index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'statusStore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'products/ُstatus/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@statusStore',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\OrdersController@statusStore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'statusStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.card' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'bank/cards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\CardController@cardbank',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\CardController@cardbank',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'user.card',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'order.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\AccountController@showorder',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\AccountController@showorder',
        'namespace' => 'App\\Http\\Controllers\\Web\\User',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'order.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bMQEmGELkmzPyhVb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/orders/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\AccountController@ordershow',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\AccountController@ordershow',
        'namespace' => 'App\\Http\\Controllers\\Web\\User',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::bMQEmGELkmzPyhVb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'profile.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\AccountController@profile',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\AccountController@profile',
        'namespace' => 'App\\Http\\Controllers\\Web\\User',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'profile.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'address.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\AccountController@showaddress',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\AccountController@showaddress',
        'namespace' => 'App\\Http\\Controllers\\Web\\User',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'address.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.address.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/addresses/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\AccountController@addaddress',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\AccountController@addaddress',
        'namespace' => 'App\\Http\\Controllers\\Web\\User',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.address.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZABuFSRRIZAqmJBw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/addresses/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\AccountController@editaddress',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\AccountController@editaddress',
        'namespace' => 'App\\Http\\Controllers\\Web\\User',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ZABuFSRRIZAqmJBw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1NG6EOConDqZp4No' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'user/addresses/del/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\AccountController@deladdress',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\AccountController@deladdress',
        'namespace' => 'App\\Http\\Controllers\\Web\\User',
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::1NG6EOConDqZp4No',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KidkHKsOAnmOuwkq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'add-comment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\CommentController@AddComment',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\CommentController@AddComment',
        'namespace' => 'App\\Http\\Controllers\\Web\\User',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::KidkHKsOAnmOuwkq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::h6Wggk6CIFSw3twy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'reply-add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\CommentController@replyStore',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\CommentController@replyStore',
        'namespace' => 'App\\Http\\Controllers\\Web\\User',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::h6Wggk6CIFSw3twy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VeRmelTgYTT2hygl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'pay/success/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\PayController@success',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\PayController@success',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::VeRmelTgYTT2hygl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GtYyKF7i0wo8MI9E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'pay/not-success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\PayController@notsuccess',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\PayController@notsuccess',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::GtYyKF7i0wo8MI9E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RCzi9rSXr8mLQnmf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'pay/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\PayController@callbackpay',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\PayController@callbackpay',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::RCzi9rSXr8mLQnmf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::efECMosksIec3QZk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'get-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\User\\ProductController@getproduct',
        'controller' => 'App\\Http\\Controllers\\Web\\User\\ProductController@getproduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::efECMosksIec3QZk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sheKIT3zYcbJd7W2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Auth\\AuthController@Login',
        'controller' => 'App\\Http\\Controllers\\Web\\Auth\\AuthController@Login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::sheKIT3zYcbJd7W2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::C3HeXLtxNjPRHz7K' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Auth\\AuthController@Login',
        'controller' => 'App\\Http\\Controllers\\Web\\Auth\\AuthController@Login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::C3HeXLtxNjPRHz7K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'ad.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Auth\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Web\\Auth\\AuthController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'ad.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'ad.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\AdminController@DashboardAdmin',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\AdminController@DashboardAdmin',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => '/ad',
        'where' => 
        array (
        ),
        'as' => 'ad.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'ad.changepass' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/users/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\AdminController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\AdminController@changePassword',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => '/ad',
        'where' => 
        array (
        ),
        'as' => 'ad.changepass',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MKrmRVBvJK2ZoMEm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ad/users/check-pwd-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\AdminController@chkPass',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\AdminController@chkPass',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => '/ad',
        'where' => 
        array (
        ),
        'as' => 'generated::MKrmRVBvJK2ZoMEm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CDA0hXvBhst4DPB7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ad/sellers/get-cat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@getcat',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@getcat',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => '/ad',
        'where' => 
        array (
        ),
        'as' => 'generated::CDA0hXvBhst4DPB7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\CategoryController@allCategory',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\CategoryController@allCategory',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/categories',
        'where' => 
        array (
        ),
        'as' => 'categories.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'categories.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/categories/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\CategoryController@addCategory',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\CategoryController@addCategory',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/categories',
        'where' => 
        array (
        ),
        'as' => 'categories.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CzCeGykiV1BopYsP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/categories/del/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\CategoryController@deleteCategory',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\CategoryController@deleteCategory',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::CzCeGykiV1BopYsP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BiQN01NL9hfWBsm1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\CategoryController@editCategory',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\CategoryController@editCategory',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::BiQN01NL9hfWBsm1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'seller.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/seller',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@index',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@index',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/seller',
        'where' => 
        array (
        ),
        'as' => 'seller.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'seller.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/seller/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@create',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@create',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/seller',
        'where' => 
        array (
        ),
        'as' => 'seller.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XBeohQvwPyqJYFFE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/seller/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@edit',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@edit',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/seller',
        'where' => 
        array (
        ),
        'as' => 'generated::XBeohQvwPyqJYFFE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sv7cHdGl26Xiscgd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/seller/updatepass/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@updatepass',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@updatepass',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/seller',
        'where' => 
        array (
        ),
        'as' => 'generated::sv7cHdGl26Xiscgd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WUvkbGPMfhQNEnbf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/seller/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@delete',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@delete',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/seller',
        'where' => 
        array (
        ),
        'as' => 'generated::WUvkbGPMfhQNEnbf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rZbDWkMHV6JPAq2Z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/seller/marker/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@marker',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@marker',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/seller',
        'where' => 
        array (
        ),
        'as' => 'generated::rZbDWkMHV6JPAq2Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oJypNWPejI4I2f1J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/seller/marketer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@marketer',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@marketer',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/seller',
        'where' => 
        array (
        ),
        'as' => 'generated::oJypNWPejI4I2f1J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nO0SaflGbD7Ycfst' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/seller/category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@categorymarker',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@categorymarker',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/seller',
        'where' => 
        array (
        ),
        'as' => 'generated::nO0SaflGbD7Ycfst',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::s0ibLqYsJoIT5suX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/seller/category/del/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@catdelete',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@catdelete',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/seller',
        'where' => 
        array (
        ),
        'as' => 'generated::s0ibLqYsJoIT5suX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fFN0rUFUTmCVtsa2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/seller/complate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@complate',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@complate',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/seller',
        'where' => 
        array (
        ),
        'as' => 'generated::fFN0rUFUTmCVtsa2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::S97eWA2FQjorSxJv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/seller/state/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@state',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@state',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/seller',
        'where' => 
        array (
        ),
        'as' => 'generated::S97eWA2FQjorSxJv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'seller.report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/seller/reports/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@reportSeller',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SallerController@reportSeller',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/seller',
        'where' => 
        array (
        ),
        'as' => 'seller.report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dhQMhUOeyQThRzG8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/marketing/category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\MarketerController@catmarker',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\MarketerController@catmarker',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/marketing',
        'where' => 
        array (
        ),
        'as' => 'generated::dhQMhUOeyQThRzG8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qppWD9iDCVCrz3Av' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/marketing/category/del/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\MarketerController@catmarkerdel',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\MarketerController@catmarkerdel',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/marketing',
        'where' => 
        array (
        ),
        'as' => 'generated::qppWD9iDCVCrz3Av',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RAHIpSKzUzZ5bTkO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'GET',
        2 => 'HEAD',
      ),
      'uri' => 'ad/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\UserController@index',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/users',
        'where' => 
        array (
        ),
        'as' => 'generated::RAHIpSKzUzZ5bTkO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::J4RWNwpyDGNwmpAZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/users/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\UserController@create',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\UserController@create',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/users',
        'where' => 
        array (
        ),
        'as' => 'generated::J4RWNwpyDGNwmpAZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QRxWj4us47jRER1y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/users/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\UserController@edit',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/users',
        'where' => 
        array (
        ),
        'as' => 'generated::QRxWj4us47jRER1y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MD3sYtXixiFG8bjN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/users/updatepass/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\UserController@updatepass',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\UserController@updatepass',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/users',
        'where' => 
        array (
        ),
        'as' => 'generated::MD3sYtXixiFG8bjN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7fg20Rl43zzWFMGt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/users/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\UserController@delete',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\UserController@delete',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/users',
        'where' => 
        array (
        ),
        'as' => 'generated::7fg20Rl43zzWFMGt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nGnL9OCcEPLSYbWv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/users/roles/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\UserController@roles',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\UserController@roles',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/users',
        'where' => 
        array (
        ),
        'as' => 'generated::nGnL9OCcEPLSYbWv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'GET',
        2 => 'HEAD',
      ),
      'uri' => 'ad/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\RoleController@index',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/roles',
        'where' => 
        array (
        ),
        'as' => 'admin.roles.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.roles.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'GET',
        2 => 'HEAD',
      ),
      'uri' => 'ad/roles/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\RoleController@add',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\RoleController@add',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/roles',
        'where' => 
        array (
        ),
        'as' => 'admin.roles.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zgWOCqYNXuoXjrLi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/roles/del/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\RoleController@delete',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\RoleController@delete',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/roles',
        'where' => 
        array (
        ),
        'as' => 'generated::zgWOCqYNXuoXjrLi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cQfy0IkczGWlQG6Y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/role/permissions/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\RoleController@rolesindex',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\RoleController@rolesindex',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => '/ad',
        'where' => 
        array (
        ),
        'as' => 'generated::cQfy0IkczGWlQG6Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.permissions.all' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'GET',
        2 => 'HEAD',
      ),
      'uri' => 'ad/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\PermissionController@index',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\PermissionController@index',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/permissions',
        'where' => 
        array (
        ),
        'as' => 'admin.permissions.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.permissions.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'GET',
        2 => 'HEAD',
      ),
      'uri' => 'ad/permissions/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\PermissionController@add',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\PermissionController@add',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/permissions',
        'where' => 
        array (
        ),
        'as' => 'admin.permissions.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GoqWI3p0UuuX4kJc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/permissions/del/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\PermissionController@delete',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\PermissionController@delete',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/permissions',
        'where' => 
        array (
        ),
        'as' => 'generated::GoqWI3p0UuuX4kJc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::k21YxEscYP2Pbq1Q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'GET',
        2 => 'HEAD',
      ),
      'uri' => 'ad/customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\CustomerController@index',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\CustomerController@index',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/customers',
        'where' => 
        array (
        ),
        'as' => 'generated::k21YxEscYP2Pbq1Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wSJWGsU8Ae9kPpXA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/customers/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\CustomerController@create',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\CustomerController@create',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/customers',
        'where' => 
        array (
        ),
        'as' => 'generated::wSJWGsU8Ae9kPpXA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1PYf4XFvfXRaaA2N' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/customers/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\CustomerController@edit',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\CustomerController@edit',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/customers',
        'where' => 
        array (
        ),
        'as' => 'generated::1PYf4XFvfXRaaA2N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GComJvdbCCcPKNqZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/customers/updatepass/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\CustomerController@updatepass',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\CustomerController@updatepass',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/customers',
        'where' => 
        array (
        ),
        'as' => 'generated::GComJvdbCCcPKNqZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xJnIgKjCd1xyypXz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/customers/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\CustomerController@delete',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\CustomerController@delete',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/customers',
        'where' => 
        array (
        ),
        'as' => 'generated::xJnIgKjCd1xyypXz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'page.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/pages/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\PageController@viewPages',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\PageController@viewPages',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/pages',
        'where' => 
        array (
        ),
        'as' => 'page.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'page.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/pages/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\PageController@addPage',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\PageController@addPage',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/pages',
        'where' => 
        array (
        ),
        'as' => 'page.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UvZexzYiWoOOLgk7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/pages/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\PageController@editPage',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\PageController@editPage',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/pages',
        'where' => 
        array (
        ),
        'as' => 'generated::UvZexzYiWoOOLgk7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XgrYEZIE2CGhxIzL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/pages/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\PageController@deletePage',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\PageController@deletePage',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/pages',
        'where' => 
        array (
        ),
        'as' => 'generated::XgrYEZIE2CGhxIzL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'Complaints' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/pages/view-complaints',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\PageController@viewComplaints',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\PageController@viewComplaints',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/pages',
        'where' => 
        array (
        ),
        'as' => 'Complaints',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'support.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/pages/support/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\PageController@support',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\PageController@support',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/pages',
        'where' => 
        array (
        ),
        'as' => 'support.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'menu.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/menus/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\MenuController@all',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\MenuController@all',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/menus',
        'where' => 
        array (
        ),
        'as' => 'menu.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'menus.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/menus/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\MenuController@add',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\MenuController@add',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/menus',
        'where' => 
        array (
        ),
        'as' => 'menus.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oNepv1E8XnUmSVs5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/menus/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\MenuController@edit',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\MenuController@edit',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/menus',
        'where' => 
        array (
        ),
        'as' => 'generated::oNepv1E8XnUmSVs5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wEpDKYm3UTzuPfdJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/menus/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\MenuController@delete',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\MenuController@delete',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/menus',
        'where' => 
        array (
        ),
        'as' => 'generated::wEpDKYm3UTzuPfdJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'products.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/products/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@listProducts',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@listProducts',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'products.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'products.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@addProduct',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@addProduct',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'products.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XRMmK3gXfQ3HG7OR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@editProduct',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@editProduct',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::XRMmK3gXfQ3HG7OR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EIFHIlKQ8u4xlL6Z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/products/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@deleteProduct',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@deleteProduct',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::EIFHIlKQ8u4xlL6Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::X6EyDzA3oaFR3s5n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/add-imgs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@addImages',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@addImages',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::X6EyDzA3oaFR3s5n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0h62IuTML23flQuw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/products/delete-alt-image/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@deleteProductAltImage',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@deleteProductAltImage',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::0h62IuTML23flQuw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'countdown.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/add-countdowns',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@addcountdown',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@addcountdown',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'countdown.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'countdown.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/countdowns',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@listcountdown',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@listcountdown',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'countdown.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zlOow90pAJrqIDpD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/edit-countdown/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@editcountdown',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@editcountdown',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::zlOow90pAJrqIDpD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Puk3hSRhNe2LCXwu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/products/delete-countdown/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@deletecountdowns',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@deletecountdowns',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::Puk3hSRhNe2LCXwu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'worked.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/add-worked',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@addworked',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@addworked',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'worked.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'worked.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/workeds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@workeds',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@workeds',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'worked.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WamjzsEW2k36HhlC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/edit-worked/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@editworked',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@editworked',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::WamjzsEW2k36HhlC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wBb9MfwjhoJTIq9x' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/products/delete-worked/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@deleteworked',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ProductController@deleteworked',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::wBb9MfwjhoJTIq9x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8gwS9SH86OxbAHCh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/stock/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\StockController@stock',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\StockController@stock',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::8gwS9SH86OxbAHCh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Fu5KG6rRgOHxHEbE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/products/related/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\LinkedController@index',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\LinkedController@index',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::Fu5KG6rRgOHxHEbE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CfZIQQthJcifAxOD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/products/linked/del/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\LinkedController@del',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\LinkedController@del',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::CfZIQQthJcifAxOD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::13k3DqRyAlpaRbHl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/linked/add/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\LinkedController@linkedadd',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\LinkedController@linkedadd',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::13k3DqRyAlpaRbHl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oUMt8AixJJSEnszc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/fani/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\DetailController@fani',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\DetailController@fani',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::oUMt8AixJJSEnszc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5oaDbkTeH1FCfvDL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/barsi/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\DetailController@barsi',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\DetailController@barsi',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::5oaDbkTeH1FCfvDL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::n2vDYV7z37mU9eyw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/points/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\DetailController@points',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\DetailController@points',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::n2vDYV7z37mU9eyw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ASdEqYFqYPyfx41q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/downloads/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\DetailController@downloads',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\DetailController@downloads',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::ASdEqYFqYPyfx41q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Bg0NaulKKBizXKmb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/downloads/del/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\DetailController@downloadsDel',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\DetailController@downloadsDel',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::Bg0NaulKKBizXKmb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tC1dYGcsYatJyrCj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/comments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\DetailController@comments',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\DetailController@comments',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::tC1dYGcsYatJyrCj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MpW9jw7BFuzd7RRe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/comments/change/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\DetailController@commentsCheck',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\DetailController@commentsCheck',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::MpW9jw7BFuzd7RRe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9QdlcoqEAJz4risz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/reportprice/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\DetailController@reportPrice',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\DetailController@reportPrice',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'generated::9QdlcoqEAJz4risz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'products.change.price' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/products/change-price',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\DetailController@changePrice',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\DetailController@changePrice',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/products',
        'where' => 
        array (
        ),
        'as' => 'products.change.price',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sliders.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/sliders/add-slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SliderController@addSlider',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SliderController@addSlider',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/sliders',
        'where' => 
        array (
        ),
        'as' => 'sliders.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tD4c1v8Qx0O9SkYz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/sliders/edit-slider/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SliderController@editSlider',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SliderController@editSlider',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/sliders',
        'where' => 
        array (
        ),
        'as' => 'generated::tD4c1v8Qx0O9SkYz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sliders.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/sliders/view-sliders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SliderController@viewSliders',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SliderController@viewSliders',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/sliders',
        'where' => 
        array (
        ),
        'as' => 'sliders.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xOhJWkGwbqcrbC10' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/sliders/delete-slider/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SliderController@deleteSlider',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SliderController@deleteSlider',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/sliders',
        'where' => 
        array (
        ),
        'as' => 'generated::xOhJWkGwbqcrbC10',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brands.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/brands/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\BrandController@addBrand',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\BrandController@addBrand',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/brands',
        'where' => 
        array (
        ),
        'as' => 'brands.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zEQ0f56b3l93u0ul' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/brands/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\BrandController@editBrand',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\BrandController@editBrand',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/brands',
        'where' => 
        array (
        ),
        'as' => 'generated::zEQ0f56b3l93u0ul',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'brands.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/brands/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\BrandController@allBrands',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\BrandController@allBrands',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/brands',
        'where' => 
        array (
        ),
        'as' => 'brands.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2KlQLA6dgiLqJTcQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/brands/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\BrandController@deleteBrand',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\BrandController@deleteBrand',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/brands',
        'where' => 
        array (
        ),
        'as' => 'generated::2KlQLA6dgiLqJTcQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'news.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/news/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\NewsController@addnews',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\NewsController@addnews',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/news',
        'where' => 
        array (
        ),
        'as' => 'news.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8UvldaFkCS6SAwgl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/news/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\NewsController@editnews',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\NewsController@editnews',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/news',
        'where' => 
        array (
        ),
        'as' => 'generated::8UvldaFkCS6SAwgl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'news.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/news/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\NewsController@allnews',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\NewsController@allnews',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/news',
        'where' => 
        array (
        ),
        'as' => 'news.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FhBSxWzNadZfMTYO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/news/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\NewsController@deletenews',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\NewsController@deletenews',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/news',
        'where' => 
        array (
        ),
        'as' => 'generated::FhBSxWzNadZfMTYO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'articles.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/articles/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ArticleController@addarticles',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ArticleController@addarticles',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/articles',
        'where' => 
        array (
        ),
        'as' => 'articles.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ACtIXl1ZOcpKiaiQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/articles/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ArticleController@editarticles',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ArticleController@editarticles',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/articles',
        'where' => 
        array (
        ),
        'as' => 'generated::ACtIXl1ZOcpKiaiQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'articles.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/articles/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ArticleController@allarticles',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ArticleController@allarticles',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/articles',
        'where' => 
        array (
        ),
        'as' => 'articles.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9xL2ipPk3Qdnpqk9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/articles/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ArticleController@deletearticles',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ArticleController@deletearticles',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/articles',
        'where' => 
        array (
        ),
        'as' => 'generated::9xL2ipPk3Qdnpqk9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gallery.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/gallerysites/add-gallerysites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\GalleryController@addgallerys',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\GalleryController@addgallerys',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/gallerysites',
        'where' => 
        array (
        ),
        'as' => 'gallery.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::H524aAR1FOOEXlp2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/gallerysites/edit-gallerysites/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\GalleryController@editgallerys',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\GalleryController@editgallerys',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/gallerysites',
        'where' => 
        array (
        ),
        'as' => 'generated::H524aAR1FOOEXlp2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'gallery.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/gallerysites/view-gallerysites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\GalleryController@allgallerys',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\GalleryController@allgallerys',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/gallerysites',
        'where' => 
        array (
        ),
        'as' => 'gallery.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jnImlv8QlCWDjNjJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/gallerysites/delete-gallerysites/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\GalleryController@deletegallerys',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\GalleryController@deletegallerys',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/gallerysites',
        'where' => 
        array (
        ),
        'as' => 'generated::jnImlv8QlCWDjNjJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'honors.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/honors/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\HonorController@addhonors',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\HonorController@addhonors',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/honors',
        'where' => 
        array (
        ),
        'as' => 'honors.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WDGWtjy7npBely1E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/honors/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\HonorController@edithonors',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\HonorController@edithonors',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/honors',
        'where' => 
        array (
        ),
        'as' => 'generated::WDGWtjy7npBely1E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'honors.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/honors/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\HonorController@allhonors',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\HonorController@allhonors',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/honors',
        'where' => 
        array (
        ),
        'as' => 'honors.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DgPDxwnI6BTMP3zX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/honors/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\HonorController@deletehonors',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\HonorController@deletehonors',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/honors',
        'where' => 
        array (
        ),
        'as' => 'generated::DgPDxwnI6BTMP3zX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'promote.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/promotes/add-promote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\PromoteController@add',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\PromoteController@add',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/promotes',
        'where' => 
        array (
        ),
        'as' => 'promote.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Mzg20lIlySBJcHNz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/promotes/edit-promote/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\PromoteController@edit',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\PromoteController@edit',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/promotes',
        'where' => 
        array (
        ),
        'as' => 'generated::Mzg20lIlySBJcHNz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'promote.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/promotes/view-promotes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\PromoteController@all',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\PromoteController@all',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/promotes',
        'where' => 
        array (
        ),
        'as' => 'promote.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Nr4fgm6Zg36Ia6a2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/promotes/delete-promote/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\PromoteController@delete',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\PromoteController@delete',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/promotes',
        'where' => 
        array (
        ),
        'as' => 'generated::Nr4fgm6Zg36Ia6a2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reqforms.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/reqforms/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\CatReqController@add',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\CatReqController@add',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/reqforms',
        'where' => 
        array (
        ),
        'as' => 'reqforms.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5O4KVmWhUUYePEFo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/reqforms/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\CatReqController@edit',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\CatReqController@edit',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/reqforms',
        'where' => 
        array (
        ),
        'as' => 'generated::5O4KVmWhUUYePEFo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'reqforms.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/reqforms/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\CatReqController@all',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\CatReqController@all',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/reqforms',
        'where' => 
        array (
        ),
        'as' => 'reqforms.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::F8YDkdYsB6HTa6i9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/reqforms/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\CatReqController@delete',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\CatReqController@delete',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/reqforms',
        'where' => 
        array (
        ),
        'as' => 'generated::F8YDkdYsB6HTa6i9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'texts.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/texts/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\TextController@add',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\TextController@add',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/texts',
        'where' => 
        array (
        ),
        'as' => 'texts.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KQA8BrhyIzPlSkwo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/texts/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\TextController@edit',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\TextController@edit',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/texts',
        'where' => 
        array (
        ),
        'as' => 'generated::KQA8BrhyIzPlSkwo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'texts.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/texts/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\TextController@all',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\TextController@all',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/texts',
        'where' => 
        array (
        ),
        'as' => 'texts.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Kb2tNTNB23yemjTl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/texts/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\TextController@del',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\TextController@del',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/texts',
        'where' => 
        array (
        ),
        'as' => 'generated::Kb2tNTNB23yemjTl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'wallets.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/wallets/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\WalletController@show',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\WalletController@show',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/wallets',
        'where' => 
        array (
        ),
        'as' => 'wallets.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'wallets.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/wallets/user/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\WalletController@showuser',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\WalletController@showuser',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/wallets',
        'where' => 
        array (
        ),
        'as' => 'wallets.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CVRDMZOFfXJUQmRB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/wallets/request/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\WalletController@request',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\WalletController@request',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/wallets',
        'where' => 
        array (
        ),
        'as' => 'generated::CVRDMZOFfXJUQmRB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'wallets.list.success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/wallets/success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\WalletController@success',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\WalletController@success',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/wallets',
        'where' => 
        array (
        ),
        'as' => 'wallets.list.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'wallets.list.payout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/wallets/pay-out',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\WalletController@payout',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\WalletController@payout',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/wallets',
        'where' => 
        array (
        ),
        'as' => 'wallets.list.payout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'wallets.list.suspended' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/wallets/suspended',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\WalletController@suspended',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\WalletController@suspended',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/wallets',
        'where' => 
        array (
        ),
        'as' => 'wallets.list.suspended',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'wallets.list.withdrew' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/wallets/withdrew',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\WalletController@withdrew',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\WalletController@withdrew',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/wallets',
        'where' => 
        array (
        ),
        'as' => 'wallets.list.withdrew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'orders.status.all' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/orders/show-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\StatusController@all',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\StatusController@all',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/orders',
        'where' => 
        array (
        ),
        'as' => 'orders.status.all',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'orders.status.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/orders/add-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\StatusController@add',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\StatusController@add',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/orders',
        'where' => 
        array (
        ),
        'as' => 'orders.status.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xdodIsZBbVD3fK0I' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/orders/edit-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\StatusController@edit',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\StatusController@edit',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::xdodIsZBbVD3fK0I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ubxtItvAiY8yyGVC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/orders/delete-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\StatusController@delete',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\StatusController@delete',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::ubxtItvAiY8yyGVC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'orders.users.cod' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/orders/show-cod',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\StatusController@cod',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\StatusController@cod',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/orders',
        'where' => 
        array (
        ),
        'as' => 'orders.users.cod',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'orders.users.change.cod' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/orders/change-cod/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\StatusController@codchange',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\StatusController@codchange',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/orders',
        'where' => 
        array (
        ),
        'as' => 'orders.users.change.cod',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iuOei1E6IzgmngMp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/orders/change/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\OrderController@editorders',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\OrderController@editorders',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::iuOei1E6IzgmngMp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'settings.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/settings/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SettingController@all',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SettingController@all',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/settings',
        'where' => 
        array (
        ),
        'as' => 'settings.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'ad.socials' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/socials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SettingController@socials',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SettingController@socials',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => '/ad',
        'where' => 
        array (
        ),
        'as' => 'ad.socials',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cart.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/cart/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\OrderController@showcarts',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\OrderController@showcarts',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => '/ad',
        'where' => 
        array (
        ),
        'as' => 'cart.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'order.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/order/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\OrderController@showorders',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\OrderController@showorders',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => '/ad',
        'where' => 
        array (
        ),
        'as' => 'order.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'ad.payments' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/payments/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\OrderController@payments',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\OrderController@payments',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => '/ad',
        'where' => 
        array (
        ),
        'as' => 'ad.payments',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'address.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/addresses/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\AddressController@show',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\AddressController@show',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => '/ad',
        'where' => 
        array (
        ),
        'as' => 'address.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'req.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/req/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\PageController@req',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\PageController@req',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => '/ad',
        'where' => 
        array (
        ),
        'as' => 'req.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'ad.icons' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/icons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\SettingController@icons',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\SettingController@icons',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => '/ad',
        'where' => 
        array (
        ),
        'as' => 'ad.icons',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bank.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/banks/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\UserController@showBank',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\UserController@showBank',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => '/ad',
        'where' => 
        array (
        ),
        'as' => 'bank.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jsz7CmE7YJEirkZl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/ref/change/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\RefController@changeref',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\RefController@changeref',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => '/ad',
        'where' => 
        array (
        ),
        'as' => 'generated::jsz7CmE7YJEirkZl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'referral' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/ref',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\RefController@referral',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\RefController@referral',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => '/ad',
        'where' => 
        array (
        ),
        'as' => 'referral',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'faq.cats.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\FaqController@all',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\FaqController@all',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/faqs',
        'where' => 
        array (
        ),
        'as' => 'faq.cats.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'faq.cats.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/faqs/cats/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\FaqController@catadd',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\FaqController@catadd',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/faqs',
        'where' => 
        array (
        ),
        'as' => 'faq.cats.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8kbCbFtXQ23EAYA4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/faqs/cats/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\FaqController@catedit',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\FaqController@catedit',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/faqs',
        'where' => 
        array (
        ),
        'as' => 'generated::8kbCbFtXQ23EAYA4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FwAzBN1S62VGdaF3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/faqs/cats/del/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\FaqController@catdel',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\FaqController@catdel',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/faqs',
        'where' => 
        array (
        ),
        'as' => 'generated::FwAzBN1S62VGdaF3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::imfpiAe65tKuN0oJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/faqs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\FaqController@allFaq',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\FaqController@allFaq',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/faqs',
        'where' => 
        array (
        ),
        'as' => 'generated::imfpiAe65tKuN0oJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HoeJeZsVv7FTlgrb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/faqs/add/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\FaqController@addFaq',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\FaqController@addFaq',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/faqs',
        'where' => 
        array (
        ),
        'as' => 'generated::HoeJeZsVv7FTlgrb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::icMTYrtm4CBCrS78' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/faqs/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\FaqController@editFaq',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\FaqController@editFaq',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/faqs',
        'where' => 
        array (
        ),
        'as' => 'generated::icMTYrtm4CBCrS78',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::u4h0QWqvEZlgL3nP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ad/faqs/del/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\FaqController@delFaq',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\FaqController@delFaq',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => 'ad/faqs',
        'where' => 
        array (
        ),
        'as' => 'generated::u4h0QWqvEZlgL3nP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'report.sell' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/report/sell',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ReportController@sell',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ReportController@sell',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => '/ad',
        'where' => 
        array (
        ),
        'as' => 'report.sell',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'report.bastankar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'ad/report/bastankar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\ReportController@bastankar',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\ReportController@bastankar',
        'namespace' => 'App\\Http\\Controllers\\Web\\Back',
        'prefix' => '/ad',
        'where' => 
        array (
        ),
        'as' => 'report.bastankar',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::frgxjGnUE14z9LT8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'admin/upload-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Back\\AdminController@uploadImages',
        'controller' => 'App\\Http\\Controllers\\Web\\Back\\AdminController@uploadImages',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::frgxjGnUE14z9LT8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::N8eIZ9N9H8m8PZ5b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\AuthController@login',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::N8eIZ9N9H8m8PZ5b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qWy0veMYyQzb9X5Y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\AuthController@login',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::qWy0veMYyQzb9X5Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.out' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/lagout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\AuthController@lagout',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\AuthController@lagout',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'sellers.out',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.dashborad' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sellers/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\SellerController@DashboardSeller',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\SellerController@DashboardSeller',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.dashborad',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/update-user-pwd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\SellerController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\SellerController@updatePassword',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3Y3IlXZJxwpgamCT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sellers/check-user-pwd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\SellerController@chkUserPassword',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\SellerController@chkUserPassword',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'generated::3Y3IlXZJxwpgamCT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.cat.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sellers/category/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\CategoryController@showcat',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\CategoryController@showcat',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.cat.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::94y5fAleQ6g7cf6G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sellers/category/nemodar/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\CategoryController@nemodar',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\CategoryController@nemodar',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'generated::94y5fAleQ6g7cf6G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sellers/orders/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\OrderController@showOrders',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\OrderController@showOrders',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.orders.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fRQcUcPxKfsOOHu0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/orders/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\OrderController@ordershow',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\OrderController@ordershow',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'generated::fRQcUcPxKfsOOHu0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.orders.user.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sellers/orders/user/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\OrderController@showuserOrders',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\OrderController@showuserOrders',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.orders.user.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sM7ze79SHksYeUKZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/orders/users/factor/{id}/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\OrderController@orderuserfactorshow',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\OrderController@orderuserfactorshow',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'generated::sM7ze79SHksYeUKZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::J5uNoWY8klvJjL5C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/orders/checks/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\OrderController@checkStatus',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\OrderController@checkStatus',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'generated::J5uNoWY8klvJjL5C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.genology.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sellers/genology/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\UserController@showCustomer',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\UserController@showCustomer',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.genology.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::JYmZ80JAuRyUt68V' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sellers/orders/genology/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\UserController@showordergenology',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\UserController@showordergenology',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'generated::JYmZ80JAuRyUt68V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.referal.prodect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sellers/referal/prodect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\ProductController@referal',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\ProductController@referal',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.referal.prodect',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/users/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\UserController@showProfile',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\UserController@showProfile',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.bank.update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/banks/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\UserController@updatebanks',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\UserController@updatebanks',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.bank.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.wallets' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/wallets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\WalletController@showWallet',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\WalletController@showWallet',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.wallets',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.address' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\AddressController@showAddress',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\AddressController@showAddress',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.address',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vLtqwvykFdQvHkx0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/addresses/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\AddressController@updateAddress',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\AddressController@updateAddress',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'generated::vLtqwvykFdQvHkx0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YwknLsvRiu6ovVkj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/addresses/del/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\AddressController@delAddress',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\AddressController@delAddress',
        'namespace' => 'App\\Http\\Controllers\\Web\\Seller',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'generated::YwknLsvRiu6ovVkj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Nhd56WJOfhTFzyEN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/add-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\OrdersController@addtocart',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\OrdersController@addtocart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'generated::Nhd56WJOfhTFzyEN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\OrdersController@cart',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\OrdersController@cart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::trhvLhVzCTawcRad' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sellers/cart/update-quantity/{id}/{quantity}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\OrdersController@updateCartQuantity',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\OrdersController@updateCartQuantity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'generated::trhvLhVzCTawcRad',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mlPcIPg6Rqj4lI5n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sellers/cart/del-quantity/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\OrdersController@delCartQuantity',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\OrdersController@delCartQuantity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'generated::mlPcIPg6Rqj4lI5n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ohST5mVxfp6da8mA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sellers/cart/delete-product/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\OrdersController@deleteCartProduct',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\OrdersController@deleteCartProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'generated::ohST5mVxfp6da8mA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.shippings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/shippings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\OrdersController@shippings',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\OrdersController@shippings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.shippings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.checkSeller' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/check/sellers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\OrdersController@checkSeller',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\OrdersController@checkSeller',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.checkSeller',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.payments' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/payments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\PaymentController@payments',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\PaymentController@payments',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.payments',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.payments.cod' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/pay/cod',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\PaymentController@cod',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\PaymentController@cod',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.payments.cod',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.payments.codadmin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/pay/codadmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\PaymentController@codadmin',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\PaymentController@codadmin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.payments.codadmin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.factor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/factor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\PaymentController@factor',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\PaymentController@factor',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.factor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'sellers.pay.online' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/pay/online',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'checkSeller',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\PaymentController@payonline',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\PaymentController@payonline',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/sellers',
        'where' => 
        array (
        ),
        'as' => 'sellers.pay.online',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lKsZG7NP3RYS96jb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/pay/success/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\PaymentController@success',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\PaymentController@success',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::lKsZG7NP3RYS96jb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::n14TVSsxEYJxqegQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'page/access',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\IndexController@access',
        'controller' => 'App\\Http\\Controllers\\Web\\IndexController@access',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::n14TVSsxEYJxqegQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZifefXBLSZsFvGjS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'sellers/pay/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Web\\Seller\\PaymentController@callbackpay',
        'controller' => 'App\\Http\\Controllers\\Web\\Seller\\PaymentController@callbackpay',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::ZifefXBLSZsFvGjS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
