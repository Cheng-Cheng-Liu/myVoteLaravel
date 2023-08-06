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