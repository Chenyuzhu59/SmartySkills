<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link href="homestyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <style>
li{float:left; width:360px; height:280px; margin:10px; position:relative;}
li p{position:absolute; top:0; left:0; width:360px; height:24px; line-height:24px;
background:#000; opacity:.8;filter:alpha(opacity=80);}
li p a{padding-left:30px; height:24px; 
color:#fff; font-weight:bold; font-size:14px;}
li p a:hover{background-position:4px -25px;text-decoration:none;}
        </style>
    <body>
        <?php
   include_once("connection.php");
   $sql = mysqli_query($link,"select * from pic");
   while($row=mysqli_fetch_array($sql)){
     $pic_id = $row['id'];
     $pic_name = $row['pic_name'];
     $pic_url = $row['pic_url'];
     $love = $row['love'];
   ?>
   <li><img src="<?php echo $pic_url;?>" alt="<?php echo $pic_name;?>" /><p>
           <a href="#" title="赞" class="img_on" rel="<?php echo $pic_id;?>">
               <?php echo $love;?></a></p></li>
<?php }?>

    </body>


<script type="text/javascript">
    $(function(){
    $("p a").click(function(){
      var love = $(this);
      var id = love.attr("rel"); //对应id
      love.fadeOut(300); //渐隐效果
      $.ajax({
        type:"POST",
        url:"",
        data:"id="+id,
        cache:false, //不缓存此页面
        success:function(data){
          love.html(data);
          love.fadeIn(300); //渐显效果
        }
      });
    return false;
  });
  function Zan(goodsId, a){
  $.post( "/goods/zan/"+goodsId, null,function( ret ){
     if( ret.status == 'ok' )
      $(a).html( ret.zannum);
     else
      alert( ret.data );
  },'json' );
    })
</script>
</html>