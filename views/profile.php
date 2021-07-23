<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href="../views/img/logo-twitterblue.svg">
    <!-- Bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="../Views/css/style.css" rel='stylesheet'>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- いいね！JS -->
    <script src="../Views/js/like.js" defer></script>
    <title>プロフィール画面/Twitterクローン</title>
    <meta name='discription' contents='プロフィール画面です'>
</head>

<body class="home profile text-center">
    <div class="container">
        <div class="side">
            <div class="side-inner">
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="home.php" class="nav-link"><img src="../Views/img/logo-twitterblue.svg" alt="" class="icon"></a></li>
                    <li class="nav-item"><a href="home.php" class="nav-link"><img src="../Views/img/icon-home.svg" alt=""></a></li>
                    <li class="nav-item"><a href="search.php" class="nav-link"><img src="../Views/img/icon-search.svg" alt=""></a></li>
                    <li class="nav-item"><a href="notification.php" class="nav-link"><img src="../Views/img/icon-notification.svg" alt=""></a></li>
                    <li class="nav-item"><a href="profile.php" class="nav-link"><img src="../Views/img/icon-profile.svg" alt=""></a></li>
                    <li class="nav-item"><a href="post.php" class="nav-link"><img src="../Views/img/icon-post-tweet-twitterblue.svg" alt="" class="post-tweet"></a></li>
                    <li class="nav-item my-icon"><img src="../Views/img_uploaded/user/sample-person.jpg" class="js-popover" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="<a href='profile.php'>プロフィール</a><br><a href='sign-out.php'>ログアウト</a>" data-bs-html="true"></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="main-header">
                <h1>太郎</h1>
            </div>
            <!-- プロフィールエリア-->
            <div class="profile-area">
               <div class="top">
                   <div class="user"><img src = "../views/img_uploaded/user/sample-person.jpg" alt = ""></div>

                   <?php if(isset($_GET['user_id'])) : ?>
                       <!-- 相手のページ ----->
                       <?php if(isset($_GET['case'])) : ?>
                       <button class="btn btn-sm">フォローを外す</button>
                    <?php else: ?>
                        <button class="btn btn-sm btn-reverse">フォローする</button>
                    <?php endif ; ?>
                   <?php else : ?>     
                       <!-- 自分のページ ----->
                       <button class="btn btn-reverse btn-sm" data-bs-toggle="modal" data-bs-target="#js-modal">プロフィール編集</button>
                    <?php endif; ?>

                   <div class="modal fade" id="js-modal" tabindex="-1" aria-hidden="true">
                   <div class="modal-dialog">
                       <div class="modal-content">
                        <form action="profile.php" method="post" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class = "modal-title">プロフィールを編集</h5>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="user">
                                    <img src="/TwitterClone/views/img_uploaded/user/sample-person.jpg" alt="">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="mb-1">プロフィール写真</label>
                                    <input type="file" class = "form-control form-control-sm" name = "image">
                                </div>

                                <input type = "text" class = "form-control mb-4" name = "nickname" value="太郎" placeholder = "ニックネーム" maxlength = "50" require>
                                <input type = "text" class = "form-control mb-4" name = "name" value="taro"placeholder = "ユーザー名" maxlength = "50" require>
                                <input type = "email" class = "form-control mb-4" name = "email" value="taro@techis.jp" placeholder = "メールアドレス" maxlength = "254" require>
                                <input type = "password" class = "form-control mb-4" name = "passwaord" value="" placeholder = "パスワード変更する場合ご入力ください" minlength = "4" maxlength = "128">   
                            </div>

                            <div class="modal footer">
                                <button class="btn btn-reverse" data-bs-dismiss="modal">キャンセル</button>
                                <button class="btn" type="submit">保存する</button>
                            </div>
                            
                        </form> 
                       </div>

                       </div>
                   </div>
               </div>
               <div class="name">太郎</div>
               <div class="text-muted">@taro</div>

               <div class="follow-follower">
                   <div class="follow-count">1</div>
                   <div class="follow-text">フォロー中</div>
                   <div class="follow-count">1</div>
                   <div class="follow-text">フォロワー</div>
               </div>

            </div>

            <!-- 仕切りエリア-->
            <div class="ditch"></div>

            <!-- ToDo: つぶやき一覧エリア-->
        
        </div>
    </div>
    <script>
      document.addEventListener('DOMContentLoaded',function(){
          $('.js-popover').popover({
              container:'body'
          })
      },false);
    </script>
</body>
 
</html>