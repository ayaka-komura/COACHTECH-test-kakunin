<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理画面 - FashionablyLate</title>
    <!-- CSSの読み込み -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- jQueryとカレンダープラグインの読み込み -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Bootstrapの読み込み -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            // カレンダー設定
            $("#date-picker").datepicker({
                dateFormat: 'yy/mm/dd'
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header class="d-flex justify-content-between align-items-center py-3">
            <h1>FashionablyLate</h1>
            <a href="{{ route('logout') }}" class="btn btn-danger">ログアウト</a>
        </header>

        <!-- Main Content -->
        <main>
            <h2 class="mt-4 mb-4">Admin</h2>

            <!-- 検索フォーム -->
            <form method="GET" action="{{ route('admin.index') }}" class="mb-4 d-flex align-items-center">
                <input type="text" name="search" placeholder="名前やメールアドレスを入力してください" class="form-control me-2">
                <select name="gender" class="form-select me-2">
                    <option value="">性別</option>
                    <option value="男性">男性</option>
                    <option value="女性">女性</option>
                </select>
                <select name="inquiry_type" class="form-select me-2">
                    <option value="">お問い合わせの種類</option>
                    <option value="商品の交換">商品の交換について</option>
                    <option value="商品の返品">商品の返品について</option>
                    <option value="その他">その他</option>
                </select>
                <input type="text" id="date-picker" name="date" placeholder="年/月/日" class="form-control me-2">
                <button type="submit" class="btn btn-primary me-2">検索</button>
                <a href="{{ route('admin.index') }}" class="btn btn-secondary">リセット</a>
            </form>

            <!-- エクスポートボタン -->
            <div class="d-flex justify-content-start mb-3">
                <button class="btn btn-primary">エクスポート</button>
            </div>

            <!-- Data Table -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>お名前</th>
                            <th>性別</th>
                            <th>メールアドレス</th>
                            <th>お問い合わせの種類</th>
                            <th>アクション</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->last_name }} {{ $contact->first_name }}</td>
                            <td>{{ $contact->gender }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->inquiry_type }}</td>
                            <td>
                                <!-- 詳細ボタンをクリックでモーダルを開く -->
                                <button class="btn btn-info detail-button" data-bs-toggle="modal" data-bs-target="#detailModal{{ $contact->id }}">詳細</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- ページネーション -->
            <div class="d-flex justify-content-end">
                {{ $contacts->links() }}
            </div>
        </main>
    </div>

    <!-- モーダルウィンドウ -->
    @foreach ($contacts as $contact)
    <div class="modal fade" id="detailModal{{ $contact->id }}" tabindex="-1" aria-labelledby="detailModalLabel{{ $contact->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel{{ $contact->id }}">お問い合わせの詳細</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
                </div>
                <div class="modal-body">
                    <p><strong>名前:</strong> {{ $contact->last_name }} {{ $contact->first_name }}</p>
                    <p><strong>性別:</strong> {{ $contact->gender }}</p>
                    <p><strong>メールアドレス:</strong> {{ $contact->email }}</p>
                    <p><strong>お問い合わせの種類:</strong> {{ $contact->inquiry_type }}</p>
                    <p><strong>お問い合わせ内容:</strong> {{ $contact->inquiry_content }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</body>
</html>
