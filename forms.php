<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">메인</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/Hello.php">헬로월드</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/forms.php">검색</a>
    </li>
  </ul>
</nav>
<br>

<div class="container">
  <h2>검색하기</h2>
  <p>무언가를 입력해보세요.</p>
  <form class="form-inline" action="/action_page.php" method="post">
    <label for="email" class="mb-2 mr-sm-2">검색:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="email" placeholder="검색어를 입력해주세요." name="keyword">
    <!-- <div class="form-check mb-2 mr-sm-2">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="remember"> Remember me
      </label>
    </div>     -->
    <button type="submit" class="btn btn-primary mb-2">검색</button>
  </form>
</div>

</body>
</html>
