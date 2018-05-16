<?php

class systag_api_rels_bind
{

    public $apiDescription = "创建绑定关系";

    public function getParams()
    {
        $return['params'] = array(
            'tag_ids'   => ['type'=>'array','valid'=>'', 'default'=>'0', 'example'=>'', 'description'=>'标签id的集合'],
            'domain'    => ['type'=>'string','valid'=>'required', 'default'=>'', 'example'=>'image', 'description'=>'标签作用场景'],
            'rel_ids'   => ['type'=>'array','valid'=>'required', 'default'=>'', 'example'=>'image', 'description'=>'标签关联对象的id的集合'],
        );
        return $return;
    }

    public function bind($params)
    {
        $tag_ids = $params['tag_ids'];
        $domain  = $params['domain'];
        $rel_ids = $params['rel_ids'];

        return kernel::single('systag_rels')->binds($domain, $tag_ids, $rel_ids);

    }

}


