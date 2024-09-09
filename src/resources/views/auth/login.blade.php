<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインページ - FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- 必要なCSSライブラリの追加 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Header -->
        <header class="d-flex justify-content-between align-items-center mb-4">
            <h1>FashionablyLate</h1>
            <a href="{{ route('register') }}" class="btn btn-outline-secondary">register</a>
        </header>

        <!-- Main Content -->
        <main>
            <h2 class="text-center mb-4">Login</h2>
            <div class="card mx-auto p-4" style="max-width: 400px; background-color: #f8f5f0; border-radius: 10px;">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">メールアドレス</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="例: test@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">パスワード</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="例: coachtech1106" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">ログイン</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
