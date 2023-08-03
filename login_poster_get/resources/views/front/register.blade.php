<form action="/front/register" method="post">
    @csrf
<label for="">email</label>
<input type="email" name="email">
<label for="">密碼</label>
<input type="password" name="password">
<label for="">姓名</label>
<input type="text" name ="name">
<button type="submit" >送出</button>
</form>