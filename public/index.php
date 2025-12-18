<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP + JS Counter</title>
  <link rel="stylesheet" href="../dist/index.css">
</head>
<body>
  <div class="app">
    <h1>Counter</h1>
    <p id="count">0</p>

    <?php if (true): ?>
      <button id="inc">+</button>
      <button id="dec">-</button>
    <?php endif; ?>
  </div>

  <script src="../dist/index.js"></script>
</body>
</html>
