<?php
namespace ns01 {
    const APP = 'A';
    echo APP . '<br>';
}

namespace ns02 {
    const APP = 'B';

    // 2. 非限定名称: 总是从当前空间开始查询
    echo APP . '<br>';
    echo \ns02\APP . '<br>';

    // 在ns2中访问 ns1的APP
    // 一定要通过全局空间/根空间进行访问
    // 根空间: \
    // 1. 完全限定名称: 从根空间开始查询
    echo \ns01\APP . '<br>';

    echo __NAMESPACE__ . '<br>';
}

// 空间分级管理: 子空间
namespace ns2\ns3 {
    const APP = '问答';
    echo APP . '<br>';
}

/**
 * 命名空间类型
 * 1. 完全限定名称: 根空间开始 '\a\b\APP'  "绝对路径"
 * 2. 非限定名称: 从当前空间开始, 'APP'     "当前路径"
 * 3. 限定名称: 子空间, 'ns\APP'          "相对路径"
 */

// 全局空间: 匿名的,不要写空间名, 用"\"来引用
namespace {
    function hello()
    {
        echo 'hello 大家好';
    }

    echo '<span style="color:blue">' . ns1\APP . '</span><br>';
    echo '<span style="color:coral">' . \ns2\ns3\APP . '</span><br>';
}
