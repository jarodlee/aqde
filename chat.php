<?php
session_start();

// 文件名用于存储聊天消息
$chatFile = 'chat.dat';

// 检查并处理用户命令
if (isset($_POST['message']) && !empty($_POST['message'])) {
    $message = $_POST['message'];
    $user = isset($_SESSION['username']) ? $_SESSION['username'] : $_SERVER['REMOTE_ADDR'];

    if ($user === 'Mr.Lee' && $message === '/cls') {
        // 如果用户名是Mr.Lee且输入了/cls命令
        // 保存备份文件
        $date = date('Y-m-d_H-i-s');
		$backupFile = './tqq/' . $date . '.dat';
		file_put_contents($backupFile, file_get_contents($chatFile));
        file_put_contents($chatFile, '聊天记录已清除。');
    } else {
        // 格式化消息
        $formattedMessage = date('H:i:s') . ' ' . $user . ': ' . $message . "\n";

        // 将消息追加到文本文件
        file_put_contents($chatFile, $formattedMessage, FILE_APPEND);
    }

    // 防止表单重复提交
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}

// 读取聊天消息
$chatMessages = file_get_contents($chatFile);

if (isset($_SESSION['username'])) {
    // 用户名已设置，处理文件上传
        if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        // 处理文件上传逻辑

// 处理文件上传
if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $user = isset($_SESSION['username']) ? $_SESSION['username'] : $_SERVER['REMOTE_ADDR'];

    $uploadDir = 'uploads/'; // 上传文件存储的目录
    $fileName = basename($_FILES['file']['name']);
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION); // 获取文件扩展名
    $timestamp = time(); // 获取当前时间戳

    // 创建新文件名，将用户名和时间戳插入到文件名的中间
    $fileParts = pathinfo($fileName);
    $newFileName = $fileParts['filename'] . '_' . $user . '_' . $timestamp . '.' . $fileExtension;
    $uploadFile = $uploadDir . $newFileName;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
        // 文件上传成功，将链接添加到聊天记录中
        $fileLink = '<a href="' . $uploadFile . '" target="_blank">' . $fileName . '</a>';
        $formattedMessage = date('H:i:s') . ' ' . $user . ' 上传了文件: ' . $fileLink . "\n";
        file_put_contents($chatFile, $formattedMessage, FILE_APPEND);
    } else {
        echo "上传文件时发生错误。";
    }
}



    }
}

// 设置用户名
if (isset($_POST['username']) && !empty($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
}
?>

<!DOCTYPE html>
<html>
<head>
<!-- Matomo -->
<script>
  var _paq = window._paq = window._paq || [];
  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//t.aqde.net:8/";
    _paq.push(['setTrackerUrl', u+'matomo.php']);
    _paq.push(['setSiteId', '2']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Matomo Code -->


	<script src="commands.js"></script>
    <title><?php echo isset($_SESSION['username']) ? $_SESSION['username'] . "'s " : $_SERVER['REMOTE_ADDR'] . "'s "; ?>公共聊天室</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            background-image: url('/bing.php?rand=true'); /* 替换 'your-image-url.jpg' 为您的背景图片文件的路径 */
    		background-size: cover; /* 背景图片将被缩放以覆盖整个页面 */
    		background-repeat: no-repeat; /* 防止背景图片重复显示 */
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
        background-color: #FF0000; /* 红色 */
        color: #fff;
    }

    .user2 {
        background-color: #FFA500; /* 橙色 */
        color: #fff;
    }

    .user3 {
        background-color: #FFFF00; /* 黄色 */
        color: #000;
    }

    .user4 {
        background-color: #008000; /* 绿色 */
        color: #fff;
    }

    .user5 {
        background-color: #00FFFF; /* 青色 */
        color: #000;
    }

    .user6 {
        background-color: #0000FF; /* 蓝色 */
        color: #fff;
    }

    .user7 {
        background-color: #800080; /* 紫色 */
        color: #fff;
    }
}

