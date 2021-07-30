<?php
/////////////////////////////////////
//サインインコントローラー
/////////////////////////////////////

//設定を読み込み
include_once '../config.php';
//便利な関数を読み込む
include_once '../util.php';

//ユーザーデータ操作モデルを読み込み
include_once '../Models/users.php';

//ログイン結果
$try_login_result = null;
// var_dump($_POST['email']);
// var_dump($_POST['password']);
//メールアドレスとパスワードが入力されている場合
if (isset($_POST['email']) && isset($_POST['password'])) {
    //ログインチェック実行
    $user = [];

    //ログインに成功した場合
    if ($user) {
        // var_dump('test');
        // exit;
        //ユーザー情報をセッションに保存

       // ホーム画面へ遷移
        header('Location: ' . HOME_URL . 'Controllers/home.php');
        exit;
    } else {
        // var_dump('test1');
        // exit;
        // ログイン失敗
        $try_login_result = false;
    }
}

//表示用の変数
$view_try_login_result = $try_login_result;

//画面表示
include_once '../Views/sign-in.php';
