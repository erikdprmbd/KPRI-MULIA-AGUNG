<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                      'label' => 'DATA MASTER',
                      'icon' => 'archive',
                      'url'   => '#',
                      'items' => [
                        ['label' => 'User', 'icon' => 'dashboard', 'url' => ['/user/index']],
                        ['label' => 'Anggota', 'icon' => 'dashboard', 'url' => ['/anggota/index']],
                        ['label' => 'Jabatan', 'icon' => 'dashboard', 'url' => ['/jabatan/index']],
                        ['label' => 'Golongan', 'icon' => 'dashboard', 'url' => ['/golongan/index']],
                        ['label' => 'Jenis Simpanan', 'icon' => 'dashboard', 'url' => ['/jenis_simpanan/index']],
                      ],
                    ],
                    [
                      'label' => 'TRANSAKSI',
                      'icon' => 'dollar',
                      'url'   => '#',
                      'items' => [
                        ['label' => 'Simpanan', 'icon' => 'dashboard', 'url' => ['/simpanan/index']],
                        ['label' => 'Anggota', 'icon' => 'dashboard', 'url' => ['/anggota/index']],
                        ['label' => 'Jabatan', 'icon' => 'dashboard', 'url' => ['/jabatan/index']],
                      ],
                    ],
                    [
                      'label' => 'MDM ADMIN',
                      'icon' => 'share',
                      'url' => '#',
                      'items' => [
                        ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                        ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                        ['label' => 'Route', 'icon' => 'dashboard', 'url' => ['/admin/route']],
                        ['label' => 'Permission', 'icon' => 'dashboard', 'url' => ['/admin/permission']],
                        ['label' => 'Menu', 'icon' => 'dashboard', 'url' => ['/admin/menu']],
                        ['label' => 'Role', 'icon' => 'dashboard', 'url' => ['/admin/role']],
                        ['label' => 'Assignment', 'icon' => 'dashboard', 'url' => ['/admin/assignment']],
                      ],
                    ],
                    [
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                          ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Profile', 'icon' => 'file-code-o', 'url' => ['site/profile'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
