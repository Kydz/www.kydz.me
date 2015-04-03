@extends('blade.archive.layout')
@section('navigation')
<ul>
    <li>记录</li>
    <li>技术</li>
    <li>生活</li>
    <li>无聊</li>
    <li>记录</li>
    <li>技术</li>
    <li>无聊</li>
</ul>
@stop

@section('body')
<div class="archive_list">
        <article class="archive_itme">
            <header>微积分学</header>
            <section>微积分学在科学、经济学、商业管理学和工业工程学领域有广泛的应用，用来解决那些仅依靠代数学和几何学不能有效解决的问题。微积分学在代数学和解析几何学的基础上建立起来，并包括微分学、积分学二大分支。微分学包括求导数的运算，是一套关于</section>
            <footer><span>2014.02.10</span><span>221</span><span>15</span></footer>
        </article>
    </div>
<div class="pager">1 2 3 4 ... >></div>
@stop