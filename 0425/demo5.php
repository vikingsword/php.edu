<?php

/**
 * 命名空间:解决全局成员的命名冲突
 */

// 一个脚本中,可以创建多个空间
namespace ns1 {
    // 空间成员
    //常量
    const APP = '商城';
}


// 空间分级管理: 子空间
namespace ns2\ns3 {
    const APP = '问答';
    echo APP . '<br>';
}

namespace ns2 {
    // 空间成员
    //常量
    const APP = '社区';

    // 2. 非限定名称: 总是从当前空间开始查询
    echo APP . '<br>';
    echo \ns2\APP . '<br>';

    // 在ns2中访问 ns1的APP
    // 一定要通过全局空间/根空间进行访问
    // 根空间: \
    // 1. 完全限定名称: 从根空间开始查询
    echo \ns1\APP . '<br>';

    // 在ns2空间, 访问子空间  ns2\ns3中的成员
    // 3. 限定名称: ns3\APP
    echo '<span style="color:red">' . ns3\APP . '</span><br>';
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
