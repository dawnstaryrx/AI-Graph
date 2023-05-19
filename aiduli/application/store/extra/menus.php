<?php
/**
 * 后台菜单配置
 *    'home' => [
 *       'name' => '首页',                // 菜单名称
 *       'icon' => 'icon-shouye',          // 图标 (class)
 *       'index' => 'index/index',         // 链接
 *     ],
 */
return [
    'index' => [
        'name' => '首页',
        'icon' => 'icon-shouye',
        'index' => 'index/index',
    ],
   
    'store' => [
        'name' => '用户管理',
        'icon' => 'icon-yonghu',
        'index' => 'store.user/index',
        'submenu' => [
            [
                'name' => '管理员列表',
                'index' => 'store.user/index',
                'uris' => [
                    'store.user/index',
                    'store.user/add',
                    'store.user/edit',
                    'store.user/delete',
                ],
            ],
           
        ]
    ],
    
    'content' => [
        'name' => '文件管理',
        'icon' => 'icon-wenjian',
        'index' => 'content.files.group/index',
        'submenu' => [
            [
                'name' => '文件库管理',
                'submenu' => [
                    [
                        'name' => '文件分组',
                        'index' => 'content.files.group/index',
                        'uris' => [
                            'content.files.group/index',
                            'content.files.group/add',
                            'content.files.group/edit',
                        ]
                    ],
                    [
                        'name' => '文件列表',
                        'index' => 'content.files/index'
                    ],
                    [
                        'name' => '回收站',
                        'index' => 'content.files/recycle',
                    ],
                ]
            ],
        ]
    ],

    'wxapp' => [
        'name' => '平台管理',
        'icon' => 'icon-xiaochengxu',
        'color' => '#36b313',
        'index' => 'wxapp/list',
        'submenu' => [
            [
                'name' => '平台列表',
                'index' => 'wxapp/list',
            ]
        ],
    ],
    'apps' => [
        'name' => '应用中心',
        'icon' => 'icon-yingyong',
        'is_svg'=>true,
        'index' => 'apps.dealer.apply/index',
        'submenu' => [
            [
                'name' => '安装列表',
                'index' => 'apps.dealer.apply/index',
            ],
            [
                'name' => '未安装',
                'index' => 'apps.dealer.apply/noinstall',
            ],
        ],
    ],
    'setting' => [
        'name' => '设置',
        'icon' => 'icon-setting',
        'index' => 'setting/store',
        'submenu' => [
          
            [
                'name' => '上传设置',
                'index' => 'setting/storage',
            ],
            [
                'name' => '其他',
                'submenu' => [
                    [
                        'name' => '清理缓存',
                        'index' => 'setting.cache/clear'
                    ]
                ]
            ]
        ],
    ],
];
