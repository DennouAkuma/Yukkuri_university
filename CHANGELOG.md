# Change Log

## 2021-10-04
### Changed(既存機能の変更)
- header幅を100%に変更
- プロフィール(index.html)の構成を変更
- footerの構成を変更
- サインを右側に変更
- 横幅の固定化を100%に変更

### Removed(削除された機能)
- headerのid削除
- mainのid削除
- footerのid削除
- スライドのmainタグ削除
- h1,class「.wordkocho」削除
- スライドの17px分を修正

### Fixed(バグの修正)
- サイン画像のパスを修正

### Security(将来的修正推奨)
- cssファイルをページ毎(そのページのみに適用の場合)に分けることを推奨
- スライドのウインドウサイズ変更時の処理を追加することを推奨
- モバイル端末に対応させることを推奨

## 2021-10-03
### Changed(既存機能の変更)
- cssのスライドをJSに変更
- スライド部分のidを変更

### Fixed(バグの修正)
- 画面外に出ていたスライド部分を修正

## 2021-10-02 変更点
### Added(新機能)
- HTML5宣言を追加
- SEO対策、metaを追加
- アイコンを設定
- main、footerを追加

### Changed(既存機能の変更)
- ディレクトリーを変更
- ./css → cssファイル
- ./js → JavaScriptファイル
- ./media → 画像や動画などのメディアデータ
- html直書きのstyleを削除　→　style.cssファイルに移動
- 隙間構成を変更
- title_logo(id)を追加 → ロゴ部分
- menu_ul(id)を追加 → メニュー部分
- float_clearA(class)を追加 → フロート解除
- content部分にhtml直書き部分を移行

### Removed(削除された機能)
- その他、margin指定の部分を複数削除

