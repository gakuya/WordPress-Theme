# WordPress-Theme

WordPress の最小構成テンプレートと、CSS の作成を Sass で行うための準備用リポジトリです。

## 開発環境
* タスクランナー：[Gulp](http://gulpjs.com)
* CSSプリプロセッサ：[Sass](http://sass-lang.com/) [SCSS]
* プロジェクト構成概要
```
    WordPress-Theme
    │
    ├── gulp （タスク）
    ├── src （開発用ディレクトリ）
    │   └── scss （CSS開発）
    ├── template-parts
    └── 各テンプレートファイル
```
## 動作環境
* Node.js：[https://nodejs.org](https://nodejs.org)
* npm：[https://www.npmjs.com](https://www.npmjs.com)

## インストール
1. コマンドラインツールで gulp ディレクトリに移動します。
2. npmのinstallコマンドを実行します。
```
$npm install --save-dev
```

開発段階でモジュールの更新・追加があった場合も、上記のコマンドでモジュールの更新を行います。

## タスクの実行
1. コマンドラインツールで gulp ディレクトリに移動します。
2. gulpタスクを実行します。
```
$gulp
```

## テンプレートファイルについて

WordPress の最小構成のテンプレートファイルは下記の Web ページに添付されているものをベースにしています。

[メディウィル開発者サイト > 最小構成のWordPressテーマ例](http://developers.mediwill.co.jp/wordpress/theme)  
(http://developers.mediwill.co.jp/wordpress/theme)

## Licence

MIT
