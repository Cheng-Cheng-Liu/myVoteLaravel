<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
<script src="./js/js.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark box">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">MYVOTE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link "  href="index.php?go=hot">熱門投票TOP 10</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="index.php?go=on">正在進行的投票</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?go=going_to_start">即將開始的投票</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="index.php?go=history">已結束的投票</a>
            </li>
            <li class="nav-item">
              
              @if(auth()->check())
              <a class='nav-link' href='/back/member'>會員中心</a>
            @else
            <a class='nav-link' href='/front/login'>會員登入</a>
          @endif
                
              
                
              
                
                
            </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      
      @foreach($topics as $topic)
      <form method="post" style="width:100%;" action="/back//votepage/{{$topic->id}}">
      @csrf
      <button style="width:100%;">
<table style="text-align:center;align-items:center;" class="table table-hover ">

    <tr >
        
        
        
        <td style="width:20%;">
<img src="{{asset('storage/'.$topic->img)}}" style="width:100%;height:20vh;">
        </td>
        <td style="width:30%;">
        {{$topic->subject}}
  </td>
  <td style="font_size:2%;width:20%;">
  {{$topic->start_time}}
  <br><br>
  ~<br><br>
  {{$topic->stop_time}}
  

  </td>
        <td style="width:10%;">
        {{$topic->total}}
        
        </td>
        
        
        
    </tr>
    
    
    
    
</table>
</button>
</form>


@endforeach

</body>
</html>