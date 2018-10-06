<!-- 404.php -->
<?php get_header(); ?>
<div class="content">
<h2>指定されたページは存在しませんでした。</h2>
<p>URL ：
http://<?php echo esc_html($_SERVER&#91;'SERVER_NAME'&#93;.$_SERVER&#91;'REQUEST_URI'&#93;); ?>
</p>
<p><a href="<?php echo home_url(); ?>">トップページへ戻る</a></p>
</div>
<?php get_footer(); ?>
