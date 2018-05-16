<?php
return array(
    'columns'=>array(
        'apply_id'=>array(
            'type'=>'number',
            'autoincrement' => true,
            'required' => true,
            'label' => 'id',
            'comment' => app::get('sysshop')->_('申请编号'),
        ),
        'shop_id'=>array(
            'type'=>'table:shop',
            'required' => true,
            'comment' => app::get('sysshop')->_('关联店铺id'),
            'label' => app::get('sysshop')->_('店铺名称'),
            'order' => 1,
            'in_list' => true,
            'default_in_list' => true,
        ),
        'cat_id'=>array(
            'type' => 'number',
            'length' => 300,
            'required' => true,
            'comment' => app::get('sysshop')->_(' 关联类目id'),
            'label' => app::get('sysshop')->_('申请类目'),
            'order' => 2,
            'in_list' => true,
            'default_in_list' => true,
        ),
        'apply_reason'=>array(
            'type' => 'string',
            'length' => 300,
            'default' => '0',
            'label' => app::get('sysshop')->_('商家申请原因'),
        ),
        'check_status'=>array(
            'type' => array(
                'pending' =>'待审核',
                'adopt' =>'审核通过',
                'reject' =>'审核失败',
            ),
            'required' => true,
            'default' => 'pending',
            'label' => app::get('sysshop')->_('审核状态'),
            'in_list' => true,
            'default_in_list' => true,
            'width' => 75,
            'order' => 3,
        ),
        'apply_time'=>array(
            'type'=>'time',
            'in_list'=>true,
            'default_in_list'=>true,
            'required'=>true,
            'filtertype' => false,
            'filterdefault' => 'true',
            'label' => app::get('sysshop')->_('申请时间'),
            'comment' => app::get('sysshop')->_('申请时间'),
            'order' => 4,
        ),
        'check_fail_reason' => array(
            'type' => 'string',
            'length' => 300,
            'label' => app::get('sysshop')->_('审核失败原因'),
        ),
        'check_time'=>array(
            'type'=>'time',
            'in_list'=>true,
            'default_in_list'=>true,
            'filtertype' => false,
            'filterdefault' => 'true',
            'label' => app::get('sysshop')->_('审核时间'),
            'comment' => app::get('sysshop')->_('审核时间'),
            'order' => 5,
        ),
   ),
    'primary' => 'apply_id',
    'index' => array(
        'ind_shop_id' => [ 'columns' => ['shop_id'] ],
    ),
    'comment'=>app::get('sysshop')->_('店铺申请类目权限表'),
);