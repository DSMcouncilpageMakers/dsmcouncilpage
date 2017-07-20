<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>공지사항</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <div id="body">
      <img id="dsm-logo" src="b3.png" alt="">
      <header class="page-header" role="banner">
        <div class="inner">
          <div class="site-logo"><a href="please-help-me.html"><img src="logo.jpg" alt="Shiftbrain" height="65" width="300" margin-left="-50"></a></div>
          <nav class="primary-nav" role="navigation">
            <ul>
              <li><a href="#">행사</a></li>
              <li><a href="notice.html">공지 사항</a></li>
              <li><a href="opinion.html">건의 사항</a></li>
              <li><a href="hot.html">학생회 임원</a></li>
              <li><a href="login2.html" class="login-button">로그인</a></li>
            </ul>
          </nav>
        </div>
      </header>
    </div>
    <div id="notice-write-main">
      <h5>제목</h5>
      <form class="write-title" action="notice.html" method="post">
        <input type="text" name="notice-title" style="width: 820px;">
        <input type="text" style="display: none;">
        <h5>공지 내용</h5>
        <textarea class="write-body" rows="16" cols="100" style="resize: none;"></textarea>
      </form>
      <?php
        for (var i = 0; i < 10; i++) {
          document.write('&emsp;');
        }
      ?>
        <a href="#"><img class="over" src="write-over.png"></a>
      <?php
        for (var i = 0; i < 10; i++) {
          document.write('&emsp;');
        }
      ?>
        <a href="#"><img class="over" src="cancel.png"></a>

    </div>
  </body>
</html>
