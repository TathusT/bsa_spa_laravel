<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Header extends Component
{
    public $flag = '';
    public $profile = '';
    public $home = '';
    public $aboutus = '';
    public $allcourse = '';
    public $product7 = '';
    public $gallery = '';
    public $contactus = '';
    public $login = '';
    public $logout = '';
    public $register = '';
    public $user = '';
    public $langId;

    public function mount()
    {
        $this->langId = 1;
    }

    public function render()
    {
        $this->Lang($this->langId);
        return view('livewire.components.header');
    }
    public function changeLanguage($langId)
    {
        $this->langId = $langId;
        $this->emitTo('frontend.index','languageChanged', $this->langId);
    }

    public function Lang($langId)
    {
        if ($langId == 1) {
            $this->flag = 'thflag.png';
            $this->profile = 'profile.png';
            $this->langId = 1;
            $this->home = 'หน้าเเรก';
            $this->aboutus = 'เกี่ยวกับเรา';
            $this->allcourse = 'หลักสูตร';
            $this->product7 = 'ผลิตภัณฑ์สปา';
            $this->gallery = 'แกลเลอรี';
            $this->contactus = 'ติดต่อเรา';
            $this->login = 'เข้าสู่ระบบ';
            $this->logout = 'ออกจากระบบ';
            $this->register = 'สมัครสมาชิก';
            $this->user = 'รายละเอียดของผู้ใช้งาน';
        } else {
            $this->flag = 'enflag.png';
            $this->profile = 'profile.png';
            $this->langId = 2;
            $this->home = 'Home';
            $this->aboutus = 'About us';
            $this->allcourse = 'Course';
            $this->product7 = 'Product';
            $this->gallery = 'Gallery';
            $this->contactus = 'Contact us ';
            $this->login = 'Login';
            $this->logout = 'Logout';
            $this->register = 'Register';
            $this->user = 'User Detail';
        }
    }
}
