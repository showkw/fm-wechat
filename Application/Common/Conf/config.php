<?php
return array(
	//'配置项'=>'配置值'
    'URL_MODEL' => 2,//定义URL重写
    'TMPL_TEMPLATE_SUFFIX'  =>  '.tpl',     // 默认模板文件后缀
    'URL_HTML_SUFFIX'       =>  '',  // URL伪静态后缀设置  默认为html  去除默认的 否则很多地址报错
    'DB_TYPE'   => 'mysqli', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'wexin', // 数据库名
    'DB_USER'   => 'wexin', // 用户名
    'DB_PWD'    => '123456', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'fm_', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'TMPL_CACHE_ON' => false,//关闭模板编译缓存
    'HTML_CACHE_ON' => false,//关闭静态缓存
    'SESSION_AUTO_START' =>true,//开启自动SESSION;
    'TMPL_PARSE_STRING'  =>array(
        '__UPLOAD__' => '/Uploads/' // 增加新的上传路径替换规则
    ),
    'LOAD_EXT_CONFIG' => [
        'api','redis'
    ],//加载扩展配置
    'DEFAULT_CHARSET'       =>  'utf-8', // 默认输出编码
    'DEFAULT_TIMEZONE'      =>  'PRC',  // 默认时区
);