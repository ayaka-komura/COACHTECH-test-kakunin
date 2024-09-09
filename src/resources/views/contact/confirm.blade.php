<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ確認 - FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header>
            <h1>FashionablyLate</h1>
        </header>

        <!-- Main Content -->
        <main>
            <h2>Confirm</h2>
            <table class="confirm-table">
                <tr>
                    <th>お名前</th>
                    <td>{{ $data['last_name'] }} {{ $data['first_name'] }}</td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td>{{ $data['gender'] }}</td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>{{ $data['email'] }}</td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td>{{ $data['phone1'] }}-{{ $data['phone2'] }}-{{ $data['phone3'] }}</td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td>{{ $data['address'] }}</td>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td>{{ $data['building'] }}</td>
                </tr>
                <tr>
                    <th>お問い合わせの種類</th>
                    <td>{{ $data['inquiry_type'] }}</td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td>{{ $data['inquiry_content'] }}</td>
                </tr>
            </table>

            <div class="form-actions">
                <form action="{{ route('contact.thanks') }}" method="get" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn">送信</button>
                </form>
                <form action="{{ route('contact.form') }}" method="get" style="display:inline;">
                    <button type="submit" class="btn">修正</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>
