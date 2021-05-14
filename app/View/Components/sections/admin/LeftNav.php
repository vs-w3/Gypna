<?php

namespace App\View\Components\sections\admin;

use Illuminate\View\Component;

class LeftNav extends Component
{
    public $data = [
        'aboutus' => [
            'tab' => 'aboutus', 
            'title' => 'ჩვენს შესახებ',
            'icon' => 'fas fa-user-md',
            'items' => [
                ['title' => 'ნახვა', 'route' => 'admin/aboutus'],
                ['title' => 'დამატება', 'route' => 'admin/add/aboutus'],
            ]
        ],
        'speciality' => [
            'tab' => 'speciality', 
            'title' => 'სპეციალობა',
            'icon' => 'fas fa-user-md',
            'items' => [
                ['title' => 'ნახვა', 'route' => 'admin/specialities'],
                ['title' => 'დამატება', 'route' => 'admin/add/speciality'],
            ]
        ],
        'speaker' => [
            'tab' => 'speaker',
            'title' => 'მომხსენებელი',
            'icon' => 'fas fa-user-md',
            'items' => [
                ['title' => 'ნახვა', 'route' => 'admin/speakers'],
                ['title' => 'დამატება', 'route' => 'admin/add/speaker'],
            ]
        ],
        'member' => [
            'tab' => 'member',
            'title' => 'წევრი',
            'icon' => 'fas fa-user-md',
            'items' => [
                ['title' => 'ნახვა', 'route' => 'admin/members'],
                ['title' => 'დამატება', 'route' => 'admin/add/member'],
            ]
        ],
    ];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sections.admin.left-nav')->with('data', $this->data);
    }
}
