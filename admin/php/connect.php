<?php
/**
 * 数据库连接
 */
$servername = "47.110.158.22";
$username = "root";
$password = "Qa#ykrzm5y7";
$dbname = "InviteLink";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$conn->query("set names utf8");
