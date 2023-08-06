<div class=row>
<table style="text-align:center;align-items:center;" class="table table-hover col-12 ">
<tr style="height:10vh">
  <td style="height:10vh" ></td>
</tr>  
<tr>


        <td style="width:20%;">
            <h3>投票期限</h3>
        </td>
        <td style="width:60%;">
        <h3>主題</h3>
        </td>
        <td style="width:20%;">
        <h3>已投票人數</h3>
            
        </td>
</tr>
</table>
<table style="text-align:center;align-items:center;" class="table table-hover col-12 ">
<tr>
    
		<div id="result">
			
		</div>
		
</tr>
</table>
<table style="text-align:center;align-items:center;" class="table table-hover col-12 ">
<tr>
        <td>
            <div class="demo-box">DEMO BOX

            </div>
        </td>
</tr>
</table>
</div>

<script>
  // 要在result的位置載入modal裡的on.php
    let page=4;
      const intersectionObserver = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting) {
      $("#result").load("/modals/on/"+page);
      
      page=page+4;
      
      
    } 
  });
  // 監聽demobox
  intersectionObserver.observe(document.querySelector('.demo-box'));
    </script>