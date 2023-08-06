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
            <a class="nav-link " href="/">回首頁</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="addVote">新增投票</a>
          </li>
          <li class="nav-item">
            <form class="nav-link" method="post" action="/back/listVotes">@csrf<input type="submit" value="編輯投票"></form>
          </li>

          <li class="nav-item">

          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


  <table style="text-align:center;align-items:center;" class="table table-hover ">

    @foreach($topics as $topic)


    <tr>
      <td style="width:8%;">

        {{$topic->subject}}
      </td>

      <td style="width:10%;">
        {{$topic->start_time}}
      </td>
      <td style="width:10%;">
        {{$topic->stop_time}}

      </td>
      <td style="width:20%;">
        <a>立即上架</a>
      </td>
      <td style="width:20%;">
        <a href="./api/now_stop.php?id='topic_id'; ?>">立即下架</a>
      </td>

      <td style="width:20%;">
        <form method="post" style="width:100%;" action="/back/editVotePage/{{$topic->id}}">@csrf<button>修改</button>
        </form>
      </td>
      <td style="width:20%;">
        <form method="post" style="width:100%;" action="/back/delVote/{{$topic->id}}">@csrf<button>刪除</button>
        </form>
      </td>




      @endforeach
  </table>




</body>

</html>