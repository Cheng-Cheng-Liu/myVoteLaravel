<h1>login</h1>
<form action="/front/login" method="post">
@csrf
<label for=""></label>
<input type="email" name="email">
<label for=""></label>
<input type="password" name="password">
<button type="submit">登入</button>
</form>
<a href="/front/register">註冊</a>
@error('email')
            <div>{{ $message }}</div>
@enderror