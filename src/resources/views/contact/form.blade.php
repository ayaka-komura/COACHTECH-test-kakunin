<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム - FashionablyLate</title>
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
            <h2>Contact</h2>
            <form action="{{ route('contact.confirm') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="last_name">お名前 <span class="required">*</span></label>
                    <div class="name-inputs">
                        <input type="text" name="last_name" id="last_name" placeholder="例: 山田" required>
                        <input type="text" name="first_name" id="first_name" placeholder="例: 太郎" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="gender">性別 <span class="required">*</span></label>
                    <div>
                        <input type="radio" name="gender" id="male" value="男性" required> <label for="male">男性</label>
                        <input type="radio" name="gender" id="female" value="女性"> <label for="female">女性</label>
                        <input type="radio" name="gender" id="other" value="その他"> <label for="other">その他</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">メールアドレス <span class="required">*</span></label>
                    <input type="email" name="email" id="email" placeholder="例: test@example.com" required>
                </div>

                <div class="form-group">
                    <label for="phone">電話番号 <span class="required">*</span></label>
                    <div class="phone-inputs">
                        <input type="text" name="phone1" id="phone1" placeholder="080" maxlength="3" required>
                        <span>-</span>
                        <input type="text" name="phone2" id="phone2" placeholder="1234" maxlength="4" required>
                        <span>-</span>
                        <input type="text" name="phone3" id="phone3" placeholder="5678" maxlength="4" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="address">住所 <span class="required">*</span></label>
                    <input type="text" name="address" id="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" required>
                </div>

                <div class="form-group">
                    <label for="building">建物名</label>
                    <input type="text" name="building" id="building" placeholder="例: 千駄ヶ谷マンション101">
                </div>

                <div class="form-group">
                    <label for="inquiry_type">お問い合わせの種類 <span class="required">*</span></label>
                    <select name="inquiry_type" id="inquiry_type" required>
                        <option value="">選択してください</option>
                        <option value="商品の交換">商品の交換について</option>
                        <option value="商品の返品">商品の返品について</option>
                        <option value="その他">その他</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="inquiry_content">お問い合わせ内容 <span class="required">*</span></label>
                    <textarea name="inquiry_content" id="inquiry_content" placeholder="お問い合わせ内容をご記載ください" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn">確認画面</button>
                </div>
            </form>
        </main>
    </div>
</body>
</html>
