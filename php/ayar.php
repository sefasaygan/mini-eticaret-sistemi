<?php

$kullaniadi="admin";
$sifre="123";

ob_start();
header('content-type: text/html; charset=utf8');

 /* güvenlik */
    function guvenlik($par){
        return htmlspecialchars(trim($par));
    }
    array_map('guvenlik', $_GET);
   
    /* ürünlerim */
    $urunler = array(1,2,3,4,5);

error_reporting(0);





     /* sepete ürün ekle */
    if ( isset($_GET['ekle']) ){
        $id = $_GET['ekle'];
        setcookie('urun['.$id.']', $id, time() + 86400);
        header('Location:'.$_SERVER['HTTP_REFERER']);
    }
   
    /* sepeti boşalt */
    if ( isset($_GET['bosalt']) ){
        foreach ( $_COOKIE['urun'] as $key => $val ){
            setcookie('urun['.$key.']', $key, time() - 86400);
        }
        header('Location:'.$_SERVER['HTTP_REFERER']);
    }
   
    /* sepetten ürün çıkart */
    if ( isset($_GET['cikart']) ){
        setcookie('urun['.$_GET['cikart'].']', $_GET['cikart'], time() - 86400);
        header('Location:'.$_SERVER['HTTP_REFERER']);
    }

