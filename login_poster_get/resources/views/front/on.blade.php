

<a style="background-color:red;width=100%;" href="back.php?go=vote&topic_id=<?=$val['topic_id']?>">
<table style="text-align:center;align-items:center;" class="table table-hover ">

    <tr >
        
        <div id="lo<?=$id_page?>"></div>
        
        <td style="width:20%;">
<img src="./upload/<?=$val['img']?>" style="width:100%;height=20vh;">
        </td>
        <td style="width:50%;">
        <?=$val['subject']?>
  </td>
  <td style="font_size:2%;">
    
  <?=$val['start_time']?><br><br>
  ~<br><br>
  <?=$val['stop_time']?>

  </td>
        <td style="width:10%;">
        <?=$val['total']?>
        </td>
        
        
        
    </tr>
    
    
    
    
</table>

</a>