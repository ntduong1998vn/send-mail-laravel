@component('mail::message')
# Introduction

The body of your message.

| Laravel         | Table             |
| --------------- |:---------------:  |
| 店名             | {{ $shopName }}   |
| お店ホームページ   | {{ $url }}        |
| 所在地           | {{ $area }} - {{ $prefecture }} |
| ご担当者様        | {{ $name }}           |
| 検索キーワード    | {{ $keywords }}    |
| メールアドレス    | {{ $email }}   |
| 問合せ内容        | {{ $inquiry }}      |
| その他ご質問      | {{ $otherQuestions }}      |

Thanks,<br>
{{ config('app.name') }}
@endcomponent
