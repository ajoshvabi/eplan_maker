<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<table>
<form method="POST" action="">
		
			<input type="hidden" name="hide" value="h">
			<tr>
			<td>Message</td>
			<td><textarea name="message" class="form-control mt-3"></textarea></td>
		</tr>
		        
		        <td><input type="submit" value="Submit" class="btn btn-success mt-3"></td>
		    
			</form>
			</table>
		</center>
</body>
</html>
 -->



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Chat Widget</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'><link rel="stylesheet" href="./chat/chat-widget/dist/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- <div class="container clearfix">
    <div class="people-list" id="people-list">
      <div class="search">
        <input type="text" placeholder="search" />
        <i class="fa fa-search"></i>
      </div>
      <ul class="list">
        <li class="clearfix">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01.jpg" alt="avatar" />
          <div class="about">
            <div class="name">Vincent Porter</div>
            <div class="status">
              <i class="fa fa-circle online"></i> online
            </div>
          </div>
        </li>
        
        <li class="clearfix">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_02.jpg" alt="avatar" />
          <div class="about">
            <div class="name">Aiden Chavez</div>
            <div class="status">
              <i class="fa fa-circle offline"></i> left 7 mins ago
            </div>
          </div>
        </li>
        
        <li class="clearfix">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_03.jpg" alt="avatar" />
          <div class="about">
            <div class="name">Mike Thomas</div>
            <div class="status">
              <i class="fa fa-circle online"></i> online
            </div>
          </div>
        </li>
        
        <li class="clearfix">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_04.jpg" alt="avatar" />
          <div class="about">
            <div class="name">Erica Hughes</div>
            <div class="status">
              <i class="fa fa-circle online"></i> online
            </div>
          </div>
        </li>
        
        <li class="clearfix">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_05.jpg" alt="avatar" />
          <div class="about">
            <div class="name">Ginger Johnston</div>
            <div class="status">
              <i class="fa fa-circle online"></i> online
            </div>
          </div>
        </li>
        
        <li class="clearfix">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_06.jpg" alt="avatar" />
          <div class="about">
            <div class="name">Tracy Carpenter</div>
            <div class="status">
              <i class="fa fa-circle offline"></i> left 30 mins ago
            </div>
          </div>
        </li>
        
        <li class="clearfix">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_07.jpg" alt="avatar" />
          <div class="about">
            <div class="name">Christian Kelly</div>
            <div class="status">
              <i class="fa fa-circle offline"></i> left 10 hours ago
            </div>
          </div>
        </li>
        
        <li class="clearfix">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_08.jpg" alt="avatar" />
          <div class="about">
            <div class="name">Monica Ward</div>
            <div class="status">
              <i class="fa fa-circle online"></i> online
            </div>
          </div>
        </li>
        
        <li class="clearfix">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_09.jpg" alt="avatar" />
          <div class="about">
            <div class="name">Dean Henry</div>
            <div class="status">
              <i class="fa fa-circle offline"></i> offline since Oct 28
            </div>
          </div>
        </li>
        
        <li class="clearfix">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_10.jpg" alt="avatar" />
          <div class="about">
            <div class="name">Peyton Mckinney</div>
            <div class="status">
              <i class="fa fa-circle online"></i> online
            </div>
          </div>
        </li>
      </ul>
    </div> -->
    
    <div class="chat">
      <div class="chat-header clearfix">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01_green.jpg" alt="avatar" />
        
        <div class="chat-about">
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     <button><a href="viewreqview.php" class="nav-item nav-link">X</a></button>

         <!--  {foreach from= $cun item="n"}
          <div class="chat-with"><b>{$n.name}</b></div>

          
          <div class="chat-num-messages">already 1 902 messages</div>
          {/foreach} -->
          {foreach from= $cun item="n"}
          <div class="chat-with">{$n.company_name}</div>
          <!-- <div class="chat-num-messages">already 1 902 messages</div> -->
          {/foreach}
        </div>
        <!-- <i class="fa fa-star"
        ></i> -->
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        

      </div> <!-- end chat-header -->
      
      <div class="chat-history">
      	{foreach from= $cuview item="h"}
        <ul>
        <!--   <li class="clearfix">
            <div class="message-data align-right">
              <span class="message-data-time" >10:10 AM, Today</span> &nbsp; &nbsp;
              <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
              
            </div>
            <div class="message other-message float-right">
              Hi Vincent, how are you? How is the project coming along?
            </div>
          </li> -->
          {if $h.recieverid==$id}
          <li>
            <div class="message-data">
               <span class="message-data-time">{$h.ctime}</span>
             <!--   <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i> -->
            </div>
            <div class="message my-message">
             {$h.message}
            </div>
          </li>
          {/if}
          {/foreach}
          
        <!--   <li class="clearfix">
            <div class="message-data align-right">
              <span class="message-data-time" >10:14 AM, Today</span> &nbsp; &nbsp;
              <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
              
            </div>
            <div class="message other-message float-right">
              {foreach from=$cuview item="b"}
             {$b.message}
              {/foreach}

            </div>
          </li> -->
           {foreach from=$view1 item="b"}

                         {if $b.senderid==$id}

          <li>
            <div class="message-data align-right">
            	 <span class="message-data-time">{$b.ctime}</span>
               <!-- <span class="message-data-name" >Ol</span> <i class="fa fa-circle me"></i> -->
             
            </div>
            <div class="message other-message float-right">
            {$b.message}
            </div>
          </li>

          {/if}
          <!-- <li>
            <div class="message-data">
              <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
              <span class="message-data-time">10:31 AM, Today</span>
            </div>
            <i class="fa fa-circle online"></i>
            <i class="fa fa-circle online" style="color: #AED2A6"></i>
            <i class="fa fa-circle online" style="color:#DAE9DA"></i>
          </li>
           -->
        </ul>
        {/foreach}
      </div> <!-- end chat-history -->
      
      <div class="chat-message clearfix">
      	 <form method="POST" action="">
         <input type="hidden" name="hide" value="h">
         <textarea name="message" id="message-to-send" placeholder ="Type your message" rows="3"></textarea>
                
        <!-- <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
        <i class="fa fa-file-image-o"></i> -->
        
        <button type="submit">SEND</button>
       <!--  <td><input type="submit" value="Submit"></td> -->

      </div> <!-- end chat-message -->
      
    </div> <!-- end chat -->
    
  </div> <!-- end container -->
  

<!-- <div id="message-template">
	  {foreach from=$cuview item="b"}

  <li class="clearfix">
    <div class="message-data align-right">
      <span class="message-data-time" >{$b.ctime}, Today</span> &nbsp; &nbsp;
      <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
    </div>
    <div class="message other-message float-right">
      {$b.message}
    </div>
  </li>
  {/foreach}
</div>
 -->

<!-- partial -->
 <!--  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script> -->
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script> -->
<script  src="chat/chat-widget/dist/script.js"></script>

</body>
</html>
