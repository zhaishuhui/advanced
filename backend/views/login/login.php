<div class="w3layouts-main">
    <h2>Sign In Now</h2>
    <form action="<?= \yii\helpers\Url::to(['backlogin/login/login'])?>" method="post">
        <input type="hidden" name="_csrf-frontend" value="<?= Yii::$app->request->csrfToken ?>" />
        <input type="text" class="ggg" name="user_name" placeholder="用户名" required="">
        <input type="password" class="ggg" name="password" placeholder="密码" required="">
        <input type="submit" value="登录">
    </form>
</div>