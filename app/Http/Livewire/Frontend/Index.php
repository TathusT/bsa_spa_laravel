<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class Index extends Component
{
    public $langId;
    public string $course = "";
    public string $detail1 = "";
    public string $detail2 = "";
    public string $detail3 = "";
    public string $allcourse = "";
    public string $click = "";
    public string $reviwe = "";
    protected $listeners = ['languageChanged' => 'updateLanguage'];

    public function mount(){
        $this->langId = 1;
    }

    public function render()
    {
        $this->Lang(1);
        return view('livewire.frontend.index')->extends('livewire.frontend.layouts.content');
    }
    public function Lang($lang)
    {
        if ($lang == 1) {
            $this->course = "หลักสูตรที่เปิดสอน";
            $this->detail1 = "สปาเพื่อสุขภาพ";
            $this->detail2 = "สปาเพื่อความงาม";
            $this->detail3 = "สปาขั้นสูง";
            $this->allcourse = "หลักสูตรทั้งหมด";
            $this->click = "สนใจเรียนคอร์สออนไลน์คลิ๊ก!";
            $this->reviwe = "ความคิดเห็นจากผู้เรียน";
        } else {
            $this->course = "COURSE";
            $this->detail1 = "Health Spa Course";
            $this->detail2 = "Beauty Spa Course";
            $this->detail3 = "Advanced Spa";
            $this->allcourse = "All courses";
            $this->click = "สนใจเรียนคอร์สออนไลน์คลิ๊ก!";
            $this->reviwe = "REVIEW";
        }
    }
    public function updateLanguage($langId)
    {
        $this->langId = $langId;
        dd($this->langId);
        $this->Lang($langId);
    }
}
