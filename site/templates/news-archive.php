<?php

$news = $modules->get("News");

foreach ($news->renderNewsList() as $item) {
    echo $item->title . '<br />';
}

echo $news->renderPagination();

echo $news->renderBeginForm();

echo $news->renderSearchForm();

echo $news->renderCategoryForm();

echo $news->renderEndForm();

?>