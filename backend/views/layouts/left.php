<aside class="main-sidebar">

    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => '首页', 'icon' => 'fa fa-th', 'url' => ['/site/index']],

                    ['label' => '案例管理',
                        'icon' => 'fa fa-gg',
                        'url' => '#',
                        'items' => [
                            ['label' => '新增案例', 'icon' => 'fa fa-circle-o', 'url' => ['/case/create']],
                            ['label' => '案例列表', 'icon' => 'fa fa-circle-o', 'url' => ['/case/index']],
                        ]
                    ],
                    [
                        'label' => '服务领域',
                        'icon' => 'fa fa-object-ungroup',
                        'url' => '#',
                        'items' => [
                            ['label' => '添加服务', 'icon' => 'fa fa-circle-o', 'url' => ['/field/create']],
                            ['label' => '服务列表', 'icon' => 'fa fa-circle-o', 'url' => ['/field/index']],
                        ]
                    ],
                    [
                        'label' => '风格管理',
                        'icon' => 'fa fa-clone',
                        'url' => '#',
                        'items' => [
                            ['label' => '新增风格', 'icon' => 'fa fa-circle-o', 'url' => ['/style/create']],
                            ['label' => '风格列表', 'icon' => 'fa fa-circle-o', 'url' => ['/style/index']],
                        ]
                    ],
                    [
                        'label' => '文章管理',
                        'icon' => 'fa fa-files-o',
                        'url' => '#',
                        'items' => [
                            ['label' => '新增文章', 'icon' => 'fa fa-circle-o', 'url' => ['/news/create']],
                            ['label' => '文章列表', 'icon' => 'fa fa-circle-o', 'url' => ['/news/index']],
                        ]
                    ],
                    [
                        'label' => '团队管理',
                        'icon' => 'fa fa-book',
                        'url' => '#',
                        'items' => [
                            ['label' => '新增设计师', 'icon' => 'fa fa-circle-o', 'url' => ['/designer/create']],
                            ['label' => '设计师列表', 'icon' => 'fa fa-circle-o', 'url' => ['/designer/index']],
                        ]
                    ],
                    [
                        'label' => '招聘管理',
                        'icon' => 'fa fa-cogs',
                        'url' => '#',
                        'items' => [
                            ['label' => '新增招聘', 'icon' => 'fa fa-circle-o', 'url' => ['/job/create']],
                            ['label' => '招聘列表', 'icon' => 'fa fa-circle-o', 'url' => ['/job/index']],
                        ]
                    ],
                    [
                        'label' => '网站管理',
                        'icon' => 'fa fa-database',
                        'url' => '#',
                        'items' => [
                            ['label' => '头图设置', 'icon' => 'fa fa-circle-o', 'url' => ['/banner/index']],
                            ['label' => '用户留言', 'icon' => 'fa fa-circle-o', 'url' => ['/word/index']],
                        ]
                    ],
                    ['label' => '客户管理', 'icon' => 'fa fa-user', 'url' => ['/user/index']],
                ],
            ]
        ) ?>

    </section>

</aside>
