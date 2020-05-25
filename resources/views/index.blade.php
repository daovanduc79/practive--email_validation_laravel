<div class="container">
    <div class="main-content">
        <h1>Ứng dụng kiểm tra email hợp lệ</h1>
        <form method="post" action="{{route('check-email')}}">
            @csrf
            <label for="email-input">Email:</label>
            <input type="text" id="email-input" name="email" placeholder="Nhập email cần kiểm tra">
            <input type="submit" value="Check">
        </form>
        @if(isset($isEmail))
        Kết quả : {{$isEmail ?'đúng định dạng email':'không đúng định dạng email'}}
        @endif
    </div>
</div>