/* 电脑版样式 */
@media (min-width: 601px) {
    .message {
        max-height: none; /* 移除消息框的最大高度 */
        overflow-y: visible; /* 移除滚动条 */
    }

    .user1 {
        background-color: #FF0000; /* 红色 */
        color: #fff;
    }

    .user2 {
        background-color: #FFA500; /* 橙色 */
        color: #fff;
    }

    .user3 {
        background-color: #FFFF00; /* 黄色 */
        color: #000;
    }

    .user4 {
        background-color: #008000; /* 绿色 */
        color: #fff;
    }

    .user5 {
        background-color: #00FFFF; /* 青色 */
        color: #000;
    }

    .user6 {
        background-color: #0000FF; /* 蓝色 */
        color: #fff;
    }

    .user7 {
        background-color: #800080; /* 紫色 */
        color: #fff;
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
    <h1><?php echo isset($_SESSION['username']) ? $_SESSION['username'] . "'s " : $_SERVER['REMOTE_ADDR'] . "'s "; ?>公共聊天室</h1>
    <div class="container">
        <div>
            <strong>聊天消息：</strong>
            <div class="chat-box" id="chat-box">
                <?php 
                $messages = explode("\n", $chatMessages);
                foreach ($messages as $key => $message) {
                    $userClass = "user" . (($key % 7) + 1);
                    echo '<div class="message ' . $userClass . '">' . $message . '</div>';
                }
                ?>
            </div>
        </div>
        <form method="post">
    <input type="text" name="message" placeholder="输入消息" required>
    <input type="submit" value="发送">
</form>

<form method="post">
    <input type="text" name="username" placeholder="设置用户名" required value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : (isset($_POST['username']) ? $_POST['username'] : $_SERVER['REMOTE_ADDR']); ?>">
    <input type="submit" value="设置用户名">
</form>

<div id="upload-section" style="<?php echo isset($_SESSION['username']) ? 'display:block;' : 'display:none;'; ?>">
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file" accept="image/*, .pdf, .doc, .txt, .zip"> <!-- 允许上传的文件类型 -->
        <input type="submit" value="上传文件">
    </form>
</div>



    <script>
    
// 更新聊天消息
function updateChatMessages() {
    var chatBox = document.getElementById('chat-box');
    
    // 使用Ajax请求获取最新聊天消息
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'get_chat_messages.php', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var newMessages = xhr.responseText;

            // 清空聊天框
            chatBox.innerHTML = '';

            // 以换行符拆分新消息
            var newMessagesArray = newMessages.split('\n');

            // 重新添加新消息
            newMessagesArray.forEach(function (message) {
                if (message.trim() !== '') {
                    var messageDiv = document.createElement('div');
                    messageDiv.className = 'message';
                    messageDiv.innerHTML = message; // 使用 innerHTML 以保留着色信息
                    chatBox.appendChild(messageDiv);
                }
            });

            // 自动滚动到底部
            chatBox.scrollTop = chatBox.scrollHeight;
        }
    };
    xhr.send();
}


// 每隔一段时间刷新聊天消息
setInterval(updateChatMessages, 5000); // 每5秒刷新一次



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
        <span id="timer">
<a href="https://time.is/Anqing" id="time_is_link" rel="nofollow" style="font-size:20px">安庆 目前的時間:</a>
<span id="Anqing_z43d" style="font-size:20px"></span>
<script src="//widget.time.is/t.js"></script>
<script>
time_is_widget.init({Anqing_z43d:{}});
</script>



</span>
    </div>
          
    <!-- Cloudflare Web Analytics --><script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "8654cf2aa14e4262a2a1bbd183095f84"}'></script><!-- End Cloudflare Web Analytics -->
<div class="bottom-image">
<!-- 添加图片链接并居中 -->
    <div style="text-align: center;">
        <a href="http://s05.flagcounter.com/more/1LLU">
            <img src="<?= ($_SERVER['HTTPS'] ? 'https://' : 'http://') . 's05.flagcounter.com/mini/1LLU/bg_FFFFFF/txt_CC24FF/border_CCCCCC/flags_0/' ?>" alt="Free counters!" border="0">
        </a>
    </div>
  </div>
    
    <div style="text-align: center;">	<p><iframe allowtransparency="true" frameborder="0" width="875" height="98" scrolling="no" src="//tianqi.2345.com/plugin/widget/index.htm?s=2&z=3&t=1&v=0&d=5&bd=0&k=&f=0080ff&ltf=009944&htf=cc0000&q=1&e=0&a=0&c=71890&w=875&h=98&align=center"></iframe></p>
        </div>
        
        <div style="text-align: center;">	<p>此聊天工具仅供学习交流使用，设置用户名后可以上传图片与.pdf, .doc, .txt, .zip文档，网速较慢，请耐心等待。发送聊天信息后显示5秒的彩色对话，然后自动刷新成当前的普通格式聊天记录。</p>
        </div>
  <script>
document.querySelector('form').addEventListener('submit', function (event) {
    var messageInput = document.querySelector('input[name="message"]');
    var message = messageInput.value;

    // 检查用户输入的命令是否在commands对象中
    if (commands.hasOwnProperty(message)) {
        // 如果是有效命令，导航到相应的网址并在新窗口中打开
        window.open(commands[message], '_blank');
        // 清空消息输入框
        messageInput.value = '';
        event.preventDefault(); // 阻止默认表单提交行为
    } else {
        // 如果不是有效命令，弹出确认对话框
        var isConfirmed = confirm("您确定要发送这条消息吗？\n\n点击“确定”发送，点击“取消”重新写一条吧！。");

        // 根据用户的选择采取行动
        if (!isConfirmed) {
            // 用户点击“取消”，阻止表单提交
            event.preventDefault();
        }
    }
});

 </script>


</body>
</html>