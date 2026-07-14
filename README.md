# relation-app-practice

## 概要
COACHTECH Laravel基礎 「9-5-5: リレーション - ハンズオン演習」にて作成

## 使用技術
- PHP 8.5.8
- Laravel 10.50.2 (sail artisan tinker)
- Eloquent ORM（hasMany / belongsTo / belongsToMany）
- MySQL 8.4.10

## 学んだこと
- sail artisan tinkerによるテストデータの作成方法(特に、中間テーブルへのデータ格納方法)
- リレーションシップのクエリによる、結合されたテーブルのデータ取得
- EagerLoadingによる処理の軽量化
- 

## 動作確認
①sailコマンドによりバックグラウンドで起動(sail up -d)
②sailコマンドによるコンテナ状態確認(sail ps)
③DBにレコードが正常に追加されているか確認(sail artisan tinker)
④http://localhost/postsにアクセス
⑤各ページが表示されることを確認し、下記要件を満たしていることを確認
　(tests/Browser/screenshotsへ証跡格納済)
　　投稿一覧が表示される
　　各投稿にコメント数が表示される
　　各投稿にタグが表示される
　　タグをクリックすると絞り込みができる
　　投稿タイトルをクリックすると詳細ページが表示される