<?php

foreach ($modules->get("News")->renderNewsList() as $item) {
    echo $item->title;
}

echo $modules->get("News")->renderBeginForm();

echo $modules->get("News")->renderSearchForm();

echo $modules->get("News")->renderCategoryForm();

echo $modules->get("News")->renderEndForm();

?>