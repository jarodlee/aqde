
<!DOCTYPE html>
<html>
<head>
    <title>111.39.38.46's 简单聊天室</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        .container {
            max-width: 100%;
            margin: 1;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .chat-box {
            border: 1px solid #ccc;
            padding: 10px;
            max-height: 600px;
            overflow-y: scroll;
            scroll-behavior: auto !important;
        }

        input[type="text"] {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* 移动设备样式 */
@media (max-width: 600px) {
    .message {
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 5px;
        display: inline-block;
        max-height: 100px; /* 设置消息框的最大高度为100像素 */
        overflow-y: auto; /* 添加滚动条以处理超过最大高度的内容 */
    }
                
            .user1 {
                background-color: #007bff;
                color: #fff;
            }

            .user2 {
                background-color: #FF5733;
                color: #fff;
            }

            .user3 {
                background-color: #33FF55;
                color: #000;
            }
        }
    
             /* 计时器样式 */
        .timer {
            text-align: center;
            background-color: #33FF55;
            color: #fff;
            padding: 5px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>111.39.38.46's 简单聊天室</h1>
    <div class="container">
        <div>
            <strong>聊天消息：</strong>
            <div class="chat-box" id="chat-box">
                <div class="message user1">聊天记录已清除。10:22:53 Test: 今天天气不错呀！</div><div class="message user2">10:23:30 Test: 大家一起来聊聊最近的学习收获是什么吧！</div><div class="message user3"></div>            </div>
        </div>
        <form method="post">
    <input type="text" name="message" placeholder="输入消息" required>
    <input type="submit" value="发送">
</form>

<form method="post">
    <input type="text" name="username" placeholder="设置用户名" required value="111.39.38.46">
    <input type="submit" value="设置用户名">
</form>

    <script>
        // 动态设置聊天框的最大高度为400像素
        var chatBox = document.querySelector('.chat-box');
        chatBox.style.maxHeight = '400px';

        // 自动将焦点设置到消息输入框
        var messageInput = document.querySelector('input[name="message"]');
        messageInput.focus();
        
     
		  document.addEventListener("DOMContentLoaded", function() {
        // 自动滚动到聊天框底部
        function scrollToBottom() {
            var chatBox = document.getElementById('chat-box');
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        // 调用滚动函数以确保始终显示最后一条消息
        scrollToBottom();
		  });
	
    </script>

           
</form>
      <div class="timer">
        <span id="timer">0:00</span>
    </div>
    <script>
        // JavaScript代码来实现计时器功能
        var timerElement = document.getElementById('timer');
        var seconds = 0;

        function updateTimer() {
            var minutes = Math.floor(seconds / 60);
            var remainingSeconds = seconds % 60;
            timerElement.innerText = minutes + ':' + (remainingSeconds < 10 ? '0' : '') + remainingSeconds;
            seconds++;
        }

        setInterval(updateTimer, 1000);
    </script>
      
    <!-- Cloudflare Web Analytics --><script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "8654cf2aa14e4262a2a1bbd183095f84"}'></script><!-- End Cloudflare Web Analytics -->
<div class="bottom-image">
<!-- 添加图片链接并居中 -->
    <div style="text-align: center;">
        <a href="http://s05.flagcounter.com/more/1LLU">
            <img src="http://s05.flagcounter.com/mini/1LLU/bg_FFFFFF/txt_CC24FF/border_CCCCCC/flags_0/" alt="Free counters!" border="0">
        </a>
    </div>
  </div>
    
     <script>
        // 添加一个事件监听器，当用户点击"发送"按钮时触发
        document.querySelector('form').addEventListener('submit', function (event) {
            event.preventDefault(); // 阻止默认的表单提交行为

            // 弹出确认对话框
            var isConfirmed = confirm("您确定要发送这条消息吗？\n\n点击“确定”发送，点击“取消”重新写一条吧！。");

            // 根据用户的选择采取行动
            if (isConfirmed) {
                // 用户点击“确定”，继续表单提交
                this.submit();
            } else {
                // 用户点击“取消”，清空消息框
                document.querySelector('input[name="message"]').value = "";
            }
        });
    </script>
    
</body>
</html>
