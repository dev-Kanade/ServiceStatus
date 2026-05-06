<?php
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #ffffff;
        }
        .card {
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 
                       0 4px 6px -4px rgb(0 0 0 / 0.1);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md px-6">
        <div class="card bg-white rounded-2xl p-8 border border-gray-100">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">ログイン</h1>
                <p class="text-gray-500 mt-2">アカウントにサインインしてください</p>
            </div>

            <form action="" method="POST">
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        ユーザー名
                    </label>
                    <input 
                        type="text" 
                        name="username"
                        placeholder="ユーザー名を入力"
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                        required>
                </div>

                <div class="mb-8">
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        パスワード
                    </label>
                    <input 
                        type="password" 
                        name="password"
                        placeholder="パスワードを入力"
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition"
                        required>
                </div>

                <button 
                    type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3.5 rounded-xl transition duration-200 text-lg">
                    ログイン
                </button>
            </form>

            <div class="mt-6 text-center">
                <a href="#" class="text-sm text-blue-600 hover:text-blue-700 transition">
                    パスワードをお忘れですか？
                </a>
            </div>
        </div>

        <p class="text-center text-gray-400 text-sm mt-8">
            ServiceStatus
        </p>
    </div>

    <script>
        tailwind.config = {
            content: [],
        }
    </script>
</body>
</html>