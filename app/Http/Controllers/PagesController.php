<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function signin() {
        return view('pages.login');
    }

    public function signup() {
        return view('pages.register');
    }


    // public function profile () {
    //     return view('account.profile');
    // }

    public function home() {
        return view('pages.home');
    }

    public function jobs() {
        return view('pages.jobs');
    }

    public function notifications() {
        return view('pages.notifications');
    }

    public function network() {
        return view('pages.network');
    }

    public function chats() {
        return view('pages.chats');
    }

    public function savedseeds() {
        return view('pages.savedseeds');
    }
    public function profile() {
        return view('pages.profile');
    }

    public function connections() {
        return view('pages.connections');
    }

    public function peoplefollowing() {
        return view('pages.peoplefollowing');
    }

    public function groups() {
        return view('pages.groups');
    }

    public function newsletters() {
        return view('pages.newsletters');
    }

    public function savedjobs() {
        return view('pages.savedjobs');
    }

    public function appliedjobs() {
        return view('pages.appliedjobs');
    }

    public function settings() {
        return view('pages.settings');
    }

    public function shophome() {
        return view('shop.shophome');
    }

    public function product() {
        return view('shop.product');
    }

    public function saveditems() {
        return view('shop.saveditems');
    }

    public function cart() {
        return view('shop.cart');
    }

    public function bloghome() {
        return view('blog.bloghome');
    }

    public function blogwrite() {
        return view('blog.blogwrite');
    }
    
    public function blogprofile() {
        return view('blog.blogprofile');
    }

    public function seeds() {
        return view('blog.seeds');
    }

    public function seed() {
        return view('blog.seed');
    }
}
