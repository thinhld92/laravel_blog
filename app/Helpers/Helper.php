<?php

use Illuminate\Database\Eloquent\Collection;

  function arrangeCategories($categories, $level = 0){
    $col = new Collection();
    foreach ($categories as $category) {
      $category->level = $level;
      $col->add($category);
      if ($category->recursiveCategories) {
        recursiveCategories($category->recursiveCategories, $col, $level);
      }
   }

   return $col;

  }
  
  function recursiveCategories($categories, $col, $level){
    $level++;
      foreach ($categories as $category) {
        $category->level = $level;
        $col->add($category);

        if ($category->recursiveCategories) {
          recursiveCategories($category->recursiveCategories, $col, $level);
        }
      } 

  }

  function LMFThumbs($url)
  {
    $url2= str_replace(basename($url) , '', $url  ) ;
    $url2=$url2.'thumbs/'.basename($url);
    return  $url2 ;
  }

  function arrangeBreadCrumb($category){
    $col = new Collection();
    if ($category) {
      $col->add($category);
      if ($category->parentsCategory) {
        recursiveBreadCrumb($category->parentsCategory, $col);
      }
    }
    return $col->reverse();
  }

  function recursiveBreadCrumb($category, $col){
    $col->add($category);
    if ($category->parentsCategory) {
      recursiveBreadCrumb($category->parentsCategory, $col);
    }
  }