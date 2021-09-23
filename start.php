<?php
/**
 * Date: 2021/4/25 11:00
 * User: YHC
 * Desc: HTTP服务启动文件，启动命令: php start.php dev
 *       特别说明：仅当以dev模式启动时，命令行有信息输出
 */

/*
 * --------------------------------------------------------------------------
 * 启动文件
 * --------------------------------------------------------------------------
 *
 * 环境变量常量 APP_ENV
 *
 * 配置项目启动的基础常量等信息
 *
 * 项目环境配置：
 * 启动命名的参数既是服务的环境变量
 *
 * 例：
 *  以命令：php start.php dev 启动，则设置环境变量为dev，即常量APP_ENV=dev
 *  以命令：php start.php online 启动，则设置环境变量为online，即常量APP_ENV=online
 *
 * 根据常量值，在服务启动时，将加载Config目录下的当前环境变量配置文件；
 * 例：
 *  APP_ENV=dev，当前service为DemoService，则加载demoService.dev.php
 *  推荐：demoService.dev.php文件内容为，define定义的各种常量
 *
 */
require_once __DIR__ . '/Core/core.php';

/*
 * --------------------------------------------------------------------------
 * 使用服务
 * --------------------------------------------------------------------------
 *
 * 不可更改变量名：$horseLoft
 * 变量 $horseLoft 将在全局被引用
 *
 * 第一个参数：服务监听的IP
 * 第二个参数：服务监听的端口
 *
 */
$horseLoft = new \Horseloft\Core\HTTPServer(APPLICATION_ENV, __DIR__);





/*
 * --------------------------------------------------------------------------
 * 【启动
 * --------------------------------------------------------------------------
 *
 */
$horseLoft->start();